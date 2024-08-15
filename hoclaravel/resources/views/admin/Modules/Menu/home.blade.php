@extends('admin.layouts.masterlayout')
@section('title', 'Danh Sách Món Ăn')
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
                                                {{-- <th>STT</th> --}}
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
                                                    {{-- <td>{{ $product->category_id }}</td> --}}
                                                    <td>
                                                        <img src="{{ asset('clients/img/' . $product->image) }}"
                                                            style= "width: 150px; height:auto; object-fit:cover; border-radius:5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                                                    </td>
                                                    <td class="text-wrap">{{ $product->name }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    <td>
                                                        {{ $product->category->name }}
                                                    </td>
                                                    {{-- <td>{{ $product->created_at}}</td> --}}
                                                    <td>{{ $product->updated_at}}</td>
                                                    {{-- <td>{{ $product->created_at }}</td> --}}
                                                    <td class=row>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.menu.edit', ['id' => $product->id]) }}">Sửa</a>
                                                        <form method="POST"
                                                            action="{{ route('admin.menu.destroy', $product->id) }}"
                                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input name="id" type="hidden" value="1">
                                                            <button type ="submit" class = "btn btn-danger" >Xóa</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center mt-3">
                                        {{ $products->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection