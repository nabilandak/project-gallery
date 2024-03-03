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

    public function indexEdit($id){
        $dataAlbumEdit = Album::where('id',$id)->first();
        return view('layout.edit-album',compact('dataAlbumEdit'));
    }
    public function create(Request $request){
        $pesan = [
            'name.required'=>'Nama Album tidak boleh dikosongkan!',
            'deskripsi.required'=>'Deskripsi Album tidak boleh dikosongkan!',
            'thumbnail.required'=>'Thumbnail Album tidak boleh dikosongkan!',

            'name.max'=>'Batas maximum nama album adalah 50 Karakter',
            'deskripsi.max'=>'Batas maximum deskripsi album adalah 150 Karakter',
            'thumbnail.mimes'=>'File foto yang dapat diunggah hanya: jpg, png, dan jpeg!',

            'thumbnail.max'=>'Ukuran foto tidak boleh lebih dari 2 mb!',
          ];
        $request->validate([
            'name'=>'required|max:50',
            'deskripsi'=>'required|max:150',
            'thumbnail'=>'required | mimes:jpg,png,jpeg | max:2048 ',
        ],$pesan
    );

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

    public function editProses(Request $request, $id) {
        $pesan = [
            'name.required'=>'Nama Album tidak boleh dikosongkan!',
            'deskripsi.required'=>'Deskripsi Album tidak boleh dikosongkan!',

            'name.max'=>'Batas maximum nama album adalah 50 Karakter',
            'deskripsi.max'=>'Batas maximum deskripsi album adalah 150 Karakter',
            
          ];
        $request->validate([
            'name'=>'required|max:50',
            'deskripsi'=>'required|max:150',
        ],$pesan
    );
    
        $findDataAlbum = Album::findOrFail($id);
        $dataAlbumUpdate = [
            'name' => $request->name,
            'deskripsi'=>$request->deskripsi
        ];

    
        if ($request->hasFile('thumbnail')) {
            $pesan = [
                'thumbnail.mimes'=>'File foto yang dapat diunggah hanya: jpg, png, dan jpeg!',
                'thumbnail.max'=>'Ukuran foto tidak boleh lebih dari 2 mb!',
            ];
            $request->validate([
                'thumbnail' => 'nullable|mimes:jpg,png,jpeg | max:2048',
            ],$pesan
        );
            $thumbnail_file = $request->file('thumbnail');
            $thumbnail_extention = $thumbnail_file->extension();
            $thumbnail_name = date('dmyhis').'.'.$thumbnail_extention;
            $thumbnail_file->move(public_path('img-thumbnail/'), $thumbnail_name);
            $dataAlbumUpdate['thumbnail'] = $thumbnail_name;
            
        }
    
        $findDataAlbum->update($dataAlbumUpdate);
    
        return redirect('/detail-album'.'/'.$id)->with('success', 'Data Berhasil Dirubah!');
    }

    public function detailAlbum($id){
        $dataDetailAlbum = Postingan::where('album_id',$id)->paginate(10);
        $album = Album::FirstWhere('id', $id);
        return view('layout.detail-album', compact('dataDetailAlbum','album'));
    }

    public function delete(Request $request, $id) {
        // Temukan postingan berdasarkan ID
        $album = Album::findOrFail($id);
        if ($request->hasFile('thumbnail')) {
            $request->validate([
                'thumbnail' => ['mimes:png,jpg,jpeg,gif'],
            ]);
    
            $thumbnail_file = $request->file('thumbnail');
            $thumbnail_extension = $thumbnail_file->extension();
            $thumbnail_name = date('dmyhis') . '.' . $thumbnail_extension;
            $thumbnail_file->move(public_path('/assets/img-thumbnail/'), $thumbnail_name);
    
            File::delete(public_path('/assets/img-thumbnail/'. $album->thumbnail));
            $album->thumbnail = $thumbnail_name;
        }
    
        // Hapus album
        $album->delete();
        
        // Redirect dengan pesan sukses
        return redirect('/profile'.'/'.Auth::user()->id)->with('success', 'Album Berhasil Dihapus!');
    }
    
    
   


}
