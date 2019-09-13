<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chapter;
use App\Komik;

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
                <a href="/gambar/<?= $c->komik_id ?>/<?= $c->ch ?>/<?= $c->id ?>" class="btn btn-info text-white">Lihat</a>
                <a href="/chapter/ubah/<?= $c->id ?>" class="btn btn-warning text-white editBuku">Edit</a>
                <a href="/chapter/hapus/<?= $c->id ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>   <?php
        endforeach;

        // return view('/backend/chapter/index', ['chapter' => $chapter]);
    }

    public function tambah($id)
    {
        return view('/backend/chapter/tambah', ['komik_id' => $id]);
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
        $chapter->delete();

        return redirect(route('chapter'));
    }
}
