<?php

namespace App\Http\Controllers;
use App\Models\Branch;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function index(){
        $b = Branch ::all();
        return view('post.StaffBranch',compact('b'));
    }
}
