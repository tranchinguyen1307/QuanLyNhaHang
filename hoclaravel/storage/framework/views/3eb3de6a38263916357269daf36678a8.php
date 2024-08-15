<div class="card mb-4">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Danh mục</h4>
    </div>
    <div class="card-body">
        <ul class="list-unstyled mb-0">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('client.posts.filterByCategory',$category->id)); ?>" class="text-decoration-none text-dark"><?php echo e($category->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Bài viết gần đây</h4>
    </div>
    <div class="card-body">
        <div class="list-group">
            <?php $__currentLoopData = $newestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/home/detailBlog?id=<?php echo e($post->id); ?>" class="list-group-item list-group-item-action d-flex align-items-center">
                <img src="<?php echo e(asset('storage/images/post/avatar/' . $post->avatar)); ?>" alt="<?php echo e($post->title); ?>" class="img-thumbnail me-3" style="width: 100px; height: 70px; object-fit: cover;">
                <div>
                    <h5 class="mb-1"><?php echo e($post->title); ?></h5>
                    <small class="text-muted"><?php echo e($post->created_at->diffForHumans()); ?></small>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/components/client/post-sidebar.blade.php ENDPATH**/ ?>