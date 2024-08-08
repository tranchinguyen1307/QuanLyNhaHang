

<?php $__env->startSection('title', 'Nhà hàng NMN '); ?>
<?php $__env->startSection('content'); ?>
 <!-- Contact Start -->
     <!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Liên Hệ</h5>
            <h1 class="mb-5">Liên Hệ Để Giải Đáp Mọi Thắc Mắc</h1>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Đặt Bàn</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Thông Tin Chung</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Kỹ Thuật</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Tên của bạn">
                                    <label for="name">Tên của bạn</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email của bạn">
                                    <label for="email">Email của bạn</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Chủ đề">
                                    <label for="subject">Chủ đề</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Để lại tin nhắn của bạn tại đây" id="message" style="height: 150px"></textarea>
                                    <label for="message">Tin nhắn</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Gửi Tin Nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
    <!-- Contact End -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT_Polytechnic\Ki_6\PHP_3\QuanLyNhaHang\hoclaravel\resources\views/client/pages/contact.blade.php ENDPATH**/ ?>