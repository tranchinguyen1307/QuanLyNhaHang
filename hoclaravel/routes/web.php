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
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckEmployeeRole;
use App\Http\Middleware\CheckAdmin;


// /client
Route::get('/', [ClientHomeController::class, 'index'])->name('/trang-chu');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/san-pham', [ProductController::class, 'index'])->name('san-pham.index');
    Route::get('/dat-ban', [ClientBookTableController::class, 'index'])->name('dat-ban.index');
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
        Route::get('/', [TableHomeController::class, 'index'])->name('index');
        Route::get('/create', [TableHomeController::class, 'create'])->name('create');
        Route::get('/edit', [TableHomeController::class, 'edit'])->name('edit');
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

    // Category
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::get('/edit', [CategoryController::class, 'edit'])->name('edit');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
