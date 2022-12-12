<?php
namespace App\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\helpquestion;
use Illuminate\Support\Facades\Auth;
class EditIssuesService{
    public function editissues($id){
        $data = helpquestion::withTrashed()->find($id);
        return $data;
    }
}