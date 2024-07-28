<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TableController extends Controller
{
    public function index()
    {
        return view('admin.pages.Tables.table');
    }

    public function create()
    {
        return view('admin.pages.Tables.create-table');
    }

    public function edit()
    {
        return view('admin.pages.Tables.edit-table');
    }
}
