@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Facturación
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($billing, ['route' => ['billings.update', $billing->id], 'method' => 'patch']) !!}

                        @include('billings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection