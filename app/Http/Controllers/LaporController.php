<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporanpostingan;

class LaporController extends Controller
{
    public function proses(Request $request, ){
        $request->validate([
            'alasan' => 'required',
           
        ]);
        $dataLaporan = [
            'postingan_id'=>$request->postingan_id,
            'alasan'=>$request->alasan,
            'user_id'=>auth()->id(),
        ];
        Laporanpostingan::create($dataLaporan);
        return redirect()->back();

        
    }
}
