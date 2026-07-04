<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JamendoController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/download', [HomeController::class, 'download'])->name('download');
Route::get('/support', [HomeController::class, 'support'])->name('support');
Route::get('/premium', [HomeController::class, 'premium'])->name('premium');
Route::get('/podcast', [HomeController::class, 'podcast'])->name('podcast');

// Route protette
Route::middleware('auth')->group(function(){
Route::get('/accountOverview', [HomeController::class, 'accountOverview'])->name('accountOverview');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
Route::post('/artists/favorite/{artist}', [ArtistController::class, 'favorite'])->name('artists.favorite');
Route::post('/songs/add/{song}', [SongController::class, 'add'])->name('songs.add');
Route::delete("/songs/destroy/{song}", [SongController::class, "destroy"])->name("songs.destroy");
Route::post('/songs/{song}/favorite', [SongController::class, 'addFavorites'])->name('favorites.add');
Route::delete('/songs/{song}/favorite',[SongController::class, 'removeFromFavorites'])->name('favorites.destroy');
Route::get('/songs/{song}/is-favorite', [SongController::class, 'isFavorite'])->name('favorites.check');
});


Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
Route::get('/songs/detail/{song}', [SongController::class, 'show'])->name('songs.show');
Route::get('/search', [SearchController::class, 'search'])->name('global.search');

// Artists
Route::get('/artists/artistDetail/{artist}', [ArtistController::class, 'show'])->name('artists.show');

// Jamendo Api
Route::get('/jamendo/search', [JamendoController::class, 'search']);

// Albums
Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('albums.show');

// Playlist
Route::post('/playlists', [PlaylistController::class, 'store'])->name('playlists.store');
Route::get('/playlists/{playlist}', [PlaylistController::class, 'show'])->name('playlists.show');
Route::post('/playlists/{playlist}/songs', [PlaylistController::class, 'addSong'])->name('playlists.addSong');
Route::delete('/playlists/{playlist}', [PlaylistController::class, 'destroy'])->name('playlists.destroy');

// Change language
Route::post('/lingua/{lang}', [HomeController::class, 'setLanguage'])->name('setLocale');