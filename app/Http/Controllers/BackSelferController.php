<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackSelferController extends Controller
{
    public function index()
    {
        return view('users/backselfer');
    }

    // public function show($id)
    // {
    //     $artworks = App\Artwork::all();

    //     return view('artworks/allart', [
    //         'artworks' => $artworks
    //     ]);
    // }
}
