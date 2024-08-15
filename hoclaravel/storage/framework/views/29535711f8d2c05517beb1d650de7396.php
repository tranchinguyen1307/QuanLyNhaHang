<?php $__env->startSection('title', 'Danh Sách Món Ăn'); ?>
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
                                                
                                                <th>Ảnh</th>
                                                <th>Tên món</th>
                                                <th>Giá</th>
                                                <th>Thể loại</th>
                                                <th>Ngày thêm</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    
                                                    <td>
                                                        <img src="<?php echo e(asset('clients/img/' . $product->image)); ?>"
                                                            style= "width: 150px; height:auto; object-fit:cover; border-radius:5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                                                    </td>
                                                    <td class="text-wrap"><?php echo e($product->name); ?></td>
                                                    <td><?php echo e($product->price); ?></td>
                                                    <td>
                                                        <?php echo e($product->category->name); ?>

                                                    </td>
                                                    
                                                    <td><?php echo e($product->updated_at); ?></td>
                                                    
                                                    <td class=row>
                                                        <a class="btn btn-primary"
                                                            href="<?php echo e(route('admin.menu.edit', ['id' => $product->id])); ?>">Sửa</a>
                                                        <form method="POST"
                                                            action="<?php echo e(route('admin.menu.destroy', $product->id)); ?>"
                                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <input name="id" type="hidden" value="1">
                                                            <button type ="submit" class = "btn btn-danger" >Xóa</button>
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
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/menu/home.blade.php ENDPATH**/ ?>