<tr>
    <td class="numbering"><?php echo e($loop->iteration); ?></td>
    <td><?php echo e($data->getKey()); ?></td>
    <td>
        <strong><?php echo e($data->label); ?></strong>
        <div><?php echo e($data->key); ?></div>
    </td>
    <td><?php echo e($data->process_definition_key); ?></td>
    <td class="text-center">
        <div class="ui icon top left pointing dropdown button">
            <i class="ellipsis horizontal icon"></i>
            <div class="menu">
                <a href="<?php echo e($data->getIndexUrl()); ?>" class="item"><i class="icon table"></i> Lihat Data</a>
                <a href="<?php echo e($data->getCreateUrl()); ?>" class="item"><i class="icon plus"></i> Buat Proses Baru</a>
                <a href="<?php echo e($data->getBpmnUrl()); ?>" class="item"><i class="icon download"></i> Download BPMN</a>
                <div class="divider"></div>
                <a href="<?php echo e(route('workflow::module.edit', $data->getKey())); ?>" class="item"><i class="icon cogs"></i> Settings</a>
            </div>
        </div>
    </td>
</tr>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/module/_row.blade.php ENDPATH**/ ?>