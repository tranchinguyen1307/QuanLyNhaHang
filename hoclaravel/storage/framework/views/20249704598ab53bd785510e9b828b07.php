<?php $__env->startSection('title', 'Menu Món Ăn'); ?>
<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa món ăn</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form enctype="multipart/form-data" action="<?php echo e(route('admin.menu.update', $product->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên món</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nhập Tên Món"
                                           value="<?php echo e($product->name); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="number" name="price" class="form-control" placeholder="Nhập Giá"
                                           value="<?php echo e($product->price); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea id="summernote" name="content"><?php echo e($product->description); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <?php if($product->image): ?>
                                        <img src="<?php echo e(asset('clients/img/' . $product->image)); ?>"
                                             style="width: 150px; height:auto; object-fit:cover; border-radius:5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                                    <?php endif; ?>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Danh mục</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>" <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
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

<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/Modules/menu/edit-menu.blade.php ENDPATH**/ ?>