<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MenuController as AdminHomeController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\ProductController;
use App\View\Components\categories;
use App\Http\Controllers\Client\ClientBookTableController;
use App\Http\Controllers\Admin\MenuController as MenuHomeController;
use App\Http\Controllers\Admin\TableController as TableHomeController;
use App\Http\Controllers\Admin\EmployeesController as EmployeesHomeController;
use App\Http\Controllers\Admin\CustomerController as CustomerHomeController;


Route::prefix('menu')->name('menu.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::get('/create', [AdminHomeController::class, 'create'])->name('create');
    Route::get('/edit', [AdminHomeController::class, 'edit'])->name('edit');
});


Route::get('/', [ClientHomeController::class, 'index'])->name('/trang-chu');
Route::get('/san-pham', [ProductController::class, 'index'])->name('/san-pham');
Route::get('/dat-ban', [ClientBookTableController::class, 'index'])->name('/dat-ban');


Route::prefix('table')->name('table.')->group(function () {
    Route::get('/', [TableHomeController::class, 'index'])->name('index');
    Route::get('/create', [TableHomeController::class, 'create'])->name('create');
    Route::get('/edit', [TableHomeController::class, 'edit'])->name('edit');
});

route::prefix('employees')->name('employees.')->group(function () {
    Route::get('/', [EmployeesHomeController::class, 'index'])->name('index');
    Route::get('/create', [EmployeesHomeController::class, 'create'])->name('create');
    Route::get('/edit', [EmployeesHomeController::class, 'edit'])->name('edit');
});

Route::prefix('/customer')->name('customer.')->group(function () {
    Route::get('/', [CustomerHomeController::class, 'index'])->name('index');
    Route::get('/create', [CustomerHomeController::class, 'create'])->name('create');
    Route::get('/edit', [CustomerHomeController::class, 'edit'])->name('edit');
});
