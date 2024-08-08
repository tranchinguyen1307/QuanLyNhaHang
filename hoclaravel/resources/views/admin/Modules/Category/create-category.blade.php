@extends('admin.layouts.masterlayout')
@section('title','Danh mục')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm danh mục</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.category.store') }}">
              @csrf
              @method('POST')
              <div class="card-body">
                <div class="form-group">
                  <label >Tên danh mục</label>
                  <input type="text" name="name" class="form-control"  placeholder="Nhập tên "  value="">
                </div>
                </div>
              </div>
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