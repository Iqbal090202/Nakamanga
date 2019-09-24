<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Komik;
use App\Chapter;
use App\User;
use App\Gambar;
use App\Komik_Genre;
use App\Genre;

class MangaController extends Controller
{
    public function index()
    {
        $active['home'] = '';
		$active['manga'] = 'active';
		$active['genre'] = '';
        $komik = Komik::orderBy('judul_komik')->get();
        return view('/frontend/manga', ['komik' => $komik, 'active' => $active]);
    }

    public function judulDesc()
    {
        $komik = Komik::orderBy('judul_komik', 'desc')->get();
        return view('/frontend/manga', ['komik' => $komik]);
    }

    public function detail($id)
    {
        $active['home'] = '';
		$active['manga'] = 'active';
		$active['genre'] = '';
        $komik = Komik::find($id);
        $komik->views = $komik->views + 1;
        $komik->save();
        
        $chapter = Chapter::where('komik_id', $id)->orderBy('ch', 'desc')->get();
        return view('/frontend/detail', [
            'komik' => $komik,
            'chapter' => $chapter,
            'active' => $active
        ]);
    }

    public function baca($komik_id, $id)
    {
        $active['home'] = '';
		$active['manga'] = 'active';
		$active['genre'] = '';
        $komik = Komik::find($komik_id);
        $chapter = Chapter::find($id);
        $user = User::find($chapter->user_id);
        $gambar = Gambar::where('chapter_id', $id)->get();
        
        return view('/frontend/baca', [
            'komik' => $komik,
            'chapter' => $chapter,
            'user' => $user,
            'gambar' => $gambar,
            'active' => $active
        ]);
    }

    public function filter_c(Request $request)
    {
        $active['home'] = '';
		$active['manga'] = 'active';
		$active['genre'] = '';
        $komik = Komik::where('judul_komik', 'like', '%'.$request->cari.'%')->get();
        
        return view('/frontend/manga', ['komik' => $komik, 'active' => $active]);
    }

    public function filter_g($g)
    {
        $genre = Genre::where('nama_genre', $g)->first();
        $komik = $genre->komik;
        return view('/frontend/manga', ['komik' => $komik]);
    }
}
