<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Postingan;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($id){
        $dataDetailKategori = Postingan::where('kategori_id',$id)->paginate(10);
        $kategori = Kategori::FirstWhere('id', $id);
        return view('layout.category-detail', compact('dataDetailKategori','kategori'));
    }
}
