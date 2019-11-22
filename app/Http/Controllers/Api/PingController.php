<?php

namespace App\Http\Controllers\Api;

// use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PingController extends Controller
{
    public function ping()
    {
        return response()->json([
            'error' => false,
            'datas'  => "Pong",
        ], 200);
    }
}
