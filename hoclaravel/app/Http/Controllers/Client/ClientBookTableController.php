<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ClientBookTableController extends Controller
{
    public function index()
    {
        return view('client.pages.bookTable');
    }
}
