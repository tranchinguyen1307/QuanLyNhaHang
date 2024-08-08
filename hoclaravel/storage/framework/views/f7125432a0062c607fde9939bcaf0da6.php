     

     <?php $__env->startSection('title', 'Nhà hàng NMN '); ?>
     <?php $__env->startSection('content'); ?>



         <!-- Service Start -->
         <?php echo $__env->make('client.layouts.service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- Service End -->


         <!-- About Start -->
         <?php echo $__env->make('client.layouts.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- About End -->



         <!-- manager Start -->
         <?php echo $__env->make('client.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- manager End -->


         <!-- comment Start -->
         <?php echo $__env->make('client.layouts.comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- comment End -->


         <!-- company-info Start -->


         <!-- company-info End -->

     <?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/client/pages/home.blade.php ENDPATH**/ ?>