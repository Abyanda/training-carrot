<?php if(!empty($bags)): ?>
    <script>
        <?php $__currentLoopData = $bags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $('body').toast(<?php echo json_encode($bag); ?>);
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/flash.blade.php ENDPATH**/ ?>