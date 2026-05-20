<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'artist_id',
        'title',
        'cover_image',
        'release_year',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
