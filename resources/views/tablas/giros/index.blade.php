@extends('layouts.app')

@section('title', 'Giros')
@section('style')
    @include('tablas.partials.style_tablas')
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-end">
        <h2 >
            <i class="fas fa-fw fa-table" style=color:#3729fa></i>
            {{ trans("trans.titlegiro.{$view}") }}
        </h2>
    </div>
    <div class="just-padding">
        <div class="list-group list-group-root well">

            @foreach($girosas as $girosa)
                <a href="#item-{{$girosa->id}}" class="list-group-item" data-toggle="collapse">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <strong>{{ $girosa->name }}</strong>
                </a>

                @foreach($girosa->girosbs as $indexkey=>$giro)
                        <div  class="list-group-mio collapse mt-2" id="item-{{$girosa->id}}">
                            <a href="#item-{{$girosa->id}}-{{$indexkey}}" class="list-group-item" data-toggle="collapse">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <strong>-----{{ $giro->name }}  </strong>
                            </a>
                        </div>
   {{--                 @foreach($girosbs->giros as $indexkey=>$gir)
                        <div  class="list-group-mio collapse mt-2" id="item-{{$girosa->id}}">
                                <div class="mio col-3 ml-5"><strong>{{$indexkey+1 }}</strong>  {{ $gir->codigo}}</div>

                                <div class="col-1">{{$gir->name}}</div>
                    @endforeach--}}
                @endforeach
           @endforeach
        </div>
    </div>

    {{--https://jsfiddle.net/ann7tctp/--}}

@endsection
@section('script')
    @include('juradas.partials.script_juradas')
@endsection
