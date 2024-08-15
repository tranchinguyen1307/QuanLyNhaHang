<?php $__env->startSection('title', 'Danh sách hóa đơn'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Danh sách hóa đơn -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách hóa đơn</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            style="max-width: 200px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                            Tên khách và Email
                                        </th>
                                        <th>Số điện thoại</th>
                                        <th>Lượng khách</th>
                                        <th>Thời gian</th>
                                        <th>Tiền cọc</th>
                                        <th>Tổng cộng</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $reservationsWithTotal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($reservation->customer_name); ?><br>
                                                <small><?php echo e($reservation->customer_email); ?></small>
                                            </td>
                                            <td><?php echo e($reservation->customer_phone); ?></td>
                                            <td><?php echo e($reservation->guest_count); ?></td>
                                            <td><?php echo e($reservation->reservation_time); ?></td>
                                            <td><?php echo e(number_format($reservation->deposit, 0, ',', '.')); ?> VND</td>
                                            <td>
                                                <?php echo e(number_format(array_sum(array_column($cart, 'total')) + $reservation->deposit, 0, ',', '.')); ?>

                                                VNĐ
                                            </td>

                                            <td>
                                                <!-- Hiển thị trạng thái -->
                                                <span class="badge
                                                        <?php if($reservation->status == 'Đã thanh toán'): ?> bg-primary <?php endif; ?>
                                                        " style="font-size: 14px;">
                                                    <?php echo e($reservation->status); ?>

                                                </span>
                                            </td>
                                            <td>
                                                <!-- Chi tiết -->
                                                <form action="<?php echo e(route('admin.invoices.showDetail', $reservation->id)); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-success btn-sm mx-2 my-2">
                                                        <i class="ion ion-eye"></i>
                                                    </button>
                                                </form>
                                                
                                                <form method="POST"
                                                    action="<?php echo e(route('admin.invoices.destroy', $reservation->id)); ?>"
                                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa đặt bàn này không?');">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm mx-2 my-"><i
                                                            class="ion ion-trash-a"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Invoices/list.blade.php ENDPATH**/ ?>