<?php $__env->startSection('page.title', __('laravolt::label.edit_user')); ?>

<?php $__env->startPush('page.actions'); ?>
    <a href="<?php echo e(route('epicentrum::users.index')); ?>" class="ui button">
        <i class="icon arrow up"></i> Kembali ke Index
    </a>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="ui segment p-0 secondary">
        <div class="p-1">
            <div class="ui list horizontal">
                <div class="item">
                    <h3 class="ui header">
                        <img class="ui image avatar" src="<?php echo e($user->avatar); ?>" alt=""> <?php echo e($user->name); ?>

                    </h3>
                </div>
            </div>
        </div>

        <div class="ui tabular menu left attached">
            <a class="item <?php echo e(($tab == 'account')?'active':''); ?>" href="<?php echo e(route('epicentrum::account.edit', $user['id'])); ?>"><?php echo app('translator')->get('laravolt::menu.account'); ?></a>
            <a class="item <?php echo e(($tab == 'password')?'active':''); ?>" href="<?php echo e(route('epicentrum::password.edit', $user['id'])); ?>"><?php echo app('translator')->get('laravolt::menu.password'); ?></a>
        </div>
        <div class="ui segment bottom attached p-1 b-0" data-tab="first">
            <?php echo $__env->yieldContent('content-user-edit'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.epicentrum.view.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/users/edit.blade.php ENDPATH**/ ?>