@extends('admin.layouts.masterlayout')
@section('title', 'Danh sách đặt bàn')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Bảng chưa xác nhận -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Chưa xác nhận</h3>
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
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyên</td>
                                        <td>4</td>
                                        <td>12:00</td>
                                        <td>sbhbdsmjds</td>
                                        <td class="status-cell" data-id="1">Chưa xác nhận</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Chi tiết</a>
                                            <form method="POST" action="#" style="display:inline-block;">
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                            <a href="#" class="btn btn-success">Thanh toán</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Trạng thái
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" data-id="1"
                                                        data-status="Chưa thanh toán cọc">Chưa thanh toán cọc</a>
                                                    <a class="dropdown-item" href="#" data-id="1"
                                                        data-status="Chưa xác nhận">Chưa xác nhận</a>
                                                    <a class="dropdown-item" href="#" data-id="1"
                                                        data-status="Đã xác nhận">Đã xác nhận</a>
                                                    <a class="dropdown-item" href="#" data-id="1"
                                                        data-status="Đã thanh toán">Đã thanh toán</a>
                                                    <a class="dropdown-item" href="#" data-id="1"
                                                        data-status="Đã hủy">Đã hủy</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nhựt</td>
                                        <td>2</td>
                                        <td>13:00</td>
                                        <td>None</td>
                                        <td class="status-cell" data-id="2">Đã xác nhận</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Chi tiết</a>
                                            <form method="POST" action="#" style="display:inline-block;">
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                            <a href="#" class="btn btn-success">Thanh toán</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Trạng thái
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" data-id="2"
                                                        data-status="Chưa thanh toán cọc">Chưa thanh toán cọc</a>
                                                    <a class="dropdown-item" href="#" data-id="2"
                                                        data-status="Chưa xác nhận">Chưa xác nhận</a>
                                                    <a class="dropdown-item" href="#" data-id="2"
                                                        data-status="Đã xác nhận">Đã xác nhận</a>
                                                    <a class="dropdown-item" href="#" data-id="2"
                                                        data-status="Đã thanh toán">Đã thanh toán</a>
                                                    <a class="dropdown-item" href="#" data-id="2"
                                                        data-status="Đã hủy">Đã hủy</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Thêm các hàng dữ liệu cứng khác tương tự -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusItems = document.querySelectorAll('.dropdown-item');
            statusItems.forEach(item => {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    const reservationId = this.dataset.id;
                    const newStatus = this.dataset.status;
                    const statusCell = document.querySelector(
                        `.status-cell[data-id="${reservationId}"]`);
                    statusCell.textContent =
                        newStatus; // Cập nhật trạng thái trực tiếp trên giao diện
                });
            });
        });
    </script>
@endsection
