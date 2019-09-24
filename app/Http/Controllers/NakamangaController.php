<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;
use App\Komik;

class NakamangaController extends Controller
{
	public function index()
	{
		$active['home'] = 'active';
		$active['manga'] = '';
		$active['genre'] = '';
		$komik = Komik::orderBy('created_at', 'desc')->get();
		$komik2 = Komik::orderBy('views', 'desc')->get();
		return view('/frontend/index', [
			'komik' => $komik, 
			'komik2' => $komik2,
			'active' => $active
		]);
	}
}
