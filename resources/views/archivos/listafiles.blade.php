@extends('layouts.app')

@section('title', 'Juradas')
@section('style')
    @include('archivos.partials.style_file')
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1"> <i class="fas fa-archive" style=color:#80202b></i>&nbsp;Archivos por empresas </h2>
        <a href="{{ url('jurada/Exports') }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
    </div>
    <div class="just-padding">
        <div class="list-group list-group-root well">
            <?php $pos=1 ?>
            @foreach($empresas as $empresa)
                <a href="#item-{{$empresa->id}}" class="list-group-item" data-toggle="collapse">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <strong>{{ $empresa->rut  }} &nbsp;&nbsp;  {{  $empresa->name_corto }}&nbsp;&nbsp;&nbsp;&nbsp; {{  $empresa->name }}</strong>
                </a>

            @endforeach
        </div>
        <blockquote class="blockquote text-center mt-2">
            <strong>Total Archivos &nbsp;&nbsp;{{ $pos  }}  </strong>
        </blockquote>
    </div>

    {{--https://jsfiddle.net/ann7tctp/--}}

@endsection
@section('script')
    @include('archivos.partials.script_file')
@endsection
