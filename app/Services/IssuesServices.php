<?php
namespace App\Services;

use Illuminate\Support\Str;
use App\Models\helpquestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IssuesServices{
    public function issues(){
        $issues =  helpquestion::where('createdby',Auth::user()->id)->get();
        return $issues;
    }
}