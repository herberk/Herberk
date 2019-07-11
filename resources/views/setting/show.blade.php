@extends('layouts.app')
@section('title', "Configuracion")

@section('content')
 <div class="col-md-11 col-md-offset-3">
        <div class="d-flex justify-content-between align-items-end mb-3">
            <h2 class="pb-1">
                <i class="fas fa-cog" style=color:#505050></i>
                 Configuraciones
            </h2>
            <p>
                <a href="#" class="btn btn-sm  btn-outline-warning"><i class="fas fa-sync-alt"></i> Refrescar </a>
                <a href="#" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
                <a href="{{ route('config') }}" class="btn btn-outline-dark btn-sm"> <i class="fas fa-cog"> Modificar</i></a>
            </p>
        </div>

{{--        <div class="card card bg-light mb-3">--}}
{{--            <div class="card-header"> Valores de configuración:</div>--}}
{{--            <div class="card-body">--}}
                <h5 class="card-title"> Para la Empresa: {{ \setting('app_name', config('app.name', 'Laravel')) }}</h5>
                <p class="card-text"> Aquí están los valores de configuración actuales almacenados en la base de datos. </p>
{{--            </div>--}}
            <table class="table table-sm">
                <tr>
                    <thead class="thead-dark">
                    <th>Configuracion</th>
                    <th>Valor</th>
                    <th>Accessor</th>
                    </thead>
                </tr>
                @forelse($settings as $setting)
                    <tr>
                        <td>{{ $setting->name }}</td>
                        <td>{{ $setting->val }}</td>
                        <td><code>\setting('{{ $setting->name }}')</code></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay configuraciones guardadas en DB.</td>
                    </tr>
                @endforelse
            </table>
{{--        </div>--}}
 </div>


@endsection
