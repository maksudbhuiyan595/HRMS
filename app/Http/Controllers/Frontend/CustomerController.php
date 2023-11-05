<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\forgetPasswordMail;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
        Toastr::success('successfully logout','Customer');
        return redirect()->route('home.page');
    }

   
   public function sendResetLink(Request $request)
   {

    // dd($request->all());
        $validate=validator::make(request()->all(), [
            'email'=> 'required',
        ]);
        if( $validate->fails() ){
            Toastr::error($validate->getMessageBag());
            return redirect()->back();
        }
        $customer=Customer::where('email', $request->email)->first();
        if($customer){
            //link= route+token
            //token create
            $token=str::random(32);
            $customer->update([
                'token'=>$token,
                'token_expired_at'=>Carbon::now()->addMinutes(3),
            ]);
            $link=route('click.reset.link',$token);

            Mail::to($customer->email)->send(new forgetPasswordMail($link));

            Toastr::success('Reset link sent to your email.');
            return redirect()->back();
          

        }
        Toastr::error('No User Found');
        return redirect()->back();
   }

   public function clickResetLink($token)
   {
    $customer=Customer::where('token',$token)->whereDate('token_expired_at','=',now())
                    ->whereTime('token_expired_at','>=',now())
                    ->first();


    if($customer)
    {
        return view('frontend.layouts.mail.reset-password',compact('token'));
    }
    Toastr::error('Token Expired or Invalid Customer');
    return redirect()->route('customer.login');

   }
   public function resetPassword(Request $request, $token)
   {

       $validate=Validator::make($request->all(),[
           'password'=>'required|confirmed'
       ]);

       if($validate->fails())
       {
         Toastr::error($validate->getMessageBag());
         return redirect()->back();  
       }

       $customer=Customer::where('token',$token)->first();
       if($customer)
       {    
        
           $customer->update([
               'password'=>bcrypt($request->password)
           ]) ? Customer::destroy($token) : null;
       }

       Toastr::success('Your password reset successfully.');
       return redirect()->route('customer.login');
       
   }

}
