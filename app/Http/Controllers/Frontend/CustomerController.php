<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function customerRegister()
    {
        return view("frontend.layouts.register");
    }
    public function customerUpdateRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "fname"=>"required",
            "lname"=>"required",
            "email"=> "required",
            "password"=> "required",

        ]);
        if ($validate->fails())
        {
            Toastr::error($validate->getMessageBag());
            return redirect()->back();
        }
      Customer::create([
        "first_name"=> $request->fname,
        "last_name"=> $request->lname,
        "email"=> $request->email,
        "password"=> bcrypt($request->password),
      ]);
      Toastr::success("successfully register");
      return redirect()->back();

    }
    public function customerLogin()
    {
        return view("frontend.layouts.loginPage");
    }
    public function customerDologin(Request $request)
    {
        $validate=validator::make($request->all(), [
            "email"=> "required",
            "password"=> "required|min:4",
            ]);
        if( $validate->fails() )
        {
            Toastr::error($validate->getMessageBag());
            return redirect()->back();  
        }
        $customer=$request->except("_token");
        // dd($customer);
        if(auth()->guard("customer")->attempt($customer)){

            Toastr::success("successfully login" ,"Customer");
            return view("frontend.layouts.home");
        }
            
        Toastr::error('Invalid user');
        return redirect()->back();
        
    }
    public function customerLogout()
    {
        Auth::guard('customer')->logout();
        Toastr::success('successfully loglot','Customer');
        return redirect()->route('home.page');
    }
}
