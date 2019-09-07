<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    protected $table = 'komik';

    protected $fillable = ['judul_komik', 'sinopsis', 'author', 'tahun'];

    public function chapter()
    {
        return $this->hasMany('App\Chapter');
    }
}
