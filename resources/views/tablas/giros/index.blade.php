@extends('layouts.app')
@section('title', 'Giros')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="pb-1">
            <i class="fas fa-fw fa-table" style=color:#3729fa></i>
            {{ trans("trans.titlegiro.{$view}") }}
        </h2>
        {{--@include('shared._mensajes')--}}
        <p>
            @if ($view == 'index')
                <a href="{{ route('girosxls') }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
             {{--   <a href="{{ route('users.trashed') }}" class="btn btn-outline-dark">Ver papelera</a>
                <a href="{{ route('users.create') }}" class="btn btn-dark">Nuevo usuario</a>--}}
            @else
                <a href="{{ route('users.index') }}" class="btn btn-outline-dark">Regresar al listado de usuarios</a>
            @endif
        </p>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Giro o Actividad</th>
            <th scope="col">girosbs</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($giros as $giro)
            <tr>
                <th scope="row">{{ $giro->id }}</th>
                <td>{{ $giro->name }}</td>
                {{--<td>{{ $giro->girosbs->name }}</td>--}}
                <td>
                    {{--<form action="{{ route('users.destroy', $user) }}" method="POST">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--{{ method_field('DELETE') }}--}}
                    {{--<button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>--}}
                    {{--</form>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $giros->appends(Request::only(['name','type']))->setPath('')->render() !!}
@endsection

