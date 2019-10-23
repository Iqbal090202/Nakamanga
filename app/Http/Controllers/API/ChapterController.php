<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chapter;

class ChapterController extends Controller
{
    public function index() 
    {
        $chapter = Chapter::all();
        if($chapter->count() > 0) {
            return response()->json($chapter, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }

    public function getByIdKomik($id)
    {
        $chapter = Chapter::where('komik_id', $id)->get();
        if($chapter->count() > 0) {
            return response()->json($chapter, 200);
        } else {
            return response()->json(['message' => 'gagal'], 400);
        }
    }
}
