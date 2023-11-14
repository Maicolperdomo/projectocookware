<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Match_;

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
    public function forgot_password(Request $request){
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user))
        {
          //  $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', 'please check ypur email and reset your password');
        }
        else{
            return redirect()->back()->with('error', 'correo no encontrado en el sistema');
        }

    }
    public function forgot()
    {
        return view('auth.forgot');
    }
   public function reset($token)
    {
        $user = User::where('email', '=', $token)->first();
        if(!empty($user))
        {
            $data['user']= $user;
        return view('auth.reset', $data);
        }
        else{
            abort(404);
        }
    }
    public function post_reset($token, Request $request){
        $user = User::where('email', '=', $token)->first();
        if(!empty($user))
        {
            if($request->password == $request->password)//para verificar q la contraseña sea igual
            {
                $user->password = Hash::make($request->password);
                if(empty($user->email_verified_at))
                {
                $user->email_verified_at = date('Y-m-d H:i:s');
                }
                 // $user->remember_token = Str::random(40);
            $user->save();
            return redirect('login')->with('success','password successfully reset');
            }
            else{
                return redirect()->with('success', 'la contraseña y confirmacion de contraseña no coinciden');
            }
        }
        else{
            abort(404);
        }
    }
}
