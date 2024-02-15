<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('layout.login');
    }
    public function login(Request $request){
       $dataLogin = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt($dataLogin)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }else{
            return back()->with('error','username atau password anda salah! ');
        }

    }
    public function logout(Request $request){
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
