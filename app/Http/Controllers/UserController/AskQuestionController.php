<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AskQuestionController extends Controller
{
    public function ask(){
        return view('user.ask');
    }
    public function askquestion(Request $req){
        $this->validate($req, [
            'title' => 'required',
            'shortnote' => 'required',
            'uploadedFile' => 'image|nullable|max:1999'
        ]);

        $savequestion= new helpquestion;
        $savequestion->title_row = $req->input('title');
        $trackid = Str::random(10);
        $savequestion->trackid = $trackid;
        if($req->hasFile('uploadedFile')){
            $fileext = $req->file('uploadedFile')->getClientOriginalName();
            $filename = pathinfo($fileext, PATHINFO_FILENAME);
            $extension = $req->file('uploadedFile')->getClientOriginalExtension();
            $storefile = $filename.'_'.time().'.'.$extension;
            $path = $req->file('uploadedFile')->move('./uploads', $storefile); 
            $savequestion->image_row = $storefile;
            $savequestion->createdby = Auth::user()->id;
        }
        $savequestion->shnote_db = $req->input('shortnote');
        $savequestion->save();
        return redirect('/user/ask')->with('success',"Your Issue Have Been Sent To The Administrator");

    }

}
