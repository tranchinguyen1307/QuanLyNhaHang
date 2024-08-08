@extends('admin.layouts.masterlayout')

@section('title', 'Nhân Viên')

@section('content')
    <div class="wrapper">
        <section class="content">
<<<<<<< HEAD
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Nhân Viên</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Thông Tin Cơ Bản</th>
                                            <th>Hình ảnh</th>
                                            <th>Lương</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày vào làm</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $stt = 0;
                                        @endphp

=======
<<<<<<< HEAD
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
                              <a class="btn btn-primary col-5" href="{{ route('admin.employees.edit') }}">Sửa</a>
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
=======
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Nhân Viên</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Thông Tin Cơ Bản</th>
                                            <th>Hình ảnh</th>
                                            <th>Lương</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày vào làm</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $stt = 0;
                                        @endphp

>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
                                        @foreach ($employees as $employee)
                                            @php
                                                $stt++;
                                            @endphp
                                            <tr>
                                                <td>{{ $stt }}</td>
                                                <td>
                                                    <strong>{{ $employee->name }}</strong><br>
                                                    Email: {{ $employee->email }}<br>
                                                    Địa chỉ: {{ $employee->address }}<br>
                                                    Số điện thoại: {{ $employee->phone }}
                                                </td>
                                                <td>
<<<<<<< HEAD
                                                    <img src="{{ asset('storage/images/employees/' . $employee->img) }}"
                                                        class="img-fluid rounded" style="width: 100px; height: 100px;"
                                                        alt="Hình ảnh nhân viên">
=======
                                                    <img src="{{ asset('storage/images/employees/' . $employee->img) }}" class="img-fluid rounded"
                                                        style="width: 100px; height: 100px;" alt="Hình ảnh nhân viên">
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
                                                </td>
                                                <td>
                                                    <p class="text-danger">
                                                        {{ number_format($employee->salary, 0, ',', ',') }} VNĐ
                                                    </p>
                                                </td>
                                                <td>
                                                    @if ($employee->status == 1)
                                                        <h5><span class="badge badge-success badge-lg">Đang làm</span></h5>
                                                    @else
                                                        <h5><span class="badge badge-danger">Nghỉ</span></h5>
                                                    @endif
                                                </td>
<<<<<<< HEAD
                                                <td><b>{{ \Carbon\Carbon::parse($employee->created_at)->format('d/m/Y') }}</b>
                                                </td>
                                                <td class="actions-column">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary mr-2"
                                                            href="{{ route('admin.employees.edit', $employee->id) }}"
                                                            title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                        <form method="post"
                                                            action="{{ route('admin.employees.destroy', $employee->id) }}"
                                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" title="Xóa"><i
                                                                    class="fas fa-trash-alt"></i></button>
=======
                                                <td><b>{{ \Carbon\Carbon::parse($employee->created_at)->format('d/m/Y') }}</b></td>
                                                <td class="actions-column">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary mr-2" href="{{ route('admin.employees.edit', $employee->id) }}" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                        <form method="post" action="{{ route('admin.employees.destroy', $employee->id) }}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" title="Xóa"><i class="fas fa-trash-alt"></i></button>
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination pagination-primary mt-3 justify-content-center">
                                    {{ $employees->links() }}
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
<<<<<<< HEAD
=======
>>>>>>> 2f6ada3 (CRUD người dùng)
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
                </div>
            </div>
        </section>
    </div>

<<<<<<< HEAD
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
=======
<<<<<<< HEAD
                                        <li class="page-item"><a class="page-link" href="/admin?page=1">Previous</a></li>
                                        <li class="page-item active ml-2"><a class="page-link" href="/admin?page=1">1</a>
                                        </li>
                                        <li class="page-item ml-2"><a class="page-link" href="/admin?page=1">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
=======
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
        <div class="modal-dialog" role="document">
            <div class="modal-content text-dark">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="successModalLabel">Thông Báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="">
                        {{ session('success') }}
<<<<<<< HEAD
=======
>>>>>>> 2f6ada3 (CRUD người dùng)
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            @if (session('success'))
                $('#successModal').modal('show');
            @endif
        });
    </script>
@endpush
