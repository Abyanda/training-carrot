<?php $__env->startSection('page.title', __('laravolt::label.roles')); ?>

<?php $__env->startPush('page.actions'); ?>
    <a href="<?php echo e(route('epicentrum::roles.create')); ?>" class="ui button primary">
        <i class="icon plus"></i> <?php echo app('translator')->get('laravolt::action.add'); ?>
    </a>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="ui grid">
        <div class="column sixteen wide">
            <div class="ui cards three doubling">
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('epicentrum::roles.edit', $role['id'])); ?>" class="ui card">
                        <div class="content">
                            <h3 class="header link"><?php echo e($role['name']); ?></h3>
                        </div>
                        <div class="extra content">
                            <i class="icon users"></i><?php echo e($role->users->count()); ?>

                            <span class="right floated"><i class="icon options"></i> <?php echo e($role->permissions()->count()); ?></span>
                        </div>
                        
                        
                        
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.epicentrum.view.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/roles/index.blade.php ENDPATH**/ ?>