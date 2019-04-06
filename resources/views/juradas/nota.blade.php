@extends('layouts.app')
@if ($view == 'instructivo')
    @section('title',"instructivo")
    @section('content')
    <div class="container">
        <!-- Modal -->
        {{--{!! Form::model($empresas, ['route' => ['empresa/updatenota', $empresas], 'method' => 'PUT','class'=>"form-horizontal"]) !!}--}}
        @include('juradas.partials._instruccionsModal')
        {{--{!! Form::close() !!}--}}
    </div>
    @endsection
@endif
@if ($view == 'plantilla')
    @section('title',"Plantilla")
    @section('content')
    <div class="container">
        <!-- Modal -->
        @include('juradas.partials._plantillasModal')
    </div>
    @endsection
@endif

@section('script')
    <script>
        $('#NoteModalLong').modal('show');
    </script>
@endsection