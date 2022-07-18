<?php

namespace App\Http\Controllers;
use App\Models\StaffBranch;


use Illuminate\Http\Request;

class StaffBranchController extends Controller
{
    //
    public function index(){
        $sb = StaffBranch ::all();
        return view('post.StaffBranch',compact('sb'));
    }
}
