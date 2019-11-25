<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllartsController extends Controller
{
    public function index()
    {
        return view('artworks/allart');
    }

    // public function store()
    // {
    //     $picture = request('picture');
            //$theme = request('theme');
    //     $artwork = new Artwork();
    // }
}
