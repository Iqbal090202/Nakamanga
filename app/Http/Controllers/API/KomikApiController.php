<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Komik;

class KomikApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komik = Komik::all();
        if($komik->count() > 0) {
            return response()->json([
                'message' => 'berhasil',
                'komik' => $komik
            ], 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }

    public function search($judul) {
        $komik = komik::where('judul_komik', 'like', "%{$judul}%")->get();
        if($komik->count() > 0) {
            return response()->json([
                'message' => 'berhasil',
                'komik' => $komik
            ], 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }

}