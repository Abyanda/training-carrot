<div class="menu attached right bottom" data-role="pagination">
    <!-- Previous Page Link -->
    <?php if($paginator->onFirstPage()): ?>
        <div class="item disabled prev"><i class="icon left chevron"></i></div>
    <?php else: ?>
        <a class="item prev" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i class="icon left chevron"></i></a>
    <?php endif; ?>

    <!-- Pagination Elements -->
    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- "Three Dots" Separator -->
        <?php if(is_string($element)): ?>
            <div class="item disabled dots"><span><?php echo e($element); ?></span></div>
        <?php endif; ?>

    <!-- Array Of Links -->
        <?php if(is_array($element)): ?>
            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $paginator->currentPage()): ?>
                    <a class="item active number"><?php echo e($page); ?></a>
                <?php else: ?>
                    <a class="item number" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Next Page Link -->
    <?php if($paginator->hasMorePages()): ?>
        <a class="item next" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="icon right chevron"></i></a>
    <?php else: ?>
        <div class="item disabled next"><i class="icon right chevron"></i></div>
    <?php endif; ?>
</div>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/suitable/src/../resources/views/pagination/full.blade.php ENDPATH**/ ?>