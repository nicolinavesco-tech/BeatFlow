<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{

    public function run(): void
    {
        $genres = [
            'Rap',
            'Pop',
            'Rock',
            'Indie',
            'House',
        ];

        foreach ($genres as $genre) {
            Genre::firstOrCreate([
                'name' => $genre,
            ]);
        }
    }
}

