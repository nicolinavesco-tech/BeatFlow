<main class="container-fluid">
    <section class="min-h-screen flex bg-black  pt-20 gap-2">
        {{-- Sidebar nascosta su mobile --}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0 z-9999">
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
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box w-84 p-2 shadow border border-slate-700/80 mt-2">
                        <li>
                            <div class="dropdown dropdown-right flex">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <a href="{{ route('homepage') }}?tab=createPlaylist">
                                        <i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                    </a>
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
            @foreach(auth()->user()->playlists as $playlist)
            <div class="flex justify-between items-center">
                <a href="{{ route('playlists.show', $playlist)}}" class="flex gap-3 ps-3">
                    <img src="{{$playlist->image_path ? Storage::url($playlist->image_path) : 'https://placehold.co/80x80/282828/ffffff?text=♪'}}" alt="{{$playlist->name}}" class="w-20 h-20 rounded-md object-cover shrink-0">
                    <div class="flex flex-col justify-center">
                        <p class="text-white font-bold">{{$playlist->name}}</p>
                        <p class="text-sm text-gray-400">Playlist</p>
                    </div>
                </a>
                <form action="{{route('playlists.destroy', $playlist)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="p-5">
                        <i class="fa-solid fa-trash hover:text-red-600"></i>
                    </button>
                </form>
            </div>
            @endforeach
            @endauth

        </aside>

        <div x-show="tab === 'createPlaylist'" class="flex rounded-xl border border-base-100 w-full flex-col gap-6 bg-base-100 p-8">
            <div class="flex rounded-xl border border-base-100 w-full flex-col gap-6 bg-base-100">
                <div class="min-h-80 p-5 md:p-8 rounded-t-xl  bg-[linear-gradient(to_top,transparent_0%,#15803d_70%,#4ade80)]">
                    <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span>Torna indietro</span>
                    </a>
                    <form action="{{ route('playlists.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col md:flex-row gap-6 w-full pt-5">
                        @csrf
                        <div class="relative group cursor-pointer w-80 h-70"
                            onclick="document.querySelector('#new-playlist-image').click()">

                            <img id="new-playlist-preview" src="" class="w-full h-full rounded-xl object-cover shadow-lg hidden">
                            <div id="new-playlist-placeholder" class="w-full h-full rounded-xl bg-slate-800 flex items-center justify-center shadow-lg">
                                <i class="fa-solid fa-music fa-4x text-gray-500"></i>
                            </div>

                            <div class="absolute inset-0 rounded-xl bg-black/50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center transition duration-300">
                                <i class="fa-solid fa-pen fa-2x text-white"></i>
                                <span class="text-white text-sm mt-2">Scegli foto</span>
                            </div>

                            <input type="file" id="new-playlist-image" name="image" accept="image/*" class="hidden"
                                onchange="previewNewPlaylistImage(event)">
                        </div>
                        <div class="flex flex-col gap-3 justify-center">

                            <input type="text" name="name" value="La mia playlist" required
                                class="input bg-slate-800/70 text-white w-full md:w-80 h-15 text-3xl text-center border-none focus:outline-none focus:ring-2 focus:ring-[#1DB954] rounded-xl p-3">

                            <div class="flex gap-3 justify-center">
                                <button type="button" @click="tab = 'home'" class="btn bg-slate-700 text-white">Annulla</button>
                                <button type="submit" class="btn bg-[#1DB954] text-black font-bold">Crea</button>
                            </div>
                        </div>
                    </form>
                    <div class="pt-5 flex justify-center md:justify-start items-center gap-5">
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
                </div>

                <div class="hidden lg:flex items-center ps-13 p-3 pt-4">
                    <span class="text-gray-400 text-xs w-10">#</span>
                    <span class="text-gray-400 text-xs flex-1">Titolo</span>
                    <span class="text-gray-400 text-xs w-45">Album</span>
                    <span class="text-gray-400 text-xs w-50">Aggiunto il giorno</span>
                    <span class="text-gray-400 text-xs w-30"><i class="fa-solid fa-clock"></i></span>
                </div>
                <div class="pt-6 border-t border-slate-700 p-5">
                    <ul class="hidden md:block list bg-base-100 rounded-box shadow-md w-full">
                        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Aggiunte di recente</li>
                        @auth
                        @php $recentSongs = auth()->user()->addSongs()->latest('pivot_created_at')->take(5)->get(); @endphp
                        @if($recentSongs->count() > 0)
                        @foreach($recentSongs as $index => $song)
                        <div class="group flex items-center p-3 hover:bg-slate-700 rounded-lg"
                            data-song-title="{{ $song->title }}"
                            data-song-artist="{{ $song->artist }}"
                            data-song-id="{{ $song->id }}">

                            {{-- Numero + play --}}
                            <div class="relative w-6 h-6 flex items-center justify-center shrink-0 mr-3">
                                <span class="text-sm leading-none font-thin opacity-30 tabular-nums group-hover:hidden">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <button class="absolute inset-0 hidden group-hover:flex items-center justify-center text-white" onclick="playSong('audio-recent-{{ $song->id }}')">
                                    <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                            <path d="M6 3L20 12 6 21 6 3z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>

                            {{-- Immagine + titolo --}}
                            <div class="flex gap-3 items-center flex-1 min-w-0">
                                <img class="size-10 rounded-lg object-cover shrink-0" src="{{ asset($song->image_path) }}" alt="{{ $song->title }}">
                                <div class="flex flex-col justify-center min-w-0">
                                    <a href="{{ route('songs.show', $song) }}" class="text-white font-bold hover:underline truncate">{{ $song->title }}</a>
                                    <a href="{{ route('artists.show', $song->artistModel) }}" class="text-xs uppercase font-semibold opacity-60 hover:underline">{{ $song->artist }}</a>
                                </div>
                            </div>

                            {{-- Durata --}}
                            <span class="text-white font-bold w-50 truncate">{{ $song->album->title ?? 'Singolo' }}</span>
                            <span class="text-gray-400 text-sm w-50">{{ $song->pivot->created_at?->format('d/m/Y') ?? 'N/D' }}</span>
                            <span class="text-gray-400 text-sm w-16 text-left shrink-0">{{ $song->duration_formatted }}</span>


                            <div class="dropdown dropdown-end">
                                <button tabindex="0" role="button">
                                    <i class="fa-solid fa-ellipsis text-gray-400 hover:text-white"></i>
                                </button>
                                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-10 w-52 p-2 shadow-sm border border-slate-700">
                                    <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i> Aggiungi alla playlist</a></li>
                                    <li><a href="{{ route('songs.show', $song) }}"><i class="fa-solid fa-music text-gray-400 hover:text-white"></i> Vai alla canzone</a></li>
                                    <li><a href="{{ route('artists.show', $song->artistModel) }}"><i class="fa-solid fa-user text-gray-400 hover:text-white"></i> Vai all'artista</a></li>
                                    @if($song->album)
                                    <li><a href="{{ route('albums.show', $song->album) }}"><i class="fa-solid fa-record-vinyl text-gray-400 hover:text-white"></i> Vai all'album</a></li>
                                    @endif
                                    <li class="border-t border-gray-600"><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i> Condividi</a></li>
                                </ul>
                            </div>

                            <audio id="audio-recent-{{ $song->id }}">
                                <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                            </audio>
                        </div>
                        @endforeach
                        @else
                        <div class="flex flex-col items-center justify-center gap-2 py-10 text-gray-400">
                            <i class="fa-solid fa-music fa-2x opacity-30"></i>
                            <p class="text-sm">Nessuna canzone aggiunta ancora</p>
                        </div>
                        @endif
                        @endauth
                    </ul>
                </div>
                <div class="flex flex-col items-center justify-center gap-4 py-16 text-center">
                    <i class="fa-solid fa-music fa-4x text-gray-600"></i>
                    <h3 class="text-white text-2xl font-bold">Trova qualcosa da ascoltare</h3>
                    <p class="text-gray-400 max-w-sm">Esplora i tuoi artisti preferiti o cerca nuovi brani. Clicca "Crea" per salvare la playlist e iniziare ad aggiungere canzoni.</p>
                    <a href="{{ route('homepage') }}" class="btn bg-white text-black rounded-full px-6 font-bold mt-2">
                        Esplora musica
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>