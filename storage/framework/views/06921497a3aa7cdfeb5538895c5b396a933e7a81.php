<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('laravolt::components.panel', ['title' => __('Edit Password')]); ?>
        <?php echo form()->open()->action(route('epicentrum::my.password.update'))->horizontal(); ?>

        <?php echo form()->password('password_current')->label(__('laravolt::users.password_current')); ?>

        <?php echo form()->password('password')->label(__('laravolt::users.password_new')); ?>

        <?php echo form()->password('password_confirmation')->label(__('laravolt::users.password_new_confirmation')); ?>

        <?php echo form()->action(form()->submit(__('laravolt::action.save'))); ?>

        <?php echo form()->close(); ?>

    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.epicentrum.view.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/my/password/edit.blade.php ENDPATH**/ ?>