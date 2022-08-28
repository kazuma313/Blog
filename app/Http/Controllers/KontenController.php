<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\About;

class KontenController extends Controller
{
    public function index(){
        return view('index', [
            'tema' => 'Welcome Back',
            'backgroud' => asset('assets/img/home-bg.jpg'),
            'blog' => Konten::latest()->paginate(6),
            'nama' =>About::with('Kontens')->first()
            // 'socialMedia' => About::with('SocialMedias')->get()->first()->SocialMedias()
            ]
    );
    }

    public function view(Konten $konten){
        return view('post_slug',
            [
                'backgroud' => asset('assets/img/post-bg.jpg'),
                'konten' => $konten,
            ]
        );
    }

    public function __invoke(Request $request)
    {
        //
    }
}
