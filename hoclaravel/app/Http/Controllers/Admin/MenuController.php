<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Livewire\Attributes\Validate;

class MenuController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.Modules.menu.home', compact('products'));
    }

    public function store(Request $request)
    {
        $product = new Product;
        
        $product->name = $request->input('name');
        $product->description = $request->input('content');
        $product->price = $request->input('price');
        $product->created_at = $request->input('created_at');
        $product->category_id = $request->input('category_id');
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('clients/img'), $filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect()->route('admin.menu.index')->with('status', 'Thêm sản phẩm thành công');
    }

    public function create()
    {
        $catgories = Category::orderBy('id', 'asc')->get();
        return view('admin.Modules.menu.create-menu',
        ['categories'=>$catgories]);
    }

    public function edit($id)
{
    $category = Category::find($id);

    if (!$category) {
        return redirect()->route('admin.category.index')->with('error', 'Danh mục không tồn tại.');
    }

    return view('admin.Modules.Category.edit-category', ['category' => $category]);
}


    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('content');
        $product->price = $request->input('price');
        $product->updated_at = $request->input('updated_at');
        $product->category_id = $request->input('category_id');
        if ($request->file('image')) {
            if ($product->image) {
                $oldImagePath = public_path('clients/img/' . $product->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('clients/img'), $filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect()->route('admin.menu.index')->with('status', 'Cập nhật sản phẩm thành công');
    }

    public function destroy($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect()->route('admin.menu.index')->with('error', 'Sản phẩm không tồn tại.');
    }

    $product->delete();

    return redirect()->route('admin.menu.index')->with('status', 'Xóa sản phẩm thành công');
}

}
