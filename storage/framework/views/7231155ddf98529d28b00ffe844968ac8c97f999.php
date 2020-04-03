<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('laravolt::components.panel', ['title' => $config['label'] ?? $collection]); ?>
        <?php echo form()->post(route('lookup::lookup.store', $collection)); ?>

        <?php echo $__env->make('lookup::lookup._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo form()->close(); ?>

    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(
    config('laravolt.lookup.view.layout'),
    [
        '__page' => [
            'title' => __('Tambah Lookup'),
            'actions' => [
                [
                    'label' => __('Kembali ke Index'),
                    'class' => '',
                    'icon' => 'icon arrow left',
                    'url' => route('lookup::lookup.index', $collection)
                ],
            ]
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/lookup/src/../resources/views/lookup/create.blade.php ENDPATH**/ ?>