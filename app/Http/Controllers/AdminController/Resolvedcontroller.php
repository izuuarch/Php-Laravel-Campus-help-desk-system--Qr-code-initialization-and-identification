<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
class Resolvedcontroller extends Controller
{
    public function resolved(){
        $resolved = helpquestion::where('resolved_status','1')->get();
        return view('admin.resolved',['resolved'=>$resolved]);
    }
    public function unresolved(){
        $unresolved = helpquestion::where('resolved_status','0')->get();
        return view('admin.unresolved',['unresolved'=>$unresolved]);
    }
}
