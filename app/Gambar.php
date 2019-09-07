<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "gambar";

    protected $fillable = ['chapter_id', 'nama_gambar'];

    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }
}
