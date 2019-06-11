<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Empresa</th>
        <th>Nombre del directorio</th>
         <th>Nombre del archivo</th>
        <th>Tamaño</th>
        <th>Extensión</th>

        <th style="width: 200px;text-align: center">Acciones</th>
    </tr>
    </thead>
    @foreach ($files as $file)
        <tr data-id="{{ $file->id}}">
            <td>{{ $file->id }}</td>
            <td>{{ $file->empresa }}</td>
            <td>{{ $file->directorio }}</td>
            <td>{{ $file->name }}</td>
            <td>{{ $file->sizeInKb }} KB</td>
            <td>{{ $file->extension }}</td>

            <td style="width: 100px;text-align: right">
                @if ($view == 'index')
                   {{-- @tooltip
                    @slot('mensa', 'Edita Directorio')
                    <a href="{{ route('fileedit',$file)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                    @endtooltip--}}
                    @tooltip
                    @slot('mensa', 'Elimina Archivo ')
                    <a href="{{ route('file/destroy', [$file->id]) }}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                    @endtooltip
                @endif
            </td>
    @endforeach
</table>

