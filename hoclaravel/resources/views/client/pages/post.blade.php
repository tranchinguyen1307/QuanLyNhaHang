@extends('client.layouts.post')

@section('title', 'Bài viết')
@section('post_content')
<div class="container">
    @foreach ($posts as $post)
        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="card-img-top" src="{{ asset('storage/images/post/avatar/' . $post->avatar) }}"
                        alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                </div>
                <h3></h3>
                <h3><a href="{{ route('client.detail.post', $post->id) }}">{{ $post->title }}</a></h3>
            </div>
            <div class="footer">
                <div class="actions">
                    <a href="{{ route('client.detail.post', $post->id) }}" class="btn btn-outline-secondary">Đọc</a>
                </div>
                <ul class="stats">
                    <li><a href="javascript:void(0);">{{ $post->author_name}}</a></li>
                    <li><a href="javascript:void(0);"
                            class="fa fa-date">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</a></li>
                    <li><a href="javascript:void(0);" class="fa fa-comment"></a></li>
                </ul>
            </div>
        </div>
    @endforeach
    <ul class="pagination pagination-primary">
        {{ $posts->links() }}
    </ul>
</div>
@endsection