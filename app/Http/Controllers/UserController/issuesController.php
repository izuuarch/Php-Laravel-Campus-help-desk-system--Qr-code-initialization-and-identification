<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use Illuminate\Support\Facades\Auth;

class issuesController extends Controller
{
   public function issues(){
    $issues =  helpquestion::where('createdby',Auth::user()->id)->get();
    
    return view('user.issues',['issues'=>$issues]);
   }
}
