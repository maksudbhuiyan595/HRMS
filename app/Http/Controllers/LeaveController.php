<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function list()
    {

     return view('backend.layouts.pages.leave.leaveList');

    }
}
