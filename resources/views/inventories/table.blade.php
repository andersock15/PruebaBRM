<div class="table-responsive">
    <table class="table" id="inventories-table">
        <thead>
            <tr>
        <th>ID Articulo</th>
        <th>Nombre Articulo</th>
        <th>Cantidad Articulos</th>
        <th>Precio Articulos</th>
        <th>Lote Articulos</th>
        <th>Fecha Vencimiento Articulos</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventories as $inventory)
            <tr>
                <td>{!! $inventory->id!!}</td>
            <td>{!! $inventory->inv_nombre !!}</td>
            <td>{!! $inventory->inv_cantidad !!}</td>
            <td>{!! $inventory->inv_precio !!}</td>
            <td>{!! $inventory->inv_lote !!}</td>
            <td>{!! $inventory->inv_fecha_vencimiento !!}</td>
                <td>
                    {!! Form::open(['route' => ['inventories.destroy', $inventory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('inventories.show', [$inventory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-search"></i></a>
                        <a href="{!! route('inventories.edit', [$inventory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-pencil"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-remove"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
