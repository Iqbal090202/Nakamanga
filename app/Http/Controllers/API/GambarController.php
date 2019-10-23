<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gambar;

class GambarController extends Controller
{
    public function index($cp_id) 
    {
        $gambar = Gambar::where('chapter_id', $cp_id)->get();
        if($gambar->count() > 0) {
            return response()->json($gambar, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }
}
