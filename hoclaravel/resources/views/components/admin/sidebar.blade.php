@stack('style')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3"
            alt="User Image" style="opacity: .8">
<<<<<<< HEAD
        <span class="brand-text font-weight-light">3 anh đầu bếp</span>
=======
        <span class="brand-text font-weight-light">Nhà Hàng NMN</span>
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex user-infor">
            <div class="image">
<<<<<<< HEAD
                <img src="{{ asset('storage/images/employees/' . $inforEmployee->img) }}" class="img-fluid rounded-circle avatar" alt="User Image">
=======
<<<<<<< HEAD
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
=======
                <img src="{{ asset('storage/images/employees/' . $inforEmployee->img) }}" class="img-fluid rounded-circle avatar" alt="User Image">
>>>>>>> 2f6ada3 (CRUD người dùng)
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $inforEmployee->username }}</a>
            </div>
            <div class= "ml-5 mt-1"><a href="{{ route('admin.logout') }}">Đăng xuất</a></div>

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
                            <a href="{{ route('admin.menu.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.menu.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
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
                            <a href="{{ route('admin.category.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>

                    </ul>
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
                            <a href="{{ route('admin.table.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.table.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Hóa đơn
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.invoices.list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách hóa đơn</p>
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
                            <a href="{{ route('admin.employees.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.employees.create') }}" class="nav-link">
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
                            <a href="{{ route('admin.customer.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.create') }}" class="nav-link">
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
<<<<<<< HEAD

=======
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
<style>
    .user-infor .avatar {
        width: 30px; /* Kích thước cố định của avatar */
        height: 30px; /* Kích thước cố định của avatar */
        object-fit: cover; /* Giúp hình ảnh không bị méo */
    }
</style>