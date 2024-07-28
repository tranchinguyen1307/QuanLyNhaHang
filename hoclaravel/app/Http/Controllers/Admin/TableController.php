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

    public function table_manager()
    {
        return view('admin.pages.Tables.table_manager');
    }

    public function checkOut()
    {
        return view('admin.pages.Tables.check_out');
    }
}
