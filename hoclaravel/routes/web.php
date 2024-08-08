<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController as CustomerHomeController;
use App\Http\Controllers\Admin\EmployeesController as EmployeesHomeController;
use App\Http\Controllers\Admin\InvoiceController;
// use App\Http\Controllers\Admin\TableController as TableHomeController;
use App\Http\Controllers\Admin\MenuController as AdminHomeController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Client\ClientBookTableController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckEmployeeRole;
use App\Http\Middleware\CheckAdmin;

// /client
Route::get('/', [ClientHomeController::class, 'index'])->name('/trang-chu');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/san-pham', [ProductController::class, 'index'])->name('san-pham.index');
    Route::get('/dat-ban', [ClientBookTableController::class, 'index'])->name('dat-ban.index');
    Route::post('/dat-ban', [ClientBookTableController::class, 'store'])->name('dat-ban.store');
    Route::get('/dat-ban/thanh-toan', [ClientBookTableController::class, 'payment'])->name('reservations.payment');
    Route::post('/dat-ban/hoan-tat', [ClientBookTableController::class, 'complete'])->name('reservations.complete');
    Route::get('/lien-he', [ContactController::class, 'index'])->name('lien-he.index');
});

Route::get('admin/login', [EmployeesHomeController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('admin/login', [EmployeesHomeController::class, 'login'])->name('admin.login');
Route::get('admin/logout', [EmployeesHomeController::class, 'logout'])->name('admin.logout');
Route::prefix('admin')->middleware([CheckAdmin::class])->name('admin.')->group(function () {
    // menu
    Route::prefix('menu')->name('menu.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::get('/create', [AdminHomeController::class, 'create'])->name('create');
        Route::get('/edit', [AdminHomeController::class, 'edit'])->name('edit');
    });

    // Table
    Route::prefix('table')->name('table.')->group(function () {
        Route::get('/', [TableController::class, 'index'])->name('index');
        // them
        Route::get('/create', [TableController::class, 'create'])->name('create');
        Route::post('/them-ban', [TableController::class, 'store'])->name('store');
        //cap nhat
        Route::get('/edit/{id}', [TableController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [TableController::class, 'update'])->name('update');
        // quan ly ban
        Route::get('/quan-ly-dat-ban', [TableController::class, 'table_manager'])->name('manager');
        Route::get('/show/{id}', [TableController::class, 'show'])->name('show');

        Route::post('{id}/them-san-pham', [TableController::class, 'addItem'])->name('addItems');

        Route::get('{id}/thanh-toan-dat-ban', [TableController::class, 'checkoutRes'])->name('checkoutRes');
        Route::get('{id}/thanh-toan', [TableController::class, 'checkout'])->name('check_out');

        Route::post('/cap-nhat-trang-thai/{id}', [TableController::class, 'updateStatus'])->name('updateStatus');
        // xóa
        Route::delete('/xoa/{id}', [TableController::class, 'destroy'])->name('destroy');

    });

    //hoa don
    Route::prefix('invoices')->name('invoices.')->group(function () {
        // Route cho trang chi tiết hóa đơn
        Route::get('/danh-sach-hoa-don', [InvoiceController::class, 'index'])->name('list');
        Route::post('/chi-tiet-hoa-don/{id}', [InvoiceController::class, 'updatePaymentStatus'])->name('show');
        Route::delete('/xoa/{id}', [InvoiceController::class, 'destroy'])->name('destroy');

    });


    // Employees
    Route::prefix('employees')->middleware([CheckEmployeeRole::class . ':1'])->name('employees.')->group(function () {
        Route::get('/', [EmployeesHomeController::class, 'index'])->name('index');
        Route::get('/create', [EmployeesHomeController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [EmployeesHomeController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [EmployeesHomeController::class, 'update'])->name('update');
        Route::post('/store', [EmployeesHomeController::class, 'store'])->name('store');
        Route::delete('/destroy/{id}', [EmployeesHomeController::class, 'destroy'])->name('destroy');
    });

    // Customer
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/', [CustomerHomeController::class, 'index'])->name('index');
        Route::get('/create', [CustomerHomeController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [CustomerHomeController::class, 'edit'])->name('edit');
        Route::post('/store', [CustomerHomeController::class, 'store'])->name('store');
        Route::delete('/destroy/{id}', [CustomerHomeController::class, 'destroy'])->name('destroy');
        Route::patch('/update/{id}', [CustomerHomeController::class, 'update'])->name('update');
    });

    // categoris
    route::prefix('/category')->name('category.')->group(function () {
        Route::get('/edit/{id}', [CustomerHomeController::class, 'edit'])->name('edit');
        Route::post('/store', [CustomerHomeController::class, 'store'])->name('store');
        Route::delete('/destroy/{id}', [CustomerHomeController::class, 'destroy'])->name('destroy');
        Route::patch('/update/{id}', [CustomerHomeController::class, 'update'])->name('update');
    });



// dang nhap de dat bàn
Route::middleware(['auth'])->group(function () {
    Route::get('/client/dat-ban', [ClientBookTableController::class, 'index'])->name('client.dat-ban.index');
});

Route::get('/dashboard', function () {
    return view('client.pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
