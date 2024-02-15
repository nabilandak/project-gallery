<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_postingan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function postingan(){
        return $this->belongsTo(Postingan::class, 'postingan_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
