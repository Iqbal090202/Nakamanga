<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    protected $table = 'komik';

    protected $fillable = ['judul_komik', 'sinopsis', 'author', 'tahun', 'cover'];

    public function chapter()
    {
        return $this->hasMany('App\Chapter');
    }

    public function genre()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
