<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use App\Services\EditIssuesService;
use Illuminate\Support\Facades\Auth;

class EditIssuesController extends Controller
{
    public function editissues(EditIssuesService $edit,$id){
        $data = $edit->editissues($id);
        return view('user.editissues',['editissues'=>$data]);
    }
    public function viewissue($id){
        $view = helpquestion::withTrashed()->find($id);
        return view('user.viewissue',['viewissue'=>$view]);
    }
    public function destroy($id){
        $delete = helpquestion::find($id);
        $delete->delete();
        return redirect('/user/issues')->with('success',"Issue Deleted Successfully");
    }
    public function forcedelete($id){
        $delete = helpquestion::withTrashed()->find($id);
        $delete->forceDelete();
        return redirect('/user/issues')->with('success',"Issue Deleted Successfully");
    }
    public function restore($id){
        $restore = helpquestion::withTrashed()->find($id);
        $restore->restore();
        return redirect('/user/issues')->with('success',"Issue Restored sucessfully");
    }
    public function updateissue(Request $req, $id){
        $savequestion = helpquestion::find($id);
        $this->validate($req, [
            'title' => 'required',
            'shortnote' => 'required',
            'uploadedFile' => 'image|nullable|max:1999'
        ]);
        $savequestion->title_row = $req->input('title');
        if($req->hasFile('uploadedFile')){
            $fileext = $req->file('uploadedFile')->getClientOriginalName();
            $filename = pathinfo($fileext, PATHINFO_FILENAME);
            $extension = $req->file('uploadedFile')->getClientOriginalExtension();
            $storefile = $filename.'_'.time().'.'.$extension;
            $path = $req->file('uploadedFile')->move('./uploads', $storefile); 
            $savequestion->image_row = $storefile;
        }
        $savequestion->createdby = Auth::user()->id;
        $savequestion->shnote_db = $req->input('shortnote');
        $savequestion->update();
        return redirect('/user/ask')->with('success',"Your Issue Have Been Updated and  Sent To The Administrator");
    }
}
