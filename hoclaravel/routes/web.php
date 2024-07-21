<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\Admin\MenuController as AdminHomeController;
Route::get('/', function () {
    return view('client.home');
});
Route::get('/trang-chu',[ClientHomeController::class, 'index']);
Route::get('/menu', [AdminHomeController::class, 'index'])->name('menu');
Route::get('/menu/create', [AdminHomeController::class, 'create'])->name('menu.create');
Route::get('/menu/edit', [AdminHomeController::class, 'edit'])->name('menu.edit');
