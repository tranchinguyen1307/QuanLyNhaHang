    
    <?php $__env->startSection('title', 'Chi tiết đặt bàn'); ?>
    <?php $__env->startSection('content'); ?>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Card thông tin đặt bàn -->
                        <div class="card card-primary mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin đặt bàn</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Tên khách</th>
                                            <td><?php echo e($reservation->customer_name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo e($reservation->customer_email); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Số điện thoại</th>
                                            <td><?php echo e($reservation->customer_phone); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Số lượng khách</th>
                                            <td><?php echo e($reservation->guest_count); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Thời gian</th>
                                            <td><?php echo e($reservation->reservation_time); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Ghi chú</th>
                                            <td><?php echo e($reservation->note); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tiền cọc</th>
                                            <td><?php echo e(number_format($reservation->deposit, 0, ',', '.')); ?> VND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Card chọn món cho khách -->
                        <div class="card card-primary mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Chọn món cho khách</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(route('admin.table.addItems', $reservation->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tên món</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>
                                                <th>Thêm vào</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($product->name); ?></td>
                                                    <td><?php echo e(number_format($product->price, 0, ',', '.')); ?> VND</td>
                                                    <td>
                                                        <input type="number" name="quantity[<?php echo e($product->id); ?>]"
                                                            value="1" min="1" class="form-control">
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary" name="product_id"
                                                            value="<?php echo e($product->id); ?>">Thêm món</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>

                        <!-- Card hiển thị các món đã chọn -->
                        <div class="card card-primary mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Món đã chọn</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên món</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = session('cart', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($item['name']); ?></td>
                                                <td><?php echo e(number_format($item['price'], 0, ',', '.')); ?> VND</td>
                                                <td><?php echo e($item['quantity']); ?></td>
                                                <td><?php echo e(number_format($item['total'], 0, ',', '.')); ?> VND</td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3" class="text-right">Tổng tiền:</th>
                                            <td><?php echo e(number_format(array_sum(array_column(session('cart', []), 'total')), 0, ',', '.')); ?>

                                                VND</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <!-- Nút thanh toán -->
                        <a href="<?php echo e(route('admin.table.check_out', $reservation->id)); ?>" type="button"
                            class="btn btn-success mt-3">Thanh toán</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Tables/table_manager.blade.php ENDPATH**/ ?>