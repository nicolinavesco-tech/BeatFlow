<x-layout>
    <main>
        <x-mobile-search />
        <section class="min-h-screen flex flex-col lg:flex-row bg-black items-start pt-10 lg:pt-20 gap-2 search-page">

            {{-- Sidebar desktop --}}
            <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl min-h-screen flex-col sticky top-20 space-y-6 shrink-0 z-40">
                <x-library />
            </aside>

            {{-- Main Content --}}
            <div class="flex rounded-xl border border-base-100 w-full min-w-0 bg-base-100 flex-col gap-6 p-5 min-h-screen md:p-8">
                <h1 class="text-xl md:text-2xl font-bold mb-2 text-white truncate">
                    {{ __('ui.results_for', ['query' => $search]) }}
                </h1>
                @if(session('success'))
                <div class="bg-[#1DB954] text-black font-bold px-4 py-3 rounded-lg mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-check"></i>
                    {{ session('success') }}
                </div>
                @endif

                @forelse ($songs as $song)
                {{-- Info a sinistra con spazio garantito, player a larghezza fissa: il titolo non viene più schiacciato --}}
                <div class="flex flex-col md:flex-row gap-4 md:items-center p-4 rounded-xl bg-gray-800/80 hover:bg-gray-800 transition-colors text-white">

                    <div class="flex items-center gap-4 flex-1 min-w-0">
                        @if ($song->image_path)
                        <img src="{{ asset($song->image_path) }}" alt="{{ $song->title }}"
                            class="w-16 h-16 sm:w-20 sm:h-20 rounded-lg object-cover shrink-0 shadow-lg">
                        @endif

                        <div class="min-w-0">
                            <h2 class="text-base sm:text-lg font-semibold leading-tight line-clamp-2 break-words" title="{{ $song->title }}">{{ $song->title }}</h2>
                            <a href="{{ $song->artist_id ? route('artists.show', $song->artist_id) : '#' }}" class="block text-gray-300 hover:underline truncate">{{ $song->artist }}</a>
                            <p class="text-sm text-gray-400 truncate">
                                @if ($song->album)
                                <a href="{{ route('albums.show', $song->album) }}" class="hover:text-white hover:underline"><i class="fa-solid fa-record-vinyl me-1"></i>{{ $song->album->title }}</a>
                                <span class="mx-1">•</span>
                                @endif
                                {{ $song->genre->name ?? __('ui.no_genre') }}
                            </p>
                        </div>
                    </div>

                    @if ($song->file_path)
                    <audio id="audio-{{ $song->id }}" controls preload="none" class="w-full md:w-72 lg:w-80 shrink-0">
                        <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                    </audio>
                    @endif
                    @auth
                    <div class="flex justify-center md:justify-end gap-5 shrink-0">
                        <div class="dropdown dropdown-end">
                            <button tabindex="0" type="button">
                                @if(auth()->user()->addSongs->contains($song->id))
                                <i class="fa-solid fa-circle-check fa-lg text-[#1DB954]"></i>
                                @else
                                <i class="fa-solid fa-circle-plus fa-lg text-gray-400 hover:text-white"></i>
                                @endif
                            </button>
                            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-10 w-52 p-2 shadow border border-slate-700">
                                <li>
                                    @if(auth()->user()->addSongs->contains($song->id))
                                    <form action="{{ route('songs.destroy', $song) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center gap-2 w-full text-left">
                                            <i class="fa-solid fa-circle-minus text-gray-400"></i> {{ __('ui.remove_from_library') }}
                                        </button>
                                    </form>
                                    @else
                                    <form action="{{ route('songs.add', $song) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="flex items-center gap-2 w-full text-left">
                                            <i class="fa-solid fa-music text-gray-400"></i> {{ __('ui.add_to_library') }}
                                        </button>
                                    </form>
                                    @endif
                                </li>
                                <li class="border-t border-slate-700 pt-1">
                                    <p class="text-xs text-gray-500 px-2 py-1">{{ __('ui.add_to_playlist') }}</p>
                                </li>

                                @foreach(auth()->user()->playlists as $userPlaylist)
                                <li>
                                    <form action="{{ route('playlists.addSong', $userPlaylist) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="song_id" value="{{ $song->id }}">
                                        <button type="submit" class="flex items-center gap-2 w-full text-left">
                                            <x-playlist-cover :playlist="$userPlaylist" icon="text-xs" class="w-5 h-5 rounded" />
                                            {{ $userPlaylist->name }}
                                        </button>
                                    </form>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @if(auth()->user()->favoriteSongs->contains($song->id))
                        <form action="{{ route('favorites.destroy', $song) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" aria-label="{{ __('ui.remove_from_favorites') }}">
                                <i class="fa-solid fa-heart text-[#1DB954]"></i>
                            </button>
                        </form>
                        @else
                        <form action="{{ route('favorites.add', $song) }}" method="POST">
                            @csrf
                            <button type="submit" aria-label="{{ __('ui.add_to_favorites') }}">
                                <i class="fa-regular fa-heart text-gray-400 hover:text-[#1DB954]"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                    @endauth
                </div>
                @empty
                <p class="text-white">{{ __('ui.no_results') }}</p>
                @endforelse
            </div>
        </section>
    </main>
</x-layout>