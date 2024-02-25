<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;
use App\Models\Laporankomentar;

class LaporkomentarController extends Controller
{
   public function index($id){
      // $tampilKomentar = Komentar::where('postingan_id',2)->first();
      $tampilKomentar = Komentar::with(['user','postingan'])->where('id',$id)->first();
     
    return view('layout.lapor-komentar', compact('tampilKomentar'));
   }

   public function proses(Request $request, $komenId){
      $komentar_id = Komentar::where('id',$komenId)->first();
      $request->validate([
         'alasan' => 'required',
        
     ]);
      $dataLaporKomentar = [
         'user_id' => auth()->user()->id,
         'komentar_id' => $komenId,
         'alasan'=>$request->alasan,
         
      ];
      Laporankomentar::create($dataLaporKomentar);
      return redirect('/detail-foto'.'/'.$komentar_id->postingan_id)->with('success', 'Laporan Berhasil!');
   }


}
