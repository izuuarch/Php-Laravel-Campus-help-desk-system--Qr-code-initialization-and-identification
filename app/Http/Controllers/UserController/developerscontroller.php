<?php

namespace App\Http\Controllers\usercontroller;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class developerscontroller extends Controller
{
    public function index(){
        $user = User::where('id',Auth::user()->id)->first();
        return view('user.developers',['user'=>$user]);
    }
}
