<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;
use App\Komik;

class RequestController extends Controller
{
    public function index()
    {
        $judul = 'request';
        return view('/frontend/request', ['judul' => $judul]);
    }
}
