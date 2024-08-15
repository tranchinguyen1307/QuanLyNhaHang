@extends('client.layouts.main')

@section('title', 'Nhà hàng NMN')

@section('content')
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-4">
        <div class="col-md-6">
            <img src="{{ asset('clients/img/' . $product->image) }}" class="img-fluid rounded shadow-sm w-100" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h1 class="mb-3">{{ $product->name }}</h1>
            <p class="fs-4 fw-bold text-success mb-4">Giá: {{ number_format($product->price, 0, ',', '.') }} VND</p>
            <hr>
            <p class="fs-4 fw-bold text-danger mb-4">Mô tả: </p>
            <div class="product-description mb-4">
                {!! $product->description !!}
            </div>
        </div>
    </div>

    <hr class="my-4">

    <h2 class="mb-3">Bình luận:</h2>
    
    @if (auth()->check())
    <form action="{{ route('client.san-pham.comment', ['id' => $product->id]) }}" method="POST" class="mb-4">
        @csrf
        <div class="input-group">
            <input type="text" name="comment" class="form-control" placeholder="Nhập bình luận của bạn" required>
            <button type="submit" class="btn btn-primary">Bình luận</button>
        </div>
    </form>
    @else
    <div class="alert alert-info">Đăng nhập để bình luận</div>
    @endif

    @if($comments->isEmpty())
    <p class="text-muted">Chưa có bình luận nào.</p>
    @else
    <ul class="list-unstyled">
        @foreach($comments as $comment)
        <li class="media mb-4">
            <img src="{{ $comment->user->avatar_url ? asset('clients/img/' . $comment->user->avatar_url) : asset('clients/img/default-avatar.jpg') }}" class="mr-3 rounded-circle" alt="{{ $comment->user->name }}" style="width: 64px; height: 64px;">
            <div class="media-body">
                <h5 class="mt-0 mb-1">{{ $comment->user->name }}</h5>
                <small class="text-muted">{{ $comment->created_at->format('d/m/Y H:i') }}</small>
                <p class="mt-2">{{ $comment->comment }}</p>

                @if(auth()->check() && auth()->user()->id == $comment->user_id)
                <form action="{{ route('client.san-pham.destroy', ['id' => $comment->id, 'id_product' => $product->id]) }}" method="POST" onsubmit="return confirmDelete();" class="mt-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Xoá</button>
                </form>
                @endif
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</div>

<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa bình luận này?');
    }
</script>
@endsection
