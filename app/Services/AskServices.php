<?php
namespace App\Services;

use Illuminate\Support\Str;
use App\Models\helpquestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AskServices{
    public function askquestion(Request $req){
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

        return $savequestion;
    }
}