<?php $__env->startSection('title', 'Socios'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i> Listado de socios de empresas</h2>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="<?php echo e(route('socioexcel')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#createbanco">Nueva Socio</a>
        </div>
    </div>
    <?php echo $__env->make('empresas.socios.partials.tablesocio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card-footer small text-muted">Actualizado el: <?php echo e($date); ?></div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>