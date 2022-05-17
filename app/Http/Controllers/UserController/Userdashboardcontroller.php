<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Userdashboardcontroller extends Controller
{
    public function index(){
        // echo "user dashboard";
        return view('user.home');
    }
}
