<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    $role=Role::with('permissions')->find($id);                              
    $assignPermissions=$role->permissions->pluck('permission_id')->toArray();//data convert for array 
    $permissions=Permission::all();
    return view ('backend.layouts.pages.roles.roleAssign',compact('role', 'permissions','assignPermissions'));
    }
    public function assignPermission(Request $request, $role_id){
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            'permission'=>'required'
        ]);
        if($validate->fails())
        {
            dd($validate->getMessageBag());
        }
        RolePermission::where('role_id',$role_id)->delete();
        foreach($request->permission as $permission)
        {
            RolePermission::create([
                'permission_id'=>$permission,
                'role_id'=>$role_id,
            ]);
        }
            Toastr::success('successfully created', 'Role Permission');
            return redirect()->back();
        
    }
}
