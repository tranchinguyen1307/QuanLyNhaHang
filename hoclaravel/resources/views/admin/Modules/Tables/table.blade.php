@extends('admin.layouts.masterlayout')
<<<<<<< HEAD
@section('title', 'Danh sách đặt bàn')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Thông báo thành công -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- Bảng danh sách đặt bàn -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách đặt bàn</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                style="max-width: 200px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                Tên khách và Email
                                            </th>
                                            <th>Số điện thoại</th>
                                            <th>Lượng khách</th>
                                            <th>Thời gian</th>
                                            <th>Tiền cọc</th>
                                            <th>Trạng thái</th>
                                            <th>Ghi chú</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservation as $res)
                                            <tr>
                                                <td>
                                                    {{ $res->customer_name }}<br>
                                                    <small>{{ $res->customer_email }}</small>
                                                </td>
                                                <td>{{ $res->customer_phone }}</td>
                                                <td>{{ $res->guest_count }}</td>
                                                <td>{{ $res->reservation_time }}</td>
                                                <td>{{ $res->deposit }}</td>
                                                <td>
                                                    <span
                                                        class="badge
                                                                    @if ($res->status == 'Chưa thanh toán cọc') bg-warning
                                                                    @elseif ($res->status == 'Đã thanh toán cọc') bg-primary
                                                                    @elseif ($res->status == 'Đã hủy') bg-danger @endif
                                                                "
                                                        style="font-size: 14px">
                                                        {{ $res->status }}
                                                    </span>
                                                </td>
                                                <td>{{ $res->note ?? 'Không có' }}</td>
                                                <td>
                                                    {{-- Chi tiết --}}
                                                    <a href="{{ route('admin.table.show', $res->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="ion ion-eye"></i> </a>
                                                    <a href="{{ route('admin.table.edit', $res->id) }}"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="ion ion-edit"></i>
                                                    </a>
                                                    {{-- Xóa --}}
                                                    <form method="POST"
                                                        action="{{ route('admin.table.destroy', $res->id) }}"
                                                        style="display:inline-block;"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa đặt bàn này không?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="ion ion-trash-a"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
=======
@section('title','Đặt Bàn')
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
                          <th>Số Bàn</th>
                          <th>Tên khách</th>
                          <th>Lượng khách</th>
                          <th>Thời gian</th>
                          <th>Tiền cọc</th>
                          <th>Người thêm</th>
                          <th>Ngày thêm</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                            <td>1</td>
                            <td>8</td>
                            <td>Minh Nhật</td>
                            <td>4</td>
                            <td>8:00 PM</td>
                            <td>200.000 VNĐ</td>
                            <td>Minh Nhật</td>
                            <td>10/10/2024</td>
                            <td class = row>
                              <a class="btn btn-primary col-5" href="{{ route('admin.table.edit') }}">Sửa</a>
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
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
