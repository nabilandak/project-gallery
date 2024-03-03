<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Postingan;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(Request $request){
        if($request->search){
            $dataFoto = Postingan::where('judul','LIKE', '%'.$request->search.'%');
        }else{
            $dataFoto = Postingan::latest();
        }
        $kategori = Kategori::latest()->get();
        $foto = $dataFoto->paginate(25);
        return view('index',compact('foto', 'kategori'));
    }
    
 
}
