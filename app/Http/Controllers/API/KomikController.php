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
        $komik = Komik::all();
        // $i = 0;
        // foreach ($komik as $k) {
        //     $genre = $k->genre;
        //     foreach ($genre as $g ) {
        //         $gen[$i] = $g;
        //         $i++;
        //     }
        // }
        if($komik->count() > 0) {
            return response()->json($komik, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }

    public function getKomikHome()
    {
        $komik = Komik::orderBy('created_at', 'desc')->limit(8)->get();
        if($komik->count() > 0) {
            return response()->json($komik, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }

    public function getById($id) 
    {
        $komik = komik::find($id);
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