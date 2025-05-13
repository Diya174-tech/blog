<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class User extends Controller
{
    //
    function getUser($name) {
        // return "Code step by step";
        // $name = "abc";
        // $user = ["abc", "bcd", "efg"];
        return view('user' ,["name" => $name]);
        // ["name"=>$name, "user" =>$user]);
    }

    function getName() {
        return "Hello Dia";
    }

    function getUserName($name) {
        return "This is ". $name;
    }

    function adminPage() {
        // if(View::exists('admin.login')) {
        return view('admin.admin');
        // }
        // else {
            // echo "Not view Found";
        // }
    }
}
