<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $billing->id !!}</p>
</div>

<!-- Bill Cliente Field -->
<div class="form-group">
    {!! Form::label('bill_cliente', 'Cliente Factura:') !!}
    <p>{!! $billing->bill_cliente !!}</p>
</div>

<!-- Bill Total Field -->
<div class="form-group">
    {!! Form::label('bill_total', 'Total Factura:') !!}
    <p>{!! $billing->bill_total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha Facturación:') !!}
    <p>{!! $billing->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Modificada En:') !!}
    <p>{!! $billing->updated_at !!}</p>
</div>

