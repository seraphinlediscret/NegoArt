<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artwork;

class BackSelferController extends Controller
{
    public function index(Artwork $id)
    {
        $artworks = Artwork::all();

        return view('users/backselfer', [
            'artworks' => $artworks
        ]);
    }

    public function show()
    {
       
    }
}
