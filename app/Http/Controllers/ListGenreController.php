<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListGenreController extends Controller
{
    public function index()
    {
        return view('/frontend/list_genre');
    }
}
