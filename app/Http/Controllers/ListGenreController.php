<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;

class ListGenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        return view('/frontend/list_genre', ['genre' => $genre]);
    }
}
