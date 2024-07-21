<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MenuController as AdminHomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/trang-chu',[HomeController::class, 'index']);
Route::get('/menu', [AdminHomeController::class, 'index'])->name('menu');
Route::get('/menu/create', [AdminHomeController::class, 'create'])->name('menu.create');
Route::get('/menu/edit', [AdminHomeController::class, 'edit'])->name('menu.edit');