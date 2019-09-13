<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;
use App\Komik;

class NakamangaController extends Controller
{
	public function index()
	{
		$komik = Komik::get();
		return view('/frontend/index', ['komik' => $komik]);
	}
}
