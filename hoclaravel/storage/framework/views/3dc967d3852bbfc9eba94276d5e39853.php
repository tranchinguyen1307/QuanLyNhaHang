<?php $__env->startSection('title', 'Danh sách đặt bàn'); ?>
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

                    <!-- Bảng danh sách đặt bàn -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách đặt bàn</h3>
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
                                            <th>Trạng thái</th>
                                            <th>Ghi chú</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $reservation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($res->customer_name); ?><br>
                                                    <small><?php echo e($res->customer_email); ?></small>
                                                </td>
                                                <td><?php echo e($res->customer_phone); ?></td>
                                                <td><?php echo e($res->guest_count); ?></td>
                                                <td><?php echo e($res->reservation_time); ?></td>
                                                <td><?php echo e($res->deposit); ?></td>
                                                <td>
                                                    <span
                                                        class="badge
                                                                    <?php if($res->status == 'Chưa thanh toán cọc'): ?> bg-warning
                                                                    <?php elseif($res->status == 'Đã thanh toán cọc'): ?> bg-primary
                                                                    <?php elseif($res->status == 'Đã hủy'): ?> bg-danger <?php endif; ?>
                                                                "
                                                        style="font-size: 14px">
                                                        <?php echo e($res->status); ?>

                                                    </span>
                                                </td>
                                                <td><?php echo e($res->note ?? 'Không có'); ?></td>
                                                <td>
                                                    
                                                    <a href="<?php echo e(route('admin.table.show', $res->id)); ?>"
                                                        class="btn btn-primary btn-sm"><i class="ion ion-eye"></i> </a>
                                                    <a href="<?php echo e(route('admin.table.edit', $res->id)); ?>"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="ion ion-edit"></i>
                                                    </a>
                                                    
                                                    <form method="POST"
                                                        action="<?php echo e(route('admin.table.destroy', $res->id)); ?>"
                                                        style="display:inline-block;"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa đặt bàn này không?');">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
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

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Tables/table.blade.php ENDPATH**/ ?>