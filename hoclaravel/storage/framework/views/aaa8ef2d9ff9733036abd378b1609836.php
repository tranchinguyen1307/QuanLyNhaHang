<?php $__env->startSection('title', 'Nhà hàng NMN '); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Đặt chỗ</h5>
                <h1 class="text-white mb-4">Đặt bàn trực tuyến</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name"
                                    placeholder="Tên của bạn">
                                <label for="name">Tên của bạn</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email"
                                    placeholder="Email của bạn">
                                <label for="email">Email của bạn</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    id="datetime" placeholder="Ngày & Giờ" data-target="#date3"
                                    data-toggle="datetimepicker" />
                                <label for="datetime">Ngày & Giờ</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="1">1 Người</option>
                                    <option value="2">2 Người</option>
                                    <option value="3">3 Người</option>
                                </select>
                                <label for="select1">Số Người</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Yêu cầu đặc biệt" id="message" style="height: 100px"></textarea>
                                <label for="message">Yêu cầu đặc biệt</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Đặt Ngay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Video Youtube</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Đóng"></button>
            </div>
            <div class="modal-body">
                <!-- Tỉ lệ 16:9 -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                        allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/client/pages/bookTable.blade.php ENDPATH**/ ?>