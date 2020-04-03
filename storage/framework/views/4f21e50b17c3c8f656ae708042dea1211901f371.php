<?php
$query = "SELECT DISTINCT process_definition_key, task_name, count
            FROM workflow_module JOIN (
                SELECT process_definition_key, task_name, count(1) count
                FROM camunda_task WHERE status = 'NEW'
                    AND task_id IS NOT NULL
                    GROUP BY process_definition_key, task_name
            ) task_counter USING (process_definition_key)
        WHERE process_definition_key = '$key'";

$counter = collect(\DB::select($query));
$url = route('workflow::process-definition.xml', $key)
?>

<div camunda-map-diagram-<?php echo e($key); ?> style="cursor: move; height: 500px"></div>

<?php $__env->startPush('script'); ?>
<script src="https://unpkg.com/bpmn-js@6.2.1/dist/bpmn-navigated-viewer.development.js"></script>
<style>
    .highlight:not(.djs-connection) .djs-visual > :nth-child(1) {
        fill: green !important; /* color elements as green */
    }

    .highlight-overlay {
        background-color: green; /* color elements as green */
        opacity: 0.4;
        pointer-events: none; /* no pointer events, allows clicking through onto the element */
        border-radius: 10px;
    }
</style>

<script>
    // Render diagram
    var viewer_<?php echo e($key); ?> = new BpmnJS({
        container: '[camunda-map-diagram-<?php echo e($key); ?>]'
    });

    // load + show diagram
    $.get("<?php echo e($url); ?>", showDiagram, 'text');

    function showDiagram(diagramXML) {
        viewer_<?php echo e($key); ?>.importXML(diagramXML, function () {
            var overlays = viewer_<?php echo e($key); ?>.get('overlays');
            var elementRegistry = viewer_<?php echo e($key); ?>.get('elementRegistry');

            viewer_<?php echo e($key); ?>.get('canvas').zoom('fit-viewport');

            <?php $__currentLoopData = $counter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            var shape = elementRegistry.get('<?php echo e($task->task_name); ?>');
            $overlayHtml = $('<div bpmn-diagram-counter data-task-name="<?php echo e($task->task_name); ?>" class="ui teal circular label big">').html(<?php echo e($task->count); ?>);
            overlays.add(
                '<?php echo e($task->task_name); ?>',
                {
                    position: {
                        right: 20,
                        bottom: 20
                    },
                    html: $overlayHtml
                }
            );

            setTimeout(
                function() {
                    $('[bpmn-diagram-counter][data-task-name="<?php echo e($task->task_name); ?>"]')
                        .transition('set looping')
                        .transition('pulse', '2000ms')
                    ;
                },
                (Math.random() * 1000)
            );

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        });
    }
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/components/diagram-with-counter.blade.php ENDPATH**/ ?>