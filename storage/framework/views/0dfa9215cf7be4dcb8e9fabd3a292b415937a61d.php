<a href="<?php echo e($action['url']); ?>" class="ui button <?php echo e($action['class'] ?? ''); ?>">
    <?php if((bool)($action['icon'] ?? false)): ?>
        <i class="icon <?php echo e($action['icon']); ?>"></i>
    <?php endif; ?>
    <?php echo $action['label'] ?? ''; ?>

</a>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/components/button.blade.php ENDPATH**/ ?>