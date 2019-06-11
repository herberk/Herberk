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
    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr data-id="<?php echo e($file->id); ?>">
            <td><?php echo e($file->id); ?></td>
            <td><?php echo e($file->empresa); ?></td>
            <td><?php echo e($file->directorio); ?></td>
            <td><?php echo e($file->name); ?></td>
            <td><?php echo e($file->sizeInKb); ?> KB</td>
            <td><?php echo e($file->extension); ?></td>

            <td style="width: 100px;text-align: right">
                <?php if($view == 'index'): ?>
                   
                    <?php $__env->startComponent('shared._tooltip'); ?>
                    <?php $__env->slot('mensa', 'Elimina Archivo '); ?>
                    <a href="<?php echo e(route('file/destroy', [$file->id])); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                    <?php echo $__env->renderComponent(); ?>
                <?php endif; ?>
            </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/archivos/partials/tablafiles.blade.php ENDPATH**/ ?>