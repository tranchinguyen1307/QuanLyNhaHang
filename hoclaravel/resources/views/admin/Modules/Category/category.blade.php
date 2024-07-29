@extends('admin.layouts.masterlayout')
@section('title','Danh mục')
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
                          <td >1</td>
                          <td class="text-wrap">Món chính</td>
                          <td class = "row">
                            <a class="btn btn-primary col-2" href="{{ route('admin.menu.edit') }}">Sửa</a>
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