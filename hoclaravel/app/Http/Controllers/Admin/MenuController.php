<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MenuController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.Modules.menu.home', compact('products'));

    }
    public function create()
    {
        return view('admin.Modules.menu.create-menu');
    }
    public function edit()
    {
        return view('admin.Modules.menu.edit-menu');
    }
    
}
