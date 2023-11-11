<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
 
    public function show(){
        if(Auth::check()){
            return view("home");
        }
        return view('auth.register');
    }
    
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('succes', 'Account created successfully');
        
    }
    public function edit(User $user){
        return view('updatePerfil', compact('user'));
    }
}
