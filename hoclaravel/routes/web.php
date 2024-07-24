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

Route::get('/table', [TableHomeController::class, 'index'])->name('table');
Route::get('/table/create', [TableHomeController::class, 'create'])->name('table.create');
Route::get('/table/edit', [TableHomeController::class, 'edit'])->name('table.edit');

Route::get('/employees', [EmployeesHomeController::class, 'index'])->name('employees');
Route::get('/employees/create', [EmployeesHomeController::class, 'create'])->name('employees.create');
Route::get('/employees/edit', [EmployeesHomeController::class, 'edit'])->name('employees.edit');

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
