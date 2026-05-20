<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function show(Artist $artist)
    {
        $artist->load('songs.genre');

        return view('artists.artistDetail', compact('artist'));
    }
}
