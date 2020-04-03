<?php $__env->startSection('content'); ?>
    <?php echo Suitable::source($posts)
    ->title(__('comma::post.header.table'))
    ->search(true)
    ->columns([
        \Laravolt\Suitable\Columns\Numbering::make('No'),
        \Laravolt\Suitable\Columns\Text::make('title', __('comma::post.attributes.title'))->sortable(),
        \Laravolt\Suitable\Columns\Text::make('author.name', __('comma::post.attributes.author'))->sortable(),
        \Laravolt\Suitable\Columns\Date::make('created_at', __('comma::post.attributes.date'))->sortable(),
        with(new \Laravolt\Suitable\Columns\RestfulButton('comma::posts'))->only(['edit', 'delete'])->routeParameters(compact('collection'))
    ])
    ->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make(
    config('laravolt.comma.view.layout'),
    [
        '__page' => [
            'title' => __('Posts'),
            'actions' => [
                [
                    'label' => __('Tambah'),
                    'class' => 'primary',
                    'icon' => 'icon plus circle',
                    'url' => route('comma::posts.create', [$collection])
                ],
            ]
        ],
    ]
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/comma/src/../resources/views/posts/index.blade.php ENDPATH**/ ?>