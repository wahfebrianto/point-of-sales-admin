@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Promo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($promo, ['route' => ['promos.update', $promo->id], 'method' => 'patch']) !!}

                        @include('promos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection