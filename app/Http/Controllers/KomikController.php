<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Komik;

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
        return view('/backend/komik/tambah');
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

        return redirect(route('komik')); 
    }

    public function ubah($id)
    {
        $komik = Komik::find($id);

        return view('/backend/komik/ubah', ['komik' => $komik]);
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

        return redirect('/komik'); 
    }

    public function hapus($id)
    {
        $komik = Komik::find($id);
        $komik->delete();

        return redirect(route('komik'));
    }
}
