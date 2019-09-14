<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function index(){
        return view('home');
    }

    public function login(){
        if(Auth::attempt(['email' => request('email'),'password' => request('password')])){
            return view('user.dashboard');
            /*return 'Login Successfully';*/
        }else{
            return ('invalid');
        }
    }

    public function logout(){
        Auth::logout();
        return view('home');
    }
}
