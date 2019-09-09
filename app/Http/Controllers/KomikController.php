<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Komik;
use App\Komik_Genre;
use App\Genre;

class KomikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $komik = Komik::all();
        
        return view('/backend/komik/index', ['komik' => $komik]);
    }

    public function tambah()
    {
        $genre = Genre::all();
        return view('/backend/komik/tambah', ['genre' => $genre]);
    }

    public function store(Request $request)
    {
        Komik::create([
            'judul_komik' => $request->judul_komik,
            'sinopsis' => $request->sinopsis,
            'author' => $request->author,
            'status' => 'ongoing',
            'tahun' => $request->tahun
        ]);
        $komik = Komik::where('judul_komik', $request->judul_komik)->first();

        foreach ($request->genre as $genre_id) {
            Komik_Genre::create([
                'komik_id' => $komik->id,
                'genre_id' => $genre_id
            ]);
        }

        return redirect(route('komik')); 
    }

    public function ubah($id)
    {
        $komik = Komik::find($id);
        $genre = Genre::all();

        return view('/backend/komik/ubah', ['komik' => $komik, 'genre' => $genre]);
    }

    public function complete($id)
    {
        $komik = Komik::find($id);
        $komik->status = 'completed';
        $komik->save();

        return redirect('/komik');
    }

    public function update($id, Request $request)
    {
        $komik = Komik::find($id);
        $komik->judul_komik = $request->judul_komik;
        $komik->sinopsis = $request->sinopsis;
        $komik->author = $request->author;
        $komik->tahun = $request->tahun;
        $komik->save();

        $k = Komik::where('judul_komik', $request->judul_komik)->first();
        $kg = Komik_Genre::where('komik_id', $k->id)->get();
        foreach ($kg as $k_g) {
            $k_g->delete();
        }
        foreach ($request->genre as $genre_id) {
            Komik_Genre::create([
                'komik_id' => $k->id,
                'genre_id' => $genre_id
            ]);
        }

        return redirect('/komik'); 
    }

    public function hapus($id)
    {
        $komik = Komik::find($id);
        $komik->delete();

        $komik_genre = Komik_Genre::where('komik_id', $id)->get();
        foreach ($komik_genre as $kg) {
            $kg->delete();
        }

        return redirect(route('komik'));
    }
}
