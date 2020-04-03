<?php $__currentLoopData = \Illuminate\Support\Arr::get($module->routes, 'index.reports', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->startPush('page.actions'); ?>
        <?php echo form()->get(route('workflow::process.report', [$module->id, $report['format'] ?? 'pdf'])); ?>

        <?php echo form()->hidden('ids')->data('role', 'ids'); ?>

        <?php echo form()->hidden('path', $report['path']); ?>

        <?php echo form()->hidden('download', true); ?>

        <?php $__currentLoopData = collect(request()->query())->except('page'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $queryString => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo form()->hidden($queryString, $value); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo form()->submit('<i class="icon print"></i> Cetak <div data-counter-ids class="ui label circular orange mini floating left hidden"></div>')->removeClass('primary'); ?>

        <?php echo form()->close(); ?>

    <?php $__env->stopPush(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->startPush('page.actions'); ?>
    <?php echo $__env->renderWhen(
        auth()->user()->can('create', $module->getModel()),
        'laravolt::components.button',
        [
            'action' => [
                'url' => route('workflow::process.create', [$module->id]),
                'label' => 'Tambah',
                'icon' => 'plus',
                'class' => 'primary'
            ]
        ]
    , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $table; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function () {
            $('[data-toggle="checkall"]').on('change', function () {
                let ids = $(this).val();
                $('[data-role="ids"]').val(ids);
                let count = JSON.parse(ids).length;
                if (count > 0) {
                    $('[data-counter-ids]').html(count).removeClass('hidden');
                } else {
                    $('[data-counter-ids]').html(count).addClass('hidden');
                }
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(
    config('laravolt.workflow.view.layout'),
    [
        '__page' => [
            'title' => $module->label
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/process/index.blade.php ENDPATH**/ ?>