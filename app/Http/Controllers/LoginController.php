<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
    if(Auth::check()){
        return view("/home");
    }
    return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
        return redirect()->to('/login')->withErrors('Nickname o Password incorrectos');
    }
    $user = Auth::getProvider()->retrieveByCredentials($credentials);

    Auth::Login($user);

    return $this->authenticated($request, $user);

    }
    public function authenticated(Request $request, $user){
        return redirect('/home');
    }
}