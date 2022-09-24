<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Konten;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Konten::all();
        return view(
            'Admin.Post',
            [
                'kontens' => Konten::where('about_id', auth()->user()->id)->get()
            ]

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(
            'Admin.Post',
            [
                'kontens' => Konten::where('about_id', auth()->user()->id)->get()
            ]

        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // return $request->file('gambar')->store('uploaded-file');

        $validation = $request->validate([
            'judul' => 'required|min:10',
            // 'slug' => 'required|min:10',

            'slug' => 'required|unique:kontens',
            'isi' => 'required|min:300'
        ]);

        $validation['about_id'] = auth()->user()->id;
        $validation['excerpt'] = Str::limit(strip_tags($request->isi), 200, '...');

        $validation_gambar['about_id'] = auth()->user()->id;
        $validation_gambar['foto'] = $request->file('gambar')->store('uploaded-file');
        $validation_gambar['konten_id'] = rand(1,3);

        // return $validation_gambar;
        Konten::create($validation);
        Foto::create($validation_gambar);


        return redirect('/Admin')->with('success', 'Post yang baru telah di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function show(Konten $Admin)
    {
        //
        return view(
            'Admin.View',
            [
                'post' => $Admin,
                'kontens' => Konten::where('about_id', auth()->user()->id)->get()
            ]

        );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function edit(Konten $Admin)
    {
        return view(
            'Admin.Edit',
            [
                'post' => $Admin,
                'kontens' => Konten::where('about_id', auth()->user()->id)->get()
            ]

        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konten $Admin)
    {
        //
        // dd('percobaan update');        
        $rules =[
            'judul' => 'required|min:10',
            // 'slug' => 'required|min:10',
            'isi' => 'required|min:300'
        ];

        if($request->slug != $Admin->slug){
            $rules['slug'] = 'required|unique:kontens';
        }

        $validatedData = $request->validate($rules);

        $validatedData['about_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 200, '...');



        // return $validation;
        Konten::where('id', $Admin->id)->update($validatedData);

        return redirect('/Admin')->with('success', 'Post Telah di update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konten $Admin)
    {
        //
        Konten::destroy($Admin->id);

        return redirect('/Admin')->with('success', 'Post Telah Dihapus');
    }

    public function slug(Request $request){

        $slug = SlugService::createSlug(Konten::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
