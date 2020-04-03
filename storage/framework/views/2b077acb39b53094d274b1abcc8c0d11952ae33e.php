<div class="ui accordion sidebar__accordion" data-role="sidebar-accordion">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->hasChildren()): ?>
            <div class="title <?php echo e(\Laravolt\Platform\Services\Menu::setActiveParent($item->children(), $item->link->isActive)); ?>">
                <i class="left icon <?php echo e($item->data('icon')); ?>"></i>
                <span><?php echo e($item->title); ?></span>
                <i class="angle down icon"></i>
            </div>
            <div class="content <?php echo e(\Laravolt\Platform\Services\Menu::setActiveParent($item->children(), $item->link->isActive)); ?> ">
                <?php if($item->hasChildren()): ?>
                    <div class="ui list">
                        <?php $__currentLoopData = $item->children(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($child->url()); ?>" data-parent="<?php echo e($child->parent()->title); ?>"
                               class="item <?php echo e(($child->link->isActive)?'active':''); ?> "><?php echo e($child->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <a class="title empty <?php echo e(\Laravolt\Platform\Services\Menu::setActiveParent($item->children(), $item->link->isActive)); ?>"
               href="<?php echo e($item->url()); ?>"
               data-parent="<?php echo e($item->parent()->title); ?>">
                <i class="left icon <?php echo e($item->data('icon')); ?>"></i>
                <span><?php echo e($item->title); ?></span>
            </a>
            <div class="content"></div>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/menu/sidebar_items.blade.php ENDPATH**/ ?>