@extends('admin.layouts.masterlayout')
@section('title','Đặt Bàn')
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
                <div class="form-group">
                  <label >Số bàn</label>
                  <input type="number" name="title" class="form-control"  placeholder="Nhập số bàn"  value="">
                </div>
                <div class="form-group">
                    <label >Tên Khách</label>
                    <input type="text" name="title" class="form-control"  placeholder="Nhập tên khách"  value="">
                </div>
                <div class="form-group">
                    <label >Lượng Khách</label>
                    <input type="number" name="title" class="form-control"  placeholder="Nhập lượng khách"  value="">
                </div>
                <div class="form-group">
                    <label >Thời gian</label>
                    <input type="time" name="title" class="form-control"  placeholder="Nhập thời gian"  value="">
                </div>
                <div class="form-group pt-3">
                    <label >Tiền cọc</label>
                    <select name="deposit" class ="ml-3" >
                          <option  value="1">200.000 VNĐ</option>
                          <option  value="2">400.000 VNĐ</option>
                          <option  value="3">600.000 VNĐ</option>
                    </select>
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
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      
@endsection