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
        $judul = 'manga';
        $komikall = Komik::all();
        $genre = Genre::all();
        
        $komik = Komik::orderBy('judul_komik')->get();
        return view('/frontend/manga', ['komik' => $komik, 'judul' => $judul, 'genre' => $genre, 'komikall' =>$komikall]);
    }

    public function judulDesc()
    {
        $komik = Komik::orderBy('judul_komik', 'desc')->get();
        return view('/frontend/manga', ['komik' => $komik]);
    }

    public function detail($id)
    {
        $judul = 'manga';
        $komik = Komik::find($id);
        $komik->views = $komik->views + 1;
        $komik->save();
        
        $chapter = Chapter::where('komik_id', $id)->orderBy('ch', 'desc')->get();
        return view('/frontend/detail', [
            'komik' => $komik,
            'chapter' => $chapter,
            'judul' => $judul
        ]);
    }

    public function baca($komik_id, $id)
    {
        $judul = 'manga';
        $komik = Komik::find($komik_id);
        $chapter = Chapter::find($id);
        $user = User::find($chapter->user_id);
        $gambar = Gambar::where('chapter_id', $id)->get();
        $chapPrev = Chapter::where(['komik_id'=>$komik_id, 'ch'=>$chapter->ch-1])->first();
        if($chapPrev == null) {
            $chap['prev'] = $chapter->ch;
        } else {
            $chap['prev'] = $chapPrev->ch;
        }
        $chapNext = Chapter::where(['komik_id'=>$komik_id, 'ch'=>$chapter->ch+1])->first();
        if($chapNext == null) {
            $chap['next'] = $chapter->ch;
        } else {
            $chap['next'] = $chapNext->ch;
        }
        return view('/frontend/baca', [
            'komik' => $komik,
            'chapter' => $chapter,
            'user' => $user,
            'gambar' => $gambar,
            'judul' => $judul,
            'chap' => $chap
        ]);
    }

    public function ad_filter(Request $request)
    {
        if($request->genre != 'all') 
        {
            $genre = Genre::where('nama_genre', $request->genre)->first();
            $i = 0;
            foreach ($genre->komik as $komgen) {
                $kg[$i] = $komgen->id;
                $i++;
            }
            if($request->author == 'all' OR $request->tahun == 'all' OR $request->status == 'all')
            {
                $komik = Komik::whereIn('id', $kg)->get();
            } else 
            {
                if($request->author != "all") {
                    $query['author'] = $request->author;
                } 
                if($request->tahun != 'all') {
                    $query['tahun'] = $request->tahun;
                }
                if($request->status != 'all') {
                    $query['status'] = $request->status;
                }
                $komik = Komik::where($query)->whereIn('id', $kg)->get();
            }

        } 
        else if($request->genre == 'all') 
        {
            if($request->author != "all") {
                $query['author'] = $request->author;
            } 
            if($request->tahun != 'all') {
                $query['tahun'] = $request->tahun;
            }
            if($request->status != 'all') {
                $query['status'] = $request->status;
            }
            
            $komik = Komik::where($query)->get();
        }
        
        $judul = 'manga';
        $komikall = Komik::all();
        $genre = Genre::all();
        
        return view('/frontend/manga', [
            'komik' => $komik, 
            'judul' => $judul, 
            'genre' => $genre, 
            'komikall' => $komikall
        ]);
    }

    public function filter_c(Request $request)
    {
        $judul = 'manga';
        $komikall = Komik::all();
        $genre = Genre::all();

        $komik = Komik::where('judul_komik', 'like', '%'.$request->cari.'%')->get();
        return view('/frontend/manga', [
            'komik' => $komik, 
            'active' => $active, 
            'genre' => $genre, 
            'komikall' => $komikall
        ]);
    }

    public function filter_g($g)
    {
        $judul = 'manga';
        $komikall = Komik::all();
        $genre = Genre::all();

        $gen = Genre::where('nama_genre', $g)->first();
        $komik = $gen->komik;
        return view('/frontend/manga', [
            'komik' => $komik, 
            'judul' => $judul, 
            'genre' => $genre, 
            'komikall' => $komikall
        ]);
    }
}
