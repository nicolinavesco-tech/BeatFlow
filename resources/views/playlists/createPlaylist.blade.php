<main>
    <x-mobile-search />
    <section class="min-h-screen flex bg-black pt-10 lg:pt-20 gap-2">
        {{-- Sidebar nascosta su mobile --}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
            <x-library :compact="true" />

        </aside>

        <div x-show="tab === 'createPlaylist'" class="flex rounded-xl border border-base-100 w-full flex-col gap-6 bg-base-100 p-8 bg-[linear-gradient(to_top,transparent_60%,#15803d_70%,#4ade80)]">
            <div class="flex rounded-xl w-full flex-col gap-6 ">
                <div class="min-h-0 p-4 md:p-6 rounded-t-xl  ">
                    <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span>{{ __('ui.back') }}</span>
                    </a>
                    <form action="{{ route('playlists.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col md:flex-row gap-6 pt-5">
                        @csrf
                        <div class="relative group cursor-pointer w-full max-w-80 h-64 md:h-64 lg:h-56 mx-auto lg:mx-0"
                            onclick="document.querySelector('#new-playlist-image').click()">

                            <img id="new-playlist-preview" src="" class="w-full h-full rounded-xl object-cover shadow-lg hidden">
                            <div id="new-playlist-placeholder" class="w-full h-full rounded-xl bg-slate-800 flex items-center justify-center shadow-lg">
                                <i class="fa-solid fa-music fa-4x text-gray-500"></i>
                            </div>

                            <div class="absolute inset-0 rounded-xl bg-black/50 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center transition duration-300">
                                <i class="fa-solid fa-pen fa-2x text-white"></i>
                                <span class="text-white text-sm mt-2">{{ __('ui.choose_image') }}</span>
                            </div>

                            <input type="file" id="new-playlist-image" name="image" accept="image/*" class="hidden"
                                onchange="previewNewPlaylistImage(event)">
                        </div>
                        <div class="flex flex-col gap-3 justify-center">

                            <input type="text" name="name" value="{{ __('ui.my_playlist') }}" required
                                class="input bg-slate-800/70 text-white w-full md:w-80 h-15 text-3xl text-center border-none focus:outline-none focus:ring-2 focus:ring-[#1DB954] rounded-xl p-3">

                            <div class="flex gap-3 justify-center">
                                <button type="button" @click="tab = 'home'" class="btn bg-slate-700 text-white">{{ __('ui.cancel') }}</button>
                                <button type="submit" class="btn bg-[#1DB954] text-black font-bold">{{ __('ui.create') }}</button>
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
                            <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_library') }}</a></li>
                            <li><a><i class="fa-solid fa-podcast text-gray-400 hover:text-white"></i> {{ __('ui.go_to_artist_radio') }}</a></li>
                            <li class="border-t border-gray-400"><a><i class="fa-solid fa-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_playlist') }}</a></li>
                            <li><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i> {{ __('ui.share') }}</a></li>
                            <li class="border-t border-gray-400"><a><i class="fa-solid fa-desktop text-gray-400 hover:text-white"></i> {{ __('ui.open_with_desktop_app') }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="hidden lg:flex items-center ps-13 p-3 pt-4">
                    <span class="text-white text-xs w-10 shrink-0">#</span>
                    <span class="text-white text-xs w-2/5 min-w-0 px-2">{{ __('ui.title') }}</span>
                    <span class="text-white text-xs w-1/4 min-w-0 px-2">{{ __('ui.album') }}</span>
                    <span class="text-white text-xs w-1/5 min-w-0 px-2">{{ __('ui.added_on') }}</span>
                    <span class="text-white text-xs w-16 text-left shrink-0 ml-auto"><i class="fa-solid fa-clock"></i></span>
                    <span class="w-6 shrink-0"></span>
                </div>
                <div class="pt-6 border-t border-slate-700 p-5">
                    <ul class="hidden lg:block list w-full">
                        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">{{ __('ui.recently_added') }}</li>
                        @auth
                        @php $recentSongs = auth()->user()->addSongs()->latest('pivot_created_at')->take(5)->get(); @endphp
                        @if($recentSongs->count() > 0)
                        @foreach($recentSongs as $index => $song)
                        <div class="group flex items-center p-3 hover:bg-slate-700 rounded-lg"
                            data-song-title="{{ $song->title }}"
                            data-song-artist="{{ $song->artist }}"
                            data-song-id="{{ $song->id }}">

                            {{-- Numero + play --}}
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

                            {{-- Immagine + titolo --}}
                            <div class="flex gap-3 items-center w-2/5 min-w-0 pr-4">
                                <img class="size-10 rounded-lg object-cover shrink-0" src="{{ asset($song->image_path) }}" alt="{{ $song->title }}">
                                <div class="flex flex-col justify-center min-w-0">
                                    <a href="{{ route('songs.show', $song) }}" class="text-white font-bold hover:underline truncate">{{ $song->title }}</a>
                                    <a href="{{ route('artists.show', $song->artistModel) }}" class="text-xs uppercase font-semibold opacity-60 hover:underline truncate">{{ $song->artist }}</a>
                                </div>
                            </div>


                            <span class="text-white font-bold w-1/4 min-w-0 px-2 truncate">{{ $song->album->title ?? '-' }}</span>
                            <span class="text-gray-400 text-sm lg:w-1/5 min-w-0 px-2 truncate">{{ $song->pivot->created_at?->format('d/m/Y') ?? 'N/D' }}</span>
                            <span class="text-gray-400 text-sm w-16 text-left shrink-0">{{ $song->duration_formatted }}</span>


                            <div class="dropdown dropdown-end shrink-0 w-6 flex justify-end">
                                <button tabindex="0" role="button">
                                    <i class="fa-solid fa-ellipsis text-gray-400 hover:text-white"></i>
                                </button>
                                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-10 w-52 p-2 shadow-sm border border-slate-700">
                                    <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i> {{ __('ui.add_to_playlist') }}</a></li>
                                    <li><a href="{{ route('songs.show', $song) }}"><i class="fa-solid fa-music text-gray-400 hover:text-white"></i> {{ __('ui.go_to_song') }}</a></li>
                                    <li><a href="{{ route('artists.show', $song->artistModel) }}"><i class="fa-solid fa-user text-gray-400 hover:text-white"></i> {{ __('ui.go_to_artist') }}</a></li>
                                    @if($song->album)
                                    <li><a href="{{ route('albums.show', $song->album) }}"><i class="fa-solid fa-record-vinyl text-gray-400 hover:text-white"></i> {{ __('ui.go_to_album') }}</a></li>
                                    @endif
                                    <li class="border-t border-gray-600"><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i> {{ __('ui.share') }}</a></li>
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
                            <p class="text-sm">{{ __('ui.no_songs_added') }}</p>
                        </div>
                        @endif
                        @endauth
                    </ul>
                </div>
                <div class="flex flex-col items-center justify-center gap-4 py-16 text-center">
                    <i class="fa-solid fa-music fa-4x text-gray-600"></i>
                    <h3 class="text-white text-2xl font-bold">{{ __('ui.find_something_to_listen') }}</h3>
                    <p class="text-gray-400 max-w-sm">{{ __('ui.explore_your_favorite_artists') }}</p>
                    <a href="{{ route('homepage') }}" class="btn bg-white text-black rounded-full px-6 font-bold mt-2">
                        {{ __('ui.explore_music') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>