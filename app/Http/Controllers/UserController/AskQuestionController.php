<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest\AskRequest;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use App\Services\AskServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AskQuestionController extends Controller
{
    public function ask(){
        return view('user.ask');
    }
    public function askquestion(AskRequest $req, AskServices $ask){
        $ask->askquestion($req);
        return redirect('/user/ask')->with('success',"Your Issue Have Been Sent To The Administrator");
    }

}
