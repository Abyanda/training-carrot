<?php $__env->startSection('content'); ?>
    <div class="ui grid">
        <div class="sixteen wide column">

            <a href="<?php echo e(route('segment.create')); ?>" class="right floated column ui primary button">
                <i class="plus icon"></i>
                Tambah
            </a>
        </div>
    </div>
    <?php echo $table; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('laravolt::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/resources/views/managementcamunda/Segment/index.blade.php ENDPATH**/ ?>