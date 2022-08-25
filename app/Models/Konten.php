<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Konten extends Model
{
    use HasFactory, Sluggable;


    protected $guarded = ['id'];

    // protected $table = 'kontens';

    public function Fotos()
    {
        return $this->hasMany(Foto::class);
    }

    public function About()
    {
        return $this->belongsTo(About::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
