<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MenuController as MenuHomeController;
use App\Http\Controllers\Admin\TableController as TableHomeController;
use App\Http\Controllers\Admin\EmployeesController as EmployeesHomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/trang-chu',[HomeController::class, 'index']);
Route::get('/menu', [MenuHomeController::class, 'index'])->name('menu');
Route::get('/menu/create', [MenuHomeController::class, 'create'])->name('menu.create');
Route::get('/menu/edit', [MenuHomeController::class, 'edit'])->name('menu.edit');

Route::get('/table', [TableHomeController::class, 'index'])->name('table');
Route::get('/table/create', [TableHomeController::class, 'create'])->name('table.create');
Route::get('/table/edit', [TableHomeController::class, 'edit'])->name('table.edit');

Route::get('/employees', [EmployeesHomeController::class, 'index'])->name('employees');
Route::get('/employees/create', [EmployeesHomeController::class, 'create'])->name('employees.create');
Route::get('/employees/edit', [EmployeesHomeController::class, 'edit'])->name('employees.edit');
