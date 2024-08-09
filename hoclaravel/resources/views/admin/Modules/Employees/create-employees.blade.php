@extends('admin.layouts.masterlayout')
@section('title', 'Nhân Viên')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Nhân Viên</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('admin.employees.store') }}" enctype="multipart/form-data">
                            @csrf <!-- Token CSRF bảo vệ -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nhập Họ và Tên"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Nhập Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="Nhập Số điện thoại" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Lương</label>
                                    <input type="number" name="salary" class="form-control" placeholder="Nhập lương"
                                        value="{{ old('salary') }}">
                                    @error('salary')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tên đăng nhập</label>
                                    <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập"
                                        value="{{ old('username') }}">
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role_id">Chức vụ</label>
                                    <select name="role_id" id="role_id" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Ngày vào làm</label>
                                    <input type="date" name="created_at" class="form-control"
                                        value="{{ old('created_at') }}">
                                    @error('created_at')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Trường nhập liệu cho địa chỉ -->
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ"
                                        value="{{ old('address') }}">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Trường nhập liệu cho ảnh -->
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input type="file" name="img" id="img" class="form-control">
                                    @error('img')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <!-- Hiển thị hình ảnh đã chọn -->
                                    <div class="mt-2">
                                        <img id="preview" src="#" alt="Hình ảnh" class="img-fluid d-none"
                                            style="max-width: 200px;">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.getElementById('img').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush
