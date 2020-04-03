<?php $__env->startSection('content'); ?>
    <div class="ui search selection dropdown fluid">
        <div class="text"><?php echo e(basename($selectedFile)); ?></div>
        <i class="dropdown icon"></i>
        <div class="menu">
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a data-value="<?php echo e($selectedFile); ?>"
                   href="<?php echo e(route('epilog::log.index', ['file' => urlencode($file['path'])])); ?>"
                   class="item"><?php echo e($file['basename']); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php if($logs): ?>
        <table class="ui table compact selectable" epilog-table>
            <thead>
            <tr>
                <th></th>
                <th>Level</th>
                <th>Log</th>
                <th>Waktu</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="cursor: pointer" data-id="<?php echo e($loop->iteration); ?>">
                    <td class="numbering">
                        <div class="ui label circular mini empty <?php echo e($log['class']); ?>"></div>
                    </td>
                    <td>
                        <?php echo e($log['level']); ?>

                    </td>
                    <td>
                        <?php echo e(\Illuminate\Support\Str::limit($log['message'])); ?>


                        <div class="ui modal" data-id="<?php echo e($loop->iteration); ?>">
                            <i class="close icon"></i>
                            <div class="content scrolling">
                                <?php echo e($log['raw']); ?>

                            </div>
                        </div>

                    </td>
                    <td><?php echo e(\Carbon\Carbon::instance($log['date'])->setTimezone(auth()->user()->timezone)->format('H:i:s')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
      $(function () {
        $('[epilog-table]').on('click', 'tr', function (e) {
          let id = $(e.currentTarget).data('id');
          $('.ui.modal[data-id="' + id + '"]').modal('show');
        });
      });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(
    config('laravolt.epilog.view.layout'),
    [
        '__page' => [
            'title' => __('Application Log'),
            'actions' => []
        ],
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/epilog/src/../resources/views/log/index.blade.php ENDPATH**/ ?>