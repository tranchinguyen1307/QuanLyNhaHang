<?php $__env->startSection('title', 'Danh mục'); ?>
<?php $__env->startSection('content'); ?>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên bài viết</th>
                                                <th>Tổng bình luận</th>

                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td class="text-wrap"><?php echo e($product->name); ?></td>
                                                    <td class="text-wrap"><?php echo e($product->comments_count); ?></td>

                                                    <td class="row">
                                                        <?php if($product->comments_count == 0): ?>
                                                        Không thể thao tác
                                                        <?php else: ?>
                                                        <a href="<?php echo e(route('admin.comment.detail', ['id' => $product->id])); ?>"
                                                            class="btn btn-primary">Xem bình luận</a>
                                                       <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Comment/comment.blade.php ENDPATH**/ ?>