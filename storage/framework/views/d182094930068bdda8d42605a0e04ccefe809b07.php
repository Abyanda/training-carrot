<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('laravolt::components.panel', ['title' => "<div class='sub header'>Edit</div><div title='{$form->key()}'>{$form->title()}</div>"]); ?>
        <?php echo $form->render(); ?>

    <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>

      $('form .field').each(function (idx, elm) {
        var name = $(elm).find(':input').attr('name');
        $(elm).find('label').attr('title', name);
      });

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

    $(function(){
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make(
    config('laravolt.workflow.view.layout'),
    [
        '__page' => [
            'title' => $form->processName(),
            'actions' => []
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/workflow/src/../resources/views/task/edit.blade.php ENDPATH**/ ?>