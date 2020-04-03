<?php $__env->startSection('page.title', __('laravolt::label.users')); ?>

<?php $__env->startPush('page.actions'); ?>
    <a href="<?php echo e(route('epicentrum::users.create')); ?>" class="ui button primary">
        <i class="icon plus"></i> <?php echo app('translator')->get('laravolt::action.add'); ?>
    </a>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $table; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.epicentrum.view.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/users/index.blade.php ENDPATH**/ ?>