@extends('admin.layouts.masterlayout')
@section('title','Menu Món Ăn')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm món ăn</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label >Tên món</label>
                  <input type="text" name="title" class="form-control"  placeholder="Nhập món"  value="">
                </div>
                <div class="form-group">
                    <label >Giá</label>
                    <input type="text" name="title" class="form-control"  placeholder="Nhập tên món"  value="">
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mô tả</label>
                 <textarea id="summernote" name = "content"></textarea>
                </div>
                <div class="form-group">
                  <label >Ảnh</label>
                  <input type="file" name="image" class="form-control pt-1 pl-0 "  >
                </div>
                <div class="form-group pt-3">
                  <label >Thể loại</label>
                  <select name="category" class ="ml-3" >
                        <option  value="1">Món chính</option>
                        <option  value="1">Món phụ</option>
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
z
        </div>
        <!--/.col (right) -->

@endsection
