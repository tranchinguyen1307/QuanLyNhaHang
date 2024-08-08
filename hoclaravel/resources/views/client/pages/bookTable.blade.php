@extends('client.layouts.main')

@section('title', 'Nhà hàng NMN ')
@section('content')


    @if (session('success'))
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Thông báo</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        {{ session('success') }}
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    @endif


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
                    <form method="post" action="{{ route('client.dat-ban.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="customer_name" class="form-control" id="name"
                                        placeholder="Tên của bạn" value="{{ old('customer_name') }}">
                                    <label for="name">Tên của bạn</label>
                                    @error('customer_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="customer_email" class="form-control" id="email"
                                        placeholder="Email của bạn" value="{{ old('customer_email') }}">
                                    <label for="email">Email của bạn</label>
                                    @error('customer_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="customer_phone" class="form-control" id="phone"
                                        placeholder="Số điện thoại của bạn" value="{{ old('customer_phone') }}">
                                    <label for="phone">Số điện thoại của bạn</label>
                                    @error('customer_phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="datetime-local" name="reservation_time"
                                        class="form-control datetimepicker-input" id="datetime" placeholder="Ngày & Giờ"
                                        data-target="#date3" data-toggle="datetimepicker"
                                        value="{{ old('reservation_time') }}" />
                                    <label for="datetime">Ngày & Giờ</label>
                                    @error('reservation_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="number" name="guest_count" class="form-control" id="guest_count"
                                        placeholder="Số Người" value="{{ old('guest_count') }}" min="1">
                                    <label for="guest_count">Số Người</label>
                                    @error('guest_count')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="note" class="form-control" placeholder="Yêu cầu đặc biệt" id="message" style="height: 100px">{{ old('note') }}</textarea>
                                    <label for="message">Yêu cầu đặc biệt</label>
                                    @error('note')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video Youtube</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
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

@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Kiểm tra xem có thông báo thành công từ session
        @if (session('success'))
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show(); // Hiển thị modal
        @endif
    });
</script>
