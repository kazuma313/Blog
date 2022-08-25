<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Fotos(){
        return $this->hasMany(Foto::class);
    }

    public function SocialMedias(){
        return $this->hasMany(SocialMedia::class);
    }

    public function Kontens(){
        return $this->hasMany(Konten::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
