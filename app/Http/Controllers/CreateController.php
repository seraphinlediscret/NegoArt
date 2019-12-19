<?php

namespace App\Http\Controllers;

use App\Artwork;
use Illuminate\Http\Request;

class CreateController extends Controller
{
public function index()
   {
    return view('create/createartwork');
   }

   public function store(Artwork $artwork)
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


    public function create(Artwork $artwork)
    {
       
    }
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
   
    public function show($id)
    {
        
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

private function storeImage(Artwork $artwork){
    if (request('picture')) {
        $artwork->update([
            'picture'=> request('picture')->store('pictureArtwork', 'public'),
        ]);
    }
}
}