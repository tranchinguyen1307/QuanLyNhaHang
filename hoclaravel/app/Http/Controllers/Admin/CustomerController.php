<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return view('admin.pages.user');
    }
    public function create()
    {
        return view('admin.pages.create-user');
    }
    public function edit()
    {
        return view('admin.pages.edit-user');
    }
}
