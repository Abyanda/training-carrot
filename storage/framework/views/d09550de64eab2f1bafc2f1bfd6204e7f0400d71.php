<?php $__env->startSection('content'); ?>
    <h2 class="ui header brand left aligned">
        <img src="<?php echo e(config('laravolt.ui.brand_image')); ?>" alt="" class="ui image">
        <span class="brand-name content"><?php echo e(config('laravolt.ui.brand_name')); ?></span>
    </h2>

    <div class="text-uppercase login-text center aligned"><?php echo app('translator')->get('laravolt::auth.login'); ?></div>

    <form class="ui form" method="POST" action="<?php echo e(route('auth::login')); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="field">
            <label for=""><?php echo app('translator')->get('laravolt::auth.identifier'); ?></label>
            <div class="ui field right icon input fluid">
                <input type="text" name="<?php echo e(config('laravolt.auth.identifier')); ?>" placeholder="<?php echo app('translator')->get('laravolt::auth.identifier'); ?>" value="<?php echo e(old(config('laravolt.auth.identifier'))); ?>">
                <i class="at icon"></i>
            </div>
        </div>
        <div class="field">
            <label for=""><?php echo app('translator')->get('laravolt::auth.password'); ?></label>
            <div class="ui field right icon input fluid">
                <input type="password" name="password" placeholder="<?php echo app('translator')->get('laravolt::auth.password'); ?>">
                <i class="eye icon"></i>
            </div>
        </div>
        <div class="field left-align">
            <a href="<?php echo e(route('auth::forgot')); ?>" class="link"><?php echo app('translator')->get('laravolt::auth.forgot_password'); ?></a>
        </div>

        <?php if(config('laravolt.auth.captcha')): ?>
            <div class="field">
                <?php echo app('captcha')->display(); ?>

            </div>
        <?php endif; ?>
        <div class="ui field">
            <button type="submit" class="ui fluid button"><?php echo app('translator')->get('laravolt::auth.login'); ?></button>
        </div>
        <div class="ui equal width grid">
            <div class="column left aligned">
                <div class="ui checkbox">
                    <input type="checkbox" name="remember" <?php echo e(request()->old('remember')?'checked':''); ?>>
                    <label><?php echo app('translator')->get('laravolt::auth.remember'); ?></label>
                </div>
            </div>
        </div>

    </form>

    <?php if(config('laravolt.auth.cas.enable')): ?>
        <div class="ui horizontal divider">
            Or
        </div>
        <a href="<?php echo e(route('auth::cas.login')); ?>" class="ui fluid button basic"><?php echo app('translator')->get('laravolt::auth.login_cas'); ?></a>
    <?php endif; ?>

    <?php if(config('laravolt.auth.registration.enable')): ?>
        <div class="ui divider hidden section"></div>
        <?php echo app('translator')->get('laravolt::auth.not_registered_yet?'); ?>
        <a href="<?php echo e(route('auth::register')); ?>" class="link"><?php echo app('translator')->get('laravolt::auth.register_here'); ?></a>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <?php if(config('laravolt.auth.captcha')): ?>
        <?php echo app('captcha')->renderJs(); ?>

    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(config('laravolt.auth.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/login.blade.php ENDPATH**/ ?>