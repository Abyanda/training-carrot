<?php $__env->startComponent('laravolt::mail.body'); ?>
    <?php $__env->startComponent('laravolt::mail.headline'); ?>
        Reset Password
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('laravolt::mail.message'); ?>
        Anda baru saja melakukan
        <br> permintaan reset password di <strong><?php echo e(config('app.url')); ?></strong>.
        <br> Untuk melanjutkan proses, silakan klik tombol di bawah ini:
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('laravolt::mail.button', ['url' => route('auth::reset', compact('token', 'email'))]); ?>
        Reset Password
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('laravolt::mail.info'); ?>
        Jika Anda tidak merasa melakukan permintaan reset password, abaikan email ini.
    <?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/emails/reset-password-link.blade.php ENDPATH**/ ?>