<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function list()
    {   
        $attendences=Attendence::with('employee')->orderBy("created_at","desc")->paginate(10);
       
        return view("backend.layouts.pages.attendences.list",compact("attendences"));
    }

    public function create()
    {   
        $employees  = Employee::all();
        return view("backend.layouts.pages.attendences.create",compact("employees"));
    }
    public function store(Request $request)
    {   
        // dd($request->all());
        try{
          $request->validate([
            "date"=> "required",
            "employee_id"=> "required",
            "attend"=> "required",
          ]);
        Attendence::create([
            "date"=> $request->date,
            "employee_id"=> $request->employee_id,
            "attend"=> $request->attend,
        ]);
        }
        catch(\Exception $e)
        {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
        Toastr::success("successfully created.","Attendence");
        return redirect()->route('attendence.list');
    }
}