

<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
        <tr>
           <th>#</th>
           <th style="width: 100px;text-align: center">RUT</th>
           <th>Nombre</th>
           <th>Empresa</th>
           <th>Rep.</th>
           <th>%</th>
           <th style="width: 100px;text-align: center">Pagado</th>
           <th style="width: 100px;text-align: center">Pendiente</th>
           <th style="width: 100px;text-align: center">Aporte</th>
           <th style="width: 200px;text-align: center">Acciones</th>

      </tr>
    </thead>
    <?php $__currentLoopData = $socios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr data-id="<?php echo e($socio->id); ?>">
       <td><?php echo e($socio->id); ?></td>
       <td style="text-align: right"><?php echo e($socio->rut); ?></td>
       <td><?php echo e($socio->name); ?></td>
       <td><?php echo e($socio->empresas->name_corto); ?></td>
       <td><?php echo e($socio->rep_legal); ?></td>
       <td><?php echo e($socio->porcen); ?></td>
       <td style="text-align: right"><?php echo e($socio->apopago); ?></td>
       <td style="text-align: right"><?php echo e($socio->apopend); ?></td>
       <td style="text-align: right"><?php echo e($socio->aporte); ?></td>
        <td style="width: 100px;text-align: right">
            <?php $__env->startComponent('shared._tooltip'); ?>
            <?php $__env->slot('mensa', 'Notas para el Socio'); ?>
            
            <a href="<?php echo e(route('socioshownotas', [$socio->id])); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-tasks"></i></a>
            <?php echo $__env->renderComponent(); ?>
            <?php $__env->startComponent('shared._tooltip'); ?>
            <?php $__env->slot('mensa', 'Edita Socio'); ?>
            <a href="<?php echo e(route('socioedit',$socio)); ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
            <?php echo $__env->renderComponent(); ?>
            <?php $__env->startComponent('shared._tooltip'); ?>
            <?php $__env->slot('mensa', 'Elimina socio '); ?>
            <a href="<?php echo e(route('socio/delete', [$socio->id])); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
            <?php echo $__env->renderComponent(); ?>

        </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
