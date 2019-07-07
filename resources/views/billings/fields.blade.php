<!-- bill id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'ID:') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>
<!-- bill Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_producto', 'Producto:') !!}
    {!! Form::text('bill_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- bill Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_cliente', 'Cliente:') !!}
    {!! Form::text('bill_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- bill Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_cantidad', 'Cantidad:') !!}
    {!! Form::number('bill_cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- bill Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_total', 'Total Factura:') !!}
    {!! Form::number('bill_total', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('billings.index') !!}" class="btn btn-default">Regresar</a>
</div>
