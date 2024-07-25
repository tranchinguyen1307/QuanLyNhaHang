<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function index()
    {
        $categories = $this->categories();
        $products = $this->products($categories);
        $defaultCategoryId = 1;

        return view('client.pages.menu', compact('products', 'categories', 'defaultCategoryId'));
    }

    public function products(Collection $categories): array
    {
        $productsByCategory = [];

        foreach ($categories as $category) {

            $productsByCategory[$category->id] = Product::where('category_id', $category->id)->get();
        }

        return $productsByCategory;
    }

    public function categories(): Collection
    {
        return Category::all();
    }
}
