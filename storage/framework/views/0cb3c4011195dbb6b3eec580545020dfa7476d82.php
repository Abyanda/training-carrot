<?php $__env->startSection('page.title', __('laravolt::label.permissions')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo form()->open(route('epicentrum::permissions.update'))->put(); ?>


    <?php echo Suitable::source($permissions)->columns([
        \Laravolt\Suitable\Columns\Numbering::make('No')->setHeaderAttributes(['width' => '50px']),
        \Laravolt\Suitable\Columns\Text::make('name', __('laravolt::permissions.name'))
            ->setHeaderAttributes(['width' => '250px']),
        \Laravolt\Suitable\Columns\Raw::make(function($item) {
            return SemanticForm::text('permission['.$item->getKey().']')->value($item->description);
        }, __('laravolt::permissions.description'))
    ])->render(); ?>


    <div class="p-y-1">
        <?php echo form()->submit(__('laravolt::action.save')); ?>

    </div>
    <?php echo form()->close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravolt.epicentrum.view.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/permissions/edit.blade.php ENDPATH**/ ?>