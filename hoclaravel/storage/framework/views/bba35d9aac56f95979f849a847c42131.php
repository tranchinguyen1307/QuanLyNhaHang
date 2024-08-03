<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="<?php echo e(route('/trang-chu')); ?>" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Nhà hàng</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="<?php echo e(route('/trang-chu')); ?>" class="nav-item nav-link active">Trang Chủ</a>
            <a href="<?php echo e(route('client.san-pham.index')); ?>" class="nav-item nav-link">Thực Đơn</a>
            <a href="<?php echo e(route('client.lien-he.index')); ?>" class="nav-item nav-link">Liên Hệ</a>
            <a href="<?php echo e(route('client.dat-ban.index')); ?>" class="nav-item nav-link">Đặt bàn</a>
        </div>

        <?php if(Auth::check()): ?>
            <div class="d-flex align-items-center">
                <span class="text-light me-3">Xin chào, <?php echo e(Auth::user()->name); ?></span>
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-primary py-2 px-4"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Đăng xuất
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-primary py-2 px-4">Đăng nhập</a>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/components/client/navbar.blade.php ENDPATH**/ ?>