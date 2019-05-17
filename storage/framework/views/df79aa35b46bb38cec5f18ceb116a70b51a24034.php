<?php $__env->startSection('title', 'Juradas'); ?>
<?php $__env->startSection('style'); ?>
    <?php echo $__env->make('archivos.partials.style_file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1"> <i class="fas fa-archive" style=color:#80202b></i>&nbsp;Archivos por empresas </h2>
        <a href="<?php echo e(url('jurada/Exports')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
    </div>
    <div class="just-padding">
        <div class="list-group list-group-root well">
            <?php $pos=1 ?>
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#item-<?php echo e($empresa->id); ?>" class="list-group-item" data-toggle="collapse">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <strong><?php echo e($empresa->rut); ?> &nbsp;&nbsp;  <?php echo e($empresa->name_corto); ?>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo e($empresa->name); ?></strong>
                </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <blockquote class="blockquote text-center mt-2">
            <strong>Total Archivos &nbsp;&nbsp;<?php echo e($pos); ?>  </strong>
        </blockquote>
    </div>

    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('archivos.partials.script_file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>