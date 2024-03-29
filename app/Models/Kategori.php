<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function postingan(){
        return $this->hasMany(Postingan::class, 'kategori_id', 'id');
    }
}
