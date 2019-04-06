<div class="text-center my-2">
    @tooltip
    @slot('mensa', 'Seleccionar declaraciones juradas')
    <a  href="{{ url('/empresa/juradas', [$empresas->id]) }}" class="btn btn-outline-primary btn-sm">  <i class="far fa-check-square"></i> Seleccionar Juradas</a>
    @endtooltip
    @tooltip
    @slot('mensa', 'Ver o editar Notas de empresa')
    <a href="{{ route('empresashownotas', [$empresas->id]) }}" class="btn btn-outline-secondary btn-sm">  <i class="fas fa-tasks" style=color:#3729fa> Notas de empresa</i></a>
    @endtooltip

     @tooltip
    @slot('mensa', 'Ver o editar Notas de empresa')
    <a href="{{ route('logo', [$empresas->id]) }}" class="btn btn-outline-secondary btn-sm"> <i class="fas fa-crop" style=color:#3729fa></i> Cambiar Logotipo</a>
    @endtooltip
    <a href="{{ route('empresaindex') }}"
       class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de empresas</a>
    <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar empresa</button>
</div>