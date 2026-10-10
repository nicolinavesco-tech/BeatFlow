<?php

namespace Tests\Feature;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Song;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    private Song $song;

    protected function setUp(): void
    {
        parent::setUp();

        // Mai chiamare la vera API di Jamendo durante i test
        Http::fake(['*' => Http::response(['results' => []])]);
        config(['services.jamendo.client_id' => 'test']);

        $genre = Genre::create(['name' => 'Rock']);
        $artist = Artist::create(['name' => 'Test Artist', 'image' => 'artist.jpg']);
        $album = Album::create(['artist_id' => $artist->id, 'title' => 'Test Album', 'cover_image' => 'cover.jpg']);

        $this->song = Song::create([
            'title' => 'Test Song',
            'artist' => 'Test Artist',
            'artist_id' => $artist->id,
            'album_id' => $album->id,
            'genre_id' => $genre->id,
            'file_path' => 'songs/test.mp3',
            'duration' => 185,
        ]);
    }

    public function test_public_pages_load_for_guests(): void
    {
        $urls = [
            '/',
            '/tracks',
            '/search?q=Test',
            '/search?q=rock&source=jamendo',
            '/jamendo/search?q=rock',
            '/songs/detail/' . $this->song->id,
            '/albums/' . $this->song->album_id,
            '/artists/artistDetail/' . $this->song->artist_id,
            '/download',
            '/support',
            '/premium',
            '/podcast',
            '/login',
            '/register',
        ];

        foreach ($urls as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_pages_load_for_logged_in_users(): void
    {
        $user = User::factory()->create();
        $playlist = $user->playlists()->create(['name' => 'Mix']);

        $this->actingAs($user);

        foreach (['/', '/tracks', '/search?q=Test', '/accountOverview', '/playlists/' . $playlist->id] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_search_finds_songs_and_ignores_empty_queries(): void
    {
        $this->getJson('/search?q=Test')->assertOk()->assertJsonCount(1);
        $this->getJson('/search?q=rock')->assertOk()->assertJsonCount(1); // per genere
        $this->getJson('/search?q=')->assertOk()->assertJsonCount(0);
    }

    public function test_language_can_only_be_switched_to_available_locales(): void
    {
        $this->post('/lingua/en')->assertRedirect();
        $this->assertSame('en', session('locale'));

        $this->post('/lingua/xx')->assertNotFound();
        $this->assertSame('en', session('locale'));
    }

    public function test_favorites_can_be_added_and_removed(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->postJson("/songs/{$this->song->id}/favorite")->assertOk()->assertJson(['is_favorite' => true]);
        $this->getJson("/songs/{$this->song->id}/is-favorite")->assertJson(['is_favorite' => true]);

        $this->deleteJson("/songs/{$this->song->id}/favorite")->assertOk()->assertJson(['is_favorite' => false]);
        $this->getJson("/songs/{$this->song->id}/is-favorite")->assertJson(['is_favorite' => false]);
    }

    public function test_guests_must_log_in_to_use_favorites(): void
    {
        $this->postJson("/songs/{$this->song->id}/favorite")->assertUnauthorized();
        $this->get('/accountOverview')->assertRedirect('/login');
    }

    public function test_users_cannot_touch_other_users_playlists(): void
    {
        $owner = User::factory()->create();
        $playlist = $owner->playlists()->create(['name' => 'Private']);

        $this->actingAs(User::factory()->create());

        $this->get("/playlists/{$playlist->id}")->assertForbidden();
        $this->postJson("/playlists/{$playlist->id}/songs", ['song_id' => $this->song->id])->assertForbidden();
        $this->delete("/playlists/{$playlist->id}")->assertForbidden();
        $this->assertModelExists($playlist);
    }

    public function test_owner_can_add_songs_and_delete_playlist(): void
    {
        $user = User::factory()->create();
        $playlist = $user->playlists()->create(['name' => 'Mine']);
        $this->actingAs($user);

        $this->postJson("/playlists/{$playlist->id}/songs", ['song_id' => $this->song->id])->assertOk();
        $this->assertTrue($playlist->songs()->whereKey($this->song->id)->exists());

        $this->from("/playlists/{$playlist->id}")->delete("/playlists/{$playlist->id}")->assertRedirect('/');
        $this->assertModelMissing($playlist);
    }
}
