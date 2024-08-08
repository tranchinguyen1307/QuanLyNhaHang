<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.Modules.Category.category', ['category'=>$category]);
    }

    public function create()
    {
        return view('admin.Modules.Category.create-category');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('admin.category.index')->with('status', 'Thêm sản phẩm thành công');

    }

    public function edit($id)
    {
        $category = Category::find($id);
        // $category = Category::orderBy('id')->get();
        return view('admin.Modules.Category.edit-category', ['category'=>$category]);
    }

    public function update(Request $request, $id)
{
    $category = Category::find($id);
    $category->name = $request->input('name');
    $category->save();
    return redirect()->route('admin.category.index')->with('status', 'Cập nhật danh mục thành công');
}
public function destroy($id)
{
    $category = Category::find($id);

    if (!$category) {
        return redirect()->route('admin.category.index')->with('error', 'Sản phẩm không tồn tại.');
    }

    $category->delete();

    return redirect()->route('admin.category.index')->with('status', 'Xóa sản phẩm thành công');
}
}
