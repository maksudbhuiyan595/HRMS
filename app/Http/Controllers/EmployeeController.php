<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function list(){
        $employees=Employee::paginate(8);
        return view('backend.layouts.pages.employees.list',compact('employees'));
    }
    public function create(){
        return view ('backend.layouts.pages.employees.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|max:15',
            'address'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,svg'
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName=date('Ymdhsi'.'.'.$image->getClientOriginalExtension());
            $image->storeAs('/employees',$fileName);
            // dd($fileName);
        }
        Employee::create([
            'emp_name'=>$request->name,
            'emp_email'=>$request->email,
            'emp_phone'=>$request->phone,
            'emp_address'=>$request->address,
            'emp_img'=>$fileName,
        ]);
        Toastr::success('successfully created.', 'Employee');
        return redirect()->route('employee.list');
    }
    public function view($id){
        $employee=Employee::find($id);
        return view('backend.layouts.pages.employees.view',compact('employee'));
    }
    public function edit($id){
        $employee=Employee::find($id);
        return view('backend.layouts.pages.employees.edit',compact('employee'));
    }
    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|max:15',
            'address'=>'required',
        ]);
       $employee=Employee::find($id);
        $employee->update([
            'emp_name'=>$request->name,
            'emp_email'=>$request->email,
            'emp_phone'=>$request->phone,
            'emp_address'=>$request->address,  
        ]);
        Toastr::success('successfully updated.', 'Employee');
        return redirect()->route('employee.list'); 
    }
    public function destroy($id){
        Employee::destroy($id);
        Toastr::error('successfully deleted.', 'Employee');
        return redirect()->back();
    }
}
