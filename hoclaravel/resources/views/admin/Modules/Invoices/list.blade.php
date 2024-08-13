@extends('admin.layouts.masterlayout')
@section('title', 'Danh sách hóa đơn')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Danh sách hóa đơn -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách hóa đơn</h3>
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
                                        <th>Tổng cộng</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservationsWithTotal as $reservation)
                                        <tr>
                                            <td>
                                                {{ $reservation->customer_name }}<br>
                                                <small>{{ $reservation->customer_email }}</small>
                                            </td>
                                            <td>{{ $reservation->customer_phone }}</td>
                                            <td>{{ $reservation->guest_count }}</td>
                                            <td>{{ $reservation->reservation_time }}</td>
                                            <td>{{ number_format($reservation->deposit, 0, ',', '.') }} VND</td>
                                            <td>
                                                {{ number_format(array_sum(array_column($cart, 'total')) + $reservation->deposit, 0, ',', '.') }}
                                                VNĐ
                                            </td>

                                            <td>
                                                <!-- Hiển thị trạng thái -->
                                                <span class="badge
                                                        @if ($reservation->status == 'Đã thanh toán') bg-primary @endif
                                                        " style="font-size: 14px;">
                                                    {{ $reservation->status }}
                                                </span>
                                            </td>
                                            <td>
                                                <!-- Chi tiết -->
                                                <form action="{{ route('admin.invoices.showDetail', $reservation->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm mx-2 my-2">
                                                        <i class="ion ion-eye"></i>
                                                    </button>
                                                </form>
                                                {{-- Xóa --}}
                                                <form method="POST"
                                                    action="{{ route('admin.invoices.destroy', $reservation->id) }}"
                                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa đặt bàn này không?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mx-2 my-"><i
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