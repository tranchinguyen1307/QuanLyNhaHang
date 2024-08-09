<?php $__env->startSection('title', 'Menu Món Ăn'); ?>
<?php $__env->startSection('content'); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-4 mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Danh Sách Món Ăn</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered table-hover table-striped text-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">Ảnh</th>
                                            <th class="text-center">Tên món</th>
                                            <th class="text-center">Giá</th>
                                            <th class="text-center">Thể loại</th>
                                            <th class="text-center">Ngày thêm</th>
                                            <th class="text-center">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center">
                                                    <img src="<?php echo e(asset('clients/img/' . $product->image)); ?>"
                                                        style="width: 100px; height:auto; object-fit:cover; border-radius:5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                                                </td>
                                                <td class="text-wrap"><?php echo e($product->name); ?></td>
                                                <td><?php echo e(number_format($product->price, 0, ',', '.')); ?> VND</td>
                                                <td><?php echo e($product->category->name); ?></td>
                                                <td><?php echo e($product->updated_at); ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm btn-primary"
                                                        href="<?php echo e(route('admin.menu.edit', ['id' => $product->id])); ?>">Sửa</a>
                                                    <form method="POST"
                                                        action="<?php echo e(route('admin.menu.destroy', $product->id)); ?>"
                                                        class="d-inline"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3">
                                    <?php echo e($products->links()); ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/menu/home.blade.php ENDPATH**/ ?>