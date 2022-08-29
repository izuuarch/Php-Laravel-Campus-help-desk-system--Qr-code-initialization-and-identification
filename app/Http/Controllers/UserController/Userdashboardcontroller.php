<?php

namespace App\Http\Controllers\UserController;

use App\Models\helpquestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class Userdashboardcontroller extends Controller
{
    public function index(){
        $issues =  helpquestion::where('createdby',Auth::user()->id)->get()->count();
        // count resolved issues
        $resolvedissues =  helpquestion::where('createdby',Auth::user()->id)->where('resolved_status','1')->get()->count();
        return view(

            'user.home',

        [
            // counting the issues
            'issuescount'=>$issues,
            'countresolves'=>$resolvedissues

            ]

    );
    }
}
