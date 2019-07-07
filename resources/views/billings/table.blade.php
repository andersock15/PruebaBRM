<div class="table-responsive">
    <table class="table" id="billings-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>Cliente Factura</th>
        <th>Total Factura</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($billings as $billing)
            <tr>
            <td>{!! $billing->id!!}</td>
            <td>{!! $billing->bill_cliente !!}</td>
            <td>{!! $billing->bill_total !!}</td>
                <td>
                    {!! Form::open(['route' => ['billings.destroy', $billing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('billings.show', [$billing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-search"></i></a>
                        <a href="{!! route('billings.edit', [$billing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-pencil"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-remove"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
