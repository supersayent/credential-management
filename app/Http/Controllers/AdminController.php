<?php

namespace App\Http\Controllers;

use App\User;
/*use Illuminate\Foundation\Auth\User;*/
use Illuminate\Http\Request;

class AdminController extends Controller{
    public function index(){
        $users = User::latest()->get();
        return view('admin.admindash',compact(['users']));
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.update-user',compact('user'));
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
        return redirect()->route('admin.show');
    }
}
