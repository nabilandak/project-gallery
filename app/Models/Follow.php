<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function follower(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function following(){
        return $this->belongsTo(User::class, 'following_id', 'id');
    }
}
