<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FasttrackController extends Controller
{
    public function fasttrack(){
        return view('user.fasttrack');
    }
}
