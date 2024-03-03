<?php

namespace App\Http\Controllers;


use App\Models\Album;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostinganController extends Controller
{
    public function index(){
        return view('layout.upload-foto');
    }

    public function uploadFoto(Request $request){
        $pesan = [
          'judul.required'=>'Judul tidak boleh dikosongkan!',
          'deskripsi.required'=>'Deskripsi tidak boleh dikosongkan!',
          'foto.required'=>'Foto tidak boleh dikosongkan!',
          'judul.required'=>'Judul tidak boleh dikosongkan!',
          'kategori_id.required'=>'Kategori tidak boleh dikosongkan!',
          'album_id.required'=>'Album tidak boleh dikosongkan!',

          'foto.mimes'=>'File foto yang dapat diunggah hanya: jpg, png, dan jpeg!',
          'foto.max'=>'Ukuran foto tidak boleh lebih dari 2 mb!',
          'judul.max'=>'Batas maximum judul adalah 50 Karakter',
          'deskripsi.max'=>'Batas maximum judul adalah 100 Karakter',

            
        ];
        $request->validate([
            'judul' => 'required|max:50',
            'deskripsi' => 'required|max:100',
            'foto' => 'required|mimes:jpg,png,jpeg|max:2048',
            'kategori_id' => 'required',
            'album_id' => 'required',
        ], $pesan);
        

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
        return redirect('/profile'.'/'.Auth::user()->id)->with('success', 'Foto Berhasil DiUpload!');

    }
    public function form(Request $request){
        $dataKategori = Kategori::all();
        $dataAlbum = Album::where('user_id', auth()->user()->id)->get();
        return view('layout.upload-foto', compact('dataKategori', 'dataAlbum'));
    }

    public function detailFoto(Request $request, $id){
        $dataPostingan = Postingan::findOrFail($id);
        // Cari komentar yang terkait dengan postingan yang ditemukan sebelumnya
        $relatedPostingan = Postingan::where('user_id', $dataPostingan->user_id)
                             ->inRandomOrder()
                             ->take(4)
                             ->get();
    
        return view('layout.detail-foto', compact('dataPostingan', 'relatedPostingan'));
    }
    
    

    public function indexEdit($id){
        $dataPostingan = Postingan::find($id);
        $dataKategori = Kategori::all();
        $dataAlbum = Album::where('user_id', auth()->user()->id)->get();
        return view('layout.edit-foto', compact('dataPostingan','dataKategori','dataAlbum'));
    }

    public function update(Request $request, $id) {
        $pesan = [
            'judul.required'=>'Judul tidak boleh dikosongkan!',
            'deskripsi.required'=>'Deskripsi tidak boleh dikosongkan!',
            'foto.required'=>'Foto tidak boleh dikosongkan!',
            'judul.required'=>'Judul tidak boleh dikosongkan!',
            'kategori_id.required'=>'Kategori tidak boleh dikosongkan!',
            'album_id.required'=>'Album tidak boleh dikosongkan!',
  
            'foto.mimes'=>'File foto yang dapat diunggah hanya: jpg, png, dan jpeg!',
            'foto.max'=>'Ukuran foto tidak boleh lebih dari 2 mb!',
            'judul.max'=>'Batas maximum judul adalah 20 Karakter',
            'deskripsi.max'=>'Batas maximum judul adalah 100 Karakter',
          ];
        // Validasi request
        $request->validate([
            'judul' => 'required|max:50',
            'deskripsi' => 'required|max:100',
            'kategori_id' => 'required',
            'album_id' => 'required',
        ],$pesan
    );
    
        // Ambil data postingan berdasarkan ID
        $dataEditPostingan = Postingan::findOrFail($id);
    
        // Update data postingan
        $dataEditPostingan->judul = $request->judul;
        $dataEditPostingan->deskripsi = $request->deskripsi;
        $dataEditPostingan->kategori_id = $request->kategori_id;
        $dataEditPostingan->album_id = $request->album_id;
        $dataEditPostingan->save();
    
        // Redirect dengan pesan sukses
        return redirect('/detail-foto'.'/'.$id)->with('success', 'Postingan Berhasil DiEdit!');
    }
    public function delete($id) {
        // Temukan postingan berdasarkan ID
        $postingan = Postingan::findOrFail($id);
        
        // Hapus foto terlebih dahulu
        $this->hapusFoto($postingan->foto);
    
        // Hapus postingan
        $postingan->delete();
        
        // Redirect dengan pesan sukses
        return redirect('/profile'.'/'.Auth::user()->id)->with('success', 'Postingan Berhasil Dihapus!');
    }
    
    private function hapusFoto($foto_name) {
        $foto_path = public_path('img-foto/') . $foto_name;
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }
    }
}
