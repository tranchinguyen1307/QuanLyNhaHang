@extends('admin.layouts.masterlayout')
@section('title', 'Thanh toán')
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

                    <!-- Thông tin đặt bàn và thanh toán -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Thanh toán</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tên khách</th>
                                        <th>Lượng khách</th>
                                        <th>Thời gian</th>
                                        <th>Ghi chú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $reservation->customer_name }}</td>
                                        <td>{{ $reservation->guest_count }}</td>
                                        <td>{{ $reservation->reservation_time }}</td>
                                        <td>
                                            <p>{{ $reservation->description }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row mt-4">
                                <!-- Danh sách món ăn đã chọn -->
                                <div class="col-md-12">
                                    <h4>Danh sách món ăn đã chọn</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Món ăn</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cart as $product_id => $details)
                                                <tr>
                                                    <td>{{ $details['name'] }}</td>
                                                    <td>{{ $details['quantity'] }}</td>
                                                    <td>{{ number_format($details['price'], 0, ',', '.') }} VND</td>
                                                    <td>{{ number_format($details['total'], 0, ',', '.') }} VND</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3" class="text-right"><strong>Tổng cộng:</strong></td>
                                                <td><strong>{{ number_format(array_sum(array_column($cart, 'total')), 0, ',', '.') }}
                                                        VND</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h4>Phương thức thanh toán</h4>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="payment_method" value="cash" checked> Tiền mặt
                                        </label>
                                        <br>
                                        <label>
                                            <input type="radio" name="payment_method" value="transfer"> Chuyển khoản
                                        </label>
                                    </div>
                                    <div id="qr-code" style="display: none;">
                                        <img src="{{ asset('assets/dist/img/MyQr.jpg') }}" alt="QR Code for transfer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="{{ route('admin.invoices.show', $reservation->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    Khách hàng đã thanh toán
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cashRadio = document.querySelector('input[name="payment_method"][value="cash"]');
            const transferRadio = document.querySelector('input[name="payment_method"][value="transfer"]');
            const qrCode = document.getElementById('qr-code');

            cashRadio.addEventListener('change', function() {
                if (this.checked) {
                    qrCode.style.display = 'none';
                }
            });

            transferRadio.addEventListener('change', function() {
                if (this.checked) {
                    qrCode.style.display = 'block';
                }
            });
        });
    </script>
@endsection
