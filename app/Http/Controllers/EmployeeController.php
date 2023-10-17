<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EmpDesignation;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function list(){
        $employees=Employee::with(['designation', 'department'])->orderBy('id','desc')->paginate(10);
        return view('backend.layouts.pages.employees.list',compact('employees'));
    }
    public function create(){
        $designatins= EmpDesignation::orderBy('id','desc')->get();
        $departments=Department::orderBy('id','desc')->get();
        return view ('backend.layouts.pages.employees.create',compact('designatins','departments'));
    }
    public function store(Request $request){
       try{
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'empDesignation_id'=>'required',
            'department_id'=>'required',
            'salary'=>'required',
            'DOB'=>'required',
            'gender'=>'required',
            'join_date'=>'required',
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
            'name'=>$request->first_name.$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'empDesignation_id'=>$request->empDesignation_id,
            'department_id'=>$request->department_id,
            'salary'=>$request->salary,
            'DOB'=>$request->DOB,
            'gender'=>$request->gender,
            'join_date'=>$request->join_date,
            'image'=>$fileName,
        ]);
    }
    catch(\Exception $e){
        Toastr::error('Ops !!'.$e->getMessage());
        return redirect()->back();
    }
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
