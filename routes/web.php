<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JamendoController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/download', [HomeController::class, 'download'])->name('download');
Route::get('/support', [HomeController::class, 'support'])->name('support');
Route::get('/premium', [HomeController::class, 'premium'])->name('premium');




Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
Route::get('/songs/detail/{song}', [SongController::class, 'show'])->name('songs.show');
Route::get('/search', [SearchController::class, 'search'])->name('global.search');

// Artists
Route::get('/artists/artistDetail/{artist}', [ArtistController::class, 'show'])->name('artists.show');

// Jamendo Api
Route::get('/jamendo/search', [JamendoController::class, 'search']);

// Albums
Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('albums.show');