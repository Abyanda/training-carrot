<?php $__env->startSection('content'); ?>
    <div style="display: flex; min-height: 600px; align-items: center; justify-content: center; flex-direction: column">
        <h1 class="ui header" style="font-size: 5em; font-weight: 100; letter-spacing: .15em">
            Your Awesome Dashboard
        </h1>

        <div>
            Check file <code class="ui label"><?php echo e(\App\Http\Controllers\Dashboard::class); ?></code> to edit this page.
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/resources/views/dashboard.blade.php ENDPATH**/ ?>