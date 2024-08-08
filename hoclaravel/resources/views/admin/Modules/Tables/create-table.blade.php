@extends('admin.layouts.masterlayout')
@section('title', 'Thêm Bàn')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Bàn</h3>
                        </div>
                        <form method="post" action="{{ route('admin.table.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên khách</label>
                                            <input type="text" name="customer_name"
                                                class="form-control @error('customer_name') is-invalid @enderror"
                                                placeholder="Nhập tên khách" value="{{ old('customer_name') }}">
                                            @error('customer_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="customer_email"
                                                class="form-control @error('customer_email') is-invalid @enderror"
                                                placeholder="Nhập email" value="{{ old('customer_email') }}">
                                            @error('customer_email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="text" name="customer_phone"
                                                class="form-control @error('customer_phone') is-invalid @enderror"
                                                placeholder="Nhập số điện thoại" value="{{ old('customer_phone') }}">
                                            @error('customer_phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Số người</label>
                                            <input type="number" name="guest_count"
                                                class="form-control @error('guest_count') is-invalid @enderror"
                                                placeholder="Nhập số người" value="{{ old('guest_count') }}" min="0">
                                            @error('guest_count')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ngày giờ</label>
                                            <input type="datetime-local" name="reservation_time"
                                                class="form-control @error('reservation_time') is-invalid @enderror"
                                                placeholder="Nhập ngày giờ" value="{{ old('reservation_time') }}">
                                            @error('reservation_time')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Trạng thái</label>
                                            <select name="status"
                                                class="form-control @error('status') is-invalid @enderror">
                                                <option value="Chưa thanh toán cọc"
                                                    {{ old('status') == 'Chưa thanh toán cọc' ? 'selected' : '' }}>
                                                    Chưa thanh toán cọc
                                                </option>
                                                <option value="Đã thanh toán cọc"
                                                    {{ old('status') == 'Đã thanh toán cọc' ? 'selected' : '' }}>
                                                    Đã thanh toán cọc
                                                </option>
                                                <option value="Đã hủy" {{ old('status') == 'Đã hủy' ? 'selected' : '' }}>
                                                    Đã hủy
                                                </option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group pt-3">
                                            <label>Tiền đã cọc</label>
                                            <input type="number" name="deposit"
                                                class="form-control @error('deposit') is-invalid @enderror"
                                                placeholder="Nhập số tiền đã cọc" min="0" step="1000"
                                                value="{{ old('deposit') }}">
                                            @error('deposit')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group pt-3">
                                            <label>Ghi chú</label>
                                            <textarea name="note" class="form-control @error('note') is-invalid @enderror" placeholder="Nhập ghi chú"
                                                rows="3">{{ old('note') }}</textarea>
                                            @error('note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
