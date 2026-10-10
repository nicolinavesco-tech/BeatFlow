<x-layout>
    <div x-show="tab === 'home'">
        <main>
            <x-mobile-search />
            <section class="min-h-screen flex flex-col md:flex-row gap-2 lg:pt-20 bg-black homepage-section">
                <div class="border rounded-xl border-base-100 bg-base-100 w-full lg:w-80 xl:w-90 shrink-0 space-y-5 aside-bar">
                    <x-library />
                </div>

                <!-- Mobile-->
                <div class="min-h-full flex flex-col md:hidden bg-[linear-gradient(to_left,#121212_0%,#1DB954_100%)] mt-2 p-5 rounded-xl">
                    <div class="flex justify-center">
                        <img src="/media/overviewAccount.jpg" alt="" class="w-40 m-5">
                    </div>
                    <div class="flex flex-col justify-center w-full gap-3">
                        <h1 class="text-2xl font-bold text-white">{{ __('ui.premium_title') }}</h1>
                        <p class="text-gray-300 text-sm">{{ __('ui.premium_description') }}</p>
                        <p class="text-gray-300 text-xs">{{ __('ui.premium_terms') }}</p>
                        <p class="text-gray-300 text-xs">{{ __('ui.offer_end') }}</p>

                        <button class="btn bg-green-600 border-none text-white rounded-3xl font-bold w-full sm:w-52">{{ __('ui.try_premium') }}</button>
                    </div>
                </div>

                <div class="flex rounded-xl border border-base-100 bg-base-100 flex-1 min-w-0 flex-col gap-2 p-5 content-bar">
                    <a href="{{ route('songs.index') }}" class="text-2xl font-bold hover:underline">{{ __('ui.trending_songs') }}</a>
                    <div class="relative w-full group/carousel">
                        <button
                            type="button"
                            onclick="scrollCarousel('trendingCarousel', -350)"
                            class="btn btn-circle absolute left-0 top-17 lg:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❮
                        </button>
                        <div id="trendingCarousel" class="flex gap-2 md:gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">
                            @foreach ($songs as $song)
                            <div class="group shrink-0 w-36 sm:w-40 md:w-44 lg:w-48 xl:w-52 flex flex-col relative hover:bg-slate-700/55 rounded-lg p-2 transition"
                                data-song-title="{{ $song->title }}"
                                data-song-artist="{{ $song->artist }}"
                                data-song-id="{{ $song->id }}">
                                <a href="{{ route('songs.show', $song) }}" class="block">
                                    <img src="{{ asset('media/' . $song->artistModel->image) }}" alt="{{ $song->title }}" class="w-full aspect-square rounded-lg object-cover">
                                    <h3 class="font-bold pt-2 truncate">{{ $song->title }}</h3>
                                    <p class="text-sm text-gray-400 truncate">{{ $song->artist }}</p>
                                </a>
                                <button type="button" onclick="event.stopPropagation(); playSong('audio-{{ $song->id }}')"
                                    class="absolute bottom-16 right-4 z-10 opacity-100 xl:opacity-0 translate-y-0 xl:translate-y-4 xl:group-hover:opacity-100 xl:group-hover:translate-y-0 transition duration-300">
                                    <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                </button>
                                <audio id="audio-{{ $song->id }}">
                                    <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                                </audio>
                            </div>
                            @endforeach
                        </div>
                        <button
                            type="button"
                            onclick="scrollCarousel('trendingCarousel', 350)"
                            class="btn btn-circle absolute right-0 top-17 lg:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❯
                        </button>
                    </div>
                    <h2 class="text-2xl font-bold pt-15">{{ __('ui.popular_artists') }}</h2>
                    <div class="relative w-full group/carousel">
                        <button type="button" onclick="scrollCarousel('artistsCarousel', -350)"
                            class="btn btn-circle  absolute left-0 top-19 lg:top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❮
                        </button>
                        <div id="artistsCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">
                            @foreach ($artists as $artist)
                            @php
                            $artistSong = $artist->songs->first();
                            @endphp
                            <div class="group shrink-0 w-44 flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative"
                                @if($artistSong)
                                data-song-title="{{ $artistSong->title }}"
                                data-song-artist="{{ $artist->name }}"
                                data-song-id="{{ $artistSong->id }}"
                                @endif>
                                <a href="{{ route('artists.show', $artist) }}" class="block">
                                    <img src="{{ asset('media/' . $artist->image) }}" alt="{{ $artist->name }}" class="w-40 h-40 rounded-full object-cover">
                                    <h3 class="font-bold pt-2 truncate">{{ $artist->name }}</h3>
                                    <p class="text-sm text-gray-400">{{ __('ui.artist') }}</p>
                                </a>
                                @if($artistSong)
                                <button
                                    type="button"
                                    onclick="event.stopPropagation(); playSong('artist-audio-{{ $artist->id }}')"
                                    aria-label="{{ __('ui.play') }}"
                                    class="absolute bottom-16 right-4 z-10 opacity-100 xl:opacity-0 translate-y-0 xl:translate-y-4 xl:group-hover:opacity-100 xl:group-hover:translate-y-0 transition duration-300">
                                    <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                </button>
                                <audio id="artist-audio-{{ $artist->id }}">
                                    <source src="{{ asset($artistSong->file_path) }}" type="audio/mpeg">
                                </audio>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        <button
                            type="button"
                            onclick="scrollCarousel('artistsCarousel', 350)"
                            class="btn btn-circle absolute right-0 top-19 lg:top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❯
                        </button>
                    </div>
                    <h2 class="text-2xl font-bold pt-15">{{ __('ui.popular_albums') }}</h2>
                    <div class="relative w-full group/carousel">
                        <button
                            type="button"
                            onclick="scrollCarousel('albumsCarousel', -350)"
                            class="btn btn-circle absolute left-0 top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❮
                        </button>
                        <div id="albumsCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">
                            @foreach ($albums as $album)
                            @php
                            $albumSong = $album->songs->first();
                            @endphp
                            <div class="group shrink-0 w-44 flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative"
                                @if($albumSong)
                                data-song-title="{{ $albumSong->title }}"
                                data-song-artist="{{ $album->artist->name }}"
                                data-song-id="{{ $albumSong->id }}"
                                @endif>
                                <a href="{{ route('albums.show', $album) }}" class="block">
                                    <img src="{{ asset($album->cover_image) }}" alt="{{ $album->title }}" class="w-40 h-40 rounded-lg object-cover">
                                    <h3 class="font-bold pt-2 truncate">{{ $album->title }}</h3>
                                    <p class="text-sm text-gray-400 truncate">{{ $album->artist->name }}</p>
                                </a>
                                @if($albumSong)
                                <button
                                    type="button"
                                    onclick="event.stopPropagation(); playSong('album-audio-{{ $album->id }}')"
                                    aria-label="{{ __('ui.play') }}"
                                    class="absolute bottom-16 right-4 z-10 opacity-100 xl:opacity-0 translate-y-0 xl:translate-y-4 xl:group-hover:opacity-100 xl:group-hover:translate-y-0 transition duration-300">
                                    <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                </button>
                                <audio id="album-audio-{{ $album->id }}">
                                    <source src="{{ asset($albumSong->file_path) }}" type="audio/mpeg">
                                </audio>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        <button
                            type="button"
                            onclick="scrollCarousel('albumsCarousel', 350)"
                            class="btn btn-circle absolute right-0 top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❯
                        </button>
                    </div>

                </div>
            </section>
        </main>
    </div>
    <div x-show="tab === 'profilo'" x-cloak>
        @include('profiles.partial')
    </div>
    <div x-show="tab === 'premium'" x-cloak>
        @include('partialPremium')
    </div>
    <div x-show="tab === 'install'" x-cloak>
        @include('install')
    </div>
    <div x-show="tab === 'news'" x-cloak>
        @include('news')
    </div>
    <div x-show="tab === 'settings'" x-cloak>
        @include('settings')
    </div>
    <div x-show="tab === 'createPlaylist'" x-cloak>
        @include('playlists.createPlaylist')
    </div>
</x-layout>