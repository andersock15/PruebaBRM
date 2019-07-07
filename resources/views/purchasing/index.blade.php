@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Compras</h1>
        <h1 class="pull-right">

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                         <input type="hidden" id='_token' name="csrf-token" value="{{ csrf_token() }}">
                        {!! Form::open(['route' => 'realizaCompra']) !!}
                            <input type="hidden" name="cant_existencia" id="cant_existencia">
                            <input type="hidden" name="precio" id="precio">
                            <select name="producto" id="producto" class="select2 form-control" required="required">
                                <option value="">Seleccione un producto de la lista</option>
                                @foreach($inventario as $obj)
                                    <option value="{{$obj->id}}">{{$obj->inv_nombre}}</option>
                                @endforeach
                            </select><br><label id="precio_text">Precio unidad: </label><br><br>
                            <input type="number" id="cantidad" name="cantidad" autocomplete="off" class=" form-control" placeholder="Ingrese la cantidad que desea comprar" required="required"><br>
                            <label>Total</label>
                            <input type="text" name="total" readonly="true" id='total' class="form-control"><br>
                            <input type="submit" name="enviar" value="Enviar" id="enviar" class="btn btn-success">
                            <br><br>
                            @if(isset($datos))
                            <b><a href="{{url('generar_factura', ['id_factura' => $id_factura])}}">Generar factura <i class="glyphicon glyphicon-save"></i></a>
                            @endif
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>


    <script type="text/javascript">

        $("#producto").change(function(){
            var id=$("#producto").val();
            var token=$("#_token").val();
            $.ajax({
                url:'consultarCantidades',
                data: {'id':id, '_token':token},
                type:'post',
                success: function(data){
                    $("#precio_text").text("Precio X unidad: $"+data[0]['inv_precio']);
                    $("#precio").val(data[0]['inv_precio']);
                    $("#cant_existencia").val(data[0]['inv_cantidad']);
                }
            });
        });
        $("#cantidad").keyup(function(){            
            var existencia=$("#cant_existencia").val();
            var cantidad=$("#cantidad").val();
            var precio=$("#precio").val();
            var total;
            existencia=parseInt(existencia);
            cantidad=parseInt(cantidad);
            if(cantidad > existencia){
                alert("No hay suficientes existencias.");
                var cantidad=$("#cantidad").val("");
                var cantidad=$("#total").val("");
            }else{
                total=cantidad*precio;
                $("#total").val(total); 
            }
            
        });
    </script>
@endsection