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

   public function store()
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


//    public function create()
//     {
//         //
//     }
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
   
    public function show($id)
    {
        $artworks = App\Artwork::all();

        return view('artworks/allart', [
        'artworks' => $artworks
            ]);
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