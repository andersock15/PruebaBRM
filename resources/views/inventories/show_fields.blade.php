<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $inventory->id !!}</p>
</div>

<!-- Inv Nombre Field -->
<div class="form-group">
    {!! Form::label('inv_nombre', 'Nombre Articulo:') !!}
    <p>{!! $inventory->inv_nombre !!}</p>
</div>

<!-- Inv Cantidad Field -->
<div class="form-group">
    {!! Form::label('inv_cantidad', 'Cantidad Articulo:') !!}
    <p>{!! $inventory->inv_cantidad !!}</p>
</div>

<!-- Inv Precio Field -->
<div class="form-group">
    {!! Form::label('inv_precio', 'Precio Articulo:') !!}
    <p>{!! $inventory->inv_precio !!}</p>
</div>

<!-- Inv Lote Field -->
<div class="form-group">
    {!! Form::label('inv_lote', 'Lote Articulo:') !!}
    <p>{!! $inventory->inv_lote !!}</p>
</div>

<!-- Inv Fecha Vencimiento Field -->
<div class="form-group">
    {!! Form::label('inv_fecha_vencimiento', 'Fecha Vencimiento Articulo:') !!}
    <p>{!! $inventory->inv_fecha_vencimiento !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha Creación:') !!}
    <p>{!! $inventory->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Fecha Edición:') !!}
    <p>{!! $inventory->updated_at !!}</p>
</div>

