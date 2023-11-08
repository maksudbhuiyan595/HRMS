<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WebController extends Controller
{
    public function homePage()
    {
        return view("frontend.layouts.webPage");
    }

    public function changeLang($lang)
    {
        // dd($lang);
        
        App::setLocale($lang);
        session()->put('locale',$lang);
  
        return redirect()->route('home.page');
    }
}
