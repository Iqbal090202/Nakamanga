<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

use App\Chapter;
use App\Komik;
use App\Gambar;

class ChapterController extends Controller
{
    public function index()
    {
        $komik = Komik::all();
        $kom = Komik::get()->first();
        $chapter = Chapter::where('komik_id', $kom->id)->get();
        return view('/backend/chapter/index', [
            'chapter' => $chapter, 
            'komik' => $komik,
            'kom' => $kom
        ]);
    }

    public function ambilKomik($id)
    {
        $chapter = Chapter::where('komik_id', $id)->get();
        
        foreach( $chapter as $c ): ?>
        <tr>
            <td class="text-center" id="judul"><?= $c->ch ?></td>
            <td class="text-center" id="judul"><?= $c->link_file ?></td>
            <td class="text-center">
                <a href="/gambar/<?= $c->komik_id ?>/<?= $c->ch ?>/<?= $c->id ?>" class="btn btn-info text-white"><i class="fa fa-info-circle"> Detail</i></a>
                <a href="/chapter/ubah/<?= $c->id ?>" class="btn btn-warning text-white editBuku"><i class="fa fa-pencil"> Edit</i></a>
                <a href="/chapter/hapus/<?= $c->id ?>" class="btn btn-danger"><i class="fa fa-close"> Delete</i></a>
            </td>
        </tr>   <?php
        endforeach;

        // return view('/backend/chapter/index', ['chapter' => $chapter]);
    }

    public function tambah($id)
    {
        $chapter = Chapter::orderBy('ch', 'desc')->first();
        if($chapter == null) {
            $chapPlus = 1; 
        } else {
            $chapPlus = $chapter->ch + 1;
        }
        return view('/backend/chapter/tambah', ['komik_id' => $id, 'chapPlus' => $chapPlus]);
    }

    public function store(Request $request)
    {
		Chapter::create([
            'komik_id' => $request->komik_id,
            'ch' => $request->ch,
            'link_file' => $request->link_file,
            'user_id' => $request->user_id
		]);

        return redirect(route('chapter')); 
    }

    public function ubah($id)
    {
        $chapter = Chapter::find($id);

        return view('/backend/chapter/ubah', ['chapter' => $chapter]);
    }

    public function update($id, Request $request)
    {
        $chapter = Chapter::find($id);
        $chapter->ch = $request->ch;
        $chapter->link_file = $request->link_file;
        $chapter->user_id = $request->user_id;
        $chapter->save();

        return redirect('/chapter'); 
    }

    public function hapus($id)
    {
        $chapter = Chapter::find($id);
        $gambar = Gambar::where('chapter_id', $chapter->id)->get();
        File::delete('data_gambar/komik-'.$chapter->komik_id.'/ch-'.$chapter->ch);
        foreach ($gambar as $g) {
            File::delete('data_gambar/komik-'.$chapter->komik_id.'/ch-'.$chapter->ch.'/'.$g->nama_gambar);
            $g->delete();
        }
        $chapter->delete();

        return redirect(route('chapter'));
    }
}
