<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class HomeController extends Controller
{
    //
    public function roles () {
        $service = new UserService();

        dd($service->roles());

    }
}
