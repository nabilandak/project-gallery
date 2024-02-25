<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Postingan;
use Illuminate\Http\Request;
use App\Models\Laporankomentar;
use App\Models\Laporanpostingan;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $dataLaporanPostingan = Laporanpostingan::paginate(10);
        
        return view('admin.layout.index',compact('dataLaporanPostingan'));
    }

    public function dashboardKomentar(){
        $dataLaporanKomentar = Laporankomentar::paginate(10);
        
        return view('admin.layout.dashboard-komentar',compact('dataLaporanKomentar'));
    }

    public function detailKomentar($id){
        $dataDetailLaporanKomentar = Komentar::FirstWhere('id', $id);
        return view('admin.layout.detail-komentar',compact('dataDetailLaporanKomentar'));
    }

    public function deleteKomentar($id) {
        // Temukan Komentar berdasarkan ID
        $komentar = Komentar::findOrFail($id);
        $laporanKomentar = Laporankomentar::where('komentar_id', $komentar->id);
        
    
        // Hapus postingan
        $komentar->delete();
        $laporanKomentar->delete();
        
        // Redirect dengan pesan sukses
        return redirect('/admin-dashboard-komentar')->with('success', 'Komentar Berhasil Di Hapus!');
    }

    public function deleteLaporanKomentar($id) {
        // Temukan postingan berdasarkan ID
        $laporanKomentar = Laporankomentar::findOrFail($id);
        $laporanKomentar->delete();
        
        // Redirect dengan pesan sukses
        return redirect('/admin-dashboard-komentar')->with('success', 'Laporan Komentar Berhasil Di Hapus!');
    }


    public function detailPostingan($id){
        $dataDetailLaporanPostingan = Postingan::FirstWhere('id', $id);
        return view('admin.layout.detail-postingan',compact('dataDetailLaporanPostingan'));
    }

    public function deletePostingan($id) {
        // Temukan postingan berdasarkan ID
        $postingan = Postingan::findOrFail($id);
        $laporanPostingan = Laporanpostingan::where('postingan_id', $postingan->id);
        
        // Hapus foto terlebih dahulu
        $this->hapusFoto($postingan->foto);
    
        // Hapus postingan
        $postingan->delete();
        $laporanPostingan->delete();
        
        // Redirect dengan pesan sukses
        return redirect('/admin')->with('success', 'Postingan Berhasil Di Hapus!');
    }

    public function deleteLaporan($id) {
        // Temukan postingan berdasarkan ID
        $laporanPostingan = Laporanpostingan::findOrFail($id);
        $laporanPostingan->delete();
        
        // Redirect dengan pesan sukses
        return redirect('/admin')->with('success', 'Laporan Postingan Berhasil Di Hapus!');
    }

    private function hapusFoto($foto_name) {
        $foto_path = public_path('img-foto/') . $foto_name;
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }
    }

    public function indexLogin(){
        return view('admin.layout.page-login');
    }
    public function login(Request $request){
        $dataLogin = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
    
        if(Auth::attempt($dataLogin)){
            $user = Auth::user();
            
            // Memeriksa apakah pengguna memiliki peran 'admin'
            if($user->role === 'admin'){
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            } else {
                Auth::logout(); // Logout pengguna jika bukan admin
                return back()->with('error','Hanya admin yang diizinkan masuk!');
            }
        }else{
            return back()->with('error','Username atau password Anda salah!');
        }
    }

    public function dashboardKategori(){
        $dataKategori = Kategori::paginate(20);
        
        return view('admin.layout.dashboard-kategori',compact('dataKategori'));
       
    }


    public function indexUpload(){
        return view('admin.layout.upload-category');
    }
    public function uploadKategori(Request $request){
        $request->validate([
            'nama'=>'required',
            'deskripsi' => 'required',
           
        ]);
        $dataKategori = [
            'nama'=>$request->nama,
            'deskripsi'=>$request->deskripsi,
        ];
        Kategori::create($dataKategori);
        return redirect('/admin-dashboard-kategori')->with('success', 'Data Kategori Berhasil Ditambah!');
    }

    public function editKategori($id){
        $dataKategori = Kategori::where('id', $id)->first();
        return view('admin.layout.edit-kategori',compact('dataKategori'));
    }
    
    public function editKategoriProses(Request $request, $id){
       
            // Validasi request
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
            ]);

            $dataUpdateKategori = [
                'nama'=> $request->nama,
                'deskripsi'=> $request->deskripsi
            ];
        
            // Ambil data postingan berdasarkan ID
            $dataKategori = Kategori::findOrFail($id);

            $dataKategori->update($dataUpdateKategori);
        
            // Redirect dengan pesan sukses
            return redirect('/admin-dashboard-kategori')->with('success', 'Data Kategori Berhasil Dirubah!');
        
        }

    public function hapusKategori($id){
        $dataKategori = Kategori::findOrFail($id);
        $dataKategori->delete();
        
        // Redirect dengan pesan sukses
        return redirect('/admin-dashboard-kategori')->with('success', 'Kategori Berhasil Di Hapus!');
    }
    public function adminLogout(Request $request){
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/admin-login');
    }
    

   
}
