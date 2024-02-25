<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Follow;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index($id){
        $dataProfileUser = User::find($id);
        $dataAlbum = Album::where('user_id',$id)->get();
        $dataPostingan = Postingan::where('user_id',$id)->get();
        $data_follow = Follow::FirstWhere('user_id',Auth::user()->id);
      
        
        return view('layout.profile',compact('dataProfileUser','dataAlbum','dataPostingan', 'data_follow'));
    }
    public function indexEdit($id){
        $dataProfile = User::where('id', $id)->first();
        return view('layout.edit-profile',compact('dataProfile'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'username' => 'required|unique:users,username,'.$id,
            'no_telepon' => 'required|unique:users,no_telepon,'.$id,
            'jenis_kelamin' => 'required',
            'bio' => 'required',
            'address' => 'required',
           
        ]);
    
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
            $request->validate([
                'avatar' => 'nullable|mimes:jpg,png,jpeg',
            ]);
            $avatar_file = $request->file('avatar');
            $avatar_extention = $avatar_file->extension();
            $avatar_name = date('dmyhis').'.'.$avatar_extention;
            $avatar_file->move(public_path('img-avatar/'), $avatar_name);
            $dataProfileUpdate['avatar'] = $avatar_name;
            
        }
    
        $findUserData->update($dataProfileUpdate);
    
        return redirect('/profile'.'/'.$id)->with('success', 'Data Berhasil Dirubah!');
    }

    
}
