<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;

class GenreController extends Controller
{
    public function index() 
    {
        $genre = Genre::all();
        if($genre->count() > 0) {
            return response()->json($genre, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }
}
