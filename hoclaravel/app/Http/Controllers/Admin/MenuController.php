<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('admin.pages.home');
    }
    public function create()
    {
        return view('admin.pages.create-menu');
    }
    public function edit()
    {
        return view('admin.pages.edit-menu');
    }
    
}
