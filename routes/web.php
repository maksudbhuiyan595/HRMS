<?php

use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmpDesignationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



//Frontend homeController
Route::get('/',[WebController::class,'homePage'])->name('home.page');

Route::get('/customer/register',[CustomerController::class,'customerRegister'])->name('customer.register');
Route::post('/customer/update/register',[CustomerController::class,'customerUpdateRegister'])->name('customer.update.register');
Route::get('customer/login',[CustomerController::class,'customerLogin'])->name('customer.login');
Route::post('customer/do-login',[CustomerController::class,'customerDologin'])->name('customer.dologin');
Route::get('customer/logout',[CustomerController::class,'customerLogout'])->name('customer.logout');


Route::post('send/passwod/reset-link',[CustomerController::class,'sendResetLink'])->name('send.reset.link');
Route::get('click-reset-link/{token}',[CustomerController::class,'clickResetLink'])->name('click.reset.link');


Route::group(['prefix'=> 'admin'], function () {

  Route::get('/login',[UserController::class,'login'])->name('admin.login');
  Route::post('/do-login',[UserController::class,'doLogin'])->name('admin.dologin');

  Route::group(['middleware'=> ['auth','checkPermission']], function () {

    Route::get('/logout',[UserController::class,'logout'])->name('logout');

  
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    
     // EmployeeController
    Route::get('/employees',[EmployeeController::class,'list'])->name('employee.list');
    Route::get('/employee/ajax',[EmployeeController::class,'ajaxEmployee'])->name('employee.ajaxEmployee');
    Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
    Route::get('/employee/view/{id}',[EmployeeController::class,'view'])->name('employee.view');
    Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
    Route::get('/employee/delete/{id}',[EmployeeController::class,'destroy'])->name('employee.destroy');
    // Route::get('/employee/index',[EmployeeController::class,'employeeAjax'])->name('employee.ajax');
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

    //ProjectController
    Route::get('/project/list',[ProjectController::class, 'list'])->name('project.list');
    Route::get('/project/create',[ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store',[ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/view/{id}',[ProjectController::class, 'view'])->name('project.view');
    Route::get('/project/edit/{id}',[ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/project/update/{id}',[ProjectController::class, 'update'])->name('project.update');
    Route::get('/project/delete/{id}',[ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/assign/employee/to-project',[ProjectController::class, 'assignEployeeToProject'])->name('assign.employee.project');
    Route::get('/employees/list/to-project',[ProjectController::class, 'EmployeesListToProject'])->name('employee.list.project');
    

        //DepartmentController
        Route::get('/attendence/list',[AttendenceController::class, 'list'])->name('attendence.list');
        Route::get('/attendence/create',[AttendenceController::class, 'create'])->name('attendence.create');
        Route::post('/attendence/store',[AttendenceController::class, 'store'])->name('attendence.store');
        Route::get('/attendence/view/{id}',[AttendenceController::class, 'view'])->name('attendence.view');
        Route::get('/attendence/edit/{id}',[AttendenceController::class, 'edit'])->name('attendence.edit');
        Route::post('/attendence/update/{id}',[AttendenceController::class, 'update'])->name('attendence.update');

    //RoleController
    Route::get('/role/list',[RoleController::class,'roleList'])->name('role.list');
    Route::get('/role/create',[RoleController::class,'roleCreate'])->name('role.create');
    Route::post('/role/create',[RoleController::class,'roleStore'])->name('role.store');
    Route::get('/role/assign/{role_id}',[RoleController::class,'roleAssign'])->name('role.assign');
    Route::post('/assign-permissions/{role_id}',[RoleController::class,'assignPermission'])->name('assign.permission');

    Route::get('users/list',[UserController::class,'list'])->name('user.list');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/view/{userId}',[UserController::class,'view'])->name('user.view');
    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::get('user/update/{id}',[UserController::class,'update'])->name('user.update');   
    Route::get('user/destroy/{id}',[UserController::class,'destroy'])->name('user.destroy');   
   
});
});


