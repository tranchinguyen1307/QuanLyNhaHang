@extends('admin.layouts.masterlayout')
@section('title', 'Thanh toán')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                        <th>Số bàn</th>
                                        <th>Tên khách</th>
                                        <th>Lượng khách</th>
                                        <th>Thời gian</th>
                                        <th>Ghi chú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        {{-- {{ $table_number }} --}}
                                        <td>Nguyên</td>
                                        {{-- {{ $customer_name }} --}}
                                        <td>4</td>
                                        {{-- {{ $guest_count }} --}}
                                        <td>12:00</td>
                                        {{-- {{ $reservation_time }} --}}
                                        <td>
                                            <p name="description" readonly>sbhbdsmjds</p>
                                            {{-- {{ $description }} --}}
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
                                            {{-- <!-- Lấy danh sách các món ăn đã chọn từ cơ sở dữ liệu -->
                                            @foreach ($selectedFoods as $selectedFood)
                                                <tr>
                                                    <td>{{ $selectedFood->food->name }}</td>
                                                    <td>{{ $selectedFood->quantity }}</td>
                                                    <td>{{ number_format($selectedFood->food->price, 0, ',', '.') }} VND</td>
                                                    <td>{{ number_format($selectedFood->food->price * $selectedFood->quantity, 0, ',', '.') }} VND</td>
                                                </tr>
                                            @endforeach --}}
                                            <tr>
                                                <td>Món ăn 1</td>
                                                <td>2</td>
                                                <td>50,000 VND</td>
                                                <td>100,000 VND</td>
                                            </tr>
                                            <tr>
                                                <td>Món ăn 2</td>
                                                <td>1</td>
                                                <td>50,000 VND</td>
                                                <td>50,000 VND</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right"><strong>Tổng cộng:</strong></td>
                                                <td><strong>150,000 VND</strong></td>
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
                            <button type="button" class="btn btn-success" onclick="window.location.href=''">
                                Khách hàng đã thanh toán
                            </button>
                            {{-- {{ route('admin.payment', ['table_number' => 1]) }} --}}
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
