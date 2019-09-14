<?php

namespace App\Http\Controllers;

use App\Information;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CredentialController extends Controller{
    public function index(){
        $users = User::latest()->get();
        return view('user.credentials',compact(['users']));
    }

    public function add(){
        $this->validate(request(),[
            'title' => 'required',
            'url' => 'required',
            'user' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::find(Auth::id())->information()->create([
            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'url' => request('url'),
            'user' => request('user'),
            'email' => request('email'),
            /*'password' => bcrypt(request('password')),*/
            'password' => request('password'),
        ]);
        /*return view('user.showcred');*/
        return redirect()->route('user.showcredentials');
    }

    public function show(){
        $information = User::find(Auth::id())->information()->paginate(10);
        return view('user.showcred',compact('information'));
    }

    public function edit($id){
        $cred = Information::find($id);
        return view('user.edit-credential',compact('cred'));
    }

    public function update($id){
        $cred = Information::find($id);
        $cred -> update([
            'title' => request('title'),
            'url' => request('url'),
            'user' => request('user'),
            'email' => request('email'),
            'password' => request('password'),
        ]);

        return redirect()->route('user.showcredentials');
    }

    public function delete($id){
        Information::find($id)->delete();
        return redirect()->route('user.showcredentials')->with('deleteSuccess','Deleted Successfully!');
    }
}
