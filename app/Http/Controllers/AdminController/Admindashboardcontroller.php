<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admindashboardcontroller extends Controller
{
    public function index(){
        return view('admin.home');
    }
}
