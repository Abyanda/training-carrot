<?php $__env->startSection('body'); ?>
    <div class="layout--app">

        <?php echo $__env->make('laravolt::menu.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('laravolt::menu.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">

            <div class="ui active inverted dimmer" data-page-loader>
                <div class="ui loader"></div>
            </div>

            <div class="content__inner">
                <div class="ui container-fluid content__body p-1">
                    <?php echo $__env->make('laravolt::components.page-header', $__page ?? [], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->yieldContent('content'); ?>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('laravolt::layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/layouts/app.blade.php ENDPATH**/ ?>