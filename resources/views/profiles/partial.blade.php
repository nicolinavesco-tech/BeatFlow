<main>
    <div class="flex justify-center pt-20 lg:hidden left-0 right-0 gap-1 bg-black z-40 px-4 py-2">
        <a href="{{ route('homepage') }}" class="btn rounded-full"><i class="fa-regular fa-house text-white"></i></a>
        <form action="{{ route('global.search') }}" method="GET">
            <label class="input w-70 flex items-center gap-2">

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
    <section class="min-h-screen flex flex-col md:flex-row bg-black justify-center md:items-start pt-10 lg:pt-20 gap-2">

        {{-- Sidebar nascosta su mobile--}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
            <x-library />
        </aside>

        <div class="flex rounded-xl border border-base-100 w-full min-h-screen min-w-0 bg-base-100 flex-col gap-6">

            {{-- Header profilo --}}
            <header class="h-64 md:h-100 bg-cover bg-center flex flex-col p-5 md:p-8 rounded-t-xl bg-[linear-gradient(to_top,#121212_0%,#1DB954_100%)]">
                <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                    <i class="fa-solid fa-chevron-left"></i>
                    <span>{{ __('ui.back') }}</span>
                </a>

                <div class="mt-auto flex items-center gap-5">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt="Foto profilo" class="w-24 h-24 md:w-40 md:h-40 rounded-full object-cover border-4 border-white shadow-lg">

                    <div>
                        <p class="text-sm text-white uppercase">{{ __('ui.profile') }}</p>
                        <h1 class="leading-tight text-4xl md:text-7xl xl:text-8xl font-bold text-white">{{ auth()->user()?->name }}</h1>
                        <p class="text-sm md:text-base text-white">{{ auth()->user()?->email }}</p>
                    </div>
                </div>
            </header>

            {{-- Canzoni preferite --}}
            <section class="px-5 md:px-8 pb-6 border-t border-slate-700 bg-base-100">
                <div class="pt-6">
                    <h2 class="text-2xl font-bold mb-4 text-white">{{ __('ui.monthly_favorite_tracks') }}</h2>

                    <ul class="list bg-base-100 rounded-box shadow-md w-full">
                        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">{{ __('ui.your_heart_songs') }}</li>
                        @auth
                        @forelse(auth()->user()->favoriteSongs as $index=>$favSong)
                        <div class="group flex items-center p-3 rounded-lg hover:bg-slate-700/55"
                            data-song-title="{{ $favSong->title }}"
                            data-song-artist="{{ $favSong->artist }}"
                            data-song-id="{{ $favSong->id }}">
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
                        <li class="p-4 text-gray-400 text-sm">{{ __('ui.no_favorite_songs') }}</li>
                        @endforelse
                        @endauth

                    </ul>
                </div>
            </section>

        </div>
    </section>
</main>