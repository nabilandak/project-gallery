<?php

namespace App\Http\Controllers;


use App\Models\Album;
use App\Models\Kategori;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $dataPostingan = [
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'kategori_id'=>$request->kategori_id,
            'album_id'=>$request->album_id,
            'foto'=>$foto_name, // disesuaikan dengan nama file yang diunggah
            'user_id' => auth()->user()->id,
        ];

        Postingan::create($dataPostingan);
        return redirect('/');

    }
    public function form(Request $request){
        $dataKategori = Kategori::all();
        $dataAlbum = Album::where('user_id', auth()->user()->id)->get();
        return view('layout.upload-foto', compact('dataKategori', 'dataAlbum'));
    }

    public function detailFoto(Request $request){
        $dataPostingan = Postingan::FirstWhere('user_id',Auth::user()->id);
        return view('layout.detail-foto', compact('dataPostingan'));
    }
}
