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
        $pesan = [
            'name.required'=>'Nama tidak boleh dikosongkan!',
            'email.required'=>'Email tidak boleh dikosongkan!',
            'username.required'=>'Username tidak boleh dikosongkan!',
            'jenis_kelamin.required'=>'Jenis Kelamin tidak boleh dikosongkan!',
            'password.required'=>'Password tidak boleh dikosongkan!',

            'email.unique'=>'Email sudah digunakan!',
            'username.unique'=>'Username sudah digunakan!',
            'no_telepon.unique'=>'No Telfon sudah digunakan!',

            'email.max'=>'Batas maximum email adalah 150 Karakter',
            'username.max'=>'Batas maximum username adalah 50 Karakter',
            'name.max'=>'Batas maximum nama adalah 150 Karakter',
          ];
        $request->validate([
            'name' => 'required|max:150', 
            'email' => 'required|unique:users,email|max:150',
            'username' => 'required|unique:users,username|max:50',
            'password' => 'required',
            'no_telepon' => 'nullable|unique:users,no_telepon,', 
            'jenis_kelamin' => 'required',
            'bio' => 'nullable|max:50',
            'address' => 'nullable|max:250',
            
        ],$pesan
    );
    
        $credentials = [
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'no_telepon'=>$request->no_telepon,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'bio'=>$request->bio,
            'address'=>$request->address,
        ];
    
        // Cek apakah ada file avatar yang diunggah
        if ($request->hasFile('avatar')) {
            $avatar_file = $request->file('avatar');
            $avatar_extension = $avatar_file->extension();
            $avatar_name = date('dmyhis').'.'.$avatar_extension;
            $avatar_file->move(public_path('img-avatar/'), $avatar_name);
            $credentials['avatar'] = $avatar_name;
        } else {
            // Gunakan foto profil default jika tidak ada file yang diunggah
            $default_avatar = 'default.jpg';
            $credentials['avatar'] = $default_avatar;
        }
    
        User::create($credentials);
        return redirect('/login')->with('success', 'Registrasi Berhasil!');
    }
    
}
