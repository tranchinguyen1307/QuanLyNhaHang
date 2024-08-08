<<<<<<< HEAD
<<<<<<< HEAD
<?php $__env->startSection('title', 'Khách Hàng'); ?>
<?php $__env->startSection('content'); ?>
=======
@extends('admin.layouts.masterlayout')
<<<<<<< HEAD
@section('title','Khách Hàng')
@section('content')
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
=======
<?php $__env->startSection('title','Khách Hàng'); ?>
<?php $__env->startSection('content'); ?>
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <section class="content">
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
                                            <th>Mật khẩu</th>
                                            <th>Người thêm</th>
                                            <th>Ngày thêm</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>1</td>
                                        <td>Nguyễn Nhật Minh</td>
                                        <td>minhnhat47@gmail.com</td>
                                        <td>0989224031</td>
                                        <td>107.HVT.Cần Thơ</td>
                                        <td>######</td>
                                        <th>Minh Nhật</th>
                                        <th>10/10/2024</th>
                                        <td class=row>


                                            <a class="btn btn-primary col-5" href="<?php echo e(route('admin.customer.edit')); ?>">Sửa</a>

                                            <form class="col" method="post" action = "/admin/delete"
                                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài đăng này?')">
                                                <input name="id" type="hidden" value="1">
                                                <button type ="submit" class = "btn btn-danger">Xóa</button>
                                            </form>
                                        </td>
                                    </tbody>
                                </table>
                                <ul class="pagination pagination-primary">

                                    <li class="page-item"><a class="page-link" href="/admin?page=1">Previous</a></li>
                                    <li class="page-item active ml-2"><a class="page-link" href="/admin?page=1">1</a>
                                    </li>
                                    <li class="page-item ml-2"><a class="page-link" href="/admin?page=1">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<<<<<<< HEAD
    <?php $__env->stopSection(); ?>
    <?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/pages/customers.blade.php ENDPATH**/ ?>
    =======
    @extends('admin.layouts.masterlayout')

    @section('title', 'Khách Hàng')

    @section('content')
        <div class="wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Danh sách Khách Hàng</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 5%;">STT</th>
                                                <th style="width: 55%;">Thông Tin Cơ Bản</th>
                                                <th style="width: 40%;">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $stt = 0;
                                            @endphp

                                            @foreach ($customers as $customer)
                                                @php
                                                    $stt++;
                                                @endphp
                                                <tr>
                                                    <td>{{ $stt }}</td>
                                                    <td>
                                                        <strong>{{ $customer->name }}</strong><br>
                                                        <span>Email: {{ $customer->email }}</span><br>
                                                        <span>Địa chỉ: {{ $customer->address }}</span><br>
                                                        <span>Số điện thoại: {{ $customer->phone }}</span>
                                                    </td>
                                                    <td class="actions-column">
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary mr-2"
                                                                href="{{ route('admin.customer.edit', $customer->id) }}"
                                                                title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                            <form method="post"
                                                                action="{{ route('admin.customer.destroy', $customer->id) }}"
                                                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    title="Xóa"><i class="fas fa-trash-alt"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <ul class="pagination pagination-primary mt-3">
                                        <ul class="pagination pagination-primary mt-3 justify-content-center">
                                            {{ $customers->links() }}
                                        </ul>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
            aria-hidden="true">
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
=======
@endsection
=======

@section('title', 'Khách Hàng')

@section('content')
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Khách Hàng</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 5%;">STT</th>
                                            <th style="width: 55%;">Thông Tin Cơ Bản</th>
                                            <th style="width: 40%;">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $stt = 0;
                                        @endphp

                                        @foreach ($customers as $customer)
                                            @php
                                                $stt++;
                                            @endphp
                                            <tr>
                                                <td>{{ $stt }}</td>
                                                <td>
                                                    <strong>{{ $customer->name }}</strong><br>
                                                    <span>Email: {{ $customer->email }}</span><br>
                                                    <span>Địa chỉ: {{ $customer->address }}</span><br>
                                                    <span>Số điện thoại: {{ $customer->phone }}</span>
                                                </td>
                                                <td class="actions-column">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary mr-2" href="{{ route('admin.customer.edit', $customer->id) }}" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                                        <form method="post" action="{{ route('admin.customer.destroy', $customer->id) }}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination pagination-primary mt-3">
                                    <ul class="pagination pagination-primary mt-3 justify-content-center">
                                        {{ $customers->links() }}
                                    </ul>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
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
>>>>>>> 2f6ada3 (CRUD người dùng)
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
=======
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
                          <th>Mật khẩu</th>
                          <th>Người thêm</th>
                          <th>Ngày thêm</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                            <td>1</td>
                            <td>Nguyễn Nhật Minh</td>
                            <td>minhnhat47@gmail.com</td>
                            <td>0989224031</td>
                            <td>107.HVT.Cần Thơ</td>
                            <td>######</td>
                            <th>Minh Nhật</th>
                            <th>10/10/2024</th>
                            <td class = row>
<<<<<<<< HEAD:hoclaravel/resources/views/admin/Modules/Customer/customers.blade.php
                              <a class="btn btn-primary col-5" href="{{ route('admin.customer.edit') }}">Sửa</a>
========
                              <a class="btn btn-primary col-5" href="<?php echo e(route('admin.customer.edit')); ?>">Sửa</a>
>>>>>>>> c22445650e6bb0211aba8ea9460f9e0d3e71147a:hoclaravel/storage/framework/views/74571bc8a553097a4e47c4aaf0e12ff4.php
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/admin/pages/customers.blade.php ENDPATH**/ ?>
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
