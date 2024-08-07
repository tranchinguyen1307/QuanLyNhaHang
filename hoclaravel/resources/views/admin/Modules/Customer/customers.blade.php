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
