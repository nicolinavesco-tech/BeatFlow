<x-layout>
    <div x-show="tab === 'home'">
        <main class="px-2 sm:px-4 lg:px-6">
            <section class="min-h-screen flex flex-col md:flex-row gap-2 pt-20 bg-black homepage-section">
                <div class="border mt-20 md:mt-0 rounded-xl border-base-100 bg-base-100 w-full md:w-80 lg:w-90 shrink-0 space-y-5 aside-bar">
                    <div class="flex justify-between">
                        <p class="text-xl font-bold mb-4 p-5">{{ __('ui.your_library') }}</p>
                        <div class="dropdown dropdown-end md:dropdown-start p-4">
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
                                    <div class="dropdown  dropdown-right flex">
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
                                        <div class="hidden md:flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <button tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                            <div tabindex="0" class=" dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[5%] translate-y-[-30%]">
                                                <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                                                <h3 class="font-bold text-lg ">{{ __('ui.create_playlist') }}</h3>
                                                <p class="py-4 text-sm">{{ __('ui.login_create_playlist') }}</p>
                                                <div class="flex gap-4 justify-end">
                                                    <button onclick="this.closest('.dropdown-content').classList.add('hidden')" class=" text-white font-bold">{{ __('ui.not_now') }}</button>
                                                    <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">{{ __('ui.login') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Mobile --}}
                                        <a href="{{ route('login') }}" class="flex md:hidden items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                        </a>
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
                        <h3 class="text-white font-bold">Crea la tua prima playlist</h3>
                        <p class="text-white text-sm">E' facile, ti aiuteremo</p>

                        {{-- Mobile: link diretto al login --}}
                        <a href="{{ route('login') }}" class="md:hidden btn bg-white text-black rounded-3xl">
                            Crea una playlist
                        </a>

                        {{-- Desktop: dropdown con finestra blu --}}
                        <div class="hidden md:block dropdown dropdown-right">
                            <button tabindex="0" class="btn bg-white text-black rounded-3xl">Crea una playlist</button>
                            <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[65%] translate-y-[-60%]">
                                <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                                <h3 class="font-bold text-lg">Crea una playlist</h3>
                                <p class="py-4 text-sm">Accedi per creare e condividere playlist.</p>
                                <div class="flex gap-4 justify-end">
                                    <button class="text-white font-bold">Non ora</button>
                                    <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">Accedi</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                        <h3 class="text-white font-bold">{{ __('ui.search_podcast') }}</h3>
                        <p class="text-white text-sm">{{ __('ui.podcast_description') }}</p>
                        <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">{{ __('ui.browse_podcast') }}</a>
                    </div>
                    <x-_locale lang="it" />
                    <x-_locale lang="uk" />
                    @endauth
                </div>

                <!-- Mobile-->
                <div class="min-h-full flex flex-col md:hidden bg-[linear-gradient(to_left,#121212_0%,#1DB954_100%)] mt-2 p-5 rounded-xl">
                    <div class="flex justify-center">
                        <img src="/media/overviewAccount.jpg" alt="" class="w-40 m-5">
                    </div>
                    <div class="flex flex-col justify-center w-full gap-3">
                        <h1 class="text-2xl font-bold text-white">{{ __('ui.premium_title') }}</h1>
                        <p class="text-gray-300 text-sm">{{ __('ui.premium_description') }}</p>
                        <p class="text-gray-300 text-xs">{{ __('ui.premium_terms') }}</p>
                        <p class="text-gray-300 text-xs">{{ __('ui.offer_end') }}</p>

                        <button class="btn bg-green-600 border-none text-white rounded-3xl font-bold w-full sm:w-52">{{ __('ui.try_premium') }}</button>
                    </div>
                </div>

                <div class="flex rounded-xl border border-base-100 bg-base-100 flex-1 min-w-0 flex-col gap-2 p-5 content-bar">
                    <a href="" class="text-2xl font-bold">{{ __('ui.trending_songs') }}</a>
                    <div class="relative w-full group/carousel">
                        <button
                            type="button"
                            onclick="scrollCarousel('trendingCarousel', -350)"
                            class="btn btn-circle absolute left-0 top-17 lg:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❮
                        </button>
                        <div id="trendingCarousel" class="flex gap-2 md:gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">
                            @foreach ($songs as $song)
                            <div class="group shrink-0 w-36 sm:w-40 md:w-44 lg:w-48 xl:w-52 flex flex-col relative hover:bg-slate-700/55 rounded-lg p-2 transition"
                                data-song-title="{{ $song->title }}"
                                data-song-artist="{{ $song->artist }}"
                                data-song-id="{{ $song->id }}">
                                <a href=" {{ route('songs.show', $song) }}" class="block">
                                    <img src="{{ asset('media/' . $song->artistModel->image) }}" alt="{{ $song->title }}" class="w-full aspect-square rounded-lg object-cover">
                                    <h3 class="font-bold pt-2 truncate">{{ $song->title }}</h3>
                                    <p class="text-sm text-gray-400 truncate">{{ $song->artist }}</p>
                                </a>
                                <button
                                    type="button"
                                    onclick="event.stopPropagation(); playSong('audio-{{ $song->id }}')"
                                    class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300">
                                    <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                </button>
                                <audio id="audio-{{ $song->id }}">
                                    <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                                </audio>
                            </div>
                            @endforeach
                        </div>
                        <button
                            type="button"
                            onclick="scrollCarousel('trendingCarousel', 350)"
                            class="btn btn-circle absolute right-0 top-17 lg:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❯
                        </button>
                    </div>
                    <a href="" class="text-2xl font-bold pt-15">{{ __('ui.popular_artists') }}</a>
                    <div class="relative w-full group/carousel">
                        <button type="button" onclick="scrollCarousel('artistsCarousel', -350)"
                            class="btn btn-circle  absolute left-0 top-19 lg:top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❮
                        </button>
                        <div id="artistsCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">
                            @foreach ($artists as $artist)
                            @php
                            $artistSongId = optional($artist->songs->first())->id;
                            @endphp
                            <div class="group shrink-0 w-44 flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative">
                                <a href="{{ route('artists.show', $artist) }}" class="block">
                                    <img src="media/{{ $artist->image }}" alt="{{ $artist->name }}" class="cover w-40 h-40 rounded-full {{ in_array($artist->name, ['Skai IsYourGod', 'Blackpink', 'Twenty One Pilots']) ? 'object-cover' : '' }}">
                                    <h3 class="font-bold pt-2 truncate">{{ $artist->name }}</h3>
                                    <p class="text-sm text-gray-400">Artista</p>
                                </a>
                                <button
                                    type="button"
                                    onclick='event.stopPropagation(); playSong("audio-{{ $artistSongId }}")'
                                    class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-5 group-hover:opacity-100 transition duration-300">
                                    <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                </button>
                                <audio id="audio-{{ $artistSongId }}">
                                    <source src="{{ asset($artist->songs->first()?->file_path ?? '') }}" type="audio/mpeg">
                                </audio>
                            </div>
                            @endforeach
                        </div>
                        <button
                            type="button"
                            onclick="scrollCarousel('artistsCarousel', 350)"
                            class="btn btn-circle absolute right-0 top-19 lg:top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❯
                        </button>
                    </div>
                    <a href="" class="text-2xl font-bold pt-15">{{ __('ui.popular_albums') }}</a>
                    <div class="relative w-full group/carousel">
                        <button
                            type="button"
                            onclick="scrollCarousel('albumsCarousel', -350)"
                            class="btn btn-circle absolute left-0 top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❮
                        </button>
                        <div id="albumsCarousel" class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">
                            @foreach ($albums as $album)
                            <div class="group shrink-0 w-44 flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative">
                                <a href="{{ route('albums.show', $album) }}" class="block">
                                    <img src="{{ asset($album->cover_image) }}" alt="{{ $album->title }}" class="cover w-40 h-40 rounded-lg">
                                    <h3 class="font-bold pt-2 truncate">{{ $album->title }}</h3>
                                    <p class="text-sm text-gray-400 truncate">{{ $album->artist->name }}</p>
                                </a>
                                <button
                                    type="button"
                                    onclick="event.stopPropagation(); playSong('audio-{{ $album->songs->first()?->id ?? ''}}')"
                                    class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300">
                                    <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                                </button>
                                <audio id="audio-{{ $album->songs->first()?->id ?? '' }}">
                                    <source src="" type="audio/mpeg">
                                </audio>
                            </div>
                            @endforeach
                        </div>
                        <button
                            type="button"
                            onclick="scrollCarousel('albumsCarousel', 350)"
                            class="btn btn-circle absolute right-0 top-20 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100 transition-opacity duration-300">
                            ❯
                        </button>
                    </div>

                </div>
            </section>
        </main>
    </div>
    <div x-show="tab === 'profilo'">
        @include('profiles.partial')
    </div>
    <div x-show="tab === 'premium'">
        @include('partialPremium')
    </div>
    <div x-show="tab === 'install'">
        @include('install')
    </div>
    <div x-show="tab === 'news'">
        @include('news')
    </div>
    <div x-show="tab === 'settings'">
        @include('settings')
    </div>
    <div x-show="tab === 'createPlaylist'">
        @include('playlists.createPlaylist')
    </div>
</x-layout>