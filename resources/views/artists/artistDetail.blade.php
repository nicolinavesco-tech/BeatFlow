<x-layout>
    <div x-show="tab === 'home'">
        <main>
            <x-mobile-search />
            <section class="min-h-screen flex bg-black justify-center items-start pt-10 lg:pt-20 gap-2">
                {{-- Sidebar nascosta su mobile --}}
                <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
                    <x-library />

                </aside>


                <div class="flex rounded-xl border border-base-100 w-full min-h-screen min-w-0 bg-base-100 flex-col gap-6">
                    <header class="h-64 md:h-100 bg-cover bg-center flex flex-col p-5 md:p-8 rounded-t-xl" style="background-image: url('/media/{{ $artist->background_image }}')">
                        <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                            <i class="fa-solid fa-chevron-left"></i>
                            <span>{{ __('ui.back') }}</span>
                        </a>
                        <div class="mt-auto">
                            <h1 class="leading-tight text-4xl md:text-7xl xl:text-8xl font-bold text-white">{{ $artist['name'] }}</h1>
                            <p class="text-sm md:text-xl text-white">4.613.675 {{ __('ui.monthly_listeners') }}</p>
                        </div>
                    </header>
                    <section class="px-5 md:px-8 pt-4 flex items-center gap-5 bg-base-100"
                        data-song-title="{{ $artist->songs->first()?->title ?? '' }}"
                        data-song-artist="{{ $artist->name }}"
                        data-song-id="{{ $artist->songs->first()?->id ?? '' }}">
                        <button type="button" onclick="playSong('audio-artist-main')" class="rounded-full">
                            <i class="fa-solid fa-circle-play fa-4x" style="color: rgb(0, 182, 27);"></i>
                        </button>

                        <audio id="audio-artist-main">
                            <source src="{{ asset($artist->songs->first()?->file_path ?? '') }}" type="audio/mpeg">
                        </audio>

                        <form action="{{route('artists.favorite', $artist)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn text-white bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit border-none">
                                @auth
                                {{ auth()->user()->favoriteArtists->contains($artist->id) ? 'Seguito ✓': 'Segui' }}
                                @else
                                {{ __('ui.follow') }}
                                @endauth
                            </button>
                        </form>

                        <button type="button" popovertarget="artist-popover" style="anchor-name: --artist-anchor">
                            <i class="fa-solid fa-ellipsis fa-2x text-gray-400 hover:text-white"></i>
                        </button>

                        <ul class="dropdown menu w-72 rounded-box bg-base-100 shadow-sm" popover id="artist-popover" style="position-anchor: --artist-anchor">
                            <li><a href="#"><i class="fa-solid fa-circle-plus"></i> {{ __('ui.follow') }}</a></li>
                            <li><a href="#"><i class="fa-solid fa-podcast"></i> {{ __('ui.dont_play') }}</a></li>
                            <li class="border-t border-gray-400"><a href="#"><i class="fa-solid fa-plus"></i> {{ __('ui.artist_radio') }}</a></li>
                            <li><a href="#"><i class="fa-solid fa-triangle-exclamation"></i> {{ __('ui.report') }}</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-up-from-bracket"></i> {{ __('ui.share') }}</a></li>
                            <li class="border-t border-gray-400"><a href="#"><i class="fa-solid fa-desktop"></i> {{ __('ui.open_desktop') }}</a></li>
                        </ul>
                    </section>

                    <section class="px-5 md:px-8 pb-6 border-t border-slate-700 bg-base-100">
                        <div class="pt-6">
                            <h2 class="text-2xl font-bold mb-4 text-white">{{ __('ui.popular') }}</h2>

                            <ul class="list bg-base-100 rounded-box shadow-md w-full">
                                <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">{{ __('ui.popular_tracks') }}</li>

                                @foreach ($artist->songs as $index => $song)
                                @php $songAudioId = 'audio-song-' . $song->id; @endphp
                                <li class="list-row {{ $index >= 5 ? 'hidden extra-song' : '' }}"
                                    data-song-title="{{ $song->title }}"
                                    data-song-artist="{{ $song->artist }}"
                                    data-song-id="{{ $song->id }}">
                                    <div class="text-4xl font-thin opacity-30 tabular-nums">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                    <div>
                                        <img class="size-10 rounded-box object-cover" src="{{ asset($song->image_path ?? 'media/' . $artist->image) }}" alt="Cover {{ $song->title }}">
                                    </div>
                                    <div class="list-col-grow min-w-0">
                                        <div class="text-white truncate" title="{{ $song->title }}">{{ $song->title }}</div>
                                        @if ($song->album)
                                        <a href="{{ route('albums.show', $song->album) }}" class="block text-xs font-semibold opacity-60 hover:opacity-100 hover:underline truncate">{{ $song->album->title }}</a>
                                        @else
                                        <div class="text-xs uppercase font-semibold opacity-60 truncate">{{ $song->artist }}</div>
                                        @endif
                                    </div>
                                    <button class="btn btn-square btn-ghost" onclick="playSong('{{ $songAudioId }}')">
                                        <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                <path d="M6 3L20 12 6 21 6 3z"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <audio id="{{ $songAudioId }}">
                                        <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                                    </audio>
                                </li>
                                @endforeach
                            </ul>

                            @if ($artist->songs->count() > 5)
                            <button id="toggleBtn" type="button" class="mt-4 text-sm font-semibold text-white/70 hover:text-white transition">
                                {{ __('ui.show_more') }}
                            </button>
                            @endif
                        </div>
                    </section>

                    {{-- Discografia con carosello --}}
                    <section class="px-5 md:px-2 pb-10 flex flex-col">
                        <h2 class="font-bold text-white text-3xl mb-2">{{ __('ui.discography') }}</h2>

                        <div class="relative w-full group/carousel">
                            <button type="button" onclick="scrollCarousel('discografiaCarousel', -350)"
                                class="btn btn-circle absolute left-0 top-17 lg:top-20 xl:top-23 z-20 bg-black/20 border-none text-white opacity-100 xl:opacity-0 xl:group-hover/carousel:opacity-100 transition-opacity duration-300">
                                ❮
                            </button>

                            <div id="discografiaCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4 px-2" style="scrollbar-width: none;">
                                @foreach ($artist->albums as $album)
                                @php $discAudioId = 'audio-disc-' . $album->id; @endphp

                                <article class="group/card shrink-0 w-44 relative hover:bg-slate-700/55 rounded-lg p-2 transition"
                                    data-song-title="{{ $album->title }}"
                                    data-song-artist="{{ $artist->name }}"
                                    data-song-id="">
                                    <a href="{{ route('albums.show', $album->id) }}" class="block">
                                        <img src="{{ asset($album->cover_image) }}" alt="Copertina {{ $album->title }}" class="w-40 h-40 rounded-lg object-cover" loading="lazy">
                                        <h3 class="font-bold pt-2 text-white line-clamp-2 leading-snug" title="{{ $album->title }}">{{ $album->title }}</h3>
                                        <p class="text-sm text-gray-400">{{ str_ends_with($album->title, ' - Single') ? __('ui.single') : __('ui.album') }} • {{ $album->release_year }}</p>
                                    </a>

                                    <button type="button" onclick="event.stopPropagation(); playSong('{{ $discAudioId }}')" class="absolute bottom-16 right-4 z-10 opacity-100 xl:opacity-0 translate-y-0 xl:translate-y-4 xl:group-hover/card:opacity-100 xl:group-hover/card:translate-y-0 transition duration-300">
                                        <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                    </button>

                                    <audio id="{{ $discAudioId }}">
                                        <source src="{{ asset($album->preview_song ?? '') }}" type="audio/mpeg">
                                    </audio>
                                </article>
                                @endforeach
                            </div>

                            <button type="button" onclick="scrollCarousel('discografiaCarousel', 350)" class="btn btn-circle absolute right-0 top-17 lg:top-20 xl:top-23 z-20 bg-black/20 border-none text-white opacity-100 xl:opacity-0 xl:group-hover/carousel:opacity-100 transition-opacity duration-300">
                                ❯
                            </button>
                        </div>
                    </section>

                </div>
            </section>
        </main>
    </div>
    <div x-show="tab === 'createPlaylist'">
        @include('playlists.createPlaylist')
    </div>
</x-layout>