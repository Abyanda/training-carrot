<?php $__env->startSection('content-user-edit'); ?>

    <h4><?php echo app('translator')->get('laravolt::label.reset_password_manual'); ?></h4>
    <p><?php echo app('translator')->get('laravolt::message.reset_password_manual_intro'); ?></p>
    <form action="<?php echo e(route('epicentrum::password.reset', [$user['id']])); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <button type="submit" class="ui button" href=""><?php echo app('translator')->get('laravolt::action.send_reset_password_link'); ?></button>
    </form>

    <div class="ui divider"></div>

    <h4><?php echo app('translator')->get('laravolt::label.reset_password_automatic'); ?></h4>
    <p><?php echo app('translator')->get('laravolt::message.reset_password_automatic_intro'); ?></p>
    <?php echo SemanticForm::open()->post()->action(route('epicentrum::password.generate', $user['id'])); ?>

    <?php echo e(csrf_field()); ?>

    <div class="field">
        <div class="ui checkbox">
            <input type="checkbox" name="must_change_password" <?php echo e(request()->old('must_change_password')?'checked':''); ?>>
            <label><?php echo app('translator')->get('laravolt::users.change_password_on_first_login'); ?></label>
        </div>
    </div>
    <button type="submit" class="ui button" href=""><?php echo app('translator')->get('laravolt::action.send_new_password'); ?></button>
    <?php echo SemanticForm::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('laravolt::users.edit', ['tab' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/password/edit.blade.php ENDPATH**/ ?>