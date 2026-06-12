<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        $irina = Artist::where('name', 'Irina Rimes')->first();
        $timati = Artist::where('name', 'Timati')->first();
        $tashsultana = Artist::where('name', 'Tash Sultana')->first();
        $linkinpark = Artist::where('name', 'Linkin Park')->first();
        $tarkan = Artist::where('name', 'Tarkan')->first();
        $mumford = Artist::where('name', 'Mumford & Sons')->first();
        $max = Artist::where('name', 'Max Barskih')->first();
        $marcomengoni = Artist::where('name', 'Marco Mengoni')->first();


        $albums = [
            ['artist_id' => $irina->id, 'title' => 'Cosmos', 'cover_image' => 'media/irina/irina(5).jpg','release_year' => 2022],
            ['artist_id' => $irina->id, 'title' => 'Despre el', 'cover_image' => 'media/irina/irina(6).jpg', 'release_year' => 2017],
            ['artist_id' => $irina->id, 'title' => 'Acasa', 'cover_image' => 'media/irina/irinarimes.jpg', 'release_year' => 2022],
            ['artist_id' => $irina->id, 'title' => 'Origini', 'cover_image' => 'media/irina/irina(1).jpg', 'release_year' => 2024],
            ['artist_id' => $irina->id, 'title' => 'Hora fetelor', 'cover_image' => 'media/irina/irina(3).jpg', 'release_year' => 2025],
            ['artist_id' => $irina->id, 'title' => 'DuDaDa', 'cover_image' => 'media/irina/irina(4).jpg', 'release_year' => 2023],
            ['artist_id' => $irina->id, 'title' => 'Matahale', 'cover_image' => 'media/irina/irina(2).jpg', 'release_year' => 2025],


            ['artist_id' => $timati->id, 'title' => '13', 'cover_image' => 'media/timati/13.png', 'release_year' => 2013],
            ['artist_id' => $timati->id, 'title' => 'Black Star', 'cover_image' => 'media/timati/blackstar.jpg', 'release_year' => 2017],
            ['artist_id' => $timati->id, 'title' => 'На чиле', 'cover_image' => 'media/timati/nacile.jpg', 'release_year' => 2021],
            ['artist_id' => $timati->id, 'title' => 'London', 'cover_image' => 'media/timati/london.jpg', 'release_year' => 2012],
            ['artist_id' => $timati->id, 'title' => 'Олимп', 'cover_image' => 'media/timati/olimp.jpg', 'release_year' => 2016],
            ['artist_id' => $timati->id, 'title' => 'Swag', 'cover_image' => 'media/timati/swag.jpg', 'release_year' => 2012],
            ['artist_id' => $timati->id, 'title' => 'The Boss', 'cover_image' => 'media/timati/theboss.jpg', 'release_year' => 2025],

            ['artist_id' => $marcomengoni->id, 'title' => 'Pronto a correre', 'cover_image' => 'media/mengoni/prontoacorrere.webp', 'release_year' => 2013],
            ['artist_id' => $marcomengoni->id, 'title' => 'Solo 2.0', 'cover_image' => 'media/mengoni/solo2.0.webp', 'release_year' => 2011],
            ['artist_id' => $marcomengoni->id, 'title' => 'Parole in circolo', 'cover_image' => 'media/mengoni/paroleincircolo.webp', 'release_year' => 2015],
            ['artist_id' => $marcomengoni->id, 'title' => 'Le Cose Che Non Ho', 'cover_image' => 'media/mengoni/lecosechenonho.webp', 'release_year' => 2012],
            ['artist_id' => $marcomengoni->id, 'title' => 'Atlantico', 'cover_image' => 'media/mengoni/atlantico.webp', 'release_year' => 2018],
            ['artist_id' => $marcomengoni->id, 'title' => 'Materia', 'cover_image' => 'media/mengoni/materia.webp', 'release_year' => 2021],
            ['artist_id' => $marcomengoni->id, 'title' => 'Prisma', 'cover_image' => 'media/mengoni/prisma.webp', 'release_year' => 2023],

            
            ['artist_id' => $tarkan->id, 'title' => 'Adimi Kalbine Yaz', 'cover_image' => 'media/tarkan/adimikalbineyaz.jpg', 'release_year' => 2013],
            ['artist_id' => $tarkan->id, 'title' => 'Ahdevefa', 'cover_image' => 'media/tarkan/ahdevefa.jpg', 'release_year' => 2011],
            ['artist_id' => $tarkan->id, 'title' => 'Come Closer', 'cover_image' => 'media/tarkan/comecloser.jpg', 'release_year' => 2015],
            ['artist_id' => $tarkan->id, 'title' => 'Du du', 'cover_image' => 'media/tarkan/dudu.jpg', 'release_year' => 2012],
            ['artist_id' => $tarkan->id, 'title' => 'Karma Kapak', 'cover_image' => 'media/tarkan/karma_kapak.jpg', 'release_year' => 2018],
            ['artist_id' => $tarkan->id, 'title' => 'Quantum 51', 'cover_image' => 'media/tarkan/kuantum-51.jpg', 'release_year' => 2021],
            ['artist_id' => $tarkan->id, 'title' => 'Metamorfoz', 'cover_image' => 'media/tarkan/metamorfoz.jpg', 'release_year' => 2023],

            ['artist_id' => $tashsultana->id, 'title' => 'Flow State', 'cover_image' => 'media/tashsultana/flowstate.webp', 'release_year' => 2018],

            ['artist_id' => $linkinpark->id, 'title' => 'Minutes to Midnight', 'cover_image' => 'media/linkinpark/minutestomidnight.webp', 'release_year' => 2007],
            ['artist_id' => $linkinpark->id, 'title' => 'A Thousand Suns', 'cover_image' => 'media/linkinpark/thousandsuns.webp', 'release_year' => 2010],
            ['artist_id' => $linkinpark->id, 'title' => 'Living Things', 'cover_image' => 'media/linkinpark/livingthings.webp', 'release_year' => 2012],
            ['artist_id' => $linkinpark->id, 'title' => 'The Hunting Party', 'cover_image' => 'media/linkinpark/thehuntingparty.webp', 'release_year' => 2014],
            ['artist_id' => $linkinpark->id, 'title' => 'One More Light ', 'cover_image' => 'media/linkinpark/onemorelight.webp', 'release_year' => 2017],
            ['artist_id' => $linkinpark->id, 'title' => 'Meteora', 'cover_image' => 'media/linkinpark/meteora.webp', 'release_year' => 2017],
            ['artist_id' => $linkinpark->id, 'title' => 'From Zero', 'cover_image' => 'media/linkinpark/fromzero.webp', 'release_year' => 2024],
            
            
        
            ['artist_id' => $tashsultana->id, 'title' => 'Terra Firma', 'cover_image' => 'media/tashsultana.png', 'release_year' => 2021],
            ['artist_id' => $linkinpark->id, 'title' => 'Hybrid Theory', 'cover_image' => 'media/linkinpark.jpg', 'release_year' => 2000],
            ['artist_id' => $tarkan->id, 'title' => "Metamorfoz", 'cover_image' => "media/album-tarkan.jpg", 'release_year' => 2007],
            ['artist_id' => $mumford->id, 'title' => 'Babel', 'cover_image' => 'media/mumford-babel.jpg', 'release_year' => 2012],
            ['artist_id' => $max->id, 'title' => 'Туманы', 'cover_image' => 'media/max.jpg', 'release_year' => 2022],
            ['artist_id' => $irina->id, 'title' => 'Changer', 'cover_image' => 'media/changer-irina.jpg', 'release_year' => 2025],
            ['artist_id' => $marcomengoni->id, 'title' => 'Parole in circolo', 'cover_image' => 'media/marcomengoni.jpg', 'release_year' => 2020],
            ['artist_id' => $timati->id, 'title' => 'Black Star', 'cover_image' => 'media/timati/blackstar.jpg', 'release_year' => 2017]





        ];

        foreach ($albums as $album) {
            Album::updateOrCreate(
                [
                    'artist_id' => $album['artist_id'],
                    'title' => $album['title'],
                ],
                $album
            );
        }
    }
}
