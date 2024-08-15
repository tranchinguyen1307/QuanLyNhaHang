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
use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

// /client
Route::get('/', [ClientHomeController::class, 'index'])->name('/trang-chu');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/san-pham', [ProductController::class, 'index'])->name('san-pham.index');
    Route::get('/san-pham/{id}', [ProductController::class, 'product_detail'])->name('san-pham.detail');
    Route::post('/san-pham/{id}/comment', [ProductController::class, 'product_comment'])->name('san-pham.comment');
    Route::delete('/san-pham/{id}/{id_product}/comment', [ProductController::class, 'product_comment_destroy'])->name('san-pham.destroy');
    Route::get('/dat-ban', [ClientBookTableController::class, 'index'])->name('dat-ban.index');
    Route::get('/lien-he', [ContactController::class, 'index'])->name('lien-he.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    // menu
    Route::prefix('menu')->name('menu.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::get('/create', [AdminHomeController::class, 'create'])->name('create');
        Route::post('/store', [AdminHomeController::class, 'store'])->name('store');
        Route::get('/edit{id}', [AdminHomeController::class, 'edit'])->name('edit');
        Route::patch('update/{id}', [AdminHomeController::class, 'update'])->name('update');
        Route::post('/post', [AdminHomeController::class, 'store'])->name('store');
        Route::delete('/{id}', [AdminHomeController::class, 'destroy'])->name('destroy');
        Route::get('/search', [AdminHomeController::class, 'search'])->name('search');
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

    // Customer
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/', [CustomerHomeController::class, 'index'])->name('index');
        Route::get('/create', [CustomerHomeController::class, 'create'])->name('create');
        Route::get('/edit', [CustomerHomeController::class, 'edit'])->name('edit');
    });

    // Category
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::patch('update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('comment')->name('comment.')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('index');
        Route::get('/detail/{id}', [CommentController::class, 'detail'])->name('detail');
        Route::delete('/delete/{id}/{id_product}', [CommentController::class, 'destroy'])->name('destroy');
    });
});



// Middleware for authentication and verification
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/', function () {
//         return view('client.pages.home');
//     })->name('/trang-chu');
// });
