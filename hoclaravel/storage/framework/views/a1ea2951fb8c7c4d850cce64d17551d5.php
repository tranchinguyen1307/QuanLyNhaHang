<?php $__env->startSection('title', 'Bài viết'); ?>
<?php $__env->startSection('post_content'); ?>
    <div class="container ">
        <div class="card single_post mb-4 shadow-sm">
            <article class="article">
                <!-- Hình ảnh -->
                <div class="article-img">
                    <img src="<?php echo e(asset('storage/images/post/avatar/' . $posts->avatar)); ?>" 
                         alt="<?php echo e($posts->title); ?>" 
                         class="img-fluid rounded-top" 
                         style="object-fit: cover; width: 100%; height: auto;">
                </div>

                <!-- Tiêu đề và thông tin -->
                <div class="article-title p-4">
                    <h2 class="mb-3"><?php echo e($posts->title); ?></h2>
                    <div class="media mb-3">
                        <div class="media-body text-muted">
                            <span><?php echo e($posts->created_at->diffForHumans()); ?></span> 
                            <span class="mx-2">|</span>
                            <span>Tác giả: <?php echo e($posts->author_name); ?></span> 
                            <span class="mx-2">|</span>
                            <span>Loại: <a href="<?php echo e(route('client.posts.filterByCategory',$posts->category_id)); ?>"><?php echo e($posts->category_name); ?></a></span>
                        </div>
                    </div>
                </div>

                <!-- Nội dung bài viết -->
                <div class="article-content p-4">
                    <p class="text-justify"><?php echo $posts->content; ?></p>
                </div>
            </article>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/client/pages/detail-post.blade.php ENDPATH**/ ?>