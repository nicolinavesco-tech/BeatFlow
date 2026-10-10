<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('playlists', 'public')
            : null;

        $playlist = auth()->user()->playlists()->create([
            'name' => $request->name,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('playlists.show', $playlist);
    }

    public function show(Playlist $playlist)
    {
        $this->authorizeOwner($playlist);

        $playlist->load('songs.artistModel');

        return view('playlists.show', compact('playlist'));
    }

    public function addSong(Request $request, Playlist $playlist)
    {
        $this->authorizeOwner($playlist);

        $request->validate([
            'song_id' => 'required|exists:songs,id',
        ]);

        $playlist->songs()->syncWithoutDetaching([(int) $request->song_id]);

        if ($request->wantsJson()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', __('ui.song_added_to_playlist'));
    }

    public function update(Request $request, Playlist $playlist)
    {
        $this->authorizeOwner($playlist);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $data = ['name' => $request->name];

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('playlists', 'public');
        }
        $playlist->update($data);

        return back();
    }

    public function destroy(Playlist $playlist)
    {
        $this->authorizeOwner($playlist);

        $playlistUrl = route('playlists.show', $playlist);
        $playlist->delete();

        // Se l'utente era sulla pagina della playlist eliminata, tornare indietro porterebbe a un 404
        return url()->previous() === $playlistUrl
            ? redirect()->route('homepage')
            : back();
    }

    // Solo il proprietario può vedere o modificare una playlist
    private function authorizeOwner(Playlist $playlist): void
    {
        abort_unless((int) $playlist->user_id === (int) auth()->id(), 403);
    }
}
