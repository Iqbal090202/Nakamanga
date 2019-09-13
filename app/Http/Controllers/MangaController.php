<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Komik;
use App\Chapter;
use App\User;
use App\Gambar;
use App\KomikGenre;

class MangaController extends Controller
{
    public function index()
    {
        $komik = Komik::orderBy('judul_komik')->get();
        return view('/frontend/manga', ['komik' => $komik]);
    }

    public function judulDesc()
    {
        $komik = Komik::orderBy('judul_komik', 'desc')->get();
        return view('/frontend/manga', ['komik' => $komik]);
    }

    public function detail($id)
    {
        $komik = Komik::find($id);
        $chapter = Chapter::where('komik_id', $id)->orderBy('ch', 'desc')->get();

        return view('/frontend/detail', [
            'komik' => $komik,
            'chapter' => $chapter
        ]);
    }

    public function baca($komik_id, $id)
    {
        $komik = Komik::find($komik_id);
        $chapter = Chapter::find($id);
        $user = User::find($chapter->user_id);
        $gambar = Gambar::where('chapter_id', $id)->get();
        
        return view('/frontend/baca', [
            'komik' => $komik,
            'chapter' => $chapter,
            'user' => $user,
            'gambar' => $gambar
        ]);
    }
}
