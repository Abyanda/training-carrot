<div class="ui segments panel <?php echo e($attributes['active'] ? 'active':''); ?>">
    <div class="ui secondary segment fitted panel-header">
        <div class="ui secondary menu">
            <div class="item p-r-0"><i class="icon angle down"></i></div>
            <div class="item p-l-0"><h3 title="<?php echo e($taskConfig['task']); ?>"><?php echo e($title); ?></h3></div>
            <div class="right menu">
                <div class="item">
                    <?php if($editable && auth()->user()->can('edit', $module->getModel())): ?>
                        <a href="<?php echo e(route('workflow::task.edit', [$module->id, $task->task_id])); ?>"
                           class='ui basic button small'>
                            <i class='icon edit'></i> Edit
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="ui segment fitted panel-body" id="<?php echo e($taskConfig['task']); ?>">
        <?php echo form()->make($formDefinition)->display(); ?>

    </div>
</div>

<?php $__env->startPush('body'); ?>
    <script>
        var <?php echo e($taskConfig['task']); ?> = new Vue({
            el: '#<?php echo e($taskConfig['task']); ?>',
            data: <?php echo json_encode($values, 15, 512) ?>
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/components/task-info.blade.php ENDPATH**/ ?>