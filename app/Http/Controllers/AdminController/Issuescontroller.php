<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use App\Models\solution;

class Issuescontroller extends Controller
{
    public function issues(){
        $issues =  helpquestion::all();
        return view('admin.issues',['issues'=>$issues]);
    }
    public function viewissue($issueid){
        // echo $issueid;
        // $reviewissues =  helpquestion::find($issueid);
        $reviewissues =  helpquestion::where('trackid',$issueid)->get();

        return view('admin.review',['reviewissues'=>$reviewissues]);
    }
    public function resolveissue(Request $req){
        $this->validate($req, [
            'issueid' => 'required',
            'solutionnote' => 'required',
        ]);

        $solveissue= new solution;
        $solveissue->problemid = $req->input('issueid');
        $solveissue->solutionnote = $req->input('solutionnote');
        if($solveissue->save()){
            $updateissues= helpquestion::find($req->input('issueid'));
            $check = "1";
            $updateissues->resolved_status = $check;
            $updateissues->update();
            return redirect('/admin/issues')->with('success',"You Have successfully solved this issue as the administrator");
        }

    }
}
