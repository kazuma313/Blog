<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class ContactController extends Controller
{
    //
    public function index(){
        return view(
            'contact',
            [
                'Tema' => 'Berikan Kritik dan Saran',
                'backgroud' => asset('assets/img/contact-bg.jpg'),       
                'socialMedia' => About::first()->SocialMedias
            ]
        );
    }
}
