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
            $user = Auth::user();
            
            // Memeriksa apakah pengguna adalah admin
            if($user->role === 'admin'){
                Auth::logout(); // Logout pengguna admin
                return back()->with('error','Admin tidak diperbolehkan menggunakan login ini!');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/')->with('success','Login Berhasil!');;
            }
        }else{
            return back()->with('error','Username atau password Anda salah!');
        }
    }
    
    public function logout(Request $request){
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
