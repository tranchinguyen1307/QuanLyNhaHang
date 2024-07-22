<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MenuController as AdminHomeController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\ProductController;
use App\View\Components\categories;
use App\Http\Controllers\Client\ClientBookTableController;

Route::get('/', function () {
    return view('client.home');
});
Route::get('/menu', [AdminHomeController::class, 'index'])->name('menu');
Route::get('/menu/create', [AdminHomeController::class, 'create'])->name('menu.create');
Route::get('/menu/edit', [AdminHomeController::class, 'edit'])->name('menu.edit');




Route::get('/trang-chu', [ClientHomeController::class, 'index'])->name('/trang-chu');
Route::get('/san-pham', [ProductController::class, 'index'])->name('/san-pham');
Route::get('/dat-ban', [ClientBookTableController::class, 'index'])->name('/dat-ban');
// Route::get('/danh-muc', [categories::class, 'render']);

