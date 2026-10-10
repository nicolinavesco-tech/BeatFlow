# BeatFlow 🎵
Music streaming web app built with Laravel 13.

## Tech Stack
Laravel 13 · Blade · Tailwind CSS 4 + daisyUI · Alpine.js · MySQL · Vite · Jamendo API

## Features
- User authentication (Laravel Fortify)
- Browse artists, albums, songs
- Global audio player (play/pause, seek, volume, favorite)
- Playlist creation and management (only the owner can see or edit a playlist)
- Add/remove favorites and library songs (many-to-many pivots)
- Search in the local library or on Jamendo
- Italian and English interface (`lang/it`, `lang/en`)
- Responsive layout with horizontal scroll carousels

## Setup
```bash
git clone ...
cp .env.example .env
composer install && npm install
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
npm run dev
```

To search on Jamendo, set `JAMENDO_CLIENT_ID` in `.env` (free key from the Jamendo developer portal).
Without it the Jamendo search simply returns no results.

## Tests
```bash
php artisan test
```
Tests use an in-memory SQLite database, so they never touch your MySQL data.

## Project structure
- `app/Services/JamendoService.php` — the only place that calls the Jamendo API
- `resources/views/components/` — shared Blade components (`library` sidebar, `search-form`, `mobile-search`, `playlist-cover`, player, navbar, footer)
- `resources/js/main.js` — global player, favorites, playlist search
- `lang/{it,en}/ui.php` — interface texts; `lang/{it,en}/support.php` — support page articles

> Note: the song list lives at `/tracks`, not `/songs`, because `public/songs/` is the folder with the mp3 files
> and the web server would serve that folder instead of the Laravel route.
