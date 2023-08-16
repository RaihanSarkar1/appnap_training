<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function viewHome() {
        return view('dashboard');
    }

    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        // start by validating the user input using the validator helper
        // First argument is the request data
        // The second argument is the rules
        // Finally call the validate method to validate the input
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('home');
        } else {
            return redirect('login');
        }
    }

    public function logout() {
        request()->session()->flush();
        return redirect('login');
    }

    public function newPass() {
        return view('auth.changepass');
    }

    public function updatePass(Request $request) {
        validator($request->all(), [
            'password' => 'required',
            'password1' => 'required|min:8',
            'password2' => 'required|min:8',
        ])->validate();;
    

        $user = Auth::user();
        $password = Hash::make($request->password);
        
        if ($password != $user->password){
            return redirect()->back()->withError(['password'=> 'Invalid Password']);
        }
        if ($request->password1 != $request->password2) {
            return redirect()->back()->withError(['password1'=> "New Passwords don't match"]);
        }
        if ($password == $user->password && $request->password1 == $request->password2){
            $user->password = Hash::make($request->password2);
            $user->save();

            dd('Password Changed Sucessfully');
        }
    }
}
