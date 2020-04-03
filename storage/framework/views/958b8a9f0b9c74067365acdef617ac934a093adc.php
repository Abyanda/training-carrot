<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('site.title', "Welcome Home"); ?> | <?php echo e(config('app.name')); ?></title>

    <meta charset="UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php echo $__env->yieldPushContent('meta'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(mix('semantic/semantic.min.css', 'laravolt')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/all.css', 'laravolt')); ?>"/>
    <?php echo $__env->yieldPushContent('style'); ?>
    <?php echo $__env->yieldPushContent('head'); ?>
    <?php echo Assets::group('laravolt')->css(); ?>

    <?php echo Assets::css(); ?>

</head>

<body data-theme="<?php echo e(config('laravolt.ui.sidebar_theme')); ?>" login-theme="<?php echo e(config('laravolt.ui.login_theme')); ?>" class="<?php echo e($bodyClass ?? ''); ?>">

<?php echo $__env->yieldContent('body'); ?>

<script type="text/javascript" src="<?php echo e(mix('js/vendor.js', 'laravolt')); ?>"></script>

<script>
    $.fn.calendar.settings.text = <?php echo json_encode(form_calendar_text(), 15, 512) ?>;
</script>

<script type="text/javascript" src="<?php echo e(mix('js/platform.js', 'laravolt')); ?>"></script>
<?php echo Assets::group('laravolt')->js(); ?>

<?php echo Assets::js(); ?>

<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->yieldPushContent('body'); ?>
</body>
</html>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/layouts/base.blade.php ENDPATH**/ ?>