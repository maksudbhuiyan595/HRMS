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
    return view('backend.master');
});


Route::group(['prefix'=>'admin'], function(){
    //RoleController
    Route::get('/role/list',[RoleController::class,'roleList'])->name('role.list');
    Route::get('/role/create',[RoleController::class,'roleCreate'])->name('role.create');
    Route::post('/role/create',[RoleController::class,'roleStore'])->name('role.store');
    Route::get('/role/assign/{id}',[RoleController::class,'roleAssign'])->name('role.assign');

    // EmployeeController
    Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list');
});
