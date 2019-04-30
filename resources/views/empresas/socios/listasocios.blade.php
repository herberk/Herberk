@extends('layouts.app')

@section('title', 'Socios')

@section('content')
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i> Listado de socios de empresas</h2>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('socioexcel') }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#createbanco">Nueva Socio</a>
        </div>
    </div>
    @include('empresas.socios.partials.tablesocio')

    <div class="card-footer small text-muted">Actualizado el: {{ $date }}</div>


@endsection

