<x-layout>
    <div x-show="tab === 'home'">
        <main>
            <x-mobile-search />
            <section class="min-h-screen flex bg-black justify-center items-start pt-10 lg:pt-20 gap-2">
                {{-- Sidebar nascosta su mobile --}}
                <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
                    <x-library />
                </aside>

                {{-- Main Content --}}
                <div class="flex p-3 rounded-xl border border-base-100 w-full min-h-screen min-w-0 bg-base-100 flex-col gap-6 bg-[linear-gradient(to_top,transparent_60%,#15803d_70%,#4ade80)]">
                    <header class="min-h-64 md:h-100 bg-cover bg-center flex flex-col p-5 md:p-8 rounded-t-xl ">
                        <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                            <i class="fa-solid fa-chevron-left"></i>
                            <span>{{ __('ui.back') }}</span>
                        </a>

                        <div class="pt-10 flex flex-col md:flex-row items-center md:items-end gap-4 md:gap-6">
                            <img src="{{ asset($album->cover_image) }}" alt="{{ $album->title }}" class="w-36 h-36 md:w-60 md:h-60 object-cover rounded-xl shadow-2xl">
                            <div class="text-center md:text-left">
                                <p class="uppercase text-sm text-white font-semibold">{{ __('ui.album') }}</p>
                                <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-white">{{ $album->title }}</h1>
                                <p class="text-lg md:text-xl text-white pt-2">{{ $album->artist->name }}</p>
                                <p class="text-gray-300 pt-1">{{ $album->release_year }}</p>
                            </div>
                        </div>
                    </header>

                    <section class="px-5 md:px-8 pt-4 flex items-center gap-5 ">
                        <button type="button" onclick="playSong('album-preview')" class="rounded-full">
                            <i class="fa-solid fa-circle-play fa-4x" style="color: rgb(0, 182, 27);"></i>
                        </button>

                        <audio id="album-preview">
                            <source src="{{ asset($album->preview_song ?? '') }}" type="audio/mpeg">
                        </audio>

                        <button type="button" class="btn text-white bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit border-none">
                            {{ __('ui.save') }}
                        </button>

                        <button type="button" popovertarget="album-popover" style="anchor-name: --album-anchor">
                            <i class="fa-solid fa-ellipsis fa-2x text-gray-400 hover:text-white"></i>
                        </button>

                        <ul class="dropdown menu w-72 rounded-box bg-base-100 shadow-sm" popover id="album-popover" style="position-anchor: --album-anchor">
                            <li><a href="#"><i class="fa-solid fa-heart"></i> {{ __('ui.save_to_library') }}</a></li>
                            <li><a href="#"><i class="fa-solid fa-share"></i> {{ __('ui.share') }}</a></li>
                        </ul>
                    </section>

                    {{-- Tracce Album con carosello --}}
                    <section class="px-5 md:px-8 pb-6 border-t border-slate-700 ">
                        <div class="pt-6">
                            <h2 class="text-2xl font-bold mb-4 text-white">{{ __('ui.album_tracks') }}</h2>
                            <ul class="list rounded-box shadow-md w-full">
                                <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">{{ __('ui.tracklist') }}</li>

                                @foreach ($album->songs as $index => $song)
                                @php $songAudioId = 'audio-song-' . $song->id; @endphp
                                <li class="list-row"
                                    data-song-title="{{ $song->title }}"
                                    data-song-artist="{{ $album->artist->name }}"
                                    data-song-id="{{ $song->id }}">
                                    <div class="text-4xl font-thin opacity-30 tabular-nums">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                    <div>
                                        <img class="size-10 rounded-box object-cover" src="{{ asset($song->image_path ?? $album->cover_image) }}" alt="{{ $song->title }}">
                                    </div>
                                    <div class="list-col-grow">
                                        <div class="text-white">{{ $song->title }}</div>
                                        <div class="text-xs uppercase font-semibold opacity-60">{{ $album->artist->name }}</div>
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
                        </div>
                    </section>

                    <section class="px-5 md:px-8 pb-10 flex flex-col">
                        <h2 class="font-bold text-white text-3xl mb-2">{{ __('ui.other_albums') }} {{ $album->artist->name }}</h2>

                        <div class="relative w-full group/carousel">
                            <button type="button" onclick="scrollCarousel('otherAlbumsCarousel', -350)"
                                class="btn btn-circle absolute left-0 top-17 lg:top-20 xl:top-23 z-20 bg-black/20 border-none text-white opacity-100 xl:opacity-0 xl:group-hover/carousel:opacity-100 transition-opacity duration-300">
                                ❮
                            </button>

                            <div id="otherAlbumsCarousel" class="flex gap-2 md:gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">
                                @foreach ($album->artist->albums->where('id', '!=', $album->id) as $otherAlbum)
                                <article class="group shrink-0 w-36 sm:w-40 md:w-44 lg:w-48 xl:w-52 flex flex-col relative hover:bg-slate-700/55 rounded-lg p-2 transition">
                                    <a href="{{ route('albums.show', $otherAlbum) }}" class="block">
                                        <img src="{{ asset($otherAlbum->cover_image) }}" alt="{{ $otherAlbum->title }}" class="w-full aspect-square rounded-lg object-cover">
                                        <h3 class="font-bold pt-2 text-white truncate">{{ $otherAlbum->title }}</h3>
                                        <p class="text-sm text-gray-400">Album • {{ $otherAlbum->release_year }}</p>
                                    </a>
                                </article>
                                @endforeach
                            </div>

                            <button type="button" onclick="scrollCarousel('otherAlbumsCarousel', 350)"
                                class="btn btn-circle absolute right-0 top-17 lg:top-20 xl:top-23 z-20 bg-black/20 border-none text-white opacity-100 xl:opacity-0 xl:group-hover/carousel:opacity-100 transition-opacity duration-300">
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