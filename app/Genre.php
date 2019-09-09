<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';

    protected $fillable = ['nama_genre'];

    public function komik()
    {
        return $this->belongsToMany('App\Komik');
    }
}
