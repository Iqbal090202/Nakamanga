<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

use App\Gambar;

class GambarController extends Controller
{
    public function index($komik_id, $ch, $id)
    {
        $gambar = Gambar::where("chapter_id", $id)->get();
        return view('/backend/gambar/index', ['gambar' => $gambar, 'komik_id' => $komik_id, 'ch' => $ch, 'chapter_id' => $id]);
    }

    public function tambah($komik_id, $ch, $id)
    {
        return view('/backend/gambar/tambah', ['komik_id' => $komik_id, 'ch' => $ch, 'chapter_id' => $id]);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
		// 	'file' => 'required|mimes:jpeg,png,jpg|max:2048',
		// 	'keterangan' => 'required',
		// ]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_gambar = time()."_".$request->chapter_id."-".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_gambar/komik-'.$request->komik_id.'/ch-'.$request->ch;
		$file->move($tujuan_upload,$nama_gambar); 

        Gambar::create([
            'chapter_id' => $request->chapter_id,
            'nama_gambar' => $nama_gambar,
        ]);

        return redirect(route('gambar', ['komik_id'=>$request->komik_id,'ch'=>$request->ch,'id'=>$request->chapter_id])); 
    }

    public function ubah($ch_id, $id)
    {
        $gambar = Gambar::find($id);

        return view('/backend/gambar/ubah', ['gambar' => $gambar, 'chapter_id' => $ch_id]);
    }

    public function update($id, Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_gambar = time()."_".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_gambar/ch-'.$request->chapter_id;
		$file->move($tujuan_upload,$nama_gambar);

        $gambar = Gambar::find($id);
        $gambar->nama_gambar = $nama_gambar;
        $gambar->save();

        return redirect(route('gambar', ['id' => $request->chapter_id])); 
    }

    public function hapus($komik_id, $ch, $id)
    {
        $gambar = Gambar::where('id',$id)->first();
	    File::delete('data_gambar/komik-'.$komik_id.'ch-'.$ch.'/'.$gambar->nama_gambar);
	    // hapus data
	    Gambar::where('id',$id)->delete();

        return redirect()->back();
    }
}
