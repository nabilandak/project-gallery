<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporprofile extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function laporProfile(){
        return $this->belongsTo(User::class, 'id_pelapor', 'id');
    }
    public function profileDilapor(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    
}
