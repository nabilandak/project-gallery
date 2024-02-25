<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // tambahkan impor model User

class RegisterController extends Controller
{
    public function index(){
        return view('layout.register');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required | unique:users,email',
            'username'=>'required | unique:users,username',
            'password'=>'required',
            'no_telepon'=>'required | unique:users,no_telepon',
            'jenis_kelamin'=>'required',
            'bio'=>'required',
            'address'=>'required',
            'avatar'=>'required | mimes:jpg,png,jpeg',
        ]);

        $avatar_file = $request->file('avatar');
        $avatar_extention = $avatar_file->extension();
        $avatar_name = date('dmyhis').'.'.$avatar_extention;
        $avatar_file->move(public_path('img-avatar/'),$avatar_name);

        $credentials = [
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'no_telepon'=>$request->no_telepon,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'bio'=>$request->bio,
            'address'=>$request->address,
            'avatar'=>$avatar_name, // disesuaikan dengan nama file yang diunggah
        ];

        User::create($credentials);
        return redirect('/login')->with('success', 'Registrasi Berhasil!');

    }
}
