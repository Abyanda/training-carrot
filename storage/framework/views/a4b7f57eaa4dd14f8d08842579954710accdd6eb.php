<?php $__currentLoopData = $left; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toolbar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item"><?php echo $toolbar; ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="menu right">
    <?php $__currentLoopData = $right; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toolbar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item"><?php echo $toolbar; ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/suitable/src/../resources/views/segments/segment.blade.php ENDPATH**/ ?>