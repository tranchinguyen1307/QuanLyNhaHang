<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Product;

use App\Models\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $products = Product::withCount('comments')->get();
        
        return view('admin.Modules.Comment.comment', ['products'=>$products]);
    }

    public function detail($id)
    {
        $product_id = $id;
        $comments = Comment::where('product_id', $id)
        ->with('user')
        ->orderBy('created_at', 'desc') // Sắp xếp theo ngày tạo mới nhất
        ->get();
        return view('admin.Modules.Comment.list-comment', ['comments'=>$comments,'product_id'=>$product_id]);
    }
    public function destroy($id,$id_product) {
        $comment = Comment::find($id);

        $comment->delete();
        return redirect()->route('admin.comment.detail',['id' => $id_product]);


    }
}
