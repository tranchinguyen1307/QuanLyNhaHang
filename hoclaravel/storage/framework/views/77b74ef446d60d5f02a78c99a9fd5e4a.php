<?php echo $__env->yieldPushContent('style'); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo e(asset('assets/dist/img/AdminLTELogo.png')); ?>" class="brand-image img-circle elevation-3"
            alt="User Image" style="opacity: .8">
        <span class="brand-text font-weight-light">3 anh đầu bếp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex user-infor">
            <div class="image">
                <img src="<?php echo e(asset('storage/images/employees/' . $inforEmployee->img)); ?>" class="img-fluid rounded-circle avatar" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e($inforEmployee->username); ?></a>
            </div>
            <div class= "ml-5 mt-1"><a href="<?php echo e(route('admin.logout')); ?>">Đăng xuất</a></div>

        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Menus
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.menu.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.menu.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Danh mục
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.category.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.category.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>

                    </ul>
                </li>
                </li>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Đặt Bàn
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.table.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.table.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Nhân viên
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.employees.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.employees.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Khách hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.customer.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.customer.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>
</aside>
<style>
    .user-infor .avatar {
        width: 30px; 
        height: 30px; 
        object-fit: cover;
    }
</style><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/components/admin/sidebar.blade.php ENDPATH**/ ?>