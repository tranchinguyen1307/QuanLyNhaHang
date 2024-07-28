@extends('admin.layouts.masterlayout')
@section('title', 'Đặt Bàn')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Bàn</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên khách</label>
                                            <input type="text" name="customer_name" class="form-control"
                                                placeholder="Nhập tên khách" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="customer_email" class="form-control"
                                                placeholder="Nhập email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="text" name="customer_phone" class="form-control"
                                                placeholder="Nhập số điện thoại" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Số người</label>
                                            <input type="number" name="guest_count" class="form-control"
                                                placeholder="Nhập số người" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ngày giờ</label>
                                            <input type="datetime-local" name="reservation_time" class="form-control"
                                                placeholder="Nhập ngày giờ" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Trạng thái</label>
                                            <select name="status" class="form-control">
                                                <option value="Chưa thanh toán cọc">Chưa thanh toán cọc</option>
                                                <option value="Chưa xác nhận">Chưa xác nhận</option>
                                                <option value="Đã xác nhận">Đã xác nhận</option>
                                                <option value="Đã thanh toán">Đã thanh toán</option>
                                                <option value="Đã hủy">Đã hủy</option>
                                            </select>
                                        </div>
                                        <div class="form-group pt-3">
                                            <label>Tiền đã cọc</label>
                                            <input type="number" name="deposit" class="form-control"
                                                placeholder="Nhập số tiền đã cọc" min="0" step="1000"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Danh sách món ăn</label>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Danh mục</th>
                                                        <th>Món ăn</th>
                                                        <th>Giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Mẫu cho danh mục và món ăn -->
                                                    {{-- @foreach ($categories as $category) --}}
                                                    <tr>
                                                        <td rowspan="3">Danh mục 1</td>
                                                        <!-- Giả sử danh mục có 3 món ăn -->
                                                        <td>
                                                            <select name="food_ids[]" class="form-control">
                                                                <option value="1">Món ăn 1</option>
                                                                <option value="2">Món ăn 2</option>
                                                                <option value="3">Món ăn 3</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" name="food_prices[]" class="form-control"
                                                                value="50,000 VND" readonly></td>
                                                        <td><input type="number" name="food_quantities[]"
                                                                class="form-control" value="1"></td>
                                                        <td><input type="text" name="food_totals[]" class="form-control"
                                                                value="50,000 VND" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select name="food_ids[]" class="form-control">
                                                                <option value="1">Món ăn 1</option>
                                                                <option value="2">Món ăn 2</option>
                                                                <option value="3">Món ăn 3</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" name="food_prices[]" class="form-control"
                                                                value="60,000 VND" readonly></td>
                                                        <td><input type="number" name="food_quantities[]"
                                                                class="form-control" value="1"></td>
                                                        <td><input type="text" name="food_totals[]" class="form-control"
                                                                value="60,000 VND" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select name="food_ids[]" class="form-control">
                                                                <option value="1">Món ăn 1</option>
                                                                <option value="2">Món ăn 2</option>
                                                                <option value="3">Món ăn 3</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" name="food_prices[]"
                                                                class="form-control" value="70,000 VND" readonly></td>
                                                        <td><input type="number" name="food_quantities[]"
                                                                class="form-control" value="1"></td>
                                                        <td><input type="text" name="food_totals[]"
                                                                class="form-control" value="70,000 VND" readonly></td>
                                                    </tr>
                                                    {{-- @endforeach --}}
                                                    <tr>
                                                        <td colspan="4" class="text-right"><strong>Tổng cộng:</strong>
                                                        </td>
                                                        <td><input type="text" name="total_amount"
                                                                class="form-control" value="180,000 VND" readonly></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
