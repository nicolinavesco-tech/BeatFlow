<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    public function show(Artist $artist)
    {
        // Discografia dalla più recente
        $artist->load([
            'songs.genre',
            'songs.album',
            'albums' => fn ($query) => $query->orderByDesc('release_year'),
        ]);

        return view('artists.artistDetail', compact('artist'));
    }

    public function favorite(Artist $artist){
        Auth::user()->favoriteArtists()->syncWithoutDetaching([$artist->id]);
        return back();
    }

}
