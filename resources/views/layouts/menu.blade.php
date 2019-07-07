<li class="{{ Request::is('inventories*') ? 'active' : '' }}">
    <a href="{!! route('inventories.index') !!}"><i class="fa fa-edit"></i><span>Inventario</span></a>
</li>
</li> <li class="{{ Request::is('billings*') ? 'active' : '' }}">
    <a href="{!! route('billings.index') !!}"><i class="fa fa-edit"></i><span>Facturación</span></a>
</li>
<li class="{{ Request::is('compras*') ? 'active' : '' }}">
    <a href="{!! route('purchasing.index') !!}"><i class="fa fa-edit"></i><span>Comprar</span></a>