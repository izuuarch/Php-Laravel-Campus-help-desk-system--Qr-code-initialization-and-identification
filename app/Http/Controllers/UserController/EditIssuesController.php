<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use Illuminate\Support\Facades\Auth;

class EditIssuesController extends Controller
{
    public function editissues($id){
        $data = helpquestion::find($id);
        return view('user.editissues',['editissues'=>$data]);
    }
    public function viewissue($id){
        $view = helpquestion::find($id);
        return view('user.viewissue',['viewissue'=>$view]);
    }
    public function deleteissue($id){
        $delete = helpquestion::find($id);
        $delete->delete();
        return redirect('/user/issues')->with('success',"Issue Deleted Successfully");
    }
}
