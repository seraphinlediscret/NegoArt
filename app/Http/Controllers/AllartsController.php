<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artwork;

class AllartsController extends Controller
{
    public function index(Artwork $id)
    {
        $artworks = Artwork::all();

        return view('artworks/allart', [
            'artworks' => $artworks
        ]);
    }

    public function create()
    {
        $artworks = Artwork::all();

        return view('create/createartwork', [
            'artworks' => $artworks
        ]);

        //      $artwork = Artwork::create([
//         'name'=> request('name'),
//         'price'=> request('price'),
//         'theme'=> request('theme'),
//         'date'=> request('date'),
//         'height'=> request('height'),
//         'width'=> request('width'),
//         'weight'=> request('weight'),
//         'materials'=> request('materials'),
//         'colors'=> request('colors'),
//         'author'=> request('author'),
//         'description'=> request('description'),
//         'picture'=> request('picture')->store('pictureArtwork', 'public'),
//         'minimum_price'=> request('minimum_price'),
//         'number_tours'=> request('number_tours'),
//         'time'=> request('time'),
//         'test_rate'=> request('test_rate'),
//         'number_test'=> request('number_test')
//     ]);
//     return view('create/createartwork');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'date'=>'required',
            'theme'=>'required',
            'author'=>'required',
            'description'=>'required',
            'picture'=>'sometimes|image|max:5000'
         ]);
    
         $this->storeImage($artwork);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($artwork)
    {
        $artwork = Artwork::find($artwork);
        
        return view('create.artworkcreate', compact('artwork'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
