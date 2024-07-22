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
use App\Http\Controllers\Admin\CustomersController as CustomerHomeController;

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


Route::get('/table', [TableHomeController::class, 'index'])->name('table');
Route::get('/table/create', [TableHomeController::class, 'create'])->name('table.create');
Route::get('/table/edit', [TableHomeController::class, 'edit'])->name('table.edit');

Route::get('/employees', [EmployeesHomeController::class, 'index'])->name('employees');
Route::get('/employees/create', [EmployeesHomeController::class, 'create'])->name('employees.create');
Route::get('/employees/edit', [EmployeesHomeController::class, 'edit'])->name('employees.edit');

Route::get('/customer', [CustomerHomeController::class, 'index'])->name('customer');
Route::get('/customer/create', [CustomerHomeController::class, 'create'])->name('customer.create');
Route::get('/customer/edit', [CustomerHomeController::class, 'edit'])->name('customer.edit');
