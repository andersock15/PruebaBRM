@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detalle Facturas.
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('billings.show_fields')
                    <a href="{!! route('billings.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
