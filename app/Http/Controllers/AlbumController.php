<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function show(Album $album)
    {
        $album->load('artist', 'songs');

        return view('albums.show', compact('album'));
    }
}
