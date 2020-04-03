<div class="ui menu secondary page-header">
    <div class="item">
        <h2 class="ui header"><?php echo $__env->yieldContent('page.title', $title ?? ""); ?></h2>
    </div>
    <div class="menu right">
        <div class="item">
            <?php $__currentLoopData = $actions ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_array($action)): ?>
                    <?php echo $__env->renderWhen($action['visible'] ?? true, 'laravolt::components.button', ['action' => $action], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                <?php else: ?>
                    <?php echo $action; ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php echo $__env->yieldPushContent('page.actions'); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/components/page-header.blade.php ENDPATH**/ ?>