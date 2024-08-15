<?php $__env->startSection('title', 'Bài Viết'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Bài Viết</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 5%;">STT</th>
                                            <th style="width: 15%;">Ảnh Đại Diện</th>
                                            <th style="width: 50%;">Thông Tin Bài Viết</th>
                                            <th style="width: 30%;">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 0;
                                        ?>

                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $stt++;
                                            ?>
                                            <tr>
                                                <td><?php echo e($stt); ?></td>
                                                <td>
                                                        <img src="<?php echo e(asset('storage/images/post/avatar/' . $post->avatar)); ?>" alt="Avatar" class="img-thumbnail" style="width: 100px; height: 100px;">
                                                   
                                                </td>
                                                <td>
                                                    <strong><?php echo e($post->title); ?></strong><br>
                                                    <span>Tác giả: <?php echo e($post->author_name ?? 'Đang cập nhật'); ?></span><br>
                                                    <span><?php echo e($post->created_at->format('d/m/Y H:i')); ?></span>
                                                </td>
                                                <td class="actions-column">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary mr-2" href="<?php echo e(route('admin.post.edit', $post->id)); ?>" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                        <form method="post" action="<?php echo e(route('admin.post.destroy', $post->id)); ?>" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">
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
                                    <?php echo e($posts->links()); ?>

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

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Post/post.blade.php ENDPATH**/ ?>