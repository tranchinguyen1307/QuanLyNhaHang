<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Post\StorePostRequest;
use App\Models\Admin\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.Modules.Post.create-post');
    }
    public function store(StorePostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'avatar' => $request->input('avatar'),
            'employee_id' => Auth::guard('employee')->id(),
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
        ]);
        return redirect()->route('admin.post.index')->with('success', 'Bài viết đã được cập nhật thành công!');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('admin.Modules.Post.edit-post',[
            'post' => $post,
        ]);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Xóa bài viết thành công.');
    }
}
