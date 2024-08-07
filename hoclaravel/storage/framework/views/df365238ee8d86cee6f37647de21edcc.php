<?php $__env->startSection('title', 'Khách Hàng'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Khách Hàng</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 5%;">STT</th>
                                            <th style="width: 55%;">Thông Tin Cơ Bản</th>
                                            <th style="width: 40%;">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 0;
                                        ?>

                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $stt++;
                                            ?>
                                            <tr>
                                                <td><?php echo e($stt); ?></td>
                                                <td>
                                                    <strong><?php echo e($customer->name); ?></strong><br>
                                                    <span>Email: <?php echo e($customer->email); ?></span><br>
                                                    <span>Địa chỉ: <?php echo e($customer->address); ?></span><br>
                                                    <span>Số điện thoại: <?php echo e($customer->phone); ?></span>
                                                </td>
                                                <td class="actions-column">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary mr-2" href="<?php echo e(route('admin.customer.edit', $customer->id)); ?>" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                        <form method="post" action="<?php echo e(route('admin.customer.destroy', $customer->id)); ?>" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
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
                                <ul class="pagination pagination-primary mt-3">
                                    <ul class="pagination pagination-primary mt-3 justify-content-center">
                                        <?php echo e($customers->links()); ?>

                                    </ul>
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

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/modules/Customer/customers.blade.php ENDPATH**/ ?>