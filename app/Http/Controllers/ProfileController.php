<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Follow;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index($id){
        $dataProfileUser = User::find($id);
        $dataAlbum = Album::where('user_id',$id)->get();
        $dataPostingan = Postingan::where('user_id',$id)->get();
        $data_follow = Follow::where('user_id', Auth::user()->id)->where('following_id', $dataProfileUser->id)->first();
      
        
        return view('layout.profile',compact('dataProfileUser','dataAlbum','dataPostingan', 'data_follow'));
    }
    public function indexEdit($id){
        $dataProfile = User::where('id', $id)->first();
        return view('layout.edit-profile',compact('dataProfile'));
    }

    public function update(Request $request, $id) {
        $pesan = [
            'name.required'=>'Nama tidak boleh dikosongkan!',
            'email.required'=>'Email tidak boleh dikosongkan!',
            'username.required'=>'Username tidak boleh dikosongkan!',
            'jenis_kelamin.required'=>'Jenis Kelamin tidak boleh dikosongkan!',

            'email.unique'=>'Email sudah digunakan!',
            'username.unique'=>'Username sudah digunakan!',
            'no_telepon.unique'=>'No Telfon sudah digunakan!',

            'email.max'=>'Batas maximum email adalah 150 Karakter',
            'username.max'=>'Batas maximum username adalah 50 Karakter',
            'name.max'=>'Batas maximum nama adalah 150 Karakter',
          ];
        $request->validate([
            'name' => 'required|max:150', 
            'email' => 'required|unique:users,email,'.$id.'|max:150',
            'username' => 'required|unique:users,username,'.$id.'|max:50',
            'no_telepon' => 'nullable|unique:users,no_telepon,'.$id, 
            'jenis_kelamin' => 'required',
            'bio' => 'nullable',
            'address' => 'nullable',
            
        ],$pesan
    );
    
        $findUserData = User::findOrFail($id);
        $dataProfileUpdate = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'bio' => $request->bio,
            'address' => $request->address
        ];

    
        if ($request->hasFile('avatar')) {
            $pesan = [
                'avatar.mimes'=>'File foto yang dapat diunggah hanya: jpg, png, dan jpeg!',
                'avatar.max'=>'Ukuran foto tidak boleh lebih dari 2 mb!',
              ];
            $request->validate([
                'avatar' => 'nullable|mimes:jpg,png,jpeg|max:2048',
            ], $pesan);
            $avatar_file = $request->file('avatar');
            $avatar_extention = $avatar_file->extension();
            $avatar_name = date('dmyhis').'.'.$avatar_extention;
            $avatar_file->move(public_path('img-avatar/'), $avatar_name);
            $dataProfileUpdate['avatar'] = $avatar_name;
            
        }
    
        $findUserData->update($dataProfileUpdate);
    
        return redirect('/profile'.'/'.$id)->with('success', 'Data Berhasil Dirubah!');
    }
    public function indexPassword(){
        $user = auth()->user();
        return view('layout.edit-password',compact('user'));
    }
    public function updatePassword(Request $request)
    {
       $request->validate([
        'old_password'=>'required',
        'new_password'=>'required',
        'confirm_password'=>'required',
        
       ]);
       $user = auth()->user();

       if ($request->new_password !== $request->confirm_password) {
        return back()->with('error', 'Konfirmasi Password Tidak Sesuai!');
       }

       if(!Hash::check($request->old_password, $user->password)){
        return redirect()->back()->with('error', 'Password Lama Salah!');
       }else{
        $user->update([
            'password'=> Hash::make($request->new_password)
        ]);
        return redirect('/profile'.'/'.$user->id)->with('success', 'Password Berhasil Di ubah!');
       }


    }

  public function detailFollowers(User $user)
{
    $followers = Follow::where('following_id', $user->id)->get();
    $loggedInUserId = Auth::user()->id;
    
    foreach ($followers as $follower) {
        $follower->isFollowed = Follow::where('user_id', $loggedInUserId)->where('following_id', $follower->user_id)->exists();
    }

    return view('layout.detail-followers', compact('followers'));
}

public function detailFollowing(User $user)
{
    $followings = Follow::where('user_id', $user->id)->get();
    $loggedInUserId = Auth::user()->id;
    
    foreach ($followings as $following) {
        $following->isFollowed = Follow::where('user_id', $loggedInUserId)->where('following_id', $following->following_id)->exists();
    }

    return view('layout.detail-following', compact('followings'));
}


    
    
}
