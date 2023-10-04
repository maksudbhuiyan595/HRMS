<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function roleList(){

    $roles=Role::all();
    return view('backend.layouts.pages.roles.roleList',compact('roles'));

    }

    public function roleCreate(){
        return view('backend.layouts.pages.roles.roleCreate');
    }
   public function store(Request $request){
    $request->validate([
        'name'=>'required',
        'status'=>'required',
        'description'=>'required',
    ]);
    
    Role::create([
        'role_name'=>$request-> name,
        'role_status'=>$request-> status,
        'role_description'=>$request->description
         ]);

     return redirect()->route('role.list');

    }
  public function roleAssign(){
    return view ('backend.layouts.pages.roles.roleAssign');
    }

}
