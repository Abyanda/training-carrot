<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('laravolt::components.panel', ['title' => __('Edit Profil')]); ?>
        <?php echo form()->bind($user)->put(route('epicentrum::my.profile.update'))->horizontal(); ?>


        <?php echo form()->text('name')->label(__('laravolt::users.name')); ?>

        <?php echo form()->text('email')->label(__('laravolt::users.email'))->readonly(); ?>

        <?php echo form()->dropdown('timezone', $timezones)->label(__('laravolt::users.timezone')); ?>


        <?php echo form()->action(form()->submit(__('laravolt::action.save'))); ?>

        <?php echo form()->close(); ?>

    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.epicentrum.view.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/my/profile/edit.blade.php ENDPATH**/ ?>