<div id="<?php echo e($id); ?>" data-role="suitable">

    <?php if($hasSearchableColumns): ?>
        <form id="suitable-form-searchable" action="<?php echo e(request()->url()); ?>" data-role="suitable-form-searchable" style="display: none">
            <input type="submit">
        </form>
    <?php endif; ?>

    <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (! ($segment->isEmpty())): ?>
        <div class="ui borderless menu <?php echo e($loop->first ? 'top' : ''); ?> attached">
            <?php echo $segment->render(); ?>

        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->make('suitable::table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($showFooter): ?>
        <div class="ui bottom attached menu">
            <div class="item borderless">
                <small><?php echo e($builder->summary()); ?></small>
            </div>
            <?php echo $collection->appends(request()->input())->links($paginationView); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/suitable/src/../resources/views/container.blade.php ENDPATH**/ ?>