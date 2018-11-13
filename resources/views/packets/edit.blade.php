@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Packet
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($packet, ['route' => ['packets.update', $packet->id], 'method' => 'patch']) !!}

                        @include('packets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection