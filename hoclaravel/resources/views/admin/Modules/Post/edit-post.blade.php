@extends('admin.layouts.masterlayout')
@section('title', 'Sửa Bài Viết')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa Bài Viết</h3>
                    </div>
                    <!-- form start -->

                    <form method="POST" action="{{ route('admin.post.update', $post->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" name="title" class="form-control" placeholder="Nhập Tiêu đề" value="{{ old('title', $post->title) }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="content" id="summernote"  rows="4" placeholder="Nhập Nội dung">{{ old('content', $post->content) }}</textarea>
                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Danh mục</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" name="avatar" id="avatar" class="form-control">
                                @error('avatar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="mt-2">
                                    <img id="preview" src="{{ $post->avatar ? asset('storage/images/post/avatar/' . $post->avatar) : '#' }}" alt="Hình ảnh" class="img-fluid {{ $post->avatar ? '' : 'd-none' }}" style="max-width: 200px;">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
              
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.getElementById('avatar').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('preview');
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush