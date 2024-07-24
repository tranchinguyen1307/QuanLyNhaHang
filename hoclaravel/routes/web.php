<?php

use App\Http\Controllers\Admin\CustomerController as CustomerHomeController;
use App\Http\Controllers\Admin\EmployeesController as EmployeesHomeController;
use App\Http\Controllers\Admin\MenuController as AdminHomeController;
use App\Http\Controllers\Admin\TableController as TableHomeController;
use App\Http\Controllers\Client\ClientBookTableController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/menu', [AdminHomeController::class, 'index'])->name('menu');
Route::get('/menu/create', [AdminHomeController::class, 'create'])->name('menu.create');
Route::get('/menu/edit', [AdminHomeController::class, 'edit'])->name('menu.edit');

// client
Route::get('/', [ClientHomeController::class, 'index'])->name('/trang-chu');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/san-pham', [ProductController::class, 'index'])->name('san-pham.index');
    Route::get('/dat-ban', [ClientBookTableController::class, 'index'])->name('dat-ban.index');
    Route::get('/lien-he', [ContactController::class, 'index'])->name('lien-he.index');
});

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

Route::get('/customer', [CustomerHomeController::class, 'index'])->name('customer');
Route::get('/customer/create', [CustomerHomeController::class, 'create'])->name('customer.create');
Route::get('/customer/edit', [CustomerHomeController::class, 'edit'])->name('customer.edit');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
