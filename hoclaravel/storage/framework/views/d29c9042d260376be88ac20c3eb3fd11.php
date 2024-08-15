<?php $__env->startSection('title', 'Bài viết'); ?>
<?php $__env->startSection('post_content'); ?>
<div class="container">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="card-img-top" src="<?php echo e(asset('storage/images/post/avatar/' . $post->avatar)); ?>"
                        alt="<?php echo e($post->title); ?>" style="height: 200px; object-fit: cover;">
                </div>
                <h3></h3>
                <h3><a href="<?php echo e(route('client.detail.post', $post->id)); ?>"><?php echo e($post->title); ?></a></h3>
            </div>
            <div class="footer">
                <div class="actions">
                    <a href="<?php echo e(route('client.detail.post', $post->id)); ?>" class="btn btn-outline-secondary">Đọc</a>
                </div>
                <ul class="stats">
                    <li><a href="javascript:void(0);"><?php echo e($post->author_name); ?></a></li>
                    <li><a href="javascript:void(0);"
                            class="fa fa-date"><?php echo e(\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')); ?></a></li>
                    <li><a href="javascript:void(0);" class="fa fa-comment"></a></li>
                </ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <ul class="pagination pagination-primary">
        <?php echo e($posts->links()); ?>

    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/client/pages/post.blade.php ENDPATH**/ ?>