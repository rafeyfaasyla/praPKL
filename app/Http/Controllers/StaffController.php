<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index(){
        $s = Staff ::all();
        return view('post.StaffBranch',compact('s'));
    }
}
