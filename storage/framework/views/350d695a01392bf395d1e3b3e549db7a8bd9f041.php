<?php ($items = app('laravolt.menu.sidebar')->all()); ?>

<nav class="sidebar">
    <div class="sidebar__wrapper" data-role="sidebar">

        <div class="sidebar__menu">
            <?php echo $__env->make('laravolt::menu.sidebar_brand', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if(!$items->isEmpty()): ?>
                <?php if(config('laravolt.ui.quick_switcher')): ?>
                    <?php echo $__env->make('laravolt::quick-switcher.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('laravolt::quick-switcher.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <div class="ui attached vertical menu fluid" data-role="original-menu">

                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->hasChildren()): ?>
                            <div class="item">
                                <div class="header"><?php echo e($item->title); ?></div>
                            </div>
                            <?php echo $__env->make('laravolt::menu.sidebar_items', ['items' => $item->children()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <div class="ui accordion sidebar__accordion">
                                <a class="title empty <?php echo e(\Laravolt\Platform\Services\Menu::setActiveParent($item->children(), $item->link->isActive)); ?>"
                                   href="<?php echo e($item->url()); ?>">
                                    <i class="left icon <?php echo e($item->data('icon')); ?>"></i>
                                    <span><?php echo e($item->title); ?></span>
                                </a>
                                <div class="content"></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</nav>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/menu/sidebar.blade.php ENDPATH**/ ?>