<?php $__env->startSection('content'); ?>
    <?php echo $table; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(
    'laravolt::layouts.app',
    [
        '__page' => [
            'title' => 'Form Fields',
            'actions' => [
                ['url' => route('segment.create'), 'label' => 'Tambah Segment', 'icon' => 'plus', 'class' => 'primary'],
                ['url' => route('managementcamunda.create'), 'label' => 'Tambah Field', 'icon' => 'plus', 'class' => 'primary'],
                ['url' => route('managementcamunda.download'), 'label' => '', 'icon' => 'download', 'class' => 'icon'],
            ]
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/resources/views/managementcamunda/new.blade.php ENDPATH**/ ?>