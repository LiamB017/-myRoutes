<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //login functions that will let users log in
    // At the moment we will route to the login view
    public function login()
    {
        return view('login');
    }
}
