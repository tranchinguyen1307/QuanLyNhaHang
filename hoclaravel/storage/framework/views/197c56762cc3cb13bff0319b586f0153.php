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
              <h3 class="card-title">Thêm danh mục</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.category.store')); ?>">
              <?php echo csrf_field(); ?>
              <?php echo method_field('POST'); ?>
              <div class="card-body">
                <div class="form-group">
                  <label >Tên danh mục</label>
                  <input type="text" name="name" class="form-control"  placeholder="Nhập tên "  value="">
                </div>
                <div class="form-group">
                  <label for="style">Loại</label>
                  <select name="style" id="style" class="form-control">
                      <option value="post" >Bài viết</option>
                      <option value="menu" >Món ăn</option>
                  </select>
              </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
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
<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Category/create-category.blade.php ENDPATH**/ ?>