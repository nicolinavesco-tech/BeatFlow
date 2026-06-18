<main class="container-fluid">
    <section class="min-h-screen flex bg-black  pt-20 gap-2">
        {{-- Sidebar nascosta su mobile --}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0">
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
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                        <li>
                            <div class="dropdown dropdown-right flex">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <button tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                </div>
                                <div class="flex flex-col items-start ">
                                    <span class="font-bold text-base">Playlist</span>
                                    <p class="text-gray-400 text-xs">Riunisci i tuoi brani preferiti</p>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3">
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
                            <a href="#" class="flex items-center">
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
                </div>
            </div>


            @auth
            @foreach(auth()->user()->favoriteArtists as $artist)
            <p>{{ $artist->name }}</p>
            @endforeach
            @endauth

            <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                <h3 class="text-white font-bold">Crea la tua prima playlist</h3>
                <p class="text-white text-sm">E' facile, ti aiuteremo</p>
                <div class="dropdown dropdown-right">
                    <button tabindex="0" class="btn bg-white text-black rounded-3xl">Crea playlist</button>
                </div>
            </div>

            <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                <h3 class="text-white font-bold">Cerca qualche podcast da seguire</h3>
                <p class="text-white text-sm">Ti aggiorneremo sui nuovi episodi</p>
                <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">Sfoglia i podcast</a>
            </div>
        </aside>

        <div class="flex rounded-xl border border-base-100 w-full flex-col gap-6 p-5 md:p-8 bg-base-100 bg-[linear-gradient(to_top,transparent_50%,#15803d_70%,#4ade80)]">

            <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                <i class="fa-solid fa-chevron-left"></i>
                <span>Torna indietro</span>
            </a>

            <!-- Details new playlist -->
            <div class="flex flex-col md:flex-row items-center md:items-end">
                <img src="" alt="Image new playlist" class="w-48 h-48 md:w-72 md:h-72 rounded-xl shadow-lg object-cover hover:scale-105 transition duration-300">
                <label for="playlist-image" class=" text-white rounded-full w-fit -translate-y-25.5 -translate-x-57.5">
                    <input type="file" id="playlist-image" class="hidden" />
                    <div class="flex flex-col items-center gap-3">
                        <i class="fa-solid fa-pen fa-2x text-white"></i>
                        <span class="ml-2">Scegli foto</span>
                    </div>
                </label>

                <div class="flex flex-col gap-3 text-center md:text-left">
                    <p class="text-sm uppercase tracking-wide text-white">Playlist pubblica</p>
                    <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold">La mia playlist</h1>
                    @auth
                    <p class="text-xl text-white">{{ auth()->user()->name }}</p>
                    @else
                    <p class="text-xl text-white">Ospite</p>
                    @endauth
                </div>
            </div>

            {{-- Controlli --}}
            <div class="pt-4 flex items-center gap-5">



                <i class="fa-solid fa-user-plus fa-2x text-gray-400 hover:text-white"></i>

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

            <div class="flex justify-between pt-4">
                <span class="text-gray-400 text-xs"># Titolo</span>
                <span class="text-gray-400 text-xs">Album</span>
                <span class="text-gray-400 text-xs">Aggiunto il giorno</span>
                <span class="text-gray-400 text-xs"><i class="fa-solid fa-clock"></i></span>
            </div>
            <div class="pt-6 border-t border-slate-700">
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
            </div>
            <div class="gap-2flex justify-center flex-1 ">
                <h3 class="text-white text-xl font-bold pb-4">Cerchiamo qualcosa per la tua playlist</h3>
                <form action="{{ route('global.search') }}" method="GET">
                    <label class="input w-100 flex items-center gap-2">
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
                        <input type="search" name="q" value="{{ request('q') }}" required placeholder="Cerca brani e episodi" class="flex-1" />
                        <select name="source" class="bg-slate-800/70 text-white text-sm outline-none ">
                            <option value="local" @selected(request('source')==='local' )>
                                Libreria
                            </option>
                            <option value="jamendo" @selected(request('source')==='jamendo' )>
                                Esplora
                            </option>
                        </select>
                    </label>
                </form>
            </div>
        </div>
    </section>
</main>