<?php $__env->startSection('title', 'Danh mục'); ?>
<?php $__env->startSection('content'); ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên danh mục</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td class="text-wrap"><?php echo e($categorys->name); ?></td>
              <td class="row">
              <a href="<?php echo e(route('admin.category.edit', ['id' => $categorys->id])); ?>"
                class="btn btn-primary">Chỉnh sửa</a>
              <form method="POST" action="<?php echo e(route('admin.category.destroy', $categorys->id)); ?>"
                onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input name="id" type="hidden" value="1">
                <button type="submit" class="btn btn-danger">Xóa</button>
              </form>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/Category/category.blade.php ENDPATH**/ ?>