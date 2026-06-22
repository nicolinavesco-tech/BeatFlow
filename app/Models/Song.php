<?php

namespace App\Models;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    protected $fillable = [
        'title',
        'artist',
        'artist_id',
        'file_path',
        'image_path',
        'genre_id',
        'album_id',
    ];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function artistModel(): BelongsTo
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
    public function getDurationFormattedAttribute(){
        if(!$this->duration) return '--:--';

        $minutes=floor($this->duration/60);
        $seconds=$this->duration % 60;
        return sprintf('%d:%02d', $minutes, $seconds);
    }
}
