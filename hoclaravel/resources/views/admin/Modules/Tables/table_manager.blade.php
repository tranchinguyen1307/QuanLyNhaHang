@extends('admin.layouts.masterlayout')
@section('title', 'Chi tiết đặt bàn')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Card thông tin đặt bàn -->
                    <div class="card card-primary mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin đặt bàn</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Tên khách</th>
                                        <td>{{ $reservation->customer_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $reservation->customer_email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Số điện thoại</th>
                                        <td>{{ $reservation->customer_phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Số lượng khách</th>
                                        <td>{{ $reservation->guest_count }}</td>
                                    </tr>
                                    <tr>
                                        <th>Thời gian</th>
                                        <td>{{ $reservation->reservation_time }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tiền cọc</th>
                                        <td>{{ number_format($reservation->deposit, 0, ',', '.') }} VND</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Card chọn món cho khách -->
                    <div class="card card-primary mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Chọn món cho khách</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.table.addItems', $reservation->id) }}" method="POST">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên món</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Thêm vào</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
                                                <td>
                                                    <input type="number" name="quantity[{{ $product->id }}]"
                                                        value="1" min="1" class="form-control">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary" name="product_id"
                                                        value="{{ $product->id }}">Thêm món</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>

                    <!-- Card hiển thị các món đã chọn -->
                    <div class="card card-primary mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Món đã chọn</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tên món</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (session('cart', []) as $item)
                                        <tr>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ number_format($item['price'], 0, ',', '.') }} VND</td>
                                            <td>{{ $item['quantity'] }}</td>
                                            <td>{{ number_format($item['total'], 0, ',', '.') }} VND</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-right">Tổng tiền:</th>
                                        <td>{{ number_format(array_sum(array_column(session('cart', []), 'total')), 0, ',', '.') }}
                                            VND</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <!-- Nút thanh toán -->
                    <a href="{{ route('admin.table.check_out', $reservation->id) }}" type="button"
                        class="btn btn-success mt-3">Thanh toán</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
