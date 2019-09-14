<?php

Route::get('/', function (){
    return view('home');
});

/*Register*/
Route::get('/register', 'RegisterController@index');
Route::post('/register','RegisterController@register')->name('user.signup');

/*Login - Logout*/
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login')->name('user.signin');
Route::get('/logout', 'LoginController@logout')->name('user.logout');


Route::group(['middleware'=> 'userAuth'],function (){
    /*AdminManageController*/
    Route::get('/admin/dashboard','AdminController@index')->name('admin.show');
    /*Route::get('/admin','AdminController@index')->name('admin.show');*/
    /*Admin-UserManageController*/
    Route::get('/edit/{id}/user','AdminController@edit')->name('user.edit');
    Route::post('/update/{id}/user','AdminController@update')->name('user.update');
    Route::get('/delete/{id}/user','AdminController@delete')->name('user.delete');
    /*Dashboard*/
    Route::get('/dashboard', 'UserController@index')->name('user.dashboard');
    Route::get('/account', 'UserController@account')->name('user.account');
    Route::get('/user/{id}/edit','UserController@edit')->name('user.editaccount');
    Route::post('/user/{id}/update','UserController@update')->name('user.updateaccount');
    Route::get('/user/{id}/delete','UserController@delete')->name('user.deleteaccount');
    /*Credentials*/
    Route::get('/add', 'CredentialController@index');
    Route::post('/add', 'CredentialController@add')->name('user.addcredentials');
    Route::get('/show', 'CredentialController@show')->name('user.showcredentials');
    Route::get('/cred/{id}/edit','CredentialController@edit')->name('user.cred.edit');
    Route::post('/cred/{id}/update','CredentialController@update')->name('user.cred.update');
    Route::get('/cred/{id}/delete','CredentialController@delete')->name('user.cred.delete');
});
