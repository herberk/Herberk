<?php $__env->startSection('title', "Crear Jurada"); ?>
<?php $__env->startSection('content'); ?>
    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <div class="Display4 float-left"></div>
                <h4><i class="fas fa-building" style=color:#e4c40a></i> Selecciona declaracion jurada por empresas</h4>
            </div>

        </div>
        
            <?php echo Form::model($empresas, ['route' => ['empresa/update', $empresas], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('juradas.partials._selectfields', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="text-center my-2">
                <a href="<?php echo e(route('juradas.index')); ?>"
                   class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de declaraciones juradas</a>
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar Seleccionn</button>
            </div>
        <?php echo Form::close(); ?>

       

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>