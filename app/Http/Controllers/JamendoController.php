<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JamendoController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->query('q', 'rock');

        $response = Http::get('https://api.jamendo.com/v3.0/tracks/', [
            'client_id' => env('JAMENDO_CLIENT_ID'),
            'format' => 'json',
            'limit' => 10,
            'search' => $search,
            'audioformat' => 'mp32',
        ]);

        $tracks = $response->json('results') ?? [];

        return view('jamendo.search', compact('tracks', 'search'));
    }
}
