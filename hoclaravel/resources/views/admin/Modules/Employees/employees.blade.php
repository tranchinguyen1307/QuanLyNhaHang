@extends('admin.layouts.masterlayout')

@section('title', 'Nhân Viên')

@section('content')
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Nhân Viên</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ và Tên</th>
                                            <th>Hình ảnh</th>
                                            <th>Địa chỉ</th>
                                            <th>Email</th>
                                            <th>Chức vụ</th>
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

                                        @foreach ($employees as $employee)
                                            @php
                                                $stt++;
                                            @endphp
                                            <tr>
                                                <td>{{ $stt }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td><img src="{{ asset('storage/images/employees/' . $employee->img) }}" class="img-fluid"
                                                    style="width: 150px; height: 150px;" alt="Đang cập nhật"></td>
                                                <td class="text-wrap">{{ $employee->address }}</td>
                                                <td>{{ $employee->email }}</td>
                                                @foreach ($roles as $role)
                                                    @if ($employee->role_id == $role->id)
                                                        <td>{{ $role->name }}</td>
                                                    @endif
                                                @endforeach
                                                <td><b>
                                                        <p class="text-danger">
                                                            {{ number_format($employee->salary, 0, ',', ',') }} VNĐ</p>
                                                    </b></td>
                                                <td>
                                                    @if ($employee->status == 1)
                                                        <h5><span class="badge badge-success badge-lg">Đang làm</span></h5>
                                                    @else
                                                        <h5><span class="badge badge-danger">Nghỉ</span></h5>
                                                    @endif
                                                </td>
                                                <td><b>{{ \Carbon\Carbon::parse($employee->created_at)->format('d/m/Y') }}</b>
                                                </td>
                                                <td class="d-flex">
                                                    <a class="btn btn-primary mr-2" href="{{ route('admin.employees.edit', $employee->id) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    <form method="post"
                                                        action="{{ route('admin.employees.destroy', $employee->id) }}"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa nhân viên này?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination pagination-primary mt-3">
                                    <li class="page-item"><a class="page-link" href="">Previous</a></li>
                                    <li class="page-item active ml-2"><a class="page-link" href="">1</a></li>
                                    <li class="page-item ml-2"><a class="page-link" href="">Next</a></li>
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
                    <i class="fas fa-check-circle me-2"></i>
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
