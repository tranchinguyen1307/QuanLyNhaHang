<?php $__env->startSection('title','Danh mục'); ?>
<?php $__env->startSection('content'); ?>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa danh mục</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo e(route('admin.category.update', $category->id)); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PATCH'); ?>
              <div class="form-group">
                  <label>Tên danh mục</label>
                  <input type="text" name="name" class="form-control" value="<?php echo e($category->name); ?>" required>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Category/edit-category.blade.php ENDPATH**/ ?>