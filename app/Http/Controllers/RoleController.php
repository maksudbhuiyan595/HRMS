<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Brian2694\Toastr\Facades\Toastr;
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
   public function roleStore(Request $request){
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
    
    Toastr::success('successfully created.', 'Role');
     return redirect()->route('role.list');

    }
  public function roleAssign($id){
    $role=Role::find($id);
    $permissions=Permission::all();
    return view ('backend.layouts.pages.roles.roleAssign',compact('role', 'permissions'));
    }
public function rolePermission(){
    return view('backend.layouts.pages.roles.');
}
}
