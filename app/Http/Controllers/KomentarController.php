<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function insert(Request $request, $postId){
        $dataKomentar = [
            'user_id' => auth()->user()->id,
            'postingan_id'=>$postId,
            'isi_kometar'=>$request->isi_komentar,
        ];
        Komentar::create($dataKomentar);
        return response()->json([
            'status'=>200,
            'message'=>'Berhasil menambahkan komentar',
        ]);
    }

    public function read($id){
        $tampilKomentar = Komentar::with(['user','postingan'])->where('postingan_id',$id)->get();
        return view('layout.read-comment', compact('tampilKomentar')); 
    }

    public function show($id){
        $idKomen = Komentar::find($id);
        return response()->json([
            'status' => 200,
            'id' => $idKomen
        ]);
    }
    
}
