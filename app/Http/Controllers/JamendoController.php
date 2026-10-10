<?php

namespace App\Http\Controllers;

use App\Services\JamendoService;
use Illuminate\Http\Request;

class JamendoController extends Controller
{
    public function search(Request $request, JamendoService $jamendo)
    {
        $query = $request->query('q', 'rock');

        $tracks = $jamendo->searchTracks($query);

        return view('jamendo.search', compact('tracks', 'query'));
    }
}
