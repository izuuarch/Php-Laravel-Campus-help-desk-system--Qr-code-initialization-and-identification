<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use App\Models\solution;
use Illuminate\Support\Facades\Auth;
class ReviewController extends Controller
{
     public function review(){
      $reviewissues =  helpquestion::where('createdby',Auth::user()->id)->where('resolved_status','1')->get();

        return view('user.reviews',['reviewissues'=>$reviewissues]);
     }
     public function reviewsingle($id){
      $reviewsinglesoln = helpquestion::find($id);
      $viewsolution = solution::find($id);
      $reviewsinglesoln->where('createdby',Auth::user()->id)->where('resolved_status','1')->get();
      $viewsolution = solution::where('problemid',$id)->get();
      return view('user.reviewsingle',[
         'reviewsingle'=>$reviewsinglesoln,
         'solution'=>$viewsolution
      ]);
     }
}
