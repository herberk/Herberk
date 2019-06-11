@extends('layouts.app')
@if ($view == 'createfile')
    @section('title',"Nuevo archivo")
    @section('content')
        <div class="container">
            <!-- Modal -->
            {{--{!! Form::model($socios, ['route' => ['socio/updatenota', $socios], 'method' => 'PUT','class'=>"form-horizontal"]) !!}
               @include('empresas.socios.partials.NoteModal')
            {!! Form::close() !!}--}}
      </div>
    @endsection
@endif
@if ($view == 'create')
    @section('title',"Nuevo directorio")
     @section('content')
     <div class="container">
            <!-- Modal -->
            {!! Form::model($categori, ['route' => ['storefile'], 'method' => 'POST','class'=>"form-horizontal"]) !!}
              @include('archivos.partials.directoriofields')
            {!! Form::close() !!}
        </div>
       @endsection
@endif

@if ($view == 'edit')
    @section('title',"Modifica socio")
@section('content')
    <div class="container">
        <!-- Modal -->
        {!! Form::model($categori, ['route' => ['file/update', $categori], 'method' => 'PUT','class'=>"form-horizontal"]) !!}
        @include('archivos.partials.directoriofields')
        {!! Form::close() !!}
    </div>
@endsection
@endif

@section('script')
<script>

    $('#NoteModalLong').modal('show');

</script>



@endsection
