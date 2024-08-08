<?php $__env->startSection('title', 'Nhân Viên'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Nhân Viên</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Thông Tin Cơ Bản</th>
                                            <th>Hình ảnh</th>
                                            <th>Lương</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày vào làm</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 0;
                                        ?>

                                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $stt++;
                                            ?>
                                            <tr>
                                                <td><?php echo e($stt); ?></td>
                                                <td>
                                                    <strong><?php echo e($employee->name); ?></strong><br>
                                                    Email: <?php echo e($employee->email); ?><br>
                                                    Địa chỉ: <?php echo e($employee->address); ?><br>
                                                    Số điện thoại: <?php echo e($employee->phone); ?>

                                                </td>
                                                <td>
                                                    <img src="<?php echo e(asset('storage/images/employees/' . $employee->img)); ?>" class="img-fluid rounded"
                                                        style="width: 100px; height: 100px;" alt="Hình ảnh nhân viên">
                                                </td>
                                                <td>
                                                    <p class="text-danger">
                                                        <?php echo e(number_format($employee->salary, 0, ',', ',')); ?> VNĐ
                                                    </p>
                                                </td>
                                                <td>
                                                    <?php if($employee->status == 1): ?>
                                                        <h5><span class="badge badge-success badge-lg">Đang làm</span></h5>
                                                    <?php else: ?>
                                                        <h5><span class="badge badge-danger">Nghỉ</span></h5>
                                                    <?php endif; ?>
                                                </td>
                                                <td><b><?php echo e(\Carbon\Carbon::parse($employee->created_at)->format('d/m/Y')); ?></b></td>
                                                <td class="actions-column">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary mr-2" href="<?php echo e(route('admin.employees.edit', $employee->id)); ?>" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                        <form method="post" action="<?php echo e(route('admin.employees.destroy', $employee->id)); ?>" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <ul class="pagination pagination-primary mt-3 justify-content-center">
                                    <?php echo e($employees->links()); ?>

                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-dark">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="successModalLabel">Thông Báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="">
                        <?php echo e(session('success')); ?>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            <?php if(session('success')): ?>
                $('#successModal').modal('show');
            <?php endif; ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Employees/employees.blade.php ENDPATH**/ ?>