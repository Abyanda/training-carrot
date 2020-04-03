<?php $__env->startSection('content'); ?>
    <?php echo $table; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(
    config('laravolt.lookup.view.layout'),
    [
        '__page' => [
            'title' => 'Lookup',
            'actions' => [
                [
                    'label' => __('Tambah'),
                    'class' => 'primary',
                    'icon' => 'icon plus circle',
                    'url' => route('lookup::lookup.create', $collection)
                ],
            ]
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/lookup/src/../resources/views/lookup/index.blade.php ENDPATH**/ ?>