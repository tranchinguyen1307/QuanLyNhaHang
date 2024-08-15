<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Post\StorePostRequest;
use App\Models\Admin\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::select('posts.*', 'employees.name as author_name')
            ->join('employees', 'posts.employee_id', '=', 'employees.id')
            ->paginate(5);
        return view('admin.Modules.Post.post', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $catgories = Category::orderBy('id', 'asc')->where('style', 'post')->get();
        return view('admin.Modules.Post.create-post', [
            'categories' => $catgories,
        ]);
    }
    public function store(StorePostRequest $request)
    {

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'avatar' => $request->input('avatar'),
            'employee_id' => Auth::guard('employee')->id(),
            'category_id' => $request->category_id,
        ]);
        return redirect('/admin/post')->with('success', 'Bài viết đã được tạo thành công!');
    }

    public function update(StorePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'avatar' => $request->input('avatar'),
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.post.index')->with('success', 'Bài viết đã được cập nhật thành công!');
    }

    public function edit($id)
    {
        $catgories = Category::orderBy('id', 'asc')->where('style', 'post')->get();
        $post = Post::where('id', $id)->first();
        return view('admin.Modules.Post.edit-post', [
            'post' => $post,
            'categories' => $catgories,
        ]);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Xóa bài viết thành công.');
    }

    public function show()
    {
        $posts = Post::select('posts.*', 'employees.name as author_name', 'categories.name as category_name')
            ->join('employees', 'posts.employee_id', '=', 'employees.id')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->paginate(5);
        return view('client.pages.post', [
            'posts' => $posts
        ]);
    }

    public function detailPost($id)
    {
        $posts = Post::select('posts.*', 'employees.name as author_name', 'categories.name as category_name')
            ->join('employees', 'posts.employee_id', '=', 'employees.id')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->where('posts.id', $id)
            ->first();
        return view('client.pages.detail-post', [
            'posts' => $posts
        ]);
    }

    public function filterByCategory($categoryId)
    {

        $posts = Post::select('posts.*', 'employees.name as author_name', 'categories.name as category_name')
            ->join('employees', 'posts.employee_id', '=', 'employees.id')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->where('category_id', $categoryId)
            ->paginate(5);

            return view('client.pages.post', [
                'posts' => $posts
            ]);
    }
}
