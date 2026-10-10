<x-layout>
    <div x-show="tab === 'home'">
        <main>
            <x-mobile-search />
            <section class="min-h-screen flex bg-black justify-center align-items-center pt-10 lg:pt-20 gap-2 details-section">
                {{-- Sidebar nascosta su mobile --}}
                <aside class="hidden lg:flex w-full lg:w-80 xl:w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
                    <x-library />

                </aside>
                {{-- Main Content --}}
                <div class="flex rounded-xl border border-base-100 w-full min-w-0 flex-col gap-6 p-5 md:p-8 bg-base-100 bg-[linear-gradient(to_top,transparent_50%,#15803d_70%,#4ade80)]">

                    <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span>{{ __('ui.back') }}</span>
                    </a>

                    {{-- Hero: immagine + titolo --}}
                    @php
                        // Titoli lunghi con un font più piccolo, così non escono dallo schermo
                        $titleLength = mb_strlen($song->title);
                        $titleSize = $titleLength > 22 ? 'md:text-6xl' : ($titleLength > 12 ? 'md:text-7xl' : 'md:text-8xl');
                        $heroImage = $song->album?->cover_image ?: ($song->image_path ?: 'media/' . $song->artistModel?->image);
                    @endphp
                    <div class="flex flex-col md:flex-row gap-5 md:gap-8 items-center md:items-end">
                        <img src="{{ asset($heroImage) }}" alt="{{ $song->album->title ?? $song->artist }}"
                            class="w-48 h-48 md:w-72 md:h-72 rounded-xl shadow-lg object-cover hover:scale-105 transition duration-300 shrink-0">

                        <div class="flex flex-col gap-3 text-center md:text-left min-w-0">
                            <p class="text-sm uppercase tracking-wide text-white">{{ __('ui.song') }}</p>
                            <h1 class="text-4xl sm:text-5xl {{ $titleSize }} font-bold break-words leading-tight">{{ $song->title }}</h1>
                            <p class="text-xl text-white">
                                <a href="{{ route('artists.show', $song->artist_id) }}" class="font-bold hover:underline">{{ $song->artist }}</a>
                                @if ($song->album)
                                <span class="text-gray-300">•</span>
                                <a href="{{ route('albums.show', $song->album) }}" class="text-gray-300 hover:text-white hover:underline">{{ $song->album->title }}</a>
                                <span class="text-gray-300">• {{ $song->album->release_year }}</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    {{-- Controlli --}}
                    <div class="pt-4 flex items-center gap-5"
                        data-song-title="{{ $song->title }}"
                        data-song-artist="{{ $song->artist }}"
                        data-song-id="{{ $song->id }}">
                        <button type="button" onclick="playSong('audio-detail')" class="rounded-full">
                            <i class="fa-solid fa-circle-play fa-4x" style="color: rgb(0, 182, 27);"></i>
                        </button>

                        <audio id="audio-detail">
                            <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                        </audio>

                        <form action="{{route('favorites.add', $song)}}" method="POST">
                            @csrf
                            <button type="submit" class=" text-white rounded-full w-fit">
                                @auth
                                @if(auth()->user()->favoriteSongs->contains($song->id))
                                <i class="fa-solid fa-heart text-red-600"></i>
                                @else
                                <i class="fa-regular fa-heart text-red-600 cursor-pointer"></i>
                                @endif
                                @else
                                <i class="fa-regular fa-heart text-red-600 cursor-pointer" title="Log in to add"></i>
                                @endauth
                            </button>
                        </form>



                        <button popovertarget="popover-1" style="anchor-name:--anchor-1">
                            <i class="fa-solid fa-ellipsis fa-2x text-gray-400 hover:text-white"></i>
                        </button>

                        <ul class="dropdown menu w-52 rounded-box bg-base-100 shadow-sm"
                            popover id="popover-1" style="position-anchor:--anchor-1">
                            <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_library') }}</a></li>
                            <li><a><i class="fa-solid fa-podcast text-gray-400 hover:text-white"></i> {{ __('ui.artist_radio') }}</a></li>
                            <li class="border-t border-gray-400"><a><i class="fa-solid fa-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_playlist') }}</a></li>
                            <li><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i> {{ __('ui.share') }}</a></li>
                            <li class="border-t border-gray-400"><a><i class="fa-solid fa-desktop text-gray-400 hover:text-white"></i> {{ __('ui.open_desktop') }}</a></li>
                        </ul>
                    </div>

                    {{-- Dettagli --}}
                    <div class="pt-6 border-t border-slate-700">
                        <h2 class="text-2xl font-bold mb-4">{{ __('ui.track_details') }}</h2>
                        <p class="text-lg"><span class="font-bold">{{ __('ui.title') }}:</span> {{ $song->title }}</p>
                        <p class="text-lg"><span class="font-bold">{{ __('ui.artist') }}:</span> {{ $song->artist }}</p>
                        <p class="text-lg"><span class="font-bold">{{ __('ui.album') }}:</span>
                            @if ($song->album)
                            <a href="{{ route('albums.show', $song->album) }}" class="hover:underline">{{ $song->album->title }}</a> ({{ $song->album->release_year }})
                            @else
                            {{ __('ui.no_album') }}
                            @endif
                        </p>
                        <p class="text-lg"><span class="font-bold">{{ __('ui.genre') }}:</span> {{ $song->genre->name }}</p>
                    </div>

                    {{-- Altro di ... con carosello --}}
                    <div class="flex flex-col pt-10">
                        <h2 class="font-bold text-white text-3xl mb-2">{{ __('ui.more_from') }} {{ $song->artist }}</h2>

                        <div class="relative w-full group/carousel">
                            <button type="button" onclick="scrollCarousel('otherSongsCarousel', -350)"
                                class="btn btn-circle absolute left-0 top-17 lg:top-20 xl:top-23 z-20 bg-black/20 border-none text-white opacity-100 xl:opacity-0 xl:group-hover/carousel:opacity-100 transition-opacity duration-300">
                                ❮
                            </button>

                            <div id="otherSongsCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4 px-2" style="scrollbar-width: none;">
                                @forelse ($otherSongs as $otherSong)
                                <div class="group/card shrink-0 w-44 relative hover:bg-slate-700/55 rounded-lg p-2 transition"
                                    data-song-title="{{ $otherSong->title }}"
                                    data-song-artist="{{ $otherSong->artist }}"
                                    data-song-id="{{ $otherSong->id }}">
                                    <a href="{{ route('songs.show', $otherSong) }}" class="block">
                                        <img src="{{ asset($otherSong->image_path) }}" alt="{{ $otherSong->artist }}" class="w-40 h-40 rounded-lg object-cover">
                                        <h3 class="font-bold pt-2 truncate">{{ $otherSong->title }}</h3>
                                        <p class="text-sm text-gray-400 truncate">{{ $otherSong->artist }}</p>
                                    </a>

                                    <button
                                        type="button"
                                        onclick="event.stopPropagation(); playSong('audio-other-{{ $otherSong->id }}')"
                                        class="absolute bottom-16 right-4 z-10 opacity-100 xl:opacity-0 translate-y-0 xl:translate-y-4 xl:group-hover/card:opacity-100 xl:group-hover/card:translate-y-0 transition duration-300">
                                        <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                    </button>

                                    <audio id="audio-other-{{ $otherSong->id }}">
                                        <source src="{{ asset($otherSong->file_path) }}" type="audio/mpeg">
                                    </audio>
                                </div>
                                @empty
                                <p class="text-white pt-4">{{ __('ui.no_other_tracks') }}</p>
                                @endforelse
                            </div>

                            <button
                                type="button"
                                onclick="scrollCarousel('otherSongsCarousel', 350)"
                                class="btn btn-circle absolute right-0 top-17 lg:top-20 xl:top-23 z-20 bg-black/20 border-none text-white opacity-100 xl:opacity-0 xl:group-hover/carousel:opacity-100 transition-opacity duration-300">
                                ❯
                            </button>
                        </div>
                    </div>

                </div>
            </section>
        </main>
    </div>
    <div x-show="tab === 'createPlaylist'">
        @include('playlists.createPlaylist')
    </div>
</x-layout>