<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('user', ['users' => $users]);
    }

    function edit($id){
        $user = User::find($id);
        return view('user_edit', ['user' => $user]);
    }

    function edit_action(Request $req){
        $user = User::find($req->id);

        $user->name = ($req->name == null)?$user->name:$req->name;
        $user->email = ($req->email == null)?$user->email:$req->email;
        $user->password = ($req->password == null)?$user->password:$req->password;

        $user->save();

        return redirect('/users');
    }

    function delete(Request $req){
        User::destroy($req->id);
        return redirect('/users');
    }
}


