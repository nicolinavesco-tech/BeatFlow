<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;


class HomeController extends Controller
{
    public function homepage()
    {
        $songs = Song::with('artistModel')
            ->whereNotNull('artist_id')
            ->orderBy('id', 'asc')
            ->get()
            ->unique('artist_id')
            ->take(20)
            ->values();
        $artists = Artist::take(7)->get();
        $albums = Album::with('artist')->latest()->take(7)->get();

        return view('welcome', compact('songs', 'artists', 'albums'));
    }

    public function download()
    {
        return view('download');
    }

    public function support()
    {
        return view('support');
    }

    public function premium()
    {
        return view('premium');
    }
}

