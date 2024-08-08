@extends('admin.layouts.masterlayout')
<<<<<<< HEAD
<<<<<<< HEAD

@section('title', 'Khách Hàng')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Khách hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('admin.customer.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nhập Họ và Tên"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Nhập Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
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
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" placeholder="Nhập Địa chỉ"
                                        value="{{ old('address') }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="password" class="form-control" placeholder="Nhập Mật khẩu">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
=======
<<<<<<< HEAD
@section('title','Khách Hàng')
=======

@section('title', 'Khách Hàng')

>>>>>>> 2f6ada3 (CRUD người dùng)
=======
@section('title','Khách Hàng')
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
@section('content')

<section class="content">
    <div class="container-fluid">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Khách hàng</h3>
<<<<<<< HEAD
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
            </div>
        </div>
<<<<<<< HEAD
    </section>

@endsection
=======
        <!--/.col (right) -->
      </div>
@endsection
=======
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm Khách hàng</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('admin.customer.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Họ và Tên</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập Họ và Tên" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Nhập Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" placeholder="Nhập Số điện thoại" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="address" class="form-control" placeholder="Nhập Địa chỉ" value="{{ old('address') }}">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" class="form-control" placeholder="Nhập Mật khẩu">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
        </div>
    </div>
</section>

@endsection
>>>>>>> 2f6ada3 (CRUD người dùng)
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
=======
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label >Họ và Tên</label>
                  <input type="text" name="title" class="form-control"  placeholder="Nhập Họ và Tên "  value="">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Nhập Email "  value="">
                </div>
                <div class="form-group">
                    <label >Số điện thoại</label>
                    <input type="number" name="phone" class="form-control"  placeholder="Nhập Số điện thoại "  value="">
                </div>
                <div class="form-group">
                    <label >Địa chỉ</label>
                    <input type="number" name="address" class="form-control"  placeholder="Nhập địa chỉ "  value="">
                </div>
                <div class="form-group">
                    <label >Mật khẩu</label>
                    <input type="password" name="title" class="form-control"  placeholder="Nhập mật khẩu "  value="">
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
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
@endsection
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
