<?php

namespace App\Http\Controllers;

use App\Models\Trigerlogin;
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
            }elseif ($user->status == 'no_active') {
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                return back()->with('error', 'Akun anda sudah di banned!');
            } 
            else {
                $request->session()->regenerate();
                Trigerlogin::create([
                    'id_user'=>Auth::user()->id
                ]);
                return redirect()->intended('/')->with('success','Login Berhasil!');;
            }
        }else{
            return back()->with('error','Username atau password Anda salah!');
        }
    }
    
    public function logout(Request $request){
          // Ambil user yang sedang login
        $user = Auth::user();

        // Hapus data Trigerlogin jika ada
        if ($user) {
            Trigerlogin::where('id_user', $user->id)->delete();
        }
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
