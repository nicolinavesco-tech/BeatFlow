<x-layout>
    <div x-show="tab === 'home'">
        <main class="container-fluid">
            <section class="min-h-screen flex bg-black justify-center items-start pt-20 gap-2">
                {{-- Sidebar nascosta su mobile --}}
                <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0 z-9999">
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
                                                <p class="py-4 text-sm">{{ __('ui.login_create_playlist') }}</p>
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
                        <h3 class="text-white font-bold">{{ __('ui.search_podcast') }}</h3>
                        <p class="text-white text-sm">{{ __('ui.podcast_description') }}</p>
                        <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">{{ __('ui.browse_podcast') }}</a>
                    </div>
                    @else
                    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                        <h3 class="text-white font-bold">{{ __('ui.first_playlist') }}</h3>
                        <p class="text-white text-sm">{{ __('ui.first_playlist_description') }}</p>
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


                <div class="flex rounded-xl border border-base-100 w-full min-w-0 bg-base-100 flex-col gap-6">
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
                                    <div class="list-col-grow">
                                        <div class="text-white">{{ $song->title }}</div>
                                        <div class="text-xs uppercase font-semibold opacity-60">{{ $song->artist }}</div>
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
                                class="btn btn-circle absolute left-0 top-16 z-20 bg-black/20 border-none text-white opacity-0 group-hover/carousel:opacity-100 transition-opacity duration-300">
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
                                        <h3 class="font-bold pt-2 text-white truncate">{{ $album->title }}</h3>
                                        <p class="text-sm text-gray-400">Album • {{ $album->release_year }}</p>
                                    </a>

                                    <button type="button" onclick="event.stopPropagation(); playSong('{{ $discAudioId }}')" class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-4 group-hover/card:opacity-100 group-hover/card:translate-y-0 transition duration-300">
                                        <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                    </button>

                                    <audio id="{{ $discAudioId }}">
                                        <source src="{{ asset($album->preview_song ?? '') }}" type="audio/mpeg">
                                    </audio>
                                </article>
                                @endforeach
                            </div>

                            <button type="button" onclick="scrollCarousel('discografiaCarousel', 350)" class="btn btn-circle absolute right-0 top-16 z-20 bg-black/20 border-none text-white opacity-0 group-hover/carousel:opacity-100 transition-opacity duration-300">
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