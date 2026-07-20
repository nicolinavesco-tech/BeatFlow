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
            <section class="min-h-screen flex bg-black justify-center items-start pt-10 lg:pt-20 gap-2">
                {{-- Sidebar nascosta su mobile --}}
                <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
                    <div class="flex justify-between">
                        <p class="text-xl font-bold mb-4 p-5">{{ __('ui.library') }}</p>
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
                                <span>{{ __('ui.create') }}</span>
                            </label>
                            @auth
                            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                                <li>
                                    <div class="dropdown dropdown-right flex">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <button @click.prevent="tab = 'createPlaylist'" tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">{{ __('ui.playlist') }}</span>
                                            <p class="text-gray-400 text-xs">{{ __('ui.playlist_description') }}</p>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="flex items-center gap-3">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <i class="fa-solid fa-chart-pie fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </div>
                                        <div class="flex flex-col items-start">
                                            <span class="font-bold text-base">{{ __('ui.blend') }}</span>
                                            <p class="text-gray-400 text-xs">{{ __('ui.blend_description') }}</p>
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
                                            <span class="font-bold text-base">{{ __('ui.folder') }}</span>
                                            <p class="text-gray-400 text-xs">{{ __('ui.folder_description') }}</p>
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
                                                <h3 class="font-bold text-lg ">{{ __('ui.create_playlist') }}</h3>
                                                <p class="py-4 text-sm">{{ __('ui.login_playlist_description') }}</p>
                                                <div class="flex gap-4 justify-end">
                                                    <button onclick="this.closest('.dropdown-content').classList.add('hidden')" class=" text-white font-bold">{{ __('ui.not_now') }}</button>
                                                    <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">{{ __('ui.login') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">{{ __('ui.playlist') }}</span>
                                            <p class="text-gray-400 text-xs">{{ __('ui.playlist_description') }}</p>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="flex items-center gap-3">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <i class="fa-solid fa-chart-pie fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </div>
                                        <div class="flex flex-col items-start">
                                            <span class="font-bold text-base">{{ __('ui.blend') }}</span>
                                            <p class="text-gray-400 text-xs">{{ __('ui.blend_description') }}</p>
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
                                            <span class="font-bold text-base">{{ __('ui.folder') }}</span>
                                            <p class="text-gray-400 text-xs">{{ __('ui.folder_description') }}</p>
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
                            <p class="text-sm text-gray-400">{{ __('ui.artist') }}</p>
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
                                <p class="text-sm text-gray-400">{{ __('ui.playlist') }}</p>
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
                        <h3 class="text-white font-bold">{{ __('ui.find_podcasts') }}</h3>
                        <p class="text-white text-sm">{{ __('ui.podcast_description') }}</p>
                        <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">{{ __('ui.browse_podcasts') }}</a>
                    </div>
                    @else
                    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                        <h3 class="text-white font-bold">{{ __('ui.create_playlist') }}</h3>
                        <p class="text-white text-sm">{{ __('ui.playlist_description') }}</p>
                        <div class="dropdown dropdown-right">
                            <button tabindex="0" class="btn bg-white text-black rounded-3xl">{{ __('ui.create_playlist') }}</button>
                            <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[65%] translate-y-[-60%]">
                                <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                                <h3 class="font-bold text-lg ">{{ __('ui.create_playlist') }}</h3>
                                <p class="py-4 text-sm">{{ __('ui.login_create_playlist') }}</p>
                                <div class="flex gap-4 justify-end">
                                    <button class=" text-white font-bold">{{ __('ui.not_now') }}</button>
                                    <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">{{ __('ui.login') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                        <h3 class="text-white font-bold">{{ __('ui.search_podcast') }}</h3>
                        <p class="text-white text-sm">{{ __('ui.podcast_description') }}</p>
                        <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">{{ __('ui.browse_podcast') }}</a>
                    </div>
                    @endauth
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