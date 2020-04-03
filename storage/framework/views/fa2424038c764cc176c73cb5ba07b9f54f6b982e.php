<?php echo form()->text('lookup_key')->label('Key')->required(); ?>

<?php echo form()->text('lookup_value')->label('Value')->required(); ?>


<?php if($config['parent'] ?? false): ?>
    <?php ($parentLabel = config(sprintf('laravolt.lookup.collections.%s.label', $config['parent']))); ?>
    <?php echo form()->dropdown('parent_key', \Laravolt\Lookup\Models\Lookup::toDropdown($config['parent']))->label($parentLabel)->required(); ?>

<?php endif; ?>

<?php if($config['description'] ?? false): ?>
    <?php echo form()->textarea('description')->label('Deskripsi'); ?>

<?php endif; ?>

<?php echo form()->action([
    form()->submit(__('Save')),
    form()->link(__('Cancel'), route('lookup::lookup.index', $collection))
]); ?>

<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/lookup/src/../resources/views/lookup/_form.blade.php ENDPATH**/ ?>