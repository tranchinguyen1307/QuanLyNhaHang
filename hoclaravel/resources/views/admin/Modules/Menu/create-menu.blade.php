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
            <form enctype="multipart/form-data" action="{{ route('admin.menu.store') }}" method="POST">
              @csrf
              @method('POST')
              <div class="card-body">
                <div class="form-group">
                  <label >Tên món</label>
                  <input type="text" name="name" class="form-control"  placeholder="Nhập Tên Món"  value="">
                </div>
                <div class="form-group">
                    <label >Giá</label>
                    <input type="number" name="price" class="form-control"  placeholder="Nhập Giá"  value="">
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mô tả</label>
                 <textarea id="summernote" name = "content"></textarea>
                </div>
                <div class="form-group">
                  <label >Ảnh</label>
                  <input type="file" name="image" class="form-control pt-1 pl-0 "  >
                </div>
                <div class="form-group">
                  <label for="role_id">Thể loại</label>
                  <select name="category_id" id="category_id" class="form-control">
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
                  @error('role_id')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
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
