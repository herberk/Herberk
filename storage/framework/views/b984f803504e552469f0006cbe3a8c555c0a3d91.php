<?php $__env->startSection('title', 'Giros'); ?>
<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="pb-1">
            <i class="fas fa-fw fa-table" style=color:#3729fa></i>
            <?php echo e(trans("trans.titlegiro.{$view}")); ?>

        </h2>
        
        <p>
            <?php if($view == 'index'): ?>
                <a href="<?php echo e(route('girosxls')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
             
            <?php else: ?>
                <a href="<?php echo e(route('users.index')); ?>" class="btn btn-outline-dark">Regresar al listado de usuarios</a>
            <?php endif; ?>
        </p>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Giro o Actividad</th>
            <th scope="col">girosbs</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $giros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($giro->id); ?></th>
                <td><?php echo e($giro->name); ?></td>


            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $giros->appends(Request::only(['name','type']))->setPath('')->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>