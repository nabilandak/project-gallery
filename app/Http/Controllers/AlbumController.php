<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index(){
        return view('layout.create-album');
    }
    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'deskripsi'=>'required',
            'thumbnail'=>'required | mimes:jpg,png,jpeg',
        ]);

        $thumbnail_file = $request->file('thumbnail');
        $thumbnail_extention = $thumbnail_file->extension();
        $thumbnail_name = date('dmyhis').'.'.$thumbnail_extention;
        $thumbnail_file->move(public_path('img-thumbnail/'),$thumbnail_name);

        $dataAlbum = [
            'user_id'=>Auth::user()->id,
            'name'=>$request->name,
            'deskripsi'=>$request->deskripsi,
            'thumbnail'=>$thumbnail_name, // disesuaikan dengan nama file yang diunggah
        ];

        Album::create($dataAlbum);
        return redirect('/profile'.'/'.Auth::user()->id)->with('success', 'Album Berhasil DiUpload!');

    }

    public function detailAlbum($id){
        $dataDetailAlbum = Postingan::where('album_id',$id)->paginate(10);
        $album = Album::FirstWhere('id', $id);
        return view('layout.detail-album', compact('dataDetailAlbum','album'));
    }


}
