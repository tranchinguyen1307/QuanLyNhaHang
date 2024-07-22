<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.pages.customers');
    }
    public function create()
    {
        return view('admin.pages.create-customer');
    }
    public function edit()
    {
        return view('admin.pages.edit-customer');
    }
}
