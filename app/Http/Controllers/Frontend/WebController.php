<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function homePage()
    {
        return view("frontend.layouts.webPage");
    }
}
