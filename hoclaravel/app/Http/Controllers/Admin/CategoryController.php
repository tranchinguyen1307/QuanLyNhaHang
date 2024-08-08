<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.modules.category');
    }

    public function create()
    {
        return view('admin.modules.create-category');
    }

    public function edit()
    {
        return view('admin.modules.edit-category');
    }
}
