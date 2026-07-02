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
            // Hatikoali
            ['title' => 'GO!', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali.mp3', 'image_path' => 'media/hatikoali.jpg', 'duration' => 195, 'genre_id' => $rap?->id],
            ['title' => 'Pulp Fiction', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali/hatikoali-pulp.mp3', 'image_path' => 'media/hatikoali1.jpg', 'duration' => 212, 'genre_id' => $rap?->id],
            ['title' => 'Baribir', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali/hatikoali-baribir.mp3', 'image_path' => 'media/hatikoali2.jpg', 'duration' => 178, 'genre_id' => $rap?->id],
            ['title' => 'Money Time', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali/hatikoali-money.mp3', 'image_path' => 'media/hatikoali3.jpg', 'duration' => 203, 'genre_id' => $rap?->id],
            ['title' => 'Dunya', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali/hatikoali-dunya.mp3', 'image_path' => 'media/hatikoali4.jpg', 'duration' => 187, 'genre_id' => $rap?->id],
            ['title' => '10/10', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali/hatikoali-1010.mp3', 'image_path' => 'media/hatikoali5.jpg', 'duration' => 165, 'genre_id' => $rap?->id],
            ['title' => 'NPCs', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali/hatikoali-npcs.mp3', 'image_path' => 'media/hatikoali6.jpg', 'duration' => 221, 'genre_id' => $rap?->id],
            ['title' => 'Alyp Kepte', 'artist' => 'Hatikoali', 'artist_id' => $hatikoali?->id, 'file_path' => 'songs/hatikoali/hatikoali-alypkepte.mp3', 'image_path' => 'media/hatikoali7.jpg', 'duration' => 198, 'genre_id' => $rap?->id],

            // Tarkan
            ['title' => 'Gitte Bizden', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan.jpg', 'duration' => 234, 'genre_id' => $pop?->id],
            ['title' => 'Yolla', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan/tarkan-yolla.mp3', 'image_path' => 'media/tarkan1.jpg', 'duration' => 207, 'genre_id' => $pop?->id],
            ['title' => 'Kuzu Kuzu', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan/tarkan-kuzu.mp3', 'image_path' => 'media/tarkan2.jpg', 'duration' => 219, 'genre_id' => $pop?->id],
            ['title' => 'Dedikodu', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan/tarkan-dedikodu.mp3', 'image_path' => 'media/tarkan3.jpg', 'duration' => 192, 'genre_id' => $pop?->id],
            ['title' => 'Gun gibi', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan/tarkan-gungibi.mp3', 'image_path' => 'media/tarkan4.jpg', 'duration' => 245, 'genre_id' => $pop?->id],
            ['title' => 'Ay', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan5.jpg', 'duration' => 201, 'genre_id' => $pop?->id],
            ['title' => 'Dilli Duduk', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan6.jpg', 'duration' => 228, 'genre_id' => $pop?->id],
            ['title' => 'Simarik', 'artist' => 'Tarkan', 'artist_id' => $tarkan?->id, 'file_path' => 'songs/tarkan.mp3', 'image_path' => 'media/tarkan7.jpg', 'duration' => 213, 'genre_id' => $pop?->id],

            // NESLI
            ['title' => 'Non Tornerò', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli.jpg', 'duration' => 224, 'genre_id' => $rap?->id],
            ['title' => 'La Fine', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli1.jpg', 'duration' => 198, 'genre_id' => $rap?->id],
            ['title' => 'La Verità', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli2.jpg', 'duration' => 217, 'genre_id' => $rap?->id],
            ['title' => 'Amore è', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli3.jpg', 'duration' => 183, 'genre_id' => $rap?->id],
            ['title' => 'Il Mondo è Tondo', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli4.jpg', 'duration' => 206, 'genre_id' => $rap?->id],
            ['title' => 'La Storia', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli5.jpg', 'duration' => 231, 'genre_id' => $rap?->id],
            ['title' => 'Il Tempo', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli6.jpg', 'duration' => 195, 'genre_id' => $rap?->id],
            ['title' => 'Ultimo Giorno', 'artist' => 'NESLI', 'artist_id' => $nesli?->id, 'file_path' => 'songs/nesli.mp3', 'image_path' => 'media/nesli7.jpg', 'duration' => 210, 'genre_id' => $rap?->id],

            // Harmony Secret
            ['title' => 'Secret Deal', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal.jpg', 'duration' => 256, 'genre_id' => $indie?->id],
            ['title' => 'Midnight City', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal1.jpg', 'duration' => 243, 'genre_id' => $indie?->id],
            ['title' => 'Electic Feel', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal2.jpg', 'duration' => 229, 'genre_id' => $indie?->id],
            ['title' => 'Kids', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal3.jpg', 'duration' => 274, 'genre_id' => $indie?->id],
            ['title' => 'Time to Pretend', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal4.jpg', 'duration' => 281, 'genre_id' => $indie?->id],
            ['title' => 'Flash Delirium', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal5.jpg', 'duration' => 238, 'genre_id' => $indie?->id],
            ['title' => 'Of Moons, Birds & Monsters', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal6.jpg', 'duration' => 265, 'genre_id' => $indie?->id],
            ['title' => 'The Youth', 'artist' => 'Harmony Secret', 'artist_id' => $harmony?->id, 'file_path' => 'songs/secretdeal.mp3', 'image_path' => 'media/secretdeal7.jpg', 'duration' => 247, 'genre_id' => $indie?->id],

            // Sam Smith
            ['title' => 'How Do You Sleep?', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith.jpg', 'duration' => 200, 'genre_id' => $pop?->id],
            ['title' => 'Too Good at Goodbyes', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith1.jpg', 'duration' => 202, 'genre_id' => $pop?->id],
            ['title' => 'Stay', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith2.jpg', 'duration' => 169, 'genre_id' => $pop?->id],
            ['title' => 'Dancing with a Stranger', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith3.jpg', 'duration' => 173, 'genre_id' => $pop?->id],
            ['title' => 'Watermelon Sugar', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith4.jpg', 'duration' => 174, 'genre_id' => $pop?->id],
            ['title' => 'Levitating', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith5.jpg', 'duration' => 203, 'genre_id' => $pop?->id],
            ['title' => 'Peaches', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith6.jpg', 'duration' => 198, 'genre_id' => $pop?->id],
            ['title' => 'Montero', 'artist' => 'Sam Smith', 'artist_id' => $samSmith?->id, 'file_path' => 'songs/smith.mp3', 'image_path' => 'media/smith7.jpg', 'duration' => 137, 'genre_id' => $pop?->id],

            // Nirvana
            ['title' => 'Smells Like Teen Spirit', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana.jpg', 'duration' => 301, 'genre_id' => $rock?->id],
            ['title' => 'Come As You Are', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana1.jpg', 'duration' => 219, 'genre_id' => $rock?->id],
            ['title' => 'Lithium', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana2.jpg', 'duration' => 257, 'genre_id' => $rock?->id],
            ['title' => 'In Bloom', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana3.jpg', 'duration' => 254, 'genre_id' => $rock?->id],
            ['title' => 'Heart-Shaped Box', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana4.jpg', 'duration' => 281, 'genre_id' => $rock?->id],
            ['title' => 'All Apologies', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana5.jpg', 'duration' => 232, 'genre_id' => $rock?->id],
            ['title' => 'Rape Me', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana6.jpg', 'duration' => 169, 'genre_id' => $rock?->id],
            ['title' => 'About to Die', 'artist' => 'Nirvana', 'artist_id' => $nirvana?->id, 'file_path' => 'songs/nirvana.mp3', 'image_path' => 'media/nirvana7.jpg', 'duration' => 188, 'genre_id' => $rock?->id],

            // Ogryzek
            ['title' => 'Aura', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek.jpg', 'duration' => 312, 'genre_id' => $house?->id],
            ['title' => 'Echoes', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek1.jpg', 'duration' => 298, 'genre_id' => $house?->id],
            ['title' => 'The Host of Seraphim', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek2.jpg', 'duration' => 345, 'genre_id' => $house?->id],
            ['title' => 'The Gloaming', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek3.jpg', 'duration' => 267, 'genre_id' => $house?->id],
            ['title' => 'Adagio for Strings', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek4.jpg', 'duration' => 398, 'genre_id' => $house?->id],
            ['title' => 'The End', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek5.jpg', 'duration' => 289, 'genre_id' => $house?->id],
            ['title' => 'Lux Aeterna', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek6.jpg', 'duration' => 276, 'genre_id' => $house?->id],
            ['title' => 'Requiem for a Dream', 'artist' => 'Ogryzek', 'artist_id' => $ogryzek?->id, 'file_path' => 'songs/aura.mp3', 'image_path' => 'media/ogryzek7.jpg', 'duration' => 234, 'genre_id' => $house?->id],

            // Irina Rimes
            ['title' => 'Visele', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'album_id' => $cosmos->id, 'file_path' => 'songs/irina/IrinaRimes-Visele.mp3', 'image_path' => 'media/irina/irina(12).jpg', 'duration' => 218, 'genre_id' => $pop?->id],
            ['title' => 'N-avem timp', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-N-avemtimp.mp3', 'image_path' => 'media/irina/irina(11).jpg', 'duration' => 195, 'genre_id' => $pop?->id],
            ['title' => 'Changer', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Changer.mp3', 'image_path' => 'media/irina/irina(10).jpg', 'duration' => 207, 'genre_id' => $pop?->id],
            ['title' => 'Bolnavi amandoi', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Bolnaviamandoi.mp3', 'image_path' => 'media/irina/irina(9).jpg', 'duration' => 189, 'genre_id' => $pop?->id],
            ['title' => 'Ba ba ba', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Bababa.mp3', 'image_path' => 'media/irina/irina(8).jpg', 'duration' => 176, 'genre_id' => $pop?->id],
            ['title' => 'Cazane', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Cazane.mp3', 'image_path' => 'media/irina/irina(7).jpg', 'duration' => 224, 'genre_id' => $pop?->id],
            ['title' => 'Matahale', 'artist' => 'Irina Rimes', 'artist_id' => $irina?->id, 'file_path' => 'songs/irina/IrinaRimes-Matahale.mp3', 'image_path' => 'media/irina/irina(2).jpg', 'duration' => 211, 'genre_id' => $pop?->id],

            // Skai IsYourGod
            ['title' => 'Tokyo Drift', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-tokyoDrift.mp3', 'image_path' => 'media/skyisyourgod/tokyodrift.jpg', 'duration' => 192, 'genre_id' => $rap?->id],
            ['title' => 'Samurai Flow', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-SamuraiFlow.mp3', 'image_path' => 'media/skyisyourgod/samuraiflow.jpg', 'duration' => 205, 'genre_id' => $rap?->id],
            ['title' => 'Neon City', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-neoncity.mp3', 'image_path' => 'media/skyisyourgod/neoncity.webp', 'duration' => 178, 'genre_id' => $rap?->id],
            ['title' => 'Katana', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-katana.mp3', 'image_path' => 'media/skyisyourgod/katana.webp', 'duration' => 215, 'genre_id' => $rap?->id],
            ['title' => 'Shibuya Nights', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-Shibuya.mp3', 'image_path' => 'media/skyisyourgod/shibuyanights.jpg', 'duration' => 233, 'genre_id' => $rap?->id],
            ['title' => 'Zen Mode', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-zenmode.mp3', 'image_path' => 'media/skyisyourgod/zen.jpg', 'duration' => 187, 'genre_id' => $rap?->id],
            ['title' => 'Dragon Flow', 'artist' => 'Skai IsYourGod', 'artist_id' => $skai?->id, 'file_path' => 'songs/skai/Skai-DragonFlow.mp3', 'image_path' => 'media/skyisyourgod/zen.jpg', 'duration' => 199, 'genre_id' => $rap?->id],

            // Timati
            ['title' => 'Black Star', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-BlackStar.mp3', 'image_path' => 'media/timati/blackstar.jpg', 'duration' => 221, 'genre_id' => $rap?->id],
            ['title' => 'Welcome to St. Tropez', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Welcometo.mp3', 'image_path' => 'media/timati/s.tropez.jpg', 'duration' => 196, 'genre_id' => $rap?->id],
            ['title' => 'Not All About Money', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-NotAll.mp3', 'image_path' => 'media/timati/notallaboutmoney.jpg', 'duration' => 208, 'genre_id' => $rap?->id],
            ['title' => 'Lada Sedan', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-LadaSedan.mp3', 'image_path' => 'media/timati/ladasedan.jpg', 'duration' => 183, 'genre_id' => $rap?->id],
            ['title' => 'Forever', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Forever.mp3', 'image_path' => 'media/timati/forever.jpg', 'duration' => 214, 'genre_id' => $rap?->id],
            ['title' => 'Groove', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Groove.mp3', 'image_path' => 'media/timati/groove.jpg', 'duration' => 191, 'genre_id' => $rap?->id],
            ['title' => 'Moscow Night', 'artist' => 'Timati', 'artist_id' => $timati?->id, 'file_path' => 'songs/timati/Timati-Moscow.mp3', 'image_path' => 'media/timati/moscownight.jpg', 'duration' => 229, 'genre_id' => $rap?->id],

            // Tyla
            ['title' => 'Water', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-Water.mp3', 'image_path' => 'media/tyla/water.jpg', 'duration' => 201, 'genre_id' => $pop?->id],
            ['title' => 'Truth or Dare', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-truthDare.mp3', 'image_path' => 'media/tyla/truthordare.jpg', 'duration' => 178, 'genre_id' => $pop?->id],
            ['title' => 'Been Thinking', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-BeenThinking.mp3', 'image_path' => 'media/tyla/beenthinking.jpg', 'duration' => 195, 'genre_id' => $pop?->id],
            ['title' => 'To Last', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-ToLast.mp3', 'image_path' => 'media/tyla/tolast.jpg', 'duration' => 184, 'genre_id' => $pop?->id],
            ['title' => 'Girl Next Door', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-GirlNextDoor.mp3', 'image_path' => 'media/tyla/girlnextdoor.jpg', 'duration' => 207, 'genre_id' => $pop?->id],
            ['title' => 'On My Body', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-OnMyBody.mp3', 'image_path' => 'media/tyla/onmybody.avif', 'duration' => 192, 'genre_id' => $pop?->id],
            ['title' => 'Jump', 'artist' => 'Tyla', 'artist_id' => $tyla?->id, 'file_path' => 'songs/tyla/Tyla-Jump.mp3', 'image_path' => 'media/tyla/jump.jpg', 'duration' => 215, 'genre_id' => $pop?->id],

            // Blackpink
            ['title' => 'How You Like That', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-HowYouLikeThat .mp3', 'image_path' => 'media/blackpink/howyoulikethat.png', 'duration' => 183, 'genre_id' => $pop?->id],
            ['title' => 'Kill This Love', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-KillThisLove.mp3', 'image_path' => 'media/blackpink/Blackpink_-_Kill_This_Love.jpg', 'duration' => 186, 'genre_id' => $pop?->id],
            ['title' => 'DDU-DU DDU-DU', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-DDU-DU.mp3', 'image_path' => 'media/blackpink/dududu.jpg', 'duration' => 196, 'genre_id' => $pop?->id],
            ['title' => 'Pink Venom', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-PinkVenom.mp3', 'image_path' => 'media/blackpink/pinkvenom.jpg', 'duration' => 169, 'genre_id' => $pop?->id],
            ['title' => 'Lovesick Girls', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-Lovesick.mp3', 'image_path' => 'media/blackpink/lovesick.png', 'duration' => 203, 'genre_id' => $pop?->id],
            ['title' => 'Shut Down', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-ShutDown.mp3', 'image_path' => 'media/blackpink/shutdown.png', 'duration' => 178, 'genre_id' => $pop?->id],
            ['title' => 'Boombayah', 'artist' => 'Blackpink', 'artist_id' => $blackpink?->id, 'file_path' => 'songs/blackpink/BLACKPINK-BOOMBAYAH.mp3', 'image_path' => 'media/blackpink/Blackpink_-_Boombayah.jpg', 'duration' => 239, 'genre_id' => $pop?->id],

            // Twenty One Pilots
            ['title' => 'Stressed Out', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-stressedOut.mp3', 'image_path' => 'media/twentyonepilots/stressedout.jpg', 'duration' => 202, 'genre_id' => $rock?->id],
            ['title' => 'Ride', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-Ride .mp3', 'image_path' => 'media/twentyonepilots/ride.webp', 'duration' => 214, 'genre_id' => $rock?->id],
            ['title' => 'Heathens', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-Heathens.mp3', 'image_path' => 'media/twentyonepilots/heathens.jpg', 'duration' => 195, 'genre_id' => $rock?->id],
            ['title' => 'Chlorine', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-Chlorine.mp3', 'image_path' => 'media/twentyonepilots/chlorine.png', 'duration' => 366, 'genre_id' => $rock?->id],
            ['title' => 'Car Radio', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-CarRadio.mp3', 'image_path' => 'media/twentyonepilots/carradio.png', 'duration' => 257, 'genre_id' => $rock?->id],
            ['title' => 'Tear in My Heart', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-tear.mp3', 'image_path' => 'media/twentyonepilots/tearinmyheart.jpg', 'duration' => 197, 'genre_id' => $rock?->id],
            ['title' => 'Holding On To You', 'artist' => 'Twenty One Pilots', 'artist_id' => $top?->id, 'file_path' => 'songs/twentyOnePilots/top-holding.mp3', 'image_path' => 'media/twentyonepilots/holdingontoyou.jpg', 'duration' => 244, 'genre_id' => $rock?->id],

            // Dystinct
            ['title' => 'Tek Tek', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-TekTek.mp3', 'image_path' => 'media/dystinct/tektek.jpg', 'duration' => 173, 'genre_id' => $pop?->id],
            ['title' => 'Habiba', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Habiba.mp3', 'image_path' => 'media/dystinct/habiba.jpg', 'duration' => 188, 'genre_id' => $pop?->id],
            ['title' => 'Ghazali', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Ghazali.mp3', 'image_path' => 'media/dystinct/ghazali.jpg', 'duration' => 199, 'genre_id' => $pop?->id],
            ['title' => 'Ya Baba', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-YaBaba.mp3', 'image_path' => 'media/dystinct/yababa.png', 'duration' => 181, 'genre_id' => $pop?->id],
            ['title' => 'Boussa', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Boussa.mp3', 'image_path' => 'media/dystinct/boussa.jpg', 'duration' => 192, 'genre_id' => $pop?->id],
            ['title' => 'Panamera', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Panamera.mp3', 'image_path' => 'media/dystinct/panamera.jpg', 'duration' => 204, 'genre_id' => $pop?->id],
            ['title' => 'Business', 'artist' => 'Dystinct', 'artist_id' => $dystinct?->id, 'file_path' => 'songs/dystinct/Dystinct-Business.mp3', 'image_path' => 'media/dystinct/business.jpg', 'duration' => 176, 'genre_id' => $pop?->id],
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
                    'duration' => $song['duration'] ?? null,
                    'genre_id' => $song['genre_id'],
                ]
            );
        }
    }
}
