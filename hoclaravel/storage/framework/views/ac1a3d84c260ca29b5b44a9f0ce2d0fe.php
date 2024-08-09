<?php $__env->startSection('title', 'Chi tiết hóa đơn'); ?>
<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Thông báo thành công -->
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <!-- Chi tiết hóa đơn -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Chi tiết hóa đơn</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <!-- Thông tin đặt bàn -->
                                <table class="table table-bordered mb-4">
                                    <tbody>
                                        <tr>
                                            <th colspan="2">Thông tin khách hàng</th>
                                        </tr>
                                        <tr>
                                            <td><strong>Tên khách:</strong></td>
                                            <td><?php echo e($reservation->customer_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td><?php echo e($reservation->customer_email); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Số điện thoại:</strong></td>
                                            <td><?php echo e($reservation->customer_phone); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Lượng khách:</strong></td>
                                            <td><?php echo e($reservation->guest_count); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Thời gian:</strong></td>
                                            <td><?php echo e($reservation->reservation_time); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Ghi chú:</strong></td>
                                            <td><?php echo e($reservation->note ?? 'Không có'); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tiền cọc:</strong></td>
                                            <td><?php echo e(number_format($reservation->deposit, 0, ',', '.')); ?> VND</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Danh sách món ăn đã chọn -->
                                <h5 class="ms-2">Danh sách món ăn đã chọn</h5>
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Món ăn</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($details['name']); ?></td>
                                                <td><?php echo e($details['quantity']); ?></td>
                                                <td><?php echo e(number_format($details['price'], 0, ',', '.')); ?> VND</td>
                                                <td><?php echo e(number_format($details['total'], 0, ',', '.')); ?> VND</td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td colspan="3" class="text-right"><strong>Tổng cộng:</strong></td>
                                            <td><strong><?php echo e(number_format(array_sum(array_column($cart, 'total')), 0, ',', '.')); ?>

                                                    VND</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <!-- Thao tác -->

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Invoices/invoice.blade.php ENDPATH**/ ?>