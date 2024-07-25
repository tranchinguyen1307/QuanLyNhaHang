<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ClientHomeController extends Controller
{
    public function index()
    {
        return view('client.pages.home');
    }
}
