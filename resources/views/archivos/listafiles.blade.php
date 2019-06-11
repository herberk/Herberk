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
                    @if(count($empresa->directorios)==0)
                        <a href="#item-{{$empresa->id}}" class="list-group-minus mb-2" data-toggle="collapse">
                        <i class="far fa-minus-square"></i>
                            <strong>{{ $empresa->rut  }} &nbsp;&nbsp;  {{  $empresa->name_corto }}&nbsp;&nbsp;&nbsp;&nbsp; {{  $empresa->name }}</strong>#item-{{$empresa->id}}
                        </a>
                    @else
                        <a href="#item-{{$empresa->id}}" class="list-group-plus mb-2" data-toggle="collapse">
                        <i class="far fa-plus-square"></i>
                            <strong>{{ $empresa->rut  }} &nbsp;&nbsp;  {{  $empresa->name_corto }}&nbsp;&nbsp;&nbsp;&nbsp; {{  $empresa->name }}</strong>#item-{{$empresa->id}}
                        </a>
                    @endif

                   @foreach($empresa->directorios as $indexkey=>$directori)
                        <div  class="list-group-mio collapse mt-1" id="item-{{$empresa->id}}">
                            @if(count($directori->ficheros)==0)
                                <a href="#item-{{$empresa->id}}-{{$indexkey}}" class="list-group-item" data-toggle="collapse">
                                    <i class="far fa-minus-square"></i>
                                    &nbsp;&nbsp;&nbsp;&nbsp; <strong>{{ $directori->ano }}  {{ $directori->categoriname }} </strong>#item-{{$empresa->id}}-{{$indexkey}}
                                </a>
                            @else

                            <a href="#item-{{$empresa->id}}-{{$indexkey}}" class="list-group-item" data-toggle="collapse">
                                <i class="far fa-plus-square"></i>
                                &nbsp;&nbsp;&nbsp;&nbsp; <strong>{{ $directori->ano }}  {{ $directori->categoriname }} </strong>#item-{{$empresa->id}}-{{$indexkey}}
                            </a>
                            @endif
                        </div>
                             @foreach($directori->ficheros as $indexkey=>$fichero)
{{--                                 <p>hola{{$directori->id}}</p>{{$fichero->id}}--}}
                               <div   class="list-group-mio collapse mt-1" id="item-{{$empresa->id}}-{{$directori->id}}">
                                   <strong> {{ $fichero->glosa }}</strong>


                               </div>
                             @endforeach
                    @endforeach
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
