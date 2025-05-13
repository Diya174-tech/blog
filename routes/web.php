<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

Route::get('/', function () {
    // $user = ["abc", "bcd", "edf"];
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// route::redirect('/home', '/');
Route::view('/home', 'home');

Route::get('/about/{name}', function($name) {
    //echo $name;
    return view('about', ['name' => $name]);
});

route::get('user', [User::class,'getUser']);
route::get('myname', [User::class,'getName']);
route::get('getname/{name}', [User::class,'getUserName']);
route::get('admin',[User::class,'adminPage']);
route::view('abc/{name}', 'abc');


