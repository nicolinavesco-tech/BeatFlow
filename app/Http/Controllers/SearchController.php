<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->query('q');
        $source = $request->query('source', 'local');

        if ($source === 'jamendo') {
            $response = Http::get('https://api.jamendo.com/v3.0/tracks/', [
                'client_id' => env('JAMENDO_CLIENT_ID'),
                'format' => 'json',
                'limit' => 10,
                'search' => $query,
                'audioformat' => 'mp32',
            ]);

            $tracks = $response->json('results') ?? [];

            return view('jamendo.search', compact('tracks', 'query'));
        }

        $songs = Song::with('genre')
        ->where(function ($q) use ($query) {
            $q->where('title', 'like', "%{$query}%")
              ->orWhere('artist', 'like', "%{$query}%")
              ->orWhereHas('genre', function ($q2) use ($query) {
                  $q2->where('name', 'like', "%{$query}%");
              });
        })
        ->get();

    return view('songs.search', [
        'songs' => $songs,
        'search' => $query
    ]);
    }
}

