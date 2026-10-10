<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Services\JamendoService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, JamendoService $jamendo)
    {
        $query = trim((string) $request->query('q', ''));
        $source = $request->query('source', 'local');

        if ($source === 'jamendo') {
            $tracks = $jamendo->searchTracks($query);

            return view('jamendo.search', compact('tracks', 'query'));
        }

        // Con una ricerca vuota non restituiamo tutto il catalogo
        $songs = $query === ''
            ? collect()
            : Song::with(['genre', 'artistModel', 'album'])
                ->where(function ($q) use ($query) {
                    $q->where('title', 'like', "%{$query}%")
                        ->orWhere('artist', 'like', "%{$query}%")
                        ->orWhereHas('genre', function ($q2) use ($query) {
                            $q2->where('name', 'like', "%{$query}%");
                        })
                        ->orWhereHas('album', function ($q2) use ($query) {
                            $q2->where('title', 'like', "%{$query}%");
                        });
                })
                ->get();

        if ($request->wantsJson()) {
            return response()->json($songs);
        }

        return view('songs.search', [
            'songs' => $songs,
            'search' => $query,
        ]);
    }
}
