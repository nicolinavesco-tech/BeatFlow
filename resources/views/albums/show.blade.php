<x-layout>
    <main class="container-fluid">
        <section class="min-h-screen flex bg-black justify-center items-start pt-20 gap-2">

            {{-- Sidebar: nascosta su mobile --}}
            <aside class="hidden lg:flex w-100 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0">
                <div class="flex justify-between">
                    <p class="text-xl font-bold mb-4 p-5">La tua libreria</p>
                    <div class="dropdown dropdown-start p-4">
                        <label tabindex="0" class="btn flex items-center rounded-2xl gap-2 px-4 bg-slate-700/55 border-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            <span>Crea</span>
                        </label>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-10 w-52 p-2 shadow">
                            <li><a href="#">Crea playlist</a></li>
                            <li><a href="#">Crea cartella</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 mx-2">
                    <h2 class="text-white font-bold">Crea la tua prima playlist</h2>
                    <p class="text-white text-sm">È facile, ti aiuteremo</p>
                    <button type="button" class="btn bg-white text-black rounded-3xl border-none">Crea playlist</button>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 mx-2">
                    <h2 class="text-white font-bold">Cerca qualche podcast da seguire</h2>
                    <p class="text-white text-sm">Ti aggiorneremo sui nuovi episodi</p>
                    <button type="button" class="btn bg-white text-black rounded-3xl border-none">Sfoglia i podcast</button>
                </div>
            </aside>

            {{-- Main Content --}}
            <div class="flex rounded-xl border border-base-100 w-full bg-base-100 flex-col gap-6">
                <header class="min-h-64 md:h-100 bg-cover bg-center flex flex-col p-5 md:p-8 rounded-t-xl bg-[linear-gradient(to_top,transparent_50%,#15803d_70%,#4ade80)]">
                    <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span>Torna indietro</span>
                    </a>

                    <div class="pt-10 flex flex-col md:flex-row items-center md:items-end gap-4 md:gap-6">
                        <img src="{{ asset($album->cover_image) }}" alt="{{ $album->title }}" class="w-36 h-36 md:w-60 md:h-60 object-cover rounded-xl shadow-2xl">
                        <div class="text-center md:text-left">
                            <p class="uppercase text-sm text-white font-semibold">Album</p>
                            <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-white">{{ $album->title }}</h1>
                            <p class="text-lg md:text-xl text-white pt-2">{{ $album->artist->name }}</p>
                            <p class="text-gray-300 pt-1">{{ $album->release_year }}</p>
                        </div>
                    </div>
                </header>

                <section class="px-5 md:px-8 pt-4 flex items-center gap-5 bg-base-100">
                    <button type="button" onclick="playSong('album-preview')" class="rounded-full">
                        <i class="fa-solid fa-circle-play fa-4x" style="color: rgb(0, 182, 27);"></i>
                    </button>

                    <audio id="album-preview">
                        <source src="{{ asset($album->preview_song ?? '') }}" type="audio/mpeg">
                    </audio>

                    <button type="button" class="btn text-white bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit border-none">
                        Salva
                    </button>

                    <button type="button" popovertarget="album-popover" style="anchor-name: --album-anchor">
                        <i class="fa-solid fa-ellipsis fa-2x text-gray-400 hover:text-white"></i>
                    </button>

                    <ul class="dropdown menu w-72 rounded-box bg-base-100 shadow-sm" popover id="album-popover" style="position-anchor: --album-anchor">
                        <li><a href="#"><i class="fa-solid fa-heart"></i> Salva nella libreria</a></li>
                        <li><a href="#"><i class="fa-solid fa-share"></i> Condividi</a></li>
                    </ul>
                </section>

                {{-- Tracce Album con carosello --}}
                <section class="px-5 md:px-8 pb-6 border-t border-slate-700 bg-base-100">
                    <div class="pt-6">
                        <h2 class="text-2xl font-bold mb-4 text-white">Brani dell'album</h2>
                        <ul class="hidden md:block list bg-base-100 rounded-box shadow-md w-full">
                            <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Tracklist</li>

                            @foreach ($album->songs as $index => $song)
                            @php $songAudioId = 'audio-song-' . $song->id; @endphp
                            <li class="list-row">
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

                        {{-- Mobile: carosello --}}
                        <div class="relative w-full group/carousel md:hidden">
                            <button type="button" onclick="scrollCarousel('songsCarousel', -350)"
                                class="btn btn-circle absolute left-0 top-16 z-20 bg-black/20 border-none text-white opacity-0 group-hover/carousel:opacity-100 transition-opacity duration-300">
                                ❮
                            </button>

                            <div id="songsCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4 px-2" style="scrollbar-width: none;">
                                @foreach ($album->songs as $index => $song)
                                @php $songMobileId = 'audio-song-mobile-' . $song->id; @endphp
                                <div class="group/card shrink-0 w-44 relative hover:bg-slate-700/55 rounded-lg p-2 transition">
                                    <a href="#" class="block">
                                        <img src="{{ asset($song->image_path ?? $album->cover_image) }}" alt="{{ $song->title }}" class="w-40 h-40 rounded-lg object-cover">
                                        <h3 class="font-bold pt-2 text-white truncate">{{ $song->title }}</h3>
                                        <p class="text-sm text-gray-400 truncate">{{ $album->artist->name }}</p>
                                    </a>
                                    <button type="button" onclick="event.stopPropagation(); playSong('{{ $songMobileId }}')"
                                        class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-4 group-hover/card:opacity-100 group-hover/card:translate-y-0 transition duration-300">
                                        <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                    </button>
                                    <audio id="{{ $songMobileId }}">
                                        <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                                    </audio>
                                </div>
                                @endforeach
                            </div>

                            <button type="button" onclick="scrollCarousel('songsCarousel', 350)"
                                class="btn btn-circle absolute right-0 top-16 z-20 bg-black/20 border-none text-white opacity-0 group-hover/carousel:opacity-100 transition-opacity duration-300">
                                ❯
                            </button>
                        </div>
                    </div>
                </section>

                {{-- Album con carosello --}}
                <section class="px-5 md:px-8 pb-10 flex flex-col">
                    <h2 class="font-bold text-white text-3xl mb-2">Altri album di {{ $album->artist->name }}</h2>

                    <div class="relative w-full group/carousel">
                        <button type="button"onclick="scrollCarousel('otherAlbumsCarousel', -350)"
                            class="btn btn-circle absolute left-0 top-16 z-20 bg-black/20 border-none text-white opacity-0 group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❮
                        </button>

                        <div id="otherAlbumsCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4 px-2" style="scrollbar-width: none;">
                            @foreach ($album->artist->albums->where('id', '!=', $album->id) as $otherAlbum)
                            <article class="group/card shrink-0 w-44 relative hover:bg-slate-700/55 rounded-lg p-2 transition">
                                <a href="{{ route('albums.show', $otherAlbum) }}" class="block">
                                    <img src="{{ asset($otherAlbum->cover_image) }}" alt="{{ $otherAlbum->title }}" class="w-40 h-40 rounded-lg object-cover">
                                    <h3 class="font-bold pt-2 text-white truncate">{{ $otherAlbum->title }}</h3>
                                    <p class="text-sm text-gray-400">Album • {{ $otherAlbum->release_year }}</p>
                                </a>
                            </article>
                            @endforeach
                        </div>
                        <button type="button" onclick="scrollCarousel('otherAlbumsCarousel', 350)"
                            class="btn btn-circle absolute right-0 top-16 z-20 bg-black/20 border-none text-white opacity-0 group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❯
                        </button>
                    </div>
                </section>
            </div>
        </section>
    </main>
</x-layout>