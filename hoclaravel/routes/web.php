<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/trang-chu',[HomeController::class, 'index']);