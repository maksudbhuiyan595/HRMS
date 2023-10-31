<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view("backend.layouts.pages.loginPage");
    }
    public function doLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "email"=> "required|email|unique:users,id",
            "password"=> "required|min:6|max:16"
        ]);
      
        $credentials=$request->except(['_token']);
        if(auth()->attempt($credentials))
        {
            toastr()->success('wow !! successfully login.');
            return redirect()->route('dashboard');
        }
        else
        {
            Toastr::error('Invalid user informations');
            return redirect()->back();
        }
        
    }
    public function logout()
    {
        Auth::logout();
        Toastr::success('wow !! successfully logout');
        return redirect()->route('admin.login');
    }
    
    public function list()
    {
        $users=User::with('role')->get();
        // dd($users);
        return view('backend.layouts.pages.users.list',compact('users'));
    }
    public function create()
    {   
        $roles=Role::all();
        // dd($roles);
        return view('backend.layouts.pages.users.create',compact('roles'));
    }
    public function store(Request $request)
    {
       try{
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'password'=> 'required',
            'role_id'=>'required',
            'role'=> 'required',
        ]);
        $user=User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'role_id'=> $request->role_id,
            'role'=> $request->role,
        ]);
       }catch(Exception $e){
        toastr()->error('ops !! ',$e->getMessage());
        return redirect()->back();
       }
        Toastr::success('wow !! successfully created');
        return redirect()->back();
    }
}
