<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::latest()->get();
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Song $song)
    {
        Auth::user()->addSongs()->syncWithoutDetaching([$song->id]);
        return back();
    }

    public function addFavorites(Song $song)
    {
        auth()->user()->favoriteSongs()->syncWithoutDetaching($song->id);

        return back();
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'nullable|string|max:255',
            'genre_id' => 'nullable|exists:genres,id',
            'audio' => 'required|file|mimes:mp3,wav,ogg|max:10240',
        ]);

        $path = $request->file('audio')->store('songs', 'public');

        Song::create([
            'title' => $request->input('title'),
            'artist' => $request->input('artist'),
            'file_path' => $path,
        ]);

        return redirect()->route('songs.index')->with('success', 'Song uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        $song->load(['genre', 'artistModel']);

        $otherSongs = Song::with(['genre', 'artistModel'])
            ->where('artist_id', $song->artist_id)
            ->where('id', '!=', $song->id)
            ->get();

        return view('songs.detail', compact('song', 'otherSongs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        Auth::user()->addSongs()->detach($song->id);
        return back();
    }

    public function removeFromFavorites(Song $song)
    {
        auth()->user()->favoriteSongs()->detach($song->id);

        return response()->json(['success' => true]);
    }
}
