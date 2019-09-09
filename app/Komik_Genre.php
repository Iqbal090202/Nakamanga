<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komik_Genre extends Model
{
    protected $table = 'komik_genre';

    protected $fillable = ['komik_id', 'genre_id'];
}
