<! DOCTYPE html PUBLIC "- // W3C // DTD XHTML 1.0 Transitional // EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd "> 
<html xmlns = " http : //www.w3.org/1999/xhtml ">
<head> 
<title>Factura Prueba - BRM</title> 
</head>
<body> 
  <h1 align="center">Factura Prueba - BRM - No.{{$bid}}</h1> 
  <div> 
     <table align="center" class="table">
     	<tr>
     		<td><b>Empresa:</b></td>
     		<td>BRM</td>
     	</tr>
     	<tr>
     		<td><b>Nit:</b></td>
     		<td>123456789</td>
     	</tr>
      <tr>
        <td><b>Cliente:</b></td>
        <td>{{$bill_cliente}}</td>
      </tr>
      <tr>
        <td><b>Fecha:</b></td>
        <td>{{$created_at}}</td>
      </tr>
     </table><br>
    <table align="center" cellspacing="0" border="1">
      <tr>
        <th>Ref.</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cant.</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>{{$iid}}</td>
        <td>{{$inv_nombre}}</td>
        <td>$ {{$inv_precio}}</td>
        <td>{{$bill_cantidad}}</td>
        <td>$ {{$bill_total}}</td>
      </tr>
    </table>
  </div> 
</body>
</body> 
</html>