<?php

namespace App\Http\Controllers\Usercontroller;

use App\Models\helpquestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Recyclecontroller extends Controller
{
    public function recyclebin(){
        $trash =  helpquestion::onlyTrashed()
        ->where('createdby',Auth::user()->id)->get();
    
        return view('user.recyclebin',['trash'=>$trash]);
    }
}
