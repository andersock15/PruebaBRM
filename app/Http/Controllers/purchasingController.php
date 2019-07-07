<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebillingsRequest;
use App\Http\Requests\UpdatebillingsRequest;
use App\Repositories\billingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Flash;
use PDF;
use Response;

class purchasingController extends Controller
{
    public function index(){
    	$inventario=DB::select("select * from inventories where inv_cantidad > 0");
    	return view('purchasing.index')->with('inventario', $inventario);
    }

    public function consultarCantidades(Request $request){
    	$id=$request->id;
    	$cantidad=DB::select("select inv_cantidad, inv_precio from inventories where id=".$id);
    	return Response::json($cantidad);
    }

    public function realizaCompra(Request $request, billingRepository $facturasRepo){      
    	$inventario=DB::select("select * from inventories where inv_cantidad > 0");
    	$this->billingRepository = $facturasRepo;
    	$token=$request->_token;
    	$producto=$request->producto;
    	$cliente=auth()->user()->name;
    	$cantidad=$request->cantidad;
    	$total=$request->total;
      $existencia=$request->cant_existencia;
    	$datos = array('_token'=>$token, 'bill_producto'=>$producto, 'bill_cliente'=>$cliente, 'bill_cantidad'=>$cantidad, 'bill_total'=>$total);
    	$facturas = $this->billingRepository->create($datos);
    	$id_factura=$facturas->id;
      $cant_actual=$existencia-$cantidad;
      $actualizar=DB::UPDATE("UPDATE inventories SET inv_cantidad=".$cant_actual." where id=".$producto);
        Flash::success('Factura guardada exitosamente.');
        return view('purchasing.index')->with('inventario', $inventario)->with('datos', $datos)->with('id_factura', $id_factura);

    }
    public function generar_factura(Request $request){
    	$id=$request->id_factura;
    	$objFactura=DB::select("select b.id as bid, i.id as iid, i.inv_nombre, i.inv_precio, b.bill_cliente, b.bill_cantidad, b.bill_total, b.created_at from billings b  inner join inventories  i on i.id=b.bill_producto where b.id=".$id);
    	$objFactura = [
          'inv_nombre' => $objFactura[0]->inv_nombre,
          'bill_cliente' => $objFactura[0]->bill_cliente,
          'bill_cantidad' => $objFactura[0]->bill_cantidad,
          'bill_total' => $objFactura[0]->bill_total,
          'created_at' => $objFactura[0]->created_at,
          'iid' => $objFactura[0]->iid,
          'bid' => $objFactura[0]->bid,
          'inv_precio'=>$objFactura[0]->inv_precio
      	];
    	$pdf = PDF::loadView('purchasing.pdf_factura', $objFactura);  
        return $pdf->download('factura.pdf');
    }
}
