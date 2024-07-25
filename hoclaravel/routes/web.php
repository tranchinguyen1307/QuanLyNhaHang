<?php

use App\Http\Controllers\Admin\CustomerController as CustomerHomeController;
use App\Http\Controllers\Admin\EmployeesController as EmployeesHomeController;
use App\Http\Controllers\Admin\MenuController as AdminHomeController;
use App\Http\Controllers\Admin\TableController as TableHomeController;
use App\Http\Controllers\Client\ClientBookTableController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;


// menu
Route::prefix('menu')->name('menu.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::get('/create', [AdminHomeController::class, 'create'])->name('create');
    Route::get('/edit', [AdminHomeController::class, 'edit'])->name('edit');
});

// /client
Route::get('/', [ClientHomeController::class, 'index'])->name('/trang-chu');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/san-pham', [ProductController::class, 'index'])->name('san-pham.index');
    Route::get('/dat-ban', [ClientBookTableController::class, 'index'])->name('dat-ban.index');
    Route::get('/lien-he', [ContactController::class, 'index'])->name('lien-he.index');
});

// Table 
Route::prefix('table')->name('table.')->group(function () {
    Route::get('/', [TableHomeController::class, 'index'])->name('index');
    Route::get('/create', [TableHomeController::class, 'create'])->name('create');
    Route::get('/edit', [TableHomeController::class, 'edit'])->name('edit');
});

// Employees 
Route::prefix('employees')->name('employees.')->group(function () {
    Route::get('/', [EmployeesHomeController::class, 'index'])->name('index');
    Route::get('/create', [EmployeesHomeController::class, 'create'])->name('create');
    Route::get('/edit', [EmployeesHomeController::class, 'edit'])->name('edit');
});

// customer
Route::prefix('/customer')->name('customer.')->group(function () {
    Route::get('/', [CustomerHomeController::class, 'index'])->name('index');
    Route::get('/create', [CustomerHomeController::class, 'create'])->name('create');
    Route::get('/edit', [CustomerHomeController::class, 'edit'])->name('edit');
});

// categoris
route::prefix('/category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::get('/edit', [CategoryController::class, 'edit'])->name('edit');
});

// Middleware for authentication and verification
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('client.pages.home');
    })->name('/trang-chu');
});
