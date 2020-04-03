<form method="GET" action="<?php echo e(url()->current()); ?>">
    <div class="ui action input">
        <?php $__currentLoopData = collect(request()->query())->except('page', $name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $queryString => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_string($value)): ?>
            <input type="hidden" name="<?php echo e($queryString); ?>" value="<?php echo e($value); ?>">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <input class="prompt" name="<?php echo e($name); ?>" value="<?php echo e(request($name)); ?>" type="text"
               placeholder="<?php echo app('translator')->get('suitable::suitable.search_placeholder'); ?>">
        <button class="ui basic button icon"><i class="search link icon"></i></button>
    </div>
</form>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/suitable/src/../resources/views/toolbars/search.blade.php ENDPATH**/ ?>