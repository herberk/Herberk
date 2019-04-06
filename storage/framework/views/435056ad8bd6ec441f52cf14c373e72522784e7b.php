<div class="row">
    <div class="col-sm-4" > 
        <div class="card">
            <h5 class="ml-4"><strong>Empresas</strong></h5>
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check form-check-inline ml-5 mb-1">
                    <strong> <input class="form-check-input "
                           type="radio"
                           name="empresa"
                           id="state_<?php echo e($empresa); ?>"
                           value="<?php echo e($empresa->id); ?>">
                            
                        <label class="form-check-label" for="state_<?php echo e($empresa); ?>"><?php echo e($empresa->name); ?></label></strong>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>    
    </div>  
    <div class="col-sm-8 "> 
        <div class="card">
            <h5 class="ml-4"><strong>Declaraciones Juradas</strong></h5>
            <?php $__currentLoopData = $juradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check form-check-inline ml-5 mb-1">
                    <strong> <input name="juradas[<?php echo e($jurada->id); ?>]"
                           class="form-check-input"
                           type="checkbox"
                           id="skill_<?php echo e($jurada->id); ?>"
                           value="<?php echo e($jurada->id); ?>">
                            
                    <label class="form-check-label" for="skill_<?php echo e($jurada->id); ?>"><?php echo e($jurada->desc_corta); ?></label></strong>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
