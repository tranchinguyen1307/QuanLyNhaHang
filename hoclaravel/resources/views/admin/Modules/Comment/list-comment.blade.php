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
                                                <th>Người bình luận</th>
                                                <th>Thời gian bình luận</th>
                                                <th>Nội dung bình luận</th>

                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($comments as $comment)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-wrap">{{ $comment->user->name }}</td>
                                                    <td class="text-wrap">{{ $comment->created_at->format('d/m/Y H:i') }}</td>

                                                    <td class="text-wrap">{{ $comment->comment }}</td>


                                                    <td class="row">
                                                     
                                                        <form method="POST"
                                                            action="{{ route('admin.comment.destroy',['id'=>  $comment->id,'id_product'=>$product_id]) }}"
                                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa bình luận này?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type ="submit" class = "btn btn-danger">Xóa</button>
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
