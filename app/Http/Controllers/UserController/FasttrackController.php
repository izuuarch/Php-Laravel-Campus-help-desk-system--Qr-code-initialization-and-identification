<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use Illuminate\Support\Facades\Auth;

class FasttrackController extends Controller
{
    public function fasttrack(){
        $fastrackissues =  helpquestion::where('createdby',Auth::user()->id)->get();
        // foreach($fastrackissues as $track){
        //     $fast = $track->resolved_status;
        //     if($fast == "1"){
        //         $message = "Not Resolved";
        //     }else{

        //     }
        // }
        // $status = $fastrackissues->resolved_status;
        // return $status;
        // if(){

        // }else{

        // }
         return view('user.fasttrack',['fastrackissues'=>$fastrackissues]);
    }
    public function searchtrackissue(Request $req){
        $this->validate($req, [
            'trackid' => 'required',
        ]);
        $trackid = $req->input('trackid');

        return redirect('/user/fastsearch/'.$trackid);
    }
    public function fastsearch($trackid){
        $fastsearchissue =  helpquestion::where('trackid', '=' ,$trackid)->get();
        // var_dump($fastsearchissue);
        return view('user.fastsearch',['fastsearchissue'=>$fastsearchissue]);
    }
}
