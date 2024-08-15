<div class="card mb-4">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Danh mục</h4>
    </div>
    <div class="card-body">
        <ul class="list-unstyled mb-0">
            @foreach ($categories as $category)
            <li><a href="{{ route('client.posts.filterByCategory',$category->id) }}" class="text-decoration-none text-dark">{{ $category->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Bài viết gần đây</h4>
    </div>
    <div class="card-body">
        <div class="list-group">
            @foreach ($newestPosts as $post)
            <a href="/home/detailBlog?id={{ $post->id }}" class="list-group-item list-group-item-action d-flex align-items-center">
                <img src="{{ asset('storage/images/post/avatar/' . $post->avatar) }}" alt="{{ $post->title }}" class="img-thumbnail me-3" style="width: 100px; height: 70px; object-fit: cover;">
                <div>
                    <h5 class="mb-1">{{ $post->title }}</h5>
                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
