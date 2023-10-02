<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('backend.pages.master');
});

Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list');
Route::get('/role/list',[RoleController::class,'list'])->name('role.list');
Route::get('/role/form',[RoleController::class,'form'])->name('role.form');
Route::post('/role/store',[RoleController::class,'store'])->name('role.store');
Route::get('/role/assign',[RoleController::class,'assign'])->name('role.assign');