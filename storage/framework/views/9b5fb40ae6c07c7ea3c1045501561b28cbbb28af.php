<?php $__env->startSection('content-user-edit'); ?>
    <?php echo form()->bind($user)->open()->put()->action(route('epicentrum::account.update', $user['id'])); ?>


    <?php echo form()->text('name')->label(__('laravolt::users.name')); ?>

    <?php echo form()->text('email')->label(__('laravolt::users.email')); ?>

    <?php echo form()->dropdown('status', $statuses)->label(__('laravolt::users.status')); ?>

    <?php echo form()->dropdown('timezone', $timezones)->label(__('laravolt::users.timezone')); ?>


    <div class="ui segments">
        <div class="ui segment">
            <div class="grouped fields">
                <label><?php echo app('translator')->get('laravolt::users.roles'); ?></label>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="field <?php echo e($roleEditable ? '' : 'disabled'); ?>">
                        <div class="ui checkbox <?php echo e($multipleRole?'':'radio'); ?>">
                            <input type="<?php echo e($multipleRole?'checkbox':'radio'); ?>" name="roles[]"
                                   value="<?php echo e($role->id); ?>" <?php echo e(($user->hasRole($role))?'checked=checked':''); ?>>
                            <label><?php echo e($role->name); ?></label>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php if (! ($roleEditable)): ?>
            <div class="ui secondary segment">

                <span class="ui grey text"><i>Editing role are disabled by system</i></span>
            </div>
        <?php endif; ?>
    </div>

    <?php echo form()->action(form()->submit(__('laravolt::action.save')), form()->link(__('laravolt::action.back'), route('epicentrum::users.index'))); ?>

    <?php echo form()->close(); ?>



    <div class="ui divider section"></div>

    <div class="ui red segment p-1">
        <h3><?php echo app('translator')->get('laravolt::users.delete_account'); ?></h3>

        <?php if($user['id'] == auth()->id()): ?>
            <div class="ui message warning"><?php echo app('translator')->get('laravolt::message.cannot_delete_yourself'); ?></div>
        <?php else: ?>
            <?php echo form()->open()->delete()->action(route('epicentrum::users.destroy', $user['id'])); ?>

            <p>Menghapus pengguna dan semua data yang berhubungan dengan pengguna ini.
                <br>
                Aksi ini tidak bisa dibatalkan.</p>
            <button class="ui button red" type="submit" name="submit" value="1"
                    onclick="return confirm('<?php echo app('translator')->get('laravolt::message.account_deletion_confirmation'); ?>')"><?php echo app('translator')->get('laravolt::action.delete'); ?></button>
            <?php echo form()->close(); ?>

        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('laravolt::users.edit', ['tab' => 'account'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/account/edit.blade.php ENDPATH**/ ?>