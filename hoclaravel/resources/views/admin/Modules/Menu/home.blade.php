@extends('admin.layouts.masterlayout')
@section('title', 'Menu Món Ăn')
@section('content')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-4 mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Danh Sách Món Ăn</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered table-hover table-striped text-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">Ảnh</th>
                                            <th class="text-center">Tên món</th>
                                            <th class="text-center">Giá</th>
                                            <th class="text-center">Thể loại</th>
                                            <th class="text-center">Ngày thêm</th>
                                            <th class="text-center">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td class="text-center">
                                                    <img src="{{ asset('clients/img/' . $product->image) }}"
                                                        style="width: 100px; height:auto; object-fit:cover; border-radius:5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                                                </td>
                                                <td class="text-wrap">{{ $product->name }}</td>
                                                <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->updated_at }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('admin.menu.edit', ['id' => $product->id]) }}">Sửa</a>
                                                    <form method="POST"
                                                        action="{{ route('admin.menu.destroy', $product->id) }}"
                                                        class="d-inline"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
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
</body>

@endsection
