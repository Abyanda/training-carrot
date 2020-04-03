<?php $__env->startSection('body'); ?>

    <div class="layout--full" data-position="center">
        <div class="tablet or lower hidden"></div>
        <div class="content ui container">
            <div class="ui grid stackable stretched centered">
                <div class="six wide column middle aligned">
                    <div class="ui segment center aligned p-2 rad-10">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
                <div class="eight wide column mobile hidden middle aligned">
                    <lottie-player
                            src="<?php echo e(config('laravolt.ui.animation')); ?>"  background="transparent" class="mobile hidden" style="height: 100%; width: 100%;"  speed="1" loop  autoplay >
                    </lottie-player>
                </div>
            </div>
        </div>
        <div class="tablet or lower hidden"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('laravolt::layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/layouts/public/full.blade.php ENDPATH**/ ?>