<?php if($view == 'createfile'): ?>
    <?php $__env->startSection('title',"Nuevo archivo"); ?>
    <?php $__env->startSection('content'); ?>
        <div class="container">
            <!-- Modal -->
            
      </div>
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php if($view == 'create'): ?>
    <?php $__env->startSection('title',"Nuevo directorio"); ?>
     <?php $__env->startSection('content'); ?>
     <div class="container">
            <!-- Modal -->
            <?php echo Form::model($categori, ['route' => ['storefile'], 'method' => 'POST','class'=>"form-horizontal"]); ?>

              <?php echo $__env->make('archivos.partials.directoriofields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::close(); ?>

        </div>
       <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($view == 'edit'): ?>
    <?php $__env->startSection('title',"Modifica socio"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo Form::model($categori, ['route' => ['file/update', $categori], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

        <?php echo $__env->make('archivos.partials.directoriofields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('script'); ?>
<script>

    $('#NoteModalLong').modal('show');

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/archivos/modal.blade.php ENDPATH**/ ?>