@extends('admin.layouts.masterlayout')
@section('title', 'Sửa Nhân Viên')
@section('content')

<section class="content">
    <div class="container-fluid">
<<<<<<< HEAD
=======
<<<<<<< HEAD
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa Nhân viên</h3>
=======
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa Nhân Viên</h3>
                    </div>
                    @foreach ($employees as $employee)
                    <form method="POST" action="{{ route('admin.employees.update', $employee->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Họ và Tên</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập Họ và Tên" value="{{ old('name', $employee->name) }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Nhập Email" value="{{ old('email', $employee->email) }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label>Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" placeholder="Nhập Số điện thoại" value="{{ old('phone', $employee->phone) }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
=======
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
                                <label>Lương</label>
                                <input type="number" name="salary" class="form-control" placeholder="Nhập lương" value="{{ old('salary', $employee->salary) }}">
                                @error('salary')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tên đăng nhập</label>
                                <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" value="{{ old('username', $employee->username) }}">
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                                <input type="hidden" name="old_password" value="{{ $employee->password }}">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="role_id">Chức vụ</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" {{ $employee->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="role_id">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                        <option value="1" {{ $employee->status == 1 ? 'selected' : '' }}>Đang làm</option>
                                        <option value="2" {{ $employee->status == 2 ? 'selected' : '' }}>Đã nghỉ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ngày vào làm</label>
                                <input type="date" name="created_at" class="form-control" value="{{ old('created_at', $employee->created_at->format('Y-m-d')) }}">
                                @error('created_at')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ" value="{{ old('address', $employee->address) }}">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="img" id="img" class="form-control">
                                @error('img')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="mt-2">
                                    <img id="preview" src="{{ $employee->img ? asset('storage/images/employees/' . $employee->img) : '#' }}" alt="Hình ảnh" class="img-fluid {{ $employee->img ? '' : 'd-none' }}" style="max-width: 200px;">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                        @endforeach
                    </form>
                </div>
<<<<<<< HEAD
=======
>>>>>>> 2f6ada3 (CRUD người dùng)
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
            </div>
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
