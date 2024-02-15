<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $dataAlbum = Album::where('user_id',Auth::user()->id)->get();
        $dataPostingan = Postingan::where('user_id',Auth::user()->id)->get();
        return view('layout.profile',compact('dataAlbum','dataPostingan'));
    }
}
