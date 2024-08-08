@extends('admin.layouts.masterlayout')
<<<<<<< HEAD
@section('title','Menu Món Ăn')
@section('content')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Giá</th>
                        <th>Thể loại</th>
                        <th>Image</th>
                        <th>Người thêm</th>
                        <th>Ngày thêm</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                          <td >1</td>
                          <td class="text-wrap">Phở</td>
                          <td>20.000 VNĐ</td>
                          <td>Món chính</td>
                          <td><img src="" style= "width:150px; height:100px;" alt="Đang cập nhật"></td>
                          <td>Minh Toàn</td>
                          <td>10/10/2024</td>
                          <td class = row>
                            <a class="btn btn-primary col-5" href="{{ route('admin.menu.edit') }}">Sửa</a>
                            <form class="col" method="post" action = "/admin/delete" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài đăng này?')">
                                <input name="id" type="hidden" value="1">
                                <button type ="submit" class = "btn btn-danger">Xóa</button>
                            </form>
                          </td>
                    </tbody>
                  </table>
                  <ul class="pagination pagination-primary">
    
                <li class="page-item"><a class="page-link" href="/admin?page=1">Previous</a></li>
                        <li class="page-item active ml-2"><a class="page-link" href="/admin?page=1">1</a></li>
                <li class="page-item ml-2"><a class="page-link" href="/admin?page=1">Next</a></li>
            </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
@endsection
=======
@section('title', 'Menu Món Ăn')
@section('content')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Ảnh</th>
                                                <th>Tên món</th>
                                                <th>Giá</th>
                                                <th>Thể loại</th>
                                                <th>Ngày thêm</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('clients/img/' . $product->image) }}"
                                                            style= "width: 150px; height:auto; object-fit:cover; border-radius:5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                                                    </td>
                                                    <td class="text-wrap">{{ $product->name }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    <td>
                                                        {{ $product->category->name }}
                                                    </td>
                                                    <td>{{ $product->updated_at }}</td>
                                                    <td class=row>
                                                        <a class="btn btn-primary col-5"
                                                            href="{{ route('admin.menu.edit', ['id' => $product->id]) }}">Sửa</a>
                                                        <form method="POST"
                                                            action="{{ route('admin.menu.destroy', $product->id) }}"
                                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input name="id" type="hidden" value="1">
                                                            <button type ="submit" class = "btn btn-danger">Xóa</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <ul class=" mx-auto pagination pagination-primary ">
                                        <li class="page-item"><a class="page-link" href="/admin?page=1">Previous</a></li>
                                        <li class="page-item active ml-2"><a class="page-link" href="/admin?page=1">1</a>
                                        </li>
                                        <li class="page-item ml-2"><a class="page-link" href="/admin?page=1">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    @endsection
>>>>>>> d037bc0dc73296dc76ee26ec1c09e0cdbe586e78
