<x-layout>
    <div x-show="tab === 'home'">
        <main>
            <div class="flex gap-2 pt-20 justify-center lg:hidden bg-black">
                <a href="{{ route('homepage') }}" class="btn rounded-full"><i class="fa-regular fa-house text-white"></i></a>
                <form action="{{ route('global.search') }}" method="GET">
                    <label class="input w-65 md:w-100 flex items-center gap-2">

                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g
                                stroke-linejoin="round"
                                stroke-linecap="round"
                                stroke-width="2.5"
                                fill="none"
                                stroke="currentColor">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </g>
                        </svg>

                        <input type="search" name="q" value="{{ request('q') }}" required placeholder="{{ __('ui.search_placeholder') }}" class="flex-1" />
                        <select name="source" class="bg-slate-800/70 text-white text-sm outline-none ">
                            <option value="local" @selected(request('source')==='local' )>
                                {{ __('ui.library') }}
                            </option>
                            <option value="jamendo" @selected(request('source')==='jamendo' )>
                                {{ __('ui.explore') }}
                            </option>
                        </select>
                    </label>
                </form>
            </div>
            <section class="min-h-screen flex bg-black justify-center align-items-center pt-10 lg:pt-20 gap-2 details-section">
                {{-- Sidebar nascosta su mobile --}}
                <aside class="hidden lg:flex w-full lg:w-80 xl:w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
                    <div class="flex justify-between">
                        <p class="text-xl font-bold mb-4 p-5">La tua libreria</p>
                        <div class="dropdown dropdown-start p-4">
                            <label tabindex="0" class="btn flex items-center rounded-2xl gap-2 px-4 bg-slate-700/55">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>Crea</span>
                            </label>
                            @auth
                            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                                <li>
                                    <div class="dropdown dropdown-right flex">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <button @click.prevent="tab = 'createPlaylist'" tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">Playlist</span>
                                            <p class="text-gray-400 text-xs">Riunisci i tuoi brani preferiti</p>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="flex items-center gap-3">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <i class="fa-solid fa-chart-pie fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </div>
                                        <div class="flex flex-col items-start">
                                            <span class="font-bold text-base">Blend</span>
                                            <p class="text-gray-400 text-xs">Fondi i gusti dei tuoi amici in una playlist</p>
                                        </div>
                                    </a>
                                </li>
                                <hr class="border-t border-gray-600 my-2">
                                <li>
                                    <a href="" class="flex items-center">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <i class="fa-regular fa-folder-closed fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">Cartella</span>
                                            <p class="text-gray-400 text-xs">Organizza le tue playlist</p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            @else
                            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                                <li>
                                    <div class="dropdown dropdown-right flex">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <button tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                            <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[5%] translate-y-[-30%]">
                                                <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                                                <h3 class="font-bold text-lg ">Crea una playlist</h3>
                                                <p class="py-4 text-sm">Accedi per creare e condividere playlist.</p>
                                                <div class="flex gap-4 justify-end">
                                                    <button onclick="this.closest('.dropdown-content').classList.add('hidden')" class=" text-white font-bold">Non ora</button>
                                                    <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">Accedi</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">Playlist</span>
                                            <p class="text-gray-400 text-xs">Riunisci i tuoi brani preferiti</p>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="flex items-center gap-3">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <i class="fa-solid fa-chart-pie fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </div>
                                        <div class="flex flex-col items-start">
                                            <span class="font-bold text-base">Blend</span>
                                            <p class="text-gray-400 text-xs">Fondi i gusti dei tuoi amici in una playlist</p>
                                        </div>
                                    </a>
                                </li>
                                <hr class="border-t border-gray-600 my-2">
                                <li>
                                    <a href="" class="flex items-center">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <i class="fa-regular fa-folder-closed fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">Cartella</span>
                                            <p class="text-gray-400 text-xs">Organizza le tue playlist</p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            @endauth
                        </div>
                    </div>

                    @auth
                    @foreach(auth()->user()->favoriteArtists as $favoriteArtist)
                    <a href="{{ route('artists.show', $favoriteArtist) }}" class="flex gap-3 ps-3">
                        <img src="/media/{{ $favoriteArtist->image }}" alt="{{ $favoriteArtist->name }}" class="cover w-20 h-20 rounded-full {{ in_array($favoriteArtist->name, ['Skai IsYourGod', 'Blackpink', 'Twenty One Pilots']) ? 'object-cover' : '' }}">
                        <div class="flex flex-col justify-center">
                            <p class="text-white font-bold">{{ $favoriteArtist->name }}</p>
                            <p class="text-sm text-gray-400">Artista</p>
                        </div>
                    </a>
                    @endforeach

                    <!-- Playlist utente -->
                    @foreach(auth()->user()->playlists as $userPlaylist)
                    <div class="flex justify-between items-center">
                        <a href="{{ route('playlists.show', $userPlaylist)}}" class="flex gap-3 ps-3">
                            <img src="{{$userPlaylist->image_path ? Storage::url($userPlaylist->image_path) : 'https://placehold.co/80x80/282828/ffffff?text=♪'}}" alt="{{$userPlaylist->name}}" class="w-20 h-20 rounded-md object-cover shrink-0">
                            <div class="flex flex-col justify-center">
                                <p class="text-white font-bold">{{$userPlaylist->name}}</p>
                                <p class="text-sm text-gray-400">Playlist</p>
                            </div>
                        </a>
                        <form action="{{route('playlists.destroy', $userPlaylist)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="p-5">
                                <i class="fa-solid fa-trash hover:text-red-600"></i>
                            </button>
                        </form>
                    </div>
                    @endforeach
                    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                        <h3 class="text-white font-bold">Cerca qualche podcast da seguire</h3>
                        <p class="text-white text-sm">Ti aggiorneremo sui nuovi episodi</p>
                        <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">Sfoglia i podcast</a>
                    </div>
                    @else
                    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                        <h3 class="text-white font-bold">Crea la tua prima playlist</h3>
                        <p class="text-white text-sm">E' facile, ti aiuteremo</p>
                        <div class="dropdown dropdown-right">
                            <button tabindex="0" class="btn bg-white text-black rounded-3xl">Crea playlist</button>
                            <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[65%] translate-y-[-60%]">
                                <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                                <h3 class="font-bold text-lg ">Crea una playlist</h3>
                                <p class="py-4 text-sm">Accedi per creare e condividere playlist.</p>
                                <div class="flex gap-4 justify-end">
                                    <button class=" text-white font-bold">Non ora</button>
                                    <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">Accedi</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                        <h3 class="text-white font-bold">Cerca qualche podcast da seguire</h3>
                        <p class="text-white text-sm">Ti aggiorneremo sui nuovi episodi</p>
                        <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">Sfoglia i podcast</a>
                    </div>
                    @endauth

                </aside>
                {{-- Main Content --}}
                <div class="flex rounded-xl border border-base-100 w-full min-w-0 flex-col gap-6 p-5 md:p-8 bg-base-100 bg-[linear-gradient(to_top,transparent_50%,#15803d_70%,#4ade80)]">

                    <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span>Torna indietro</span>
                    </a>

                    {{-- Hero: immagine + titolo --}}
                    <div class="flex flex-col md:flex-row gap-5 md:gap-8 items-center md:items-end">
                        <img src="/media/{{ $song->artistModel->image }}" alt="{{ $song->artist }}"
                            class="w-48 h-48 md:w-72 md:h-72 rounded-xl shadow-lg object-cover hover:scale-105 transition duration-300">

                        <div class="flex flex-col gap-3 text-center md:text-left">
                            <p class="text-sm uppercase tracking-wide text-white">Singolo</p>
                            <h1 class="text-4xl sm:text-6xl md:text-9xl font-bold">{{ $song->title }}</h1>
                            <p class="text-xl text-white">{{ $song->genre->name }}</p>
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
                                <i class="fa-regular fa-heart text-red-600 cursor-pointer" title="Accedi per aggiungere"></i>
                                @endauth
                            </button>
                        </form>



                        <button popovertarget="popover-1" style="anchor-name:--anchor-1">
                            <i class="fa-solid fa-ellipsis fa-2x text-gray-400 hover:text-white"></i>
                        </button>

                        <ul class="dropdown menu w-52 rounded-box bg-base-100 shadow-sm"
                            popover id="popover-1" style="position-anchor:--anchor-1">
                            <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i> Aggiungi alla libreria</a></li>
                            <li><a><i class="fa-solid fa-podcast text-gray-400 hover:text-white"></i> Vai a radio dell'artista</a></li>
                            <li class="border-t border-gray-400"><a><i class="fa-solid fa-plus text-gray-400 hover:text-white"></i> Aggiungi alla playlist</a></li>
                            <li><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i> Condividi</a></li>
                            <li class="border-t border-gray-400"><a><i class="fa-solid fa-desktop text-gray-400 hover:text-white"></i> Apri con l'app del desktop</a></li>
                        </ul>
                    </div>

                    {{-- Dettagli --}}
                    <div class="pt-6 border-t border-slate-700">
                        <h2 class="text-2xl font-bold mb-4">Dettagli del brano</h2>
                        <p class="text-lg"><span class="font-bold">Titolo:</span> {{ $song->title }}</p>
                        <p class="text-lg"><span class="font-bold">Artista:</span> {{ $song->artist }}</p>
                        <p class="text-lg"><span class="font-bold">Genere:</span> {{ $song->genre->name }}</p>
                    </div>

                    {{-- Altro di ... con carosello --}}
                    <div class="flex flex-col pt-10">
                        <h2 class="font-bold text-white text-3xl mb-2">Altro di {{ $song->artist }}</h2>

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
                                <p class="text-white pt-4">Nessun altro brano di questo artista.</p>
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