<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('/trang-chu') }}" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Nhà hàng</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('/trang-chu') }}"
                class="nav-item nav-link  {{ request()->is('/') ? 'active' : '' }}">Trang
                Chủ</a>
            <a href="{{ route('client.san-pham.index') }}"
                class="nav-item nav-link {{ request()->is('client/san-pham*') ? 'active' : '' }}">Thực Đơn</a>
            <a href="{{ route('client.lien-he.index') }}"
                class="nav-item nav-link {{ request()->is('client/lien-he*') ? 'active' : '' }}">Liên Hệ</a>
            <a href="{{ route('client.dat-ban.index') }}"
                class="nav-item nav-link {{ request()->is('client/dat-ban*') ? 'active' : '' }}">Đặt bàn</a>

        </div>

        @if (Auth::check())
            <div class="d-flex align-items-center">
                <span class="text-light me-3">Xin chào, {{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-4"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Đăng xuất
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4">Đăng nhập</a>
        @endif
    </div>
</nav>
