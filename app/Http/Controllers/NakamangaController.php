<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;
use App\Komik;
use App\Banner;

class NakamangaController extends Controller
{
	public function index()
	{
		$judul = 'home';
		$komik = Komik::orderBy('created_at', 'desc')->paginate(9);
		$komik2 = Komik::orderBy('views', 'desc')->limit(10)->get();
        $banner = Banner::all();
		return view('/frontend/index', [
			'komik' => $komik, 
			'komik2' => $komik2,
			'judul' => $judul,
			'banner' => $banner
		]);
	}
}
