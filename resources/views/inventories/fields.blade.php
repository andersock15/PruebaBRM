<!-- Inv Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inv_nombre', 'Nombre Articulo:') !!}
    {!! Form::text('inv_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Inv Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inv_cantidad', 'Cantidad Articulos:') !!}
    {!! Form::number('inv_cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Inv Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inv_precio', 'Precio Articulos:') !!}
    {!! Form::number('inv_precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Inv Lote Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inv_lote', 'Lote Articulos:') !!}
    {!! Form::text('inv_lote', null, ['class' => 'form-control']) !!}
</div>

<!-- Inv Fecha Vencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inv_fecha_vencimiento', 'Fecha Vencimiento Articulo:') !!}
    {!! Form::input('date', 'inv_fecha_vencimiento', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('inventories.index') !!}" class="btn btn-default">Regresar</a>
</div>
