<main class="container-fluid">
    <section class="min-h-screen flex bg-black justify-center items-start pt-20 gap-2">

        {{-- Sidebar nascosta su mobile--}}
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

        <div class="flex rounded-xl border border-base-100 w-full min-w-0 bg-base-100 flex-col gap-6">

            {{-- Header profilo --}}
            <header class="h-64 md:h-100 bg-cover bg-center flex flex-col p-5 md:p-8 rounded-t-xl bg-[linear-gradient(to_top,#121212_0%,#1DB954_100%)]">
                <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                    <i class="fa-solid fa-chevron-left"></i>
                    <span>Torna indietro</span>
                </a>

                <div class="mt-auto flex items-center gap-5">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt="Foto profilo" class="w-24 h-24 md:w-40 md:h-40 rounded-full object-cover border-4 border-white shadow-lg">

                    <div>
                        <p class="text-sm text-white uppercase">Profilo</p>
                        <h1 class="leading-tight text-4xl md:text-7xl xl:text-8xl font-bold text-white">{{ auth()->user()?->name }}</h1>
                        <p class="text-sm md:text-base text-white">{{ auth()->user()?->email }}</p>
                    </div>
                </div>
            </header>

            {{-- Canzoni preferite --}}
            <section class="px-5 md:px-8 pb-6 border-t border-slate-700 bg-base-100">
                <div class="pt-6">
                    <h2 class="text-2xl font-bold mb-4 text-white">Brani preferiti di questo mese</h2>

                    <ul class="list bg-base-100 rounded-box shadow-md w-full">
                        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Le tue canzoni del cuore</li>
                        @auth
                        @forelse(auth()->user()->favoriteSongs as $index=>$favSong)
                        <div class="group flex items-center p-3 rounded-lg hover:bg-slate-700/55">
                            <div class="relative w-6 h-6 flex items-center justify-center ">
                                <span class="text-xl leading-none font-thin opacity-30 tabular-nums group-hover:hidden ">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <button class=" absolute inset-0 hidden group-hover:flex w-6 items-center justify-center text-white" onclick="playSong('audio-fav-{{$favSong->id}}')">
                                    <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                            <path d="M6 3L20 12 6 21 6 3z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <img src="{{$favSong->image_path}}" alt="{{$favSong->title}}" class="size-10 rounded-lg object-cover mx-3">
                            <div class="flex flex-col flex-1 min-w-0">
                                <a href="{{route('songs.show', $favSong)}}" class="text-white font-bold hover:underline truncate">{{$favSong->title}}</a>
                                <a href="{{route('artists.show', $favSong->artistModel)}}" class="text-xs text-gray-400 hover:underline uppercase">{{$favSong->artist}}</a>
                            </div>
                            <span class="text-gray-400 text-sm">{{$favSong->duration_formatted}}</span>
                            <form action="{{route('favorites.destroy', $favSong)}}" method="POST" class="ml-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fa-solid fa-heart text-[#1DB954] hover:text-red-500"></i>
                                </button>
                            </form>
                            <audio id="audio-fav-{{$favSong->id}}">
                                <source src="{{ asset($favSong->file_path) }}" type="audio/mpeg">
                            </audio>
                        </div>
                        @empty
                        <li class="p-4 text-gray-400 text-sm">Non hai ancora nessun brano preferito</li>
                        @endforelse
                        @endauth

                    </ul>
                </div>
            </section>

        </div>
    </section>
</main>