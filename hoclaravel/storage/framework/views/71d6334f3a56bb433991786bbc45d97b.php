<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('clients/img/favicon.ico')); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('clients/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('clients/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('clients/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/collection/components/icon/icon.css"
        rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('clients/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('clients/css/style.css')); ?>" rel="stylesheet">
    <title> <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>




    <!--hồi đó ở đây nó đầy đủ của nó là cái này   [container-xxl bg-white p-0]  -->


    <div class=" bg-white p-0">
        <div class="container-xxl position-relative p-0">

            <?php if (isset($component)) { $__componentOriginalf1dc9c6fd6e456f7688158ab3432928c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf1dc9c6fd6e456f7688158ab3432928c = $attributes; } ?>
<?php $component = App\View\Components\Client\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('client.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Client\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf1dc9c6fd6e456f7688158ab3432928c)): ?>
<?php $attributes = $__attributesOriginalf1dc9c6fd6e456f7688158ab3432928c; ?>
<?php unset($__attributesOriginalf1dc9c6fd6e456f7688158ab3432928c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf1dc9c6fd6e456f7688158ab3432928c)): ?>
<?php $component = $__componentOriginalf1dc9c6fd6e456f7688158ab3432928c; ?>
<?php unset($__componentOriginalf1dc9c6fd6e456f7688158ab3432928c); ?>
<?php endif; ?>
            <!-- Hiển thị tên người dùng sau khi đăng nhập -->

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <?php if (isset($component)) { $__componentOriginal8bd2458b149230f83e53a90f8ad7553b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bd2458b149230f83e53a90f8ad7553b = $attributes; } ?>
<?php $component = App\View\Components\Client\Banner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('client.banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Client\Banner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bd2458b149230f83e53a90f8ad7553b)): ?>
<?php $attributes = $__attributesOriginal8bd2458b149230f83e53a90f8ad7553b; ?>
<?php unset($__attributesOriginal8bd2458b149230f83e53a90f8ad7553b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bd2458b149230f83e53a90f8ad7553b)): ?>
<?php $component = $__componentOriginal8bd2458b149230f83e53a90f8ad7553b; ?>
<?php unset($__componentOriginal8bd2458b149230f83e53a90f8ad7553b); ?>
<?php endif; ?>
            </div>


        </div>

        <?php echo $__env->yieldContent('content'); ?>
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
    <?php echo $__env->yieldPushContent('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('clients/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('clients/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('clients/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('clients/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('clients/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('clients/lib/tempusdominus/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('clients/lib/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('clients/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('clients/js/main.js')); ?>"></script>
    
</body>

</html>
<?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/client/layouts/main.blade.php ENDPATH**/ ?>