<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index(){
        return view('layout.upload-foto');
    }

    public function uploadFoto(Request $request){
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'album_id'=>'required',
            'foto'=>'required | mimes:jpg,png,jpeg',
        ]);

        $foto_file = $request->file('foto');
        $foto_extention = $foto_file->extension();
        $foto_name = date('dmyhis').'.'.$foto_extention;
        $foto_file->move(public_path('img-foto/'),$foto_name);

        $credentials = [
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'kategori_id'=>$request->kategori_id,
            'album_id'=>$request->album_id,
            'foto'=>$foto_name, // disesuaikan dengan nama file yang diunggah
        ];

        User::create($credentials);
        return view('layout.login');

    }
    public function form(Request $request){
        $dataKategori = Kategori::all();
        $dataAlbum = Album::where('user_id', auth()->user()->id)->get();
        return view('layout.upload-foto', compact('dataKategori', 'dataAlbum'));
    }
}
