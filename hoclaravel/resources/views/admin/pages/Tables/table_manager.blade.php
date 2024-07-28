@extends('admin.layouts.masterlayout')
@section('title', 'Khách đã nhận bàn')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Thông tin đặt bàn -->
                    <div class="border border-warning p-3 mb-3">
                        <h3>Thông tin đặt bàn</h3>
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
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
                                                <textarea id="summernote" name="description"></textarea>
                                                {{-- {{ $description }} --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Quản lý món ăn -->

                            <div class="row">
                                <div class="col-md-6">

                                    <h4>Thêm món ăn khách đã chọn</h4>
                                    <form method="post">
                                        {{-- action="{{ route('admin.add_food_to_reservation') }} --}}
                                        @csrf
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Món ăn</th>
                                                    <td>
                                                        <select name="food_id" class="form-control">
                                                            <!-- Lấy danh sách các món ăn từ cơ sở dữ liệu -->
                                                            {{-- @foreach ($foods as $food)
                                                            <option value="{{ $food->id }}">{{ $food->name }}</option>
                                                        @endforeach --}}
                                                            <option value="1"></option>
                                                            <option value="1"></option>
                                                            <option value="1"></option>
                                                            <option value="1"></option>
                                                            <option value="1"></option>
                                                            <option value="1"></option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Số lượng</th>
                                                    <td>
                                                        <input type="number" name="quantity" class="form-control"
                                                            placeholder="Nhập số lượng" value="1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <button type="submit" class="btn btn-secondary">Thêm
                                                            món</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>



                                <div class="col-md-6">
                                    <h4>Danh sách món ăn đã chọn</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Món ăn</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <!-- Lấy danh sách các món ăn đã chọn từ cơ sở dữ liệu -->
                                            @foreach ($selectedFoods as $selectedFood)
                                                <tr>
                                                    <td>{{ $selectedFood->food->name }}</td>
                                                    <td>{{ $selectedFood->quantity }}</td>
                                                    <td>{{ $selectedFood->total_price }}</td>
                                                </tr>
                                            @endforeach --}}
                                            <!-- Ví dụ dữ liệu -->
                                            <tr>
                                                <td>Món ăn 1</td>
                                                <td>1</td>
                                                <td>100,000 VND</td>
                                            </tr>
                                            <tr>
                                                <td>Món ăn 2</td>
                                                <td>2</td>
                                                <td>200,000 VND</td>
                                            </tr>
                                            <tr>
                                                <td>Món ăn 3</td>
                                                <td>1</td>
                                                <td>150,000 VND</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2" class="text-right"><strong>Tổng tất cả:</strong></td>
                                                <td><strong>450,000 VND</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                    </div>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button type="button" class="btn btn-success" onclick="window.location.href=''">Thanh
                        toán</button>
                    {{-- {{ route('admin.payment', ['table_number' => 1]) }} --}}
                </div>
                </form>
            </div>
        </div>

    </section>
@endsection
