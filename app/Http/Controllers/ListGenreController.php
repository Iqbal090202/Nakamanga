<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;
use App\Komik;

class ListGenreController extends Controller
{
    public function index()
    {
        $active['home'] = '';
		$active['manga'] = '';
		$active['genre'] = 'active';
        $genre = Genre::all();
        $komik2 = Komik::orderBy('views', 'desc')->get();
        return view('/frontend/list_genre', [
            'genre' => $genre, 
            'komik2' => $komik2,
            'active' => $active
        ]);
    }
}
