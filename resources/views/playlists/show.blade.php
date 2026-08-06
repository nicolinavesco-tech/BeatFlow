<x-layout>
    <main>
        <div id="playlist-data" data-playlist-id="{{ $playlist->id }}"></div>
        <section class="min-h-screen flex bg-black pt-20 gap-2">
            {{-- Sidebar nascosta su mobile --}}
            <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0 z-40">
                <div class="flex justify-between">
                    <p class="text-xl font-bold mb-4 p-5">{{ __('ui.your_library') }}</p>
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
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                            <li>
                                <div class="dropdown dropdown-right flex">
                                    <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                        <a href="{{ route('homepage') }}?tab=createPlaylist">
                                            <i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </a>
                                    </div>
                                    <div class="flex flex-col items-start ">
                                        <span class="font-bold text-base">{{ __('ui.playlist') }}</span>
                                        <p class="text-gray-400 text-xs">{{ __('ui.playlist_description') }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3">
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
                                <a href="#" class="flex items-center">
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
                @endauth
            </aside>

            <div class="flex rounded-xl border border-base-100 w-full flex-col gap-6 bg-base-100">
                <div class="flex rounded-xl border border-base-100 w-full flex-col gap-6 bg-base-100">
                    <div class="min-h-80 p-5 md:p-8 rounded-t-xl bg-[linear-gradient(to_top,transparent_0%,#15803d_70%,#4ade80)]">
                        <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                            <i class="fa-solid fa-chevron-left"></i>
                            <span>{{ __('ui.back') }}</span>
                        </a>

                        <!-- Details new playlist -->
                        <div class="flex flex-col md:flex-row items-center md:items-end pt-5 gap-5">
                            <img src="{{ $playlist->image_path ? Storage::url($playlist->image_path) : 'https://placehold.co/300x300/282828/ffffff?text=♪' }}" alt="{{ $playlist->name }}" class="w-48 h-48 md:w-72 md:h-72 rounded-xl shadow-lg object-cover hover:scale-105 transition duration-300">
                            <label for="playlist-image" class=" text-white rounded-full w-fit -translate-y-25.5 -translate-x-50.5">
                                <input type="file" id="playlist-image" class="hidden" />
                                <div class="flex flex-col items-center gap-3">

                                </div>
                            </label>

                            <div class="flex flex-col gap-3 text-center md:text-left">
                                <p class="text-sm uppercase tracking-wide text-white">{{ __('ui.playlist') }}</p>
                                <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold">{{ $playlist->name }}</h1>
                                @auth
                                <p class="text-xl text-white">{{ $playlist->user->name }}</p>
                                @else
                                <p class="text-xl text-white">{{ __('ui.guest') }}</p>
                                @endauth
                            </div>
                        </div>

                        {{-- Controlli --}}
                        <div class="pt-8 flex items-center gap-5 ">
                            <i class="fa-solid fa-user-plus fa-2x text-gray-400 hover:text-white"></i>

                            <button popovertarget="popover-1" style="anchor-name:--anchor-1">
                                <i class="fa-solid fa-ellipsis fa-2x text-gray-400 hover:text-white"></i>
                            </button>

                            <ul class="dropdown menu w-52 rounded-box bg-base-100 shadow-sm"
                                popover id="popover-1" style="position-anchor:--anchor-1">
                                <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_library') }}</a></li>
                                <li><a><i class="fa-solid fa-podcast text-gray-400 hover:text-white"></i> {{ __('ui.go_to_artist_radio') }}</a></li>
                                <li class="border-t border-gray-400"><a><i class="fa-solid fa-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_playlist') }}</a></li>
                                <li><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i> {{ __('ui.share') }}</a></li>
                                <li class="border-t border-gray-400"><a><i class="fa-solid fa-desktop text-gray-400 hover:text-white"></i> {{ __('ui.open_with_desktop_app') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center ps-5 md:ps-13 p-3 pt-4">
                        <span class="text-gray-400 text-xs w-10 shrink-0">#</span>
                        <span class="text-gray-400 text-xs w-2/5 min-w-0 px-2">{{ __('ui.title') }}</span>
                        <span class="text-gray-400 text-xs w-2/6 min-w-0 px-2">{{ __('ui.album') }}</span>
                        <span class="text-gray-400 hidden lg:block text-xs w-1/4 min-w-0 px-2">{{ __('ui.added_on') }}</span>
                        <span class="text-gray-400 text-xs w-16 lg:w-25 text-left shrink-0"><i class="fa-solid fa-clock"></i></span>
                        <span class="w-6 shrink-0"></span>
                    </div>
                    <div class="pt-6 border-t border-slate-700 p-1 md:p-5">
                        <ul class="list bg-base-100 rounded-box shadow-md w-full">
                            <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">{{ __('ui.tracklist') }}</li>
                            @auth
                            @foreach($playlist->songs as $index => $song)
                            <div class="group flex items-center p-3 pr-8 hover:bg-slate-700 rounded-lg w-full"
                                data-song-title="{{ $song->title }}"
                                data-song-artist="{{ $song->artist }}"
                                data-song-id="{{ $song->id }}">

                                <div class="relative w-10 flex items-center justify-center shrink-0">
                                    <span class="text-sm leading-none font-thin opacity-30 tabular-nums hidden [@media(hover:hover)]:block [@media(hover:hover)]:group-hover:hidden">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                    <button class="absolute inset-0 flex items-center justify-center text-white [@media(hover:hover)]:hidden [@media(hover:hover)]:group-hover:flex"
                                        onclick="playSong('audio-add-{{$song->id}}')">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                <path d="M6 3L20 12 6 21 6 3z"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex gap-3 items-center w-2/5 min-w-0 px-2 shrink-0">
                                    <img class="size-10 rounded-box object-cover shrink-0" src="{{ asset($song->image_path) }}" alt="{{ $song->title }}">
                                    <div class="flex flex-col justify-center min-w-0">
                                        <a href="{{ route('songs.show', $song) }}" class="text-white font-bold hover:underline truncate">{{ $song->title }}</a>
                                        <a href="{{ route('artists.show', $song->artistModel) }}" class="text-xs uppercase font-semibold opacity-60 hover:underline truncate">{{$song->artist}}</a>
                                    </div>
                                </div>

                                <div class="flex-1 min-w-0 px-2">
                                    <p class="text-white font-bold truncate">{{ $song->album->title ?? '-' }}</p>
                                </div>

                                <div class="hidden lg:block w-1/5 min-w-0 px-4 shrink-0">
                                    <p class="text-gray-400 text-sm truncate">{{ $song->pivot->created_at?->format('d/m/Y') ?? 'N/D' }}</p>
                                </div>

                                <span class="text-gray-400 text-sm w-16 text-left shrink-0 ml-auto">{{ $song->duration_formatted }}</span>

                                <div class="dropdown dropdown-end shrink-0 w-6 flex justify-end">
                                    <button tabindex="0" role="button">
                                        <i class="fa-solid fa-ellipsis text-gray-400 hover:text-white"></i>
                                    </button>
                                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                                        <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_playlist') }}</a></li>
                                        <li>
                                            <form action="{{route('songs.destroy', $song)}}" method="POST" class="w-full">
                                                @csrf
                                                @method('DELETE')
                                                <button class="flex items-center gap-2 w-full text-left">
                                                    <i class="fa-solid fa-trash text-gray-400 hover:text-white"></i> {{ __('ui.remove_from_playlist') }}
                                                </button>
                                            </form>
                                        </li>
                                        <li class="border-t border-gray-400"><a href=""><i class="fa-solid fa-plus text-gray-400 hover:text-white"></i> {{ __('ui.go_to_album') }}</a></li>
                                        <li><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i> {{ __('ui.share') }}</a></li>
                                        <li class="border-t border-gray-400"><a><i class="fa-solid fa-desktop text-gray-400 hover:text-white"></i> {{ __('ui.open_with_desktop_app') }}</a></li>
                                    </ul>
                                </div>

                                <audio id="audio-add-{{$song->id}}">
                                    <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                                </audio>
                            </div>
                            @endforeach
                            @endauth
                        </ul>
                    </div>
                    <div class="gap-2 flex flex-col flex-1 p-5 ">
                        <h3 class="text-white text-xl font-bold pb-4">{{ __('ui.find_something_for_your_playlist') }}</h3>
                        <form onsubmit="searchForPlaylist(event)" data-playlist-id="{{ $playlist->id }}">
                            <label class="input w-80 lg:w-100 flex items-center gap-2">
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
                                <input type="search" id="playlistSearchInput" name="q" value="{{ request('q') }}" required placeholder="{{ __('ui.search_tracks_episodes') }}" class="flex-1 " />
                                <select name="source" class="bg-slate-800/70 text-white text-sm outline-none ">
                                    <option value="local" @selected(request('source')==='local' )>
                                        {{ __('ui.library') }}
                                    </option>
                                </select>
                            </label>
                        </form>
                        <div id="playlistSearchResults" class="flex flex-col gap-2 pt-4"></div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>