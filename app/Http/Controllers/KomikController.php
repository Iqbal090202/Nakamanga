<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

use App\User;
use App\Komik;
use App\Genre;
use App\Chapter;
use App\Gambar;
use App\Komik_Genre;

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
        // $this->validate($request, [
		// 	'file' => 'required|mimes:jpeg,png,jpg|max:5048',
		// 	'keterangan' => 'required',
		// ]);
        $file = $request->file('file');

		$cover = time().$request->judul_komik."-".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_gambar/cover';
		$file->move($tujuan_upload,$cover); 

        Komik::create([
            'judul_komik' => $request->judul_komik,
            'sinopsis' => $request->sinopsis,
            'author' => $request->author,
            'status' => 'ongoing',
            'tahun' => $request->tahun,
            'cover' => $cover,
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
        $file = $request->file('file');

		$cover = time().$request->judul_komik."-".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_gambar/cover';
		$file->move($tujuan_upload,$cover); 

        $komik = Komik::find($id);
        $komik->judul_komik = $request->judul_komik;
        $komik->sinopsis = $request->sinopsis;
        $komik->author = $request->author;
        $komik->tahun = $request->tahun;
        $komik->cover = $cover;
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
        $c = Chapter::where('komik_id', $id)->get();
        foreach ($c as $ch) {
            $chapter = Chapter::find($ch->id);
            $gambar = Gambar::where('chapter_id', $chapter->id)->get();
            File::delete('data_gambar/komik-'.$chapter->komik_id.'/ch-'.$chapter->ch);
            foreach ($gambar as $g) {
                File::delete('data_gambar/komik-'.$chapter->komik_id.'/ch-'.$chapter->ch.'/'.$g->nama_gambar);
                $g->delete();
            }
            $chapter->delete();
        }

        File::delete('data_gambar/cover/'.$komik->cover);

        $komik->delete();

        return redirect(route('komik'));
    }
}
