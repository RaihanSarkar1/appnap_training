<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Write Functions here

    public function login() {
        return view('auth.login');
    }
   
    public function forgot() {
        return view('auth.forgot');
    }


}
