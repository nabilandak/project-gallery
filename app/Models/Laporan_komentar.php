<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_komentar extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function komentar(){
        return $this->belongsTo(Komentar::class, 'komentar_id', 'id');
    }
}
