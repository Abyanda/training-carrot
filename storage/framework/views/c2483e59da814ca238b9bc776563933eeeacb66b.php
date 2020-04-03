<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $completedTasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo \Laravolt\Workflow\Presenters\TaskInfo::make($module, $task)->render(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $module->getModel())): ?>
        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__env->startComponent('laravolt::components.panel', ['title' => "<div title='{$form->key()}'>{$form->title()}</div>"]); ?>
                <?php echo $form->render(); ?>

            <?php echo $__env->renderComponent(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php $__currentLoopData = $otherTasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->startComponent('laravolt::components.panel', ['title' => "<div title='{$task['model']->taskDefinitionKey}'>{$task['model']->name}</div>"]); ?>
            <div class="ui placeholder basic segment">
                <div class="ui icon header">
                    <i class="user clock icon"></i>
                    Task ini sedang dikerjakan oleh Tim lain.
                </div>
                <?php echo $__env->make('workflow::components.button-map', ['id' => $processInstance->id, 'label' => 'Lihat Diagram Proses'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php echo $__env->renderComponent(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $module->getModel())): ?>
            <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var form = new Vue({
                el: '#<?php echo e($form->key()); ?>',
                data: <?php echo json_encode($form->getBindings(), 15, 512) ?>,
                watch: {
        <?php $__currentLoopData = $form->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php switch($field->field_type):
        case ('dropdown'): ?>
        <?php case ('dropdownDB'): ?>
        <?php echo e($field->field_name); ?>:

        function (value) {
            if (value === null) {
                $('select[name="<?php echo e($field->field_name); ?>"]').dropdown('clear');
            } else {
                $('select[name="<?php echo e($field->field_name); ?>"]').dropdown('set selected', value);
            }
        }

        ,
        <?php break; ?>
        <?php endswitch; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        }
        })
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        $(function () {

            // set default date untuk beberapa input date dengan flag khusus
            $('input[type="date"].today').each(function (idx, elm) {
                if (typeof form !== 'undefined') {
                    var field = $(elm).attr('name');
                    if (field in form) {
                        form[field] = moment().format('YYYY-MM-DD');
                    }
                }
            });

            $(document).on('autofill.selected', function (event, payload) {
                $.each(payload, function (key, value) {
                    form[key] = value;
                });
            });

            //Auto score calculation
            $(function(){
                $('[data-score]').on('change', function(e){
                    var score = 0;
                    $('[data-score]:checked').each(function(idx, elm){
                        score += parseInt($(elm).data('score'));
                    });
                    var key = $('[data-role="score"]').attr('name');
                    form[key] = score;
                    $('[name="'+key+'"]').val(score);
                    $('[name="'+key+'"]').trigger('change');
                });
            });
        });
    </script>

    <style>
        .ui.fitted.segment > .ui.table {
            border: 0 none;
        }

        .panel {

        }

        .panel > .panel-header {
            cursor: pointer;
        }

        .panel > .panel-body {
            display: none;
            transition: height 350ms ease-in-out;
        }

        .panel.active > .panel-body {
            display: block;
        }

        .panel > .panel-header .icon.angle.down {
            transition: .5s all;
        }

        .panel.active > .panel-header .icon.angle.down {
            transform: rotate(180deg);
        }
    </style>
    <script>
        window.saving = false;

        $(function () {
            $('.panel').on('click', '.panel-header', function (e) {
                if ($(e.target).is('a') === false) {
                    $(e.delegateTarget).toggleClass('active');
                }
            })

            let $form = $('[data-form-task]');
            let $actionButtons = $form.find('.action .button[type="submit"]');

            $form.on('submit', function(){
                $actionButtons.addClass('loading disabled');
                window.saving = true;
            });

            <?php if(config('laravolt.workflow.auto_save')): ?>
                let formData = $form.serialize();

                // Capture form initial state several seconds after page loaded
                // to make sure all value are setted
                setTimeout(function () {
                    formData = $form.serialize();
                }, 3000);

                let autoSave = function(){

                    let newFormData = $form.serialize();

                    if (newFormData != formData && !window.saving) {
                        formData = newFormData;

                        let autoSaveToast = $('body').toast({
                            message: 'Menyimpan draf...',
                            position: 'top center',
                            compact: false,
                            class: 'black',
                            displayTime:0,
                            transition: {
                              showDuration:0
                            }
                        });

                        $actionButtons.addClass('loading disabled');
                        window.saving = true;

                      // remove default_method = POST and replace it with PUT
                      let data = $form.serializeArray().filter(function (item) {
                        return item.name != '_method';
                      });
                      data.push({name:"_method", value:'PUT'});

                      $.ajax({
                            url: $form.attr('action') + '/autosave',
                            dataType:'json',
                            method: $form.attr('method'),
                            data: data
                        }).done(function() {

                        }).fail(function() {

                        }).always(function() {
                            window.saving = false;
                            autoSaveToast.toast('close');
                            $actionButtons.removeClass('loading disabled');
                        });
                    }
                };
                setInterval(autoSave, parseInt(<?php echo e(config('laravolt.workflow.auto_save')); ?>));
            <?php endif; ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(
    config('laravolt.workflow.view.layout'),
    [
        '__page' => [
            'title' => $module->label,
            'actions' => [
                view('workflow::components.button-map', ['id' => $processInstance->id])->render(),
                [
                    'label' => __('Kembali ke Index'),
                    'class' => '',
                    'icon' => 'arrow up',
                    'url' => $module->getModel()->getIndexUrl()
                ],
            ]
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/process/show.blade.php ENDPATH**/ ?>