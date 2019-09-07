<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapter';

    protected $fillable = ['komik_id', 'ch', 'link_file', 'user_id'];

    public function komik()
    {
        return $this->belongsTo('App\Komik');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function gambar()
    {
        return $this->hasMany('App\Gambar');
    }
}
