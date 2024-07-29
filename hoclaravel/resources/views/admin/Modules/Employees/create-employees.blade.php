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
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" name="title" class="form-control" placeholder="Nhập Họ và Tên "
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Nhập Email "
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="number" name="phone" class="form-control"
                                        placeholder="Nhập Số điện thoại " value="">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="number" name="address" class="form-control" placeholder="Nhập địa chỉ "
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input type="file" name="image" class="form-control pt-1 pl-0 ">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="title" class="form-control" placeholder="Nhập mật khẩu "
                                        value="">
                                </div>
                                <div class="form-group pt-3">
                                    <label>Chức vụ</label>
                                    <select name="deposit" class ="ml-3">
                                        <option value="1">Đầu bếp</option>
                                        <option value="2">Phục vụ</option>
                                        <option value="3">Lễ tân</option>
                                        <option value="4">Quản lý</option>
                                    </select>
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
    </section>
@endsection