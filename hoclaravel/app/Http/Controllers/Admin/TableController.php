<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('admin.pages.table');
    }
    public function create()
    {
        return view('admin.pages.create-table');
    }
    public function edit()
    {
        return view('admin.pages.edit-table');
    }
}
