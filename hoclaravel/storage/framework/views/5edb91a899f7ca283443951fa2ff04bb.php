<?php $__env->startSection('title', 'Nhà hàng NMN'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-4">
        <div class="col-md-6">
            <img src="<?php echo e(asset('clients/img/' . $product->image)); ?>" class="img-fluid rounded shadow-sm w-100" alt="<?php echo e($product->name); ?>">
        </div>
        <div class="col-md-6">
            <h1 class="mb-3"><?php echo e($product->name); ?></h1>
            <p class="fs-4 fw-bold text-success mb-4">Giá: <?php echo e(number_format($product->price, 0, ',', '.')); ?> VND</p>
            <hr>
            <p class="fs-4 fw-bold text-danger mb-4">Mô tả: </p>
            <div class="product-description mb-4">
                <?php echo $product->description; ?>

            </div>
        </div>
    </div>

    <hr class="my-4">

    <h2 class="mb-3">Bình luận:</h2>
    
    <?php if(auth()->check()): ?>
    <form action="<?php echo e(route('client.san-pham.comment', ['id' => $product->id])); ?>" method="POST" class="mb-4">
        <?php echo csrf_field(); ?>
        <div class="input-group">
            <input type="text" name="comment" class="form-control" placeholder="Nhập bình luận của bạn" required>
            <button type="submit" class="btn btn-primary">Bình luận</button>
        </div>
    </form>
    <?php else: ?>
    <div class="alert alert-info">Đăng nhập để bình luận</div>
    <?php endif; ?>

    <?php if($comments->isEmpty()): ?>
    <p class="text-muted">Chưa có bình luận nào.</p>
    <?php else: ?>
    <ul class="list-unstyled">
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="media mb-4">
            <img src="<?php echo e($comment->user->avatar_url ? asset('clients/img/' . $comment->user->avatar_url) : asset('clients/img/default-avatar.jpg')); ?>" class="mr-3 rounded-circle" alt="<?php echo e($comment->user->name); ?>" style="width: 64px; height: 64px;">
            <div class="media-body">
                <h5 class="mt-0 mb-1"><?php echo e($comment->user->name); ?></h5>
                <small class="text-muted"><?php echo e($comment->created_at->format('d/m/Y H:i')); ?></small>
                <p class="mt-2"><?php echo e($comment->comment); ?></p>

                <?php if(auth()->check() && auth()->user()->id == $comment->user_id): ?>
                <form action="<?php echo e(route('client.san-pham.destroy', ['id' => $comment->id, 'id_product' => $product->id])); ?>" method="POST" onsubmit="return confirmDelete();" class="mt-2">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm">Xoá</button>
                </form>
                <?php endif; ?>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>
</div>

<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa bình luận này?');
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/client/pages/detail.blade.php ENDPATH**/ ?>