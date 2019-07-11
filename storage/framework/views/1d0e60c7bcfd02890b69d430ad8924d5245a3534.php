<h5 class="modal-title">Seleccione:</h5>

</div>
<div class="modal-body ">

    <div class="col-4">
        <div class="input-group ">
            <?php echo Field::select('empre_id', $emp_com, null, ['class' => 'form-control py-1', 'style'=>"width: 120px"]); ?>

        </div>
    </div>

</div>


<div class="modal-footer">
    <a href="<?php echo e(route('home')); ?>" class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar </a>
    <a href="<?php echo e(route('settings')); ?>"  class="btn btn-outline-success btn-sm"><i class="fa fa-undo"></i> Ir a Configuraciones</a>

</div><?php /**PATH C:\laragon\www\HerBerk\resources\views/setting/select_empresa.blade.php ENDPATH**/ ?>