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
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ và Tên</th>
                                            <th>Hình ảnh</th>
                                            <th>Địa chỉ</th>
                                            <th>Email</th>
                                            <th>Chức vụ</th>
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
                                                <td><?php echo e($employee->name); ?></td>
                                                <td><img src="<?php echo e(asset('storage/images/employees/' . $employee->img)); ?>" class="img-fluid"
                                                    style="width: 150px; height: 150px;" alt="Đang cập nhật"></td>
                                                <td class="text-wrap"><?php echo e($employee->address); ?></td>
                                                <td><?php echo e($employee->email); ?></td>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($employee->role_id == $role->id): ?>
                                                        <td><?php echo e($role->name); ?></td>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <td><b>
                                                        <p class="text-danger">
                                                            <?php echo e(number_format($employee->salary, 0, ',', ',')); ?> VNĐ</p>
                                                    </b></td>
                                                <td>
                                                    <?php if($employee->status == 1): ?>
                                                        <h5><span class="badge badge-success badge-lg">Đang làm</span></h5>
                                                    <?php else: ?>
                                                        <h5><span class="badge badge-danger">Nghỉ</span></h5>
                                                    <?php endif; ?>
                                                </td>
                                                <td><b><?php echo e(\Carbon\Carbon::parse($employee->created_at)->format('d/m/Y')); ?></b>
                                                </td>
                                                <td class="d-flex">
                                                    <a class="btn btn-primary mr-2" href="<?php echo e(route('admin.employees.edit', $employee->id)); ?>"><i
                                                            class="fas fa-edit"></i></a>
                                                    <form method="post"
                                                        action="<?php echo e(route('admin.employees.destroy', $employee->id)); ?>"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa nhân viên này?')">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <ul class="pagination pagination-primary mt-3">
                                    <li class="page-item"><a class="page-link" href="">Previous</a></li>
                                    <li class="page-item active ml-2"><a class="page-link" href="">1</a></li>
                                    <li class="page-item ml-2"><a class="page-link" href="">Next</a></li>
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
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-dark">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="successModalLabel">Thông Báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <i class="fas fa-check-circle me-2"></i>
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

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/pages/employees.blade.php ENDPATH**/ ?>