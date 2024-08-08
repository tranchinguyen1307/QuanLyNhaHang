@extends('admin.layouts.masterlayout')
<<<<<<< HEAD
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
              <h3 class="card-title">Sửa món ăn</h3>
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

        </div>
        <!--/.col (right) -->
      </div>
@endsection
=======
@section('title', 'Menu Món Ăn')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa món ăn</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form enctype="multipart/form-data" action="{{ route('admin.menu.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên món</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nhập Tên Món"
                                           value="{{ $product->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="number" name="price" class="form-control" placeholder="Nhập Giá"
                                           value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea id="summernote" name="content">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    @if ($product->image)
                                        <img src="{{ asset('clients/img/' . $product->image) }}"
                                             style="width: 150px; height:auto; object-fit:cover; border-radius:5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                                    @endif
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Danh mục</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
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
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
