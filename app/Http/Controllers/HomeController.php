<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;

class HomeController extends Controller
{
    // Lingue disponibili nel selettore della navbar (cartelle in lang/)
    public const LOCALES = ['it', 'en'];

    public function homepage()
    {
        // Un brano per artista: prendo il primo brano di ciascun artista direttamente dal database
        $songs = Song::with('artistModel')
            ->whereIn('id', Song::selectRaw('MIN(id)')->whereNotNull('artist_id')->groupBy('artist_id'))
            ->orderBy('id')
            ->take(20)
            ->get();

        // Il primo brano di ogni artista serve per il pulsante play
        $artists = Artist::with(['songs' => fn ($query) => $query->orderBy('id')])
            ->take(15)
            ->get();

        // Un album per artista, con i brani per il pulsante play
        $albums = Album::with(['artist', 'songs' => fn ($query) => $query->orderBy('id')])
            ->whereIn('id', Album::selectRaw('MIN(id)')->groupBy('artist_id'))
            ->orderBy('id')
            ->take(15)
            ->get();

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

    public function podcast()
    {
        return view('podcast');
    }

    public function accountOverview()
    {
        return view('profiles.accountOverview');
    }

    public function setLanguage(string $lang)
    {
        abort_unless(in_array($lang, self::LOCALES, true), 404);

        session()->put('locale', $lang);

        return redirect()->back();
    }
}
