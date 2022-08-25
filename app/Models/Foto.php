<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Konten(){
        return $this->belongsTo(Konten::class);
    }

    public function About(){
        return $this->belongsTo(About::class);
    }
}
