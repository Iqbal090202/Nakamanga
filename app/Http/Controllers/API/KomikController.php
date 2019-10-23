<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Komik;
use App\Komik_Genre;

class KomikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komik = Komik::find();
        if($komik->count() > 0) {
            return response()->json($komik, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }

    public function getByName($judul) 
    {
        $komik = komik::where('judul_komik', 'like', "%{$judul}%")->get();
        if($komik->count() > 0) {
            return response()->json($komik, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }

}