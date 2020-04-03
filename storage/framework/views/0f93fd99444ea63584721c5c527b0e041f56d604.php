<?php $__env->startSection('content'); ?>

    <div class="text-uppercase login-text center aligned"><?php echo app('translator')->get('laravolt::auth.register'); ?></div>

    <form class="ui form" method="POST" action="<?php echo e(route('auth::register')); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="ui field right icon input fluid">
            <input type="text" name="name" placeholder="<?php echo app('translator')->get('laravolt::auth.name'); ?>" value="<?php echo e(old('name')); ?>">
            <i class="user icon"></i>
        </div>
        <div class="ui field right icon input fluid">
            <input type="email" name="email" placeholder="<?php echo app('translator')->get('laravolt::auth.identifier'); ?>" value="<?php echo e(old('email')); ?>">
            <i class="mail icon"></i>
        </div>
        <div class="ui field right icon input fluid">
            <input type="password" name="password" placeholder="<?php echo app('translator')->get('laravolt::auth.password'); ?>">
            <i class="lock icon"></i>
        </div>
        <div class="ui field right icon input fluid">
            <input type="password" name="password_confirmation" placeholder="<?php echo app('translator')->get('laravolt::auth.password_confirmation'); ?>">
            <i class="lock icon"></i>
        </div>
        <button type="submit" class="ui button fluid primary"><?php echo app('translator')->get('laravolt::auth.register'); ?></button>
    </form>

    <div class="ui divider hidden section"></div>
    <?php echo app('translator')->get('laravolt::auth.already_registered?'); ?> <a href="<?php echo e(route('auth::login')); ?>" class="link"><?php echo app('translator')->get('laravolt::auth.login_here'); ?></a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.auth.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/register.blade.php ENDPATH**/ ?>