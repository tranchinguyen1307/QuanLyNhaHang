<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Styles -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body class="font-sans antialiased bg-gray-100">


    <div class="min-h-screen bg-gray-100">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('navigation-menu');

$__html = app('livewire')->mount($__name, $__params, 'lw-4064859679-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <!-- Page Heading -->
        <?php if(isset($header)): ?>
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <?php echo e($header); ?>

                </div>
            </header>
        <?php endif; ?>

        <!-- Page Content -->

    </div>

    <?php echo $__env->yieldPushContent('modals'); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>

</html>
<?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>