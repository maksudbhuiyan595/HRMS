<?php

namespace App\Http\Controllers;

use App\Models\EmpDesignation;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class EmpDesignationController extends Controller
{
    public function list(){
        $empDesignations=EmpDesignation::all();
        return view('backend.layouts.pages.empDesignations.list',compact('empDesignations'));
    }  
     public function create(){
        return view('backend.layouts.pages.empDesignations.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        EmpDesignation::create([
            'name'=>$request->name,
            ]);
        Toastr::success('successfully created', 'Employee Designation');
        return redirect()->route('emp.designation.list');
    }
    public function edit($id){
        $empDesignation=EmpDesignation::find($id);
        return view('backend.layouts.pages.empDesignations.edit',compact('empDesignation'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required'
        ]);
        $empDesignation=EmpDesignation::find($id);
        $empDesignation->create([
            'name'=>$request->name,
            ]);
        Toastr::success('successfully updated', 'Employee Designation');
        return redirect()->route('emp.designation.list');
    }
    public function destroy($id){
        EmpDesignation::destroy($id);
        Toastr::error('successfully deleted', 'Employee Designation');
        return redirect()->back();
    }
}
