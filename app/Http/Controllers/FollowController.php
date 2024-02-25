<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function store(Request $request){
        $userIdentifier = $request->user_identifier;
       
        $data_follow = [
            'user_id' => Auth::user()->id,
            "following_id"=> $userIdentifier
        ];
        $data_follow_check = Follow::where('user_id', Auth::user()->id)->where('following_id', $userIdentifier)->first();

        if($data_follow_check){
            $data_follow_check->delete();
        }else{
            Follow::create($data_follow);
        }
    }
}
