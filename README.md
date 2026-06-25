# BeatFlow 🎵
Music streaming web app built with Laravel 10.

## Tech Stack
Laravel 10 · Blade · Tailwind CSS · Alpine.js · MySQL · Vite

## Features
- User authentication (Laravel Fortify)
- Browse artists, albums, songs
- Playlist creation and management
- Add/remove favorites (many-to-many pivot)
- Live search (JSON API)
- Audio player with duration formatting
- Responsive layout with horizontal scroll carousels

## Setup
git clone ...
cp .env.example .env
composer install && npm install
php artisan migrate --seed
npm run dev