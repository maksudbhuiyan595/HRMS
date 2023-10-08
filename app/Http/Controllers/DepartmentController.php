<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function list(){
        $departments=Department::all();
        return view('backend.layouts.pages.departments.list', compact('departments'));
    }
    public function create(){
        return view('backend.layouts.pages.departments.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'description'=>'required|max:200',
        ]);
        Department::create([
            'dep_name'=>$request->name,
            'dep_location'=>$request->location,
            'dep_description'=>$request->description,
        ]);
        Toastr::success('successfully created', 'Department');
        return redirect()->route('department.list');
    }
    public function view($id){
        $department=Department::find($id);
        return view('backend.layouts.pages.departments.view',compact('department'));
    }
    public function edit($id){
        $department=Department::find($id);
        return view('backend.layouts.pages.departments.edit',compact('department'));
    }
    public function update(Request $request, $id){
        // dd($request->all());
        $department=Department::find($id);
        $request->validate([
            'name'=>'required|unique:departments,dep_name',$department->id,
            'location'=>'required',
            'description'=>'required|max:200',
        ]);
        $department->create([
            'dep_name'=>$request->name,
            'dep_location'=>$request->location,
            'dep_description'=>$request->description,
        ]);
        Toastr::success('successfully updated', 'Department');
        return redirect()->route('department.list');
        
    }
    public function destroy($id){
        Department::destroy($id);
        Toastr::error('successfully deleted', 'Department');
        return redirect()->back();
        
    }
}
