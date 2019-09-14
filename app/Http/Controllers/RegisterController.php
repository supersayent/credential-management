<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller{
    public function index(){
        return view('home');
    }

    public function register(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'phone' => 'required',
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'phone' => request('phone'),
            'role' => request('role'),
            'status' => request('status'),
        ]);
        return redirect('user.login');
    }
}
