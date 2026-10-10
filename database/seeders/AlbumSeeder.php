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
        $hatikoali = Artist::where('name', 'Hatikoali')->first();
        $nesli = Artist::where('name', 'NESLI')->first();
        $samsmith = Artist::where('name', 'Sam Smith')->first();
        $nirvana = Artist::where('name', 'Nirvana')->first();
        $ogryzek = Artist::where('name', 'Ogryzek')->first();
        $tyla = Artist::where('name', 'Tyla')->first();
        $blackpink = Artist::where('name', 'Blackpink')->first();
        $twentyonepilots = Artist::where('name', 'Twenty One Pilots')->first();
        $dystinct = Artist::where('name', 'Dystinct')->first();


        $albums = [
            ['artist_id' => $irina->id, 'title' => 'Cosmos', 'cover_image' => 'media/irina/irina(5).jpg','release_year' => 2022],
            ['artist_id' => $irina->id, 'title' => 'Despre el', 'cover_image' => 'media/irina/irina(6).jpg', 'release_year' => 2017],
            ['artist_id' => $irina->id, 'title' => 'Acasa', 'cover_image' => 'media/irina/irinarimes.jpg', 'release_year' => 2021],
            ['artist_id' => $irina->id, 'title' => 'Origini', 'cover_image' => 'media/irina/irina(1).jpg', 'release_year' => 2024],
            ['artist_id' => $irina->id, 'title' => 'Hora fetelor', 'cover_image' => 'media/irina/irina(3).jpg', 'release_year' => 2025],
            ['artist_id' => $irina->id, 'title' => 'DuDaDa', 'cover_image' => 'media/irina/irina(4).jpg', 'release_year' => 2023],
            ['artist_id' => $irina->id, 'title' => 'Matahale', 'cover_image' => 'media/irina/irina(2).jpg', 'release_year' => 2024],


            ['artist_id' => $timati->id, 'title' => '13', 'cover_image' => 'media/timati/13.png', 'release_year' => 2013],
            ['artist_id' => $timati->id, 'title' => 'Black Star', 'cover_image' => 'media/timati/blackstar.jpg', 'release_year' => 2006],
            ['artist_id' => $timati->id, 'title' => 'На чиле', 'cover_image' => 'media/timati/nacile.jpg', 'release_year' => 2021],
            ['artist_id' => $timati->id, 'title' => 'London', 'cover_image' => 'media/timati/london.jpg', 'release_year' => 2012],
            ['artist_id' => $timati->id, 'title' => 'Олимп', 'cover_image' => 'media/timati/olimp.jpg', 'release_year' => 2016],
            ['artist_id' => $timati->id, 'title' => 'Swagg', 'cover_image' => 'media/timati/swag.jpg', 'release_year' => 2012],
            ['artist_id' => $timati->id, 'title' => 'The Boss', 'cover_image' => 'media/timati/theboss.jpg', 'release_year' => 2009],

            ['artist_id' => $marcomengoni->id, 'title' => 'Pronto a correre', 'cover_image' => 'media/mengoni/prontoacorrere.webp', 'release_year' => 2013],
            ['artist_id' => $marcomengoni->id, 'title' => 'Solo 2.0', 'cover_image' => 'media/mengoni/solo2.0.webp', 'release_year' => 2011],
            ['artist_id' => $marcomengoni->id, 'title' => 'Parole in circolo', 'cover_image' => 'media/mengoni/paroleincircolo.webp', 'release_year' => 2015],
            ['artist_id' => $marcomengoni->id, 'title' => 'Le Cose Che Non Ho', 'cover_image' => 'media/mengoni/lecosechenonho.webp', 'release_year' => 2015],
            ['artist_id' => $marcomengoni->id, 'title' => 'Atlantico', 'cover_image' => 'media/mengoni/atlantico.webp', 'release_year' => 2018],
            ['artist_id' => $marcomengoni->id, 'title' => 'Materia', 'cover_image' => 'media/mengoni/materia.webp', 'release_year' => 2021],
            ['artist_id' => $marcomengoni->id, 'title' => 'Prisma', 'cover_image' => 'media/mengoni/prisma.webp', 'release_year' => 2023],

            
            ['artist_id' => $tarkan->id, 'title' => 'Adimi Kalbine Yaz', 'cover_image' => 'media/tarkan/adimikalbineyaz.jpg', 'release_year' => 2013],
            ['artist_id' => $tarkan->id, 'title' => 'Ahdevefa', 'cover_image' => 'media/tarkan/ahdevefa.jpg', 'release_year' => 2011],
            ['artist_id' => $tarkan->id, 'title' => 'Come Closer', 'cover_image' => 'media/tarkan/comecloser.jpg', 'release_year' => 2015],
            ['artist_id' => $tarkan->id, 'title' => 'Du du', 'cover_image' => 'media/tarkan/dudu.jpg', 'release_year' => 2012],
            ['artist_id' => $tarkan->id, 'title' => 'Karma Kapak', 'cover_image' => 'media/tarkan/karma_kapak.jpg', 'release_year' => 2018],
            ['artist_id' => $tarkan->id, 'title' => 'Quantum 51', 'cover_image' => 'media/tarkan/kuantum-51.jpg', 'release_year' => 2021],
            ['artist_id' => $tarkan->id, 'title' => 'Yolla', 'cover_image' => 'media/tarkan1.jpg', 'release_year' => 2024],


            ['artist_id' => $tashsultana->id, 'title' => 'Flow State', 'cover_image' => 'media/tashsultana/flowstate.webp', 'release_year' => 2018],

            ['artist_id' => $linkinpark->id, 'title' => 'Minutes to Midnight', 'cover_image' => 'media/linkinpark/minutestomidnight.webp', 'release_year' => 2007],
            ['artist_id' => $linkinpark->id, 'title' => 'A Thousand Suns', 'cover_image' => 'media/linkinpark/thousandsuns.webp', 'release_year' => 2010],
            ['artist_id' => $linkinpark->id, 'title' => 'Living Things', 'cover_image' => 'media/linkinpark/livingthings.webp', 'release_year' => 2012],
            ['artist_id' => $linkinpark->id, 'title' => 'The Hunting Party', 'cover_image' => 'media/linkinpark/thehuntingparty.webp', 'release_year' => 2014],
            ['artist_id' => $linkinpark->id, 'title' => 'One More Light ', 'cover_image' => 'media/linkinpark/onemorelight.webp', 'release_year' => 2017],
            ['artist_id' => $linkinpark->id, 'title' => 'Meteora', 'cover_image' => 'media/linkinpark/meteora.webp', 'release_year' => 2003],
            ['artist_id' => $linkinpark->id, 'title' => 'From Zero', 'cover_image' => 'media/linkinpark/fromzero.webp', 'release_year' => 2024],

            ['artist_id' => $mumford->id, 'title' => 'Prizefighter', 'cover_image' => 'media/mumford/prizefighter.jpg', 'release_year' => 2026],
            ['artist_id' => $mumford->id, 'title' => 'Rushmere', 'cover_image' => 'media/mumford/rushmere.jpg', 'release_year' => 2025],
            ['artist_id' => $mumford->id, 'title' => 'Delta', 'cover_image' => 'media/mumford/delta.jpg', 'release_year' => 2018],
            ['artist_id' => $mumford->id, 'title' => 'Wilder Mind', 'cover_image' => 'media/mumford/wildermind.jpg', 'release_year' => 2015],
            ['artist_id' => $mumford->id, 'title' => 'Sigh No More', 'cover_image' => 'media/mumford/sighnomore.jpg', 'release_year' => 2009],
            ['artist_id' => $mumford->id, 'title' => 'Love Your Ground', 'cover_image' => 'media/mumford/loveyourground.jpg', 'release_year' => 2008],
            ['artist_id' => $mumford->id, 'title' => 'Gentelman Of The Road', 'cover_image' => 'media/mumford/gentelmen.jpg', 'release_year' => 2024],

            ['artist_id' => $max->id, 'title' => 'По фрейду', 'cover_image' => 'media/max/misto.png', 'release_year' => 2015],
            ['artist_id' => $max->id, 'title' => 'Зорепад', 'cover_image' => 'media/max/pofreidu.jpg', 'release_year' => 2023],
            ['artist_id' => $max->id, 'title' => 'Синглы', 'cover_image' => 'media/max/single.png', 'release_year' => 2017],
            ['artist_id' => $max->id, 'title' => 'Місто дощів', 'cover_image' => 'media/max/zorepad.png', 'release_year' => 2025],
            
            ['artist_id' => $tashsultana->id, 'title' => 'Terra Firma', 'cover_image' => 'media/tashsultana.png', 'release_year' => 2021],
            ['artist_id' => $linkinpark->id, 'title' => 'Hybrid Theory', 'cover_image' => 'media/linkinpark.jpg', 'release_year' => 2000],
            ['artist_id' => $tarkan->id, 'title' => "Metamorfoz", 'cover_image' => "media/album-tarkan.jpg", 'release_year' => 2007],
            ['artist_id' => $mumford->id, 'title' => 'Babel', 'cover_image' => 'media/mumford-babel.jpg', 'release_year' => 2012],
            ['artist_id' => $max->id, 'title' => 'Туманы', 'cover_image' => 'media/max.jpg', 'release_year' => 2022],
            ['artist_id' => $irina->id, 'title' => 'Changer', 'cover_image' => 'media/changer-irina.jpg', 'release_year' => 2023],

            // Album e singoli reali dei brani in catalogo (fonte: iTunes / Apple Music)
            ['artist_id' => $irina->id, 'title' => 'Ba ba ba (Inima mea bate) - Single', 'cover_image' => 'media/albums/bababa.jpg', 'release_year' => 2022],
            ['artist_id' => $irina->id, 'title' => 'Cazane - Single', 'cover_image' => 'media/albums/cazane.jpg', 'release_year' => 2024],
            ['artist_id' => $tarkan->id, 'title' => 'Ölürüm Sana', 'cover_image' => 'media/albums/olurumsana.jpg', 'release_year' => 1997],
            ['artist_id' => $tarkan->id, 'title' => 'Karma', 'cover_image' => 'media/albums/karma.jpg', 'release_year' => 2001],
            ['artist_id' => $tarkan->id, 'title' => '10', 'cover_image' => 'media/albums/10.jpg', 'release_year' => 2017],
            ['artist_id' => $hatikoali->id, 'title' => 'baribir - Single', 'cover_image' => 'media/albums/baribir.jpg', 'release_year' => 2022],
            ['artist_id' => $hatikoali->id, 'title' => 'Pulp Fiction - Single', 'cover_image' => 'media/albums/pulpfiction.jpg', 'release_year' => 2025],
            ['artist_id' => $hatikoali->id, 'title' => 'NPCs - Single', 'cover_image' => 'media/albums/npcs.jpg', 'release_year' => 2025],
            ['artist_id' => $hatikoali->id, 'title' => 'MONEY TIME - Single', 'cover_image' => 'media/albums/moneytime.jpg', 'release_year' => 2025],
            ['artist_id' => $hatikoali->id, 'title' => '10/10 - Single', 'cover_image' => 'media/albums/1010.jpg', 'release_year' => 2025],
            ['artist_id' => $hatikoali->id, 'title' => 'Dunya - Single', 'cover_image' => 'media/albums/dunya.jpg', 'release_year' => 2025],
            ['artist_id' => $hatikoali->id, 'title' => 'INDIGO', 'cover_image' => 'media/albums/indigo.jpg', 'release_year' => 2026],
            ['artist_id' => $nesli->id, 'title' => 'Fragile - Nesliving Vol. 2', 'cover_image' => 'media/albums/fragile.jpg', 'release_year' => 2009],
            ['artist_id' => $samsmith->id, 'title' => 'The Thrill of It All', 'cover_image' => 'media/albums/thethrillofitall.jpg', 'release_year' => 2017],
            ['artist_id' => $samsmith->id, 'title' => 'Love Goes', 'cover_image' => 'media/albums/lovegoes.jpg', 'release_year' => 2020],
            ['artist_id' => $nirvana->id, 'title' => 'Nevermind', 'cover_image' => 'media/albums/nevermind.jpg', 'release_year' => 1991],
            ['artist_id' => $nirvana->id, 'title' => 'In Utero', 'cover_image' => 'media/albums/inutero.jpg', 'release_year' => 1993],
            ['artist_id' => $ogryzek->id, 'title' => 'AURA - Single', 'cover_image' => 'media/albums/aura.jpg', 'release_year' => 2024],
            ['artist_id' => $tyla->id, 'title' => 'Been Thinking - Single', 'cover_image' => 'media/albums/beenthinking.jpg', 'release_year' => 2023],
            ['artist_id' => $tyla->id, 'title' => 'Girl Next Door - Single', 'cover_image' => 'media/albums/girlnextdoor.jpg', 'release_year' => 2023],
            ['artist_id' => $tyla->id, 'title' => 'TYLA', 'cover_image' => 'media/albums/tyla.jpg', 'release_year' => 2024],
            ['artist_id' => $blackpink->id, 'title' => 'SQUARE ONE', 'cover_image' => 'media/albums/squareone.jpg', 'release_year' => 2016],
            ['artist_id' => $blackpink->id, 'title' => 'SQUARE UP', 'cover_image' => 'media/albums/squareup.jpg', 'release_year' => 2018],
            ['artist_id' => $blackpink->id, 'title' => 'KILL THIS LOVE', 'cover_image' => 'media/albums/killthislove.jpg', 'release_year' => 2019],
            ['artist_id' => $blackpink->id, 'title' => 'THE ALBUM', 'cover_image' => 'media/albums/thealbum.jpg', 'release_year' => 2020],
            ['artist_id' => $blackpink->id, 'title' => 'BORN PINK', 'cover_image' => 'media/albums/bornpink.jpg', 'release_year' => 2022],
            ['artist_id' => $twentyonepilots->id, 'title' => 'Vessel', 'cover_image' => 'media/albums/vessel.jpg', 'release_year' => 2013],
            ['artist_id' => $twentyonepilots->id, 'title' => 'Blurryface', 'cover_image' => 'media/albums/blurryface.jpg', 'release_year' => 2015],
            ['artist_id' => $twentyonepilots->id, 'title' => 'Suicide Squad: The Album', 'cover_image' => 'media/albums/suicidesquad.jpg', 'release_year' => 2016],
            ['artist_id' => $twentyonepilots->id, 'title' => 'Trench', 'cover_image' => 'media/albums/trench.jpg', 'release_year' => 2018],
            ['artist_id' => $dystinct->id, 'title' => 'Panamera - Single', 'cover_image' => 'media/albums/panamera.jpg', 'release_year' => 2017],
            ['artist_id' => $dystinct->id, 'title' => 'MON VOYAGE', 'cover_image' => 'media/albums/monvoyage.jpg', 'release_year' => 2019],
            ['artist_id' => $dystinct->id, 'title' => 'LAYALI', 'cover_image' => 'media/albums/layali.jpg', 'release_year' => 2023],
            ['artist_id' => $dystinct->id, 'title' => 'BABABA WORLD', 'cover_image' => 'media/albums/bababaworld.jpg', 'release_year' => 2025],
            ['artist_id' => $marcomengoni->id, 'title' => 'Re matto', 'cover_image' => 'media/albums/rematto.jpg', 'release_year' => 2010],
            ['artist_id' => $max->id, 'title' => 'Silence - Single', 'cover_image' => 'media/albums/silence.jpg', 'release_year' => 2020],
            ['artist_id' => $tashsultana->id, 'title' => 'Notion', 'cover_image' => 'media/albums/notion.jpg', 'release_year' => 2016],
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
