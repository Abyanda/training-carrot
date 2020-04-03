<?php $__env->startSection('content'); ?>

    <?php if(session('status')): ?>
        <?php flash()->success(session('status')); ?>
    <?php endif; ?>

    <h3 class="ui header"><?php echo app('translator')->get('laravolt::auth.forgot_password'); ?></h3>

    <form class="ui form" method="POST" action="<?php echo e(route('auth::forgot')); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="ui field right icon input fluid">
            <input type="email" name="email" placeholder="<?php echo app('translator')->get('laravolt::auth.email'); ?>" value="<?php echo e(old('email')); ?>">
            <i class="mail icon"></i>
        </div>
        <button type="submit" class="ui fluid button primary"><?php echo app('translator')->get('laravolt::auth.send_reset_password_link'); ?></button>
    </form>

    <?php if(config('laravolt.auth.registration.enable')): ?>
        <div class="ui divider hidden section"></div>
        <?php echo app('translator')->get('laravolt::auth.not_registered_yet?'); ?> <a href="<?php echo e(route('auth::register')); ?>" class="link"><?php echo app('translator')->get('laravolt::auth.register_here'); ?></a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.auth.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/forgot.blade.php ENDPATH**/ ?>