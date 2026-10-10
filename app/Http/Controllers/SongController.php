<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('artistModel')->latest()->get();

        return view('songs.index', compact('songs'));
    }

    // Aggiunge la canzone alla libreria dell'utente
    public function add(Song $song)
    {
        Auth::user()->addSongs()->syncWithoutDetaching([$song->id]);

        return back();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'nullable|string|max:255',
            'genre_id' => 'nullable|exists:genres,id',
            'audio' => 'required|file|mimes:mp3,wav,ogg|max:10240',
        ]);

        $song = Song::create([
            'title' => $validated['title'],
            'artist' => $validated['artist'] ?? null,
            'genre_id' => $validated['genre_id'] ?? null,
            'file_path' => $request->file('audio')->store('songs', 'public'),
        ]);

        return redirect()->route('songs.show', $song)->with('success', __('ui.song_uploaded'));
    }

    public function show(Song $song)
    {
        $song->load(['genre', 'artistModel', 'album']);

        $otherSongs = Song::with(['genre', 'artistModel'])
            ->where('artist_id', $song->artist_id)
            ->where('id', '!=', $song->id)
            ->get();

        return view('songs.detail', compact('song', 'otherSongs'));
    }

    // Rimuove la canzone dalla libreria dell'utente
    public function destroy(Song $song)
    {
        Auth::user()->addSongs()->detach($song->id);

        return back();
    }

    public function isFavorite(Song $song)
    {
        return response()->json([
            'is_favorite' => Auth::user()->favoriteSongs()->whereKey($song->id)->exists(),
        ]);
    }

    public function addFavorites(Request $request, Song $song)
    {
        Auth::user()->favoriteSongs()->syncWithoutDetaching([$song->id]);

        return $request->wantsJson()
            ? response()->json(['is_favorite' => true])
            : back();
    }

    public function removeFromFavorites(Request $request, Song $song)
    {
        Auth::user()->favoriteSongs()->detach($song->id);

        return $request->wantsJson()
            ? response()->json(['is_favorite' => false])
            : back();
    }
}
