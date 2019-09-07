<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        
        return view('/backend/genre/index', ['genre' => $genre]);
    }

    public function tambah()
    {
        return view('/backend/genre/tambah');
    }

    public function store(Request $request)
    {
        Genre::create([
            'nama_genre' => $request->nama_genre,
        ]);

        return redirect(route('genre')); 
    }

    public function ubah($id)
    {
        $genre = Genre::find($id);

        return view('/backend/genre/ubah', ['genre' => $genre]);
    }

    public function update($id, Request $request)
    {
        $genre = Genre::find($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect('/genre'); 
    }

    public function hapus($id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return redirect(route('genre'));
    }
}
