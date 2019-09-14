<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function index(){
        return view('user.dashboard');
    }

    public function account(){
        $users = User::latest()->get();
        return view('user.account',compact(['users']));
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.update-account',compact('user'));
    }

    public function update($id){
        $user = User::find($id);
        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'phone' => request('phone'),
            'role' => request('role'),
            'status' => request('status'),
        ]);
        return redirect()->route('user.account');
    }
}
