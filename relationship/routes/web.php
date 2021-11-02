<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/home','HomeController@index')->name('home');

//Route::get('/user', function(){

   /* $user = \App\User::all();
    return view('users.index', compact('users'));

    //1 hasOne
        \App\Address::create([
            'user_id' => $user->id,
            'country' => 'India'
        ]);
    //2 hasOne
         $user->address()->create([
            'country' => 'India'
         ]);*/
//});

Route::resource('users','UserController');
Route::resource('test','DeletedController');
Route::resource('onemany','OneManyController');
Route::resource('one','OneController');
Route::resource('tagsmany','TagController');

Route::resource('/postsmany','ManyController');
Route::get('/posts',function(){
   /* \App\Tag::create([
            'name' => 'Asp.net'
        ]);

        \App\Tag::create([
            'name' => 'pyhton'
        ]);
        
        \App\Tag::create([
            'name' => 'cobol'
        ]);
*/
       
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
