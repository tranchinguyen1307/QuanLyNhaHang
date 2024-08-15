<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('/trang-chu') }}" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Nhà hàng</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('/trang-chu') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Trang
                Chủ</a>
            <a href="{{ route('client.san-pham.index') }}"
                class="nav-item nav-link {{ request()->is('client/san-pham*') ? 'active' : '' }}">Thực Đơn</a>
            <a href="{{ route('client.post') }}"
                class="nav-item nav-link {{ request()->is('client/bai-viet*') ? 'active' : '' }}">Bài viết</a>
            <a href="{{ route('client.lien-he.index') }}"
                class="nav-item nav-link {{ request()->is('client/lien-he*') ? 'active' : '' }}">Liên Hệ</a>
            @if (Auth::check())
                <a href="{{ route('client.dat-ban.index') }}"
                    class="nav-item nav-link {{ request()->is('client/dat-ban*') ? 'active' : '' }}">Đặt bàn</a>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Đặt bàn</a>
            @endif
        </div>

        @if (Auth::check())
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Xin chào, {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Xem Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Đăng xuất
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4">Đăng nhập</a>
        @endif
    </div>
</nav>