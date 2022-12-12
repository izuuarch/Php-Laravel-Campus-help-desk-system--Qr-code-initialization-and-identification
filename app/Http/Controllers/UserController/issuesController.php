<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use App\Services\IssuesServices;
use Illuminate\Support\Facades\Auth;

class issuesController extends Controller
{
   public function issues(IssuesServices $issues){
    $issues = $issues->issues();
    return view('user.issues',['issues'=>$issues]);
   }
}
