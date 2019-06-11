<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Empresa</th>
        <th>Nombre del directorio</th>
{{--        <th style="width: 100px;text-align: center">Año</th>--}}
        <th style="width: 200px;text-align: center">Acciones</th>
    </tr>
    </thead>
    @foreach ($categoris as $categori)
    <tr data-id="{{ $categori->id}}">
        <td>{{ $categori->id}}</td>
        <td>{{ $categori->empresas->name_corto}}</td>
        <td>{{ $categori->ano.' '.$categori->name}}</td>

        <td style="width: 100px;text-align: right">
            @if ($view == 'index')
                @tooltip
                @slot('mensa', 'Edita Directorio')
                <a href="{{ route('fileedit',$categori)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                @endtooltip
                @tooltip
                @slot('mensa', 'Elimina Directorio ')
                <a href="{{ route('file/destroy', [$categori->id]) }}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                @endtooltip
             @endif
        </td>
        @endforeach
</table>
