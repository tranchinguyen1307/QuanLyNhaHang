@extends('admin.layouts.masterlayout')
@section('title','Nhân Viên')
@section('content')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Họ và Tên</th>
                          <th>Email</th>
                          <th>Số điện thoại</th>
                          <th>Địa chỉ</th>
                          <th>Ảnh</th>
                          <th>Mật khẩu</th>
                          <th>Chức vụ</th>
                          <th>Trạng thái</th>
                          <th>Người thêm</th>
                          <th>Ngày thêm</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                            <td>1</td>
                            <td>Nguyễn Minh Nhật</td>
                            <td>minhnhat47@gmail.com</td>
                            <td>0989224031</td>
                            <td>107.HVT.Cần Thơ</td>
                            <td><img src="" style= "width:150px; height:100px;" alt="Đang cập nhật"></td>
                            <td>######</td>
                            <td>Đầu Bếp</td>
                            <td>Hoạt động</td>
                            <th>Minh Nhật</th>
                            <th>10/10/2024</th>
                            <td class = row>
                              <a class="btn btn-primary col-5" href="{{ route('employees.edit') }}">Sửa</a>
                              <form class="col" method="post" action = "/admin/delete" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài đăng này?')">
                                  <input name="id" type="hidden" value="1">
                                  <button type ="submit" class = "btn btn-danger">Xóa</button>
                              </form>
                            </td>
                      </tbody>
                    </table>
                    <ul class="pagination pagination-primary">
      
                  <li class="page-item"><a class="page-link" href="/admin?page=1">Previous</a></li>
                          <li class="page-item active ml-2"><a class="page-link" href="/admin?page=1">1</a></li>
                  <li class="page-item ml-2"><a class="page-link" href="/admin?page=1">Next</a></li>
              </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>

@endsection