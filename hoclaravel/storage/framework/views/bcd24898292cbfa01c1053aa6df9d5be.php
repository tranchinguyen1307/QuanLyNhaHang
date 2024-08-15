<?php $__env->startSection('title', 'Bài viết'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div id="main-content" class="blog-page">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 left-box">
               <?php echo $__env->yieldContent('post_content'); ?>
            </div>
            <div class="col-lg-4 col-md-12 right-box">
                <?php if (isset($component)) { $__componentOriginal9a54100c5898116a2de7adc1386aad71 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a54100c5898116a2de7adc1386aad71 = $attributes; } ?>
<?php $component = App\View\Components\Client\PostSidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('client.PostSidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Client\PostSidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a54100c5898116a2de7adc1386aad71)): ?>
<?php $attributes = $__attributesOriginal9a54100c5898116a2de7adc1386aad71; ?>
<?php unset($__attributesOriginal9a54100c5898116a2de7adc1386aad71); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a54100c5898116a2de7adc1386aad71)): ?>
<?php $component = $__componentOriginal9a54100c5898116a2de7adc1386aad71; ?>
<?php unset($__componentOriginal9a54100c5898116a2de7adc1386aad71); ?>
<?php endif; ?>
    
            </div>
        </div>
    
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/client/layouts/post.blade.php ENDPATH**/ ?>