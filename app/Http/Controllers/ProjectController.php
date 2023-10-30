<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Project;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function list()
   {
    $projects=Project::with(['department'])->get();
    return view('backend.layouts.pages.projects.list',compact('projects'));
   }

   public function create()
   {
    $departments= Department::all();
      return view('backend.layouts.pages.projects.create',compact( 'departments'));
    }
  public function store(Request $request){
      try{
          
          $request->validate([
              'name'=>'required',
              'start_date'=>'required',
              'end_date'=>'required',
              'department_id'=>'required',
              'description'=>'required'
              
            ]);
            
            Project::create([
           'name'=>$request->name,
           'start_date'=>$request->start_date,
           'end_date'=>$request->end_date,
           'department_id'=>$request->department_id,
           'description'=>$request->description
       ]);
    }catch (Exception $e){
        Toastr::error('error', $e->getMessage());
        return redirect()->back();
    }
    Toastr::success('successfully created', 'Project');
    return redirect()->route('project.list');
}

public function view($id){
    $projects=Project::find($id);
    return view('backend.layouts.pages.projects.view',compact('projects'));
}
public function edit($id){
    $employees=Employee::all();
    $departments= Department::all();
    $projects=Project::find($id);
    return view('backend.layouts.pages.projects.edit',compact('projects','departments','employees'));
}
public function update(Request $request, $id){
    // dd($request->all());
    $projects=Project::find($id);
    $request->validate([
        'name'=>'required',
        'start_date'=>'required',
        'end_date'=>'required',
        'department_id'=>'required',
        'employee_id'=>'required',
        'description'=>'required'
        
    ]);
    $projects->update([
        'name'=>$request->name,
        'start_date'=>$request->start_date,
        'end_date'=>$request->end_date,
        'department_id'=>$request->department_id,
        'employee_id'=>$request->employee_id,
        'description'=>$request->description
 
    ]);
    Toastr::success('successfully updated', 'Project');
    return redirect()->route('project.list');
    
    }
    public function destroy($id){
        Project::destroy($id);
        Toastr::error('successfully deleted', 'project');
        return redirect()->back();
        
    }


    public function assignEployeeToProject()
    {   
        $departments=Department::all();  
        $employees=Employee::all();
        $projects=Project::all();
       
        return view('backend.layouts.pages.projects.assignProjectEmployee',compact('departments', 'employees','projects'));
        
    }
 }