<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Collection;
use App\Models\Comment;
use App\Models\User;

use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index()
    {
        $categories = $this->categories();
        $products = $this->products($categories);

        return view('client.menu', compact('products', 'categories'));
    }

    public function products(Collection $categories): array
    {
        $productsByCategory = [];

        foreach ($categories as $category) {

            $productsByCategory[$category->id] = Product::where('category_id', $category->id)->get();
        }

        return $productsByCategory;
    }
    public function product_detail($id) {
        $product = Product::find($id);
        $comments = Comment::where('product_id', $id)
        ->with('user')
        ->orderBy('created_at', 'desc') // Sắp xếp theo ngày tạo mới nhất
        ->get();
            return view('client.pages.detail', ['product' => $product,'comments'=>$comments]);
    }
    public function product_comment($id,Request $request) {


        Comment::create([
            'product_id' => $id,
            'user_id' => auth()->user()->id,
            'comment' => $request->input('comment'),

        ]);
        return redirect()->route('client.san-pham.detail',['id' => $id]);

    }
    public function product_comment_destroy($id,$id_product) {
        $comment = Comment::find($id);

        $comment->delete();
        return redirect()->route('client.san-pham.detail',['id' => $id_product]);

    }
    public function categories(): Collection
    {
        return Category::all();
    }
}
