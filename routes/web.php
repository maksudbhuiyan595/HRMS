<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmpDesignationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\EmpDesignation;
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

Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
Route::get('/admin/dologin',[UserController::class,'dologin'])->name('admin.dologin');
Route::group(['prefix'=>'admin'], function(){

    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    
     // EmployeeController
    Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list');
    Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
    Route::get('/employee/view/{id}',[EmployeeController::class,'view'])->name('employee.view');
    Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
    Route::get('/employee/delete/{id}',[Empdepartment_idloyeeController::class,'destroy'])->name('employee.destroy');
    //EmpDesignationcontroller
    Route::get('employee/designation/list',[EmpDesignationController::class, 'list'])->name('emp.designation.list');
    Route::get('employee/designation/create',[EmpDesignationController::class, 'create'])->name('emp.designation.create');
    Route::post('employee/designation/store',[EmpDesignationController::class, 'store'])->name('emp.designation.store');
    Route::get('employee/designation/edit/{id}',[EmpDesignationController::class, 'edit'])->name('emp.designation.edit');
    Route::post('employee/designation/update/{id}',[EmpDesignationController::class, 'update'])->name('emp.designation.update');
    Route::get('employee/designation/delete/{id}',[EmpDesignationController::class, 'destroy'])->name('emp.designation.destroy');
    //DepartmentController
    Route::get('/department/list',[DepartmentController::class, 'list'])->name('department.list');
    Route::get('/department/create',[DepartmentController::class, 'create'])->name('department.create');
    Route::post('/department/store',[DepartmentController::class, 'store'])->name('department.store');
    Route::get('/department/view/{id}',[DepartmentController::class, 'view'])->name('department.view');
    Route::get('/department/edit/{id}',[DepartmentController::class, 'edit'])->name('department.edit');
    Route::post('/department/update/{id}',[DepartmentController::class, 'update'])->name('department.update');
    Route::get('/department/delete/{id}',[DepartmentController::class, 'destroy'])->name('department.destroy');
    //RoleController
    Route::get('/role/list',[RoleController::class,'roleList'])->name('role.list');
    Route::get('/role/create',[RoleController::class,'roleCreate'])->name('role.create');
    Route::post('/role/create',[RoleController::class,'roleStore'])->name('role.store');
    Route::get('/role/assign/{role_id}',[RoleController::class,'roleAssign'])->name('role.assign');
    Route::post('/assign-permissions/{role_id}',[RoleController::class,'assignPermission'])->name('assign.permission');
   
   
});
