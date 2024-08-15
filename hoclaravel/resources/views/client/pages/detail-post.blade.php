@extends('client.layouts.post')

@section('title', 'Bài viết')
@section('post_content')
    <div class="container ">
        <div class="card single_post mb-4 shadow-sm">
            <article class="article">
                <!-- Hình ảnh -->
                <div class="article-img">
                    <img src="{{ asset('storage/images/post/avatar/' . $posts->avatar) }}" 
                         alt="{{ $posts->title }}" 
                         class="img-fluid rounded-top" 
                         style="object-fit: cover; width: 100%; height: auto;">
                </div>

                <!-- Tiêu đề và thông tin -->
                <div class="article-title p-4">
                    <h2 class="mb-3">{{ $posts->title }}</h2>
                    <div class="media mb-3">
                        <div class="media-body text-muted">
                            <span>{{ $posts->created_at->diffForHumans() }}</span> 
                            <span class="mx-2">|</span>
                            <span>Tác giả: {{ $posts->author_name }}</span> 
                            <span class="mx-2">|</span>
                            <span>Loại: <a href="{{ route('client.posts.filterByCategory',$posts->category_id) }}">{{ $posts->category_name }}</a></span>
                        </div>
                    </div>
                </div>

                <!-- Nội dung bài viết -->
                <div class="article-content p-4">
                    <p class="text-justify">{!! $posts->content !!}</p>
                </div>
            </article>
        </div>
    </div>
@endsection
