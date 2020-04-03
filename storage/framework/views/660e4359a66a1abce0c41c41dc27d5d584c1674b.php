<?php if($actions->isNotEmpty()): ?>
    <?php if($actions->count() > 1): ?>
        <div class="ui icon buttons mini basic">
    <?php endif; ?>
            <?php if($actions->has('view')): ?>
                <a class="ui button icon mini basic" href="<?php echo e($actions->get('view')); ?>"><i class="eye icon"></i></a>
            <?php endif; ?>

            <?php if($actions->has('edit')): ?>
                <a class="ui button icon mini basic" href="<?php echo e($actions->get('edit')); ?>"><i class="edit icon"></i></a>
            <?php endif; ?>

            <?php if($actions->has('delete')): ?>
                <form role="form" action="<?php echo e($actions->get('delete')); ?>" method="POST" onsubmit="return confirm('<?php echo e($deleteConfirmation); ?>')">
                    <input type="hidden" name="_method" value="DELETE">
                    <?php echo e(csrf_field()); ?>

                    <button type="submit" class="ui button icon mini basic"><i class="delete icon"></i></button>
                </form>
            <?php endif; ?>
    <?php if($actions->count() > 1): ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/suitable/src/../resources/views/columns/restful_button.blade.php ENDPATH**/ ?>