<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('clients/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('clients/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('clients/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('clients/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('clients/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('clients/css/style.css') }}" rel="stylesheet">
    <title> @yield('title')</title>
</head>

<body>
<<<<<<< HEAD
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Nhà hàng</h1>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="{{ route('/trang-chu') }}" class="nav-item nav-link active">Trang Chủ</a>
<<<<<<< HEAD


                    <a href="{{ route('client.san-pham.index') }}" class="nav-item nav-link">Thực Đơn</a>
                    <a href="{{ route('client.lien-he.index') }}" class="nav-item nav-link">Liên Hệ</a>
                    <a href="{{ route('client.dat-ban.index') }}" class="nav-item nav-link">Đặt bàn</a>
=======
                    <a href="{{ route('client.san-pham.index') }}" class="nav-item nav-link">Thực Đơn</a>
                    <a href="{{ route('client.lien-he.index') }}" class="nav-item nav-link">Liên Hệ</a>
                    <a href="{{ route('client.dat-ban.index') }}" class="nav-item nav-link">Đặt bàn</a>
                </div>
                <div>
                    <a href="" class="btn btn-primary py-2 px-4">Đăng nhập</a>
>>>>>>> origin/minhToan
                </div>

            </div>

=======


    <a href="{{ route('client.san-pham.index') }}" class="nav-item nav-link">Thực Đơn</a>
    <a href="{{ route('client.lien-he.index') }}" class="nav-item nav-link">Liên Hệ</a>
    <a href="{{ route('client.dat-ban.index') }}" class="nav-item nav-link">Đặt bàn</a>
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b
    </div>
    <a href="" class="btn btn-primary py-2 px-4">Đăng nhập</a>
    </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Thưởng Thức<br>Đồ Ăn Ngon</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Trải nghiệm hương vị tuyệt hảo với các món
                        ăn đặc sắc từ khắp nơi trên thế giới. Từ những món ăn truyền thống đến những sáng tạo ẩm
                        thực độc đáo, mỗi món ăn đều mang đến cho bạn một trải nghiệm ẩm thực không thể quên. Hãy để
                        vị giác của bạn được thưởng thức sự kết hợp hoàn hảo của các nguyên liệu tươi ngon và kỹ
                        thuật chế biến tinh tế.</p>
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Đặt Bàn</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('clients/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    @yield('content')
    <!--hồi đó ở đây nó đầy đủ của nó là cái này   [container-xxl bg-white p-0]  -->






    <a href="{{ route('client.san-pham.index') }}" class="nav-item nav-link">Thực Đơn</a>
    <a href="{{ route('client.lien-he.index') }}" class="nav-item nav-link">Liên Hệ</a>
    <a href="{{ route('client.dat-ban.index') }}" class="nav-item nav-link">Đặt bàn</a>
    </div>
    <a href="" class="btn btn-primary py-2 px-4">Đăng nhập</a>
    </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Thưởng Thức<br>Đồ Ăn Ngon</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Trải nghiệm hương vị tuyệt hảo với các món
                        ăn đặc sắc từ khắp nơi trên thế giới. Từ những món ăn truyền thống đến những sáng tạo ẩm
                        thực độc đáo, mỗi món ăn đều mang đến cho bạn một trải nghiệm ẩm thực không thể quên. Hãy để
                        vị giác của bạn được thưởng thức sự kết hợp hoàn hảo của các nguyên liệu tươi ngon và kỹ
                        thuật chế biến tinh tế.</p>
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Đặt Bàn</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('clients/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    @yield('content')
    <!--hồi đó ở đây nó đầy đủ của nó là cái này   [container-xxl bg-white p-0]  -->


    <div class=" bg-white p-0">
        <div class="container-xxl position-relative p-0">

            <x-client.navbar>
            </x-client.navbar>
            <!-- Hiển thị tên người dùng sau khi đăng nhập -->

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <x-client.banner>
                </x-client.banner>
            </div>


        </div>

        @yield('content')
        <!--hồi đó ở đây nó đầy đủ của nó là cái này   [container-xxl bg-white p-0]  -->

        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Đang tải...</span>
            </div>
        </div>

        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Công Ty</h4>
                        <a class="btn btn-link" href="">Về Chúng Tôi</a>
                        <a class="btn btn-link" href="">Liên Hệ</a>
                        <a class="btn btn-link" href="">Đặt Chỗ</a>
                        <a class="btn btn-link" href="">Chính Sách Bảo Mật</a>
                        <a class="btn btn-link" href="">Điều Khoản & Điều Kiện</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Liên Hệ</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Đường, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Giờ Mở Cửa</h4>
                        <h5 class="text-light fw-normal">Thứ Hai - Thứ Bảy</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Chủ Nhật</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Bản Tin</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Email của bạn">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Đăng Ký</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Tên Trang Web Của Bạn</a>, Đã Đăng Ký Bản
                            Quyền.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Thiết Kế Bởi <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Trang Chủ</a>
                                <a href="">Cookies</a>
                                <a href="">Giúp Đỡ</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @stack('script')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('clients/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('clients/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('clients/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('clients/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('clients/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('clients/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('clients/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('clients/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('clients/js/main.js') }}"></script>
    <script>
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement hoặc head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string"
                            hoặc rel.length == 0 hoặc rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Nâng cấp trình duyệt của bạn. Trình duyệt này KHÔNG hỗ trợ WebSocket cho Tải Lại Trực Tiếp.');
        }
        // ]]>
    </script>
</body>

</html>
