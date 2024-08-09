@extends('admin.layouts.masterlayout')
@section('title','Danh mục')
@section('content')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-4 mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary text-white">
                <h3 class="card-title">Danh Sách Danh Mục</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover table-striped text-nowrap">
                  <thead class="thead-light">
                    <tr>
                      <th class="text-center">STT</th>
                      <th class="text-center">Tên danh mục</th>
                      <th class="text-center">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($category as $categorys)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td class="text-wrap">{{ $categorys->name }}</td>
                      <td class="text-center">
                        <a href="{{ route('admin.category.edit', ['id' => $categorys->id]) }}" class="btn btn-sm btn-primary">Chỉnh sửa</a>
                        <form method="POST" action="{{ route('admin.category.destroy', $categorys->id) }}" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <ul class="pagination pagination-sm justify-content-center mt-4">
                  <li class="page-item"><a class="page-link" href="/admin?page=1">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="/admin?page=1">1</a></li>
                  <li class="page-item"><a class="page-link" href="/admin?page=2">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

@endsection
