<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Komik;

class PoliceController extends Controller
{
    //
    public function index()
    {
        $judul = 'police';
        return view('/frontend/police', ['judul' => $judul]);
    }
}
