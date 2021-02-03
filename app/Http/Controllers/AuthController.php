<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return Redirect::to('login')->withSucces('Whoops! Inloggegevens niet gevonden!');
    }

    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }

        return Redirect::to('login')->withSuccess("Je hebt geen rechten om dit te doen!");
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
