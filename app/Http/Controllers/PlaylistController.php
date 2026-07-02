<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addSong(Request $request, Playlist $playlist){

        $request->validate([
            'song_id'=>'required|exists:songs,id'
        ]);
        
        $playlist->songs()->syncWithoutDetaching($request->song_id);
        if($request->wantsJson()){
            return response()->json(['success'=> true]);
        }
        return back()->with('success', 'Canzone aggiunta alla playlist!');
    }
   

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist) {

        return view('playlists.show', compact('playlist'));
    }

    
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
        return back();
    }
}
