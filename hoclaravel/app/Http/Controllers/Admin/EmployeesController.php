<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('admin.pages.employees');
    }
    public function create()
    {
        return view('admin.pages.create-employees');
    }
    public function edit()
    {
        return view('admin.pages.edit-employees');
    }
}
