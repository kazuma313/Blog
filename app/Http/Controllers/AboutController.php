<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view(
            'About',
            [
                'tema' => 'Tentang Saya',
                'backgroud' => asset('assets/img/about-bg.jpg'),
                'isi' => About::firstWhere('id', 1),       
                'socialMedia' => About::first()->SocialMedias
            ]
        );
    }



}
