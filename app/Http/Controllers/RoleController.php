<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list(){

    $roles=Role::all();
return view('backend.pages.role.list',compact('roles'));

    }

    public function form(){
        return view('backend.pages.role.form');
    }
   public function store(Request $request){
      
        {
    
        
           Role::create([
                'role_name'=>$request-> name,
                'role_status'=>$request-> status,
                'role_description'=>$request-> description
           
    
            ]);
            return redirect()->route('role.list');
        }
        
    }
  public function assign(){
return view('');

    }

}
