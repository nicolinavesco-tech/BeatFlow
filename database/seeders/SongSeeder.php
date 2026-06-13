<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        // Genres
        $rap = Genre::where('name', 'Rap')->first();
        $pop = Genre::where('name', 'Pop')->first();
        $rock = Genre::where('name', 'Rock')->first();
        $indie = Genre::where('name', 'Indie')->first();
        $house = Genre::where('name', 'House')->first();

        // Artists
        $hatikoali = Artist::where('name', 'Hatikoali')->first();
        $tarkan = Artist::where('name', 'Tarkan')->first();
        $nesli = Artist::where('name', 'NESLI')->first();
        $harmony = Artist::where('name', 'Harmony Secret')->first();
        $samSmith = Artist::where('name', 'Sam Smith')->first();
        $nirvana = Artist::where('name', 'Nirvana')->first();
        $ogryzek = Artist::where('name', 'Ogryzek')->first();
        $irina = Artist::where('name', 'Irina Rimes')->first();
        $skai = Artist::where('name', 'Skai IsYourGod')->first();
        $timati = Artist::where('name', 'Timati')->first();
        $tyla = Artist::where('name', 'Tyla')->first();
        $blackpink = Artist::where('name', 'Blackpink')->first();
        $dystinct = Artist::where('name', 'Dystinct')->first();
        $top = Artist::where('name', 'Twenty One Pilots')->first();

        // Albums
        $cosmos = Album::where('title', 'Cosmos')->first();

        $songs = [
            ['title' => 'GO!', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Pulp Fiction', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali1.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Baribir', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali2.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Money Time', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali3.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Dunya', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3',  'image_path' => 'media/hatikoali4.jpg', 'genre_id' => $rap?->id],
            ['title' => '10/10', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali5.jpg', 'genre_id' => $rap?->id],
            ['title' => 'NPCs', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali6.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Alyp Kepte', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali7.jpg', 'genre_id' => $rap?->id],


            ['title' => 'Gitte Bizden', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Yolla', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan1.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Kuzu Kuzu', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan2.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Dedikodu', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan3.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Gun gibi', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan4.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Ay', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan5.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Dilli Duduk', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan6.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Simarik', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan7.jpg', 'genre_id' => $pop?->id],


            ['title' => 'Non Tornerò', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli.jpg', 'genre_id' => $rap?->id],
            ['title' => 'La Fine', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli1.jpg', 'genre_id' => $rap?->id],
            ['title' => 'La Verità', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli2.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Amore è', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli3.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Il Mondo è Tondo', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli4.jpg', 'genre_id' => $rap?->id],
            ['title' => 'La Storia', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli5.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Il Tempo', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli6.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Ultimo Giorno', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli7.jpg', 'genre_id' => $rap?->id],

            ['title' => 'Secret Deal', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal.jpg', 'genre_id' => $indie?->id],
            ['title' => 'Midnight City', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal1.jpg', 'genre_id' => $indie?->id],
            ['title' => 'Electic Feel', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal2.jpg', 'genre_id' => $indie?->id],
            ['title' => 'Kids', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal3.jpg', 'genre_id' => $indie?->id],
            ['title' => 'Time to Pretend', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal4.jpg', 'genre_id' => $indie?->id],
            ['title' => 'Flash Delirium', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal5.jpg', 'genre_id' => $indie?->id],
            ['title' => 'Of Moons, Birds & Monsters', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal6.jpg', 'genre_id' => $indie?->id],
            ['title' => 'The Youth', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal7.jpg', 'genre_id' => $indie?->id],

            ['title' => 'How Do You Sleep?', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Too Good at Goodbyes', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith1.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Stay', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith2.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Dancing with a Stranger', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith3.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Watermelon Sugar', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith4.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Levitating', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith5.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Peaches', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith6.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Montero', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith7.jpg', 'genre_id' => $pop?->id],

            ['title' => 'Smells Like Teen Spirit', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana.jpg', 'genre_id' => $rock?->id],
            ['title' => 'Come As You Are', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana1.jpg', 'genre_id' => $rock?->id],
            ['title' => 'Lithium', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana2.jpg', 'genre_id' => $rock?->id],
            ['title' => 'In Bloom', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana3.jpg', 'genre_id' => $rock?->id],
            ['title' => 'Heart-Shaped Box', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana4.jpg', 'genre_id' => $rock?->id],
            ['title' => 'All Apologies', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana5.jpg', 'genre_id' => $rock?->id],
            ['title' => 'Rape Me', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana6.jpg', 'genre_id' => $rock?->id],
            ['title' => 'About to Die', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana7.jpg', 'genre_id' => $rock?->id],

            ['title' => 'Aura', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek.jpg', 'genre_id' => $house?->id],
            ['title' => 'Echoes', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek1.jpg', 'genre_id' => $house?->id],
            ['title' => 'The Host of Seraphim', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek2.jpg', 'genre_id' => $house?->id],
            ['title' => 'The Gloaming', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek3.jpg', 'genre_id' => $house?->id],
            ['title' => 'Adagio for Strings', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek4.jpg', 'genre_id' => $house?->id],
            ['title' => 'The End', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek5.jpg', 'genre_id' => $house?->id],
            ['title' => 'Lux Aeterna', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek6.jpg', 'genre_id' => $house?->id],
            ['title' => 'Requiem for a Dream', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek7.jpg', 'genre_id' => $house?->id],

            ['title' => 'Visele', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'album_id' => $cosmos->id, 'file_path' => 'songs/irina/IrinaRimes-Visele.mp3', 'image_path' => 'media/irina/irina(12).jpg', 'genre_id' => $pop?->id],
            ['title' => 'N-avem timp', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Navemtimp.mp3', 'image_path' => 'media/irina/irina(11).jpg', 'genre_id' => $pop?->id],
            ['title' => 'Changer', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Changer.mp3', 'image_path' => 'media/irina/irina(10).jpg', 'genre_id' => $pop?->id],
            ['title' => 'Bolnavi amandoi', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Bolnaviamandoi.mp3', 'image_path' => 'media/irina/irina(9).jpg', 'genre_id' => $pop?->id],
            ['title' => 'Ba ba ba', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Bababa.mp3', 'image_path' => 'media/irina/irina(8).jpg', 'genre_id' => $pop?->id],
            ['title' => 'Cazane', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Cazane.mp3', 'image_path' => 'media/irina/irina(7).jpg', 'genre_id' => $pop?->id],
            ['title' => 'Matahale', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Matahale.mp3', 'image_path' => 'media/irina/irina(2).jpg', 'genre_id' => $pop?->id],

            ['title' => 'Tokyo Drift', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-tokyoDrift.mp3', 'image_path' => 'media/skyisyourgod/tokyodrift.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Samurai Flow', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-SamuraiFlow.mp3', 'image_path' => 'media/skyisyourgod/samuraiflow.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Neon City', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-neoncity.mp3', 'image_path' => 'media/skyisyourgod/neoncity.webp', 'genre_id' => $rap?->id],
            ['title' => 'Katana', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-katana.mp3', 'image_path' => 'media/skyisyourgod/katana.webp', 'genre_id' => $rap?->id],
            ['title' => 'Shibuya Nights', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-Shibuya.mp3', 'image_path' => 'media/skyisyourgod/shibuyanights.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Zen Mode', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-zenmode.mp3', 'image_path' => 'media/skyisyourgod/zen.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Dragon Flow', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-DragonFlow.mp3', 'image_path' => 'media/skyisyourgod/zen.jpg', 'genre_id' => $rap?->id],


            ['title' => 'Black Star', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-BlackStar.mp3', 'image_path' => 'media/timati/blackstar.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Welcome to St. Tropez', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Welcometo.mp3', 'image_path' => 'media/timati/s.tropez.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Not All About Money', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-NotAll.mp3', 'image_path' => 'media/timati/notallaboutmoney.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Lada Sedan', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-LadaSedan.mp3', 'image_path' => 'media/timati/ladasedan.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Forever', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Forever.mp3', 'image_path' => 'media/timati/forever.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Groove', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Groove.mp3', 'image_path' => 'media/timati/groove.jpg', 'genre_id' => $rap?->id],
            ['title' => 'Moscow Night', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Moscow.mp3', 'image_path' => 'media/timati/moscownight.jpg', 'genre_id' => $rap?->id],

            ['title' => 'Water', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-Water.mp3', 'image_path' => 'media/tyla/water.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Truth or Dare', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-truthDare.mp3', 'image_path' => 'media/tyla/truthordare.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Been Thinking', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-BeenThinking.mp3', 'image_path' => 'media/tyla/beenthinking.jpg', 'genre_id' => $pop?->id],
            ['title' => 'To Last', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-ToLast.mp3', 'image_path' => 'media/tyla/tolast.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Girl Next Door', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-GirlNextDoor.mp3', 'image_path' => 'media/tyla/girlnextdoor.jpg', 'genre_id' => $pop?->id],
            ['title' => 'On My Body', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-OnMyBody.mp3', 'image_path' => 'media/tyla/onmybody.avif', 'genre_id' => $pop?->id],
            ['title' => 'Jump', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-Jump.mp3', 'image_path' => 'media/tyla/jump.jpg', 'genre_id' => $pop?->id],

            ['title' => 'How You Like That', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-HowYouLikeThat .mp3', 'image_path' => 'media/blackpink/howyoulikethat.png', 'genre_id' => $pop?->id],
            ['title' => 'Kill This Love', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-KillThisLove.mp3', 'image_path' => 'media/blackpink/Blackpink_-_Kill_This_Love.jpg', 'genre_id' => $pop?->id],
            ['title' => 'DDU-DU DDU-DU', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-DDU-DU.mp3', 'image_path' => 'media/blackpink/dududu.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Pink Venom', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-PinkVenom.mp3', 'image_path' => 'media/blackpink/pinkvenom.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Lovesick Girls', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-Lovesick.mp3', 'image_path' => 'media/blackpink/lovesick.png', 'genre_id' => $pop?->id],
            ['title' => 'Shut Down', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-ShutDown.mp3', 'image_path' => 'media/blackpink/shutdown.png', 'genre_id' => $pop?->id],
            ['title' => 'Boombayah', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-BOOMBAYAH.mp3', 'image_path' => 'media/blackpink/Blackpink_-_Boombayah.jpg', 'genre_id' => $pop?->id],

            ['title' => 'Stressed Out', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-stressedOut.mp3', 'image_path' => 'media/twentyonepilots/stressedout.jpg', 'genre_id' => $rock?->id],
            ['title' => 'Ride', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-Ride .mp3', 'image_path' => 'media/twentyonepilots/ride.webp', 'genre_id' => $rock?->id],
            ['title' => 'Heathens', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-Heathens.mp3', 'image_path' => 'media/twentyonepilots/heathens.jpg', 'genre_id' => $rock?->id],
            ['title' => 'Chlorine', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-Chlorine.mp3', 'image_path' => 'media/twentyonepilots/chlorine.png', 'genre_id' => $rock?->id],
            ['title' => 'Car Radio', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-CarRadio.mp3', 'image_path' => 'media/twentyonepilots/carradio.png', 'genre_id' => $rock?->id],
            ['title' => 'Tear in My Heart', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-tear.mp3', 'image_path' => 'media/twentyonepilots/tearinmyheart.jpg', 'genre_id' => $rock?->id],
            ['title' => 'Holding On To You', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-holding.mp3', 'image_path' => 'media/twentyonepilots/holdingontoyou.jpg', 'genre_id' => $rock?->id],

            ['title' => 'Tek Tek', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-TekTek.mp3', 'image_path' => 'media/dystinct/tektek.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Habiba', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Habiba.mp3', 'image_path' => 'media/dystinct/habiba.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Ghazali', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Ghazali.mp3', 'image_path' => 'media/dystinct/ghazali.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Ya Baba', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-YaBaba.mp3', 'image_path' => 'media/dystinct/yababa.png', 'genre_id' => $pop?->id],
            ['title' => 'Boussa', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Boussa.mp3', 'image_path' => 'media/dystinct/boussa.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Panamera', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Panamera.mp3', 'image_path' => 'media/dystinct/panamera.jpg', 'genre_id' => $pop?->id],
            ['title' => 'Business', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Business.mp3', 'image_path' => 'media/dystinct/business.jpg', 'genre_id' => $pop?->id]

        ];

        foreach ($songs as $song) {
            Song::updateOrCreate(
                [
                    'title' => $song['title'],
                    'artist' => $song['artist'],
                ],
                [
                    'artist_id' => $song['artist_id'],
                    'file_path' => $song['file_path'],
                    'image_path' => $song['image_path'],
                    'album_id' => $song['album_id'] ?? null,
                    'genre_id' => $song['genre_id'],
                ]
            );
        }
    }
}
