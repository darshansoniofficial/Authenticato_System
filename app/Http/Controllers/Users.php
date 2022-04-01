<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class Users extends Controller
{
    function list(){
        return Session::get('logData');
        $user=User::all();
        return view("userlist", ['user'=>$user]);
    }
    function create()
    {
        return view('register');
    }


    public function login(Request $req)
    {
            User::select('*')->where(
             [
             ['email','=',$req->email],
             ['password','=',$req->password]
             ]
            )->get();

            $req->session()->put('logData',[$req->input()]);
            return redirect('/list');
     }
    public function register_create(Request $req)

    {

        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $result= $user->save();
        if($result)
        {
            $req->session()->put('logData',[$req->input()]);
            return redirect('/');
        }

    }
}
