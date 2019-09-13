<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komik_Genre extends Model
{
    protected $table = 'genre_komik';

    protected $fillable = ['komik_id', 'genre_id'];
}
