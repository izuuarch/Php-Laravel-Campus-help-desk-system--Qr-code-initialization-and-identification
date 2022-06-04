<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use App\Models\User;
class Studentscontroller extends Controller
{
    public function students(){
        $user = User::where('role_as',"0")->get();
        return view('admin.students',['students'=>$user]);
    }
}
