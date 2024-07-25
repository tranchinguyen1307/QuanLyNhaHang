<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->name === 'Chưa phân loại') {
            return redirect()->back()->with('error', 'Danh mục mặc định không thể bị xóa.');
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Danh mục đã được xóa thành công.');
    }
}
