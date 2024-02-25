<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request, $postId){
        $post = Postingan::findOrFail($postId);
        $liked = $post->like()->where('user_id', auth()->id())->exists();

        if($liked){
            $post->like()->where('user_id', auth()->id())->delete();
        } else {
            $post->like()->create(['user_id' => auth()->id()]);
            
        }
        $jumlahLike = $post->like()->count();

        return response()->json([
            'liked'=> !$liked,
            'countLike'=> $jumlahLike,
        ]);
    }
}
