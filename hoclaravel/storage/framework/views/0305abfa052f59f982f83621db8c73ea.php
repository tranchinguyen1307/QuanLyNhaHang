<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="<?php echo e(route('/trang-chu')); ?>" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Nhà hàng</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="<?php echo e(route('/trang-chu')); ?>" class="nav-item nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>">Trang
                Chủ</a>
            <a href="<?php echo e(route('client.san-pham.index')); ?>"
                class="nav-item nav-link <?php echo e(request()->is('client/san-pham*') ? 'active' : ''); ?>">Thực Đơn</a>
            <a href="<?php echo e(route('client.lien-he.index')); ?>"
                class="nav-item nav-link <?php echo e(request()->is('client/lien-he*') ? 'active' : ''); ?>">Liên Hệ</a>
            <?php if(Auth::check()): ?>
                <a href="<?php echo e(route('client.dat-ban.index')); ?>"
                    class="nav-item nav-link <?php echo e(request()->is('client/dat-ban*') ? 'active' : ''); ?>">Đặt bàn</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="nav-item nav-link">Đặt bàn</a>
            <?php endif; ?>
        </div>

        <?php if(Auth::check()): ?>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Xin chào, <?php echo e(Auth::user()->name); ?>

                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">Xem Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Đăng xuất
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-primary py-2 px-4">Đăng nhập</a>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/components/client/navbar.blade.php ENDPATH**/ ?>