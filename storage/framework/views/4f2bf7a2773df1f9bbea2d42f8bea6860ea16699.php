<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('laravolt::components.panel', ['title' => $config['label'] ?? $collection]); ?>
        <?php echo form()->bind($lookup)->put(route('lookup::lookup.update', $lookup)); ?>

        <?php echo $__env->make('lookup::lookup._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo form()->close(); ?>

    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(
    config('laravolt.lookup.view.layout'),
    [
        '__page' => [
            'title' => __('Edit Lookup'),
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
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/lookup/src/../resources/views/lookup/edit.blade.php ENDPATH**/ ?>