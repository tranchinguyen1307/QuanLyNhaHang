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
                                                <th>Tên bài viết</th>
                                                <th>Tổng bình luận</th>

                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-wrap">{{ $product->name }}</td>
                                                    <td class="text-wrap">{{ $product->comments_count }}</td>

                                                    <td class="row">
                                                        @if($product->comments_count == 0)
                                                        Không thể thao tác
                                                        @else
                                                        <a href="{{ route('admin.comment.detail', ['id' => $product->id]) }}"
                                                            class="btn btn-primary">Xem bình luận</a>
                                                       @endif
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
