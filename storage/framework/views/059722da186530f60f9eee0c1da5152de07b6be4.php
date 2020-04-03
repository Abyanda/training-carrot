<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $processDefinitionKeys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->startComponent('laravolt::components.panel', ['title' => $key]); ?>
            <?php $__env->startComponent('workflow::components.diagram-with-counter', ['key' => $key]); ?>
            <?php echo $__env->renderComponent(); ?>
        <?php echo $__env->renderComponent(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/cockpit/index.blade.php ENDPATH**/ ?>