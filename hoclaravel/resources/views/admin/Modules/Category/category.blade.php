@extends('admin.layouts.masterlayout')
@section('title', 'Danh mục')
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
                      <th>Tên danh mục</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($category as $categorys)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td class="text-wrap">{{ $categorys->name }}</td>
              <td class="row">
              <a href="{{ route('admin.category.edit', ['id' => $categorys->id]) }}"
                class="btn btn-primary">Chỉnh sửa</a>
              <form method="POST" action="{{ route('admin.category.destroy', $categorys->id) }}"
                onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                @csrf
                @method('DELETE')
                <input name="id" type="hidden" value="1">
                <button type="submit" class="btn btn-danger">Xóa</button>
              </form>
              </td>
            </tr>
          @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection