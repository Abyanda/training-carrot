<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('laravolt::components.panel', ['title' => __('Manage Module')]); ?>
        <?php echo form()->bind($module)->put(route('workflow::module.update', $module->getKey())); ?>

        <?php echo form()->text('key')->label('Key')->disabled(); ?>

        <?php echo form()->text('label')->label('Label')->required(); ?>


        <div class="ui field">
            <label>Hak Akses</label>
            <div class="hint">
                Di bawah ini Anda bisa mengatur hak akses untuk modul.
                <br>Setiap Role yang dicentang berhak untuk melihat data di Modul yang bersangukutan.
                <br><strong>Akses Tambahan</strong> bisa diisi dengan kombinasi:
                <span class="ui label mini basic">create</span>
                <span class="ui label mini basic">edit</span>
                <span class="ui label mini basic">delete</span>
            </div>
            <table class="ui table very compact" data-role="permissions">
                <thead>
                <tr>
                    <th>Role</th>
                    <th>Akses Tambahan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>
                        <div class="hint">Pisahkan dengan koma, contoh: <strong>create, edit, delete</strong></div>
                    </td>
                </tr>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="ui checkbox">
                                <input type="checkbox"
                                       name="roles[<?php echo e($role->id); ?>][id]"
                                       value="<?php echo e($role->id); ?>" <?php echo e(($moduleRoles->has($role->id))?'checked=checked':''); ?>

                                >
                                <label><?php echo e($role->name); ?></label>
                            </div>
                        </td>
                        <td>
                            <input type="text"
                                   name="roles[<?php echo e($role->id); ?>][permission]"
                                   value="<?php echo e(\Illuminate\Support\Arr::get($moduleRoles->get($role->id), 'pivot.permission')); ?>"
                                   disabled
                            >
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <?php echo form()->action([
            form()->submit(__('Simpan')),
            form()->link(__('Kembali'), route('workflow::module.index'))
        ]); ?>


        <?php echo form()->close(); ?>

    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function(){

            $('[data-role="permissions"] tbody tr').on('change', 'input[type="checkbox"]', function(e){
                let checked = $(this).is(':checked');
                let textbox = $(e.delegateTarget).find('input[type="text"]');
                if (checked) {
                    textbox.removeAttr('disabled');
                    $(e.delegateTarget).addClass('warning');
                } else {
                    textbox.attr('disabled', 'disabled');
                    $(e.delegateTarget).removeClass('warning');
                }
            });

            $('[data-role="permissions"] tbody tr input[type="checkbox"]').trigger('change');
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(
    config('laravolt.workflow.view.layout'),
    [
        '__page' => [
            'title' => __('Module'),
            'actions' => [
                [
                    'label' => __('Kembali ke Daftar Modul'),
                    'class' => '',
                    'icon' => 'icon arrow left',
                    'url' => route('workflow::module.index')
                ],
            ]
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/module/edit.blade.php ENDPATH**/ ?>