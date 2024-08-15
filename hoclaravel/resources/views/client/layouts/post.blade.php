@extends('client.layouts.main')

@section('title', 'Bài viết')
@section('content')
<div class="container">
    <div id="main-content" class="blog-page">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 left-box">
               @yield('post_content')
            </div>
            <div class="col-lg-4 col-md-12 right-box">
                <x-client.PostSidebar />
    
            </div>
        </div>
    
    </div>
</div>


@endsection