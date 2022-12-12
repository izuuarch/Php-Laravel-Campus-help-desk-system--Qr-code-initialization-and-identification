<?php

namespace App\Http\Controllers\Usercontroller;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class askapicontroller extends Controller
{
    public function check(Request $req){
        $req->validate([
                'apikey' => 'required|string',
            ]);
        $apikey = $req->apikey;
        $user = User::where('apikey', $apikey)->first();
        if(!$user){
            $response = [
                'message' => "wrong api key"
            ];
            return response($response, 400);
        }
    
    }
    public function ask(){
        // $fields = $req->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|string|unique:users,email',
        //     'password' => 'required|string|confirmed',
        // ]);
        // $user = User::create([
        //     'name' => $fields['name'],
        //     'email' => $fields['email'],
        //     'password' => bcrypt($fields['password'])
        // ]);
        $response = [
            'message' => "ready to go"
        ];
        return response($response, 201);
    }
}
