<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
   public function run(): void
    {
        $artists = [
            ['name' => 'Irina Rimes', 'image' => 'irina.jpg', 'background_image' => 'background-irina.jpg'],
            ['name' => 'Skai IsYourGod', 'image' => 'skai.jpg', 'background_image' => 'background-skai.jpg'],
            ['name' => 'Timati', 'image' => 'timati.png', 'background_image' => 'background-timati.jpg'],
            ['name' => 'Tyla', 'image' => 'tyla.png', 'background_image' => 'background-tyla.jpg'],
            ['name' => 'Blackpink', 'image' => 'blackpink.webp', 'background_image' => 'background-blackpink.jpg'],
            ['name' => 'Dystinct', 'image' => 'dystinct.jpg', 'background_image' => 'background-dystinct.jpg'],
            ['name' => 'Twenty One Pilots', 'image' => 'twentyonepilots.jpg', 'background_image' => 'background-twentyonepilots.jpg'],

            ['name' => 'Hatikoali', 'image' => 'hatikoali.jpg', 'background_image' => null],
            ['name' => 'Tarkan', 'image' => 'tarkan.jpg', 'background_image' => 'tarkan/background-tarkan.webp'],
            ['name' => 'NESLI', 'image' => 'nesli.jpg', 'background_image' => 'nesli/background-nesli.webp'],
            ['name' => 'Harmony Secret', 'image' => 'secretdeal.jpg', 'background_image' => null],
            ['name' => 'Sam Smith', 'image' => 'smith.jpg', 'background_image' => null],
            ['name' => 'Nirvana', 'image' => 'nirvana.jpg', 'background_image' => null],
            ['name' => 'Ogryzek', 'image' => 'images.jpg', 'background_image' => null],

            ['name' => 'Tash Sultana', 'image' => 'tashsultana.jpg', 'background_image' => null],
            ['name' => 'Marco Mengoni', 'image' => 'marcomengoni.jpg', 'background_image' => null],
            ['name' => 'Max Barskih', 'image' => 'max.jpg', 'background_image' => null],
            ['name' => 'Mumford & Sons', 'image' => 'mumford-babel.jpg', 'background_image' => null],
            ['name' => 'Linkin Park', 'image' => 'linkinpark.jpg', 'background_image' => 'linkinpark/background-linkin.webp'],

        ];

        foreach ($artists as $artist) {
            Artist::updateOrCreate(
                ['name' => $artist['name']],
                [
                    'image' => $artist['image'],
                    'background_image' => $artist['background_image'],
                ]
            );
        }
    }
}
