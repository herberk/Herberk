<?php $__env->startSection('title', 'Juradas'); ?>
<?php $__env->startSection('style'); ?>
<?php echo $__env->make('juradas.partials.style_juradas', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
         <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i>Declaraciones Juradas por empresas </h2>
    </div>

    <div class="just-padding">
        <div class="list-group list-group-root well">
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#item-<?php echo e($empresa->id); ?>" class="list-group-item" data-toggle="collapse">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     <strong><?php echo e($empresa->name); ?></strong>
                </a>
                <?php $__currentLoopData = $empresa->juradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div  class="list-group collapse mt-2" id="item-<?php echo e($empresa->id); ?>">
                        <div class="row">
                            <div class="col-4">  <?php echo e($jura->desc_corta); ?></div>
                             <div class="col-2"> <?php echo e($jura->fe_vence); ?></div>
                             <div class="col-1">   <?php echo e($jura->certificado); ?></div>
                             <div class="col-1"> <?php echo e($jura->fe_certifica); ?></div>
                             <div class="col-4">    <?php echo e($jura->pivot->declara); ?></div>
                       </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('juradas.partials.script_juradas', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>