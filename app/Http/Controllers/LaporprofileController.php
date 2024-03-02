<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporprofile;
use Illuminate\Http\Request;

class LaporprofileController extends Controller
{
    public function index($id){
      
        $tampilUser = User::where('id',$id)->first();
       
      return view('layout.lapor-profile', compact('tampilUser'));
    }

    public function proses(Request $request, $idDilaporkan){
        $id_user = User::where('id',$idDilaporkan)->first();
        $request->validate([
           'alasan' => 'required',
          
       ]);
        $dataLaporProfile = [
           'id_pelapor' => auth()->user()->id,
           'id_user' => $idDilaporkan,
           'alasan'=>$request->alasan,
           
        ];
        Laporprofile::create($dataLaporProfile);
        return redirect('/profile'.'/'.$idDilaporkan)->with('success', 'Berhasil Melaporkan Profile!');
      
     }
}
