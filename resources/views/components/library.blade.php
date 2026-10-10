{{--
    Libreria della sidebar: intestazione con il pulsante "Crea", artisti seguiti,
    playlist dell'utente e card dei podcast. Prima era copiata in ogni pagina.
    Con :compact="true" mostra solo artisti e playlist (pagine riservate agli utenti loggati).
--}}
@props(['compact' => false])

@php
    // Nella homepage la creazione playlist è una tab Alpine: niente ricaricamento della pagina
    $onHomepage = request()->routeIs('homepage');
    $createPlaylistUrl = route('homepage') . '?tab=createPlaylist';
@endphp

<div class="flex justify-between">
    <p class="text-xl font-bold mb-4 p-5">{{ __('ui.your_library') }}</p>
    <div class="dropdown dropdown-end md:dropdown-start p-4">
        <label tabindex="0" class="btn flex items-center rounded-2xl gap-2 px-4 bg-slate-700/55">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            <span>{{ __('ui.create') }}</span>
        </label>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-50 w-84 p-2 shadow border border-slate-700/80 mt-2">
            <li>
                @auth
                <a href="{{ $createPlaylistUrl }}" @if($onHomepage) @click.prevent="tab = 'createPlaylist'; document.activeElement.blur()" @endif class="flex items-center gap-3">
                    <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                        <i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <div class="flex flex-col items-start">
                        <span class="font-bold text-base">{{ __('ui.playlist') }}</span>
                        <p class="text-gray-400 text-xs">{{ __('ui.playlist_description') }}</p>
                    </div>
                </a>
                @else
                <div class="dropdown dropdown-right flex">
                    <div class="hidden md:flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                        <button tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                        <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[5%] translate-y-[-30%]">
                            <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                            <h3 class="font-bold text-lg">{{ __('ui.create_playlist') }}</h3>
                            <p class="py-4 text-sm">{{ __('ui.login_create_playlist') }}</p>
                            <div class="flex gap-4 justify-end">
                                <button type="button" onclick="document.activeElement.blur()" class="text-white font-bold">{{ __('ui.not_now') }}</button>
                                <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">{{ __('ui.login') }}</a>
                            </div>
                        </div>
                    </div>
                    {{-- Mobile: link diretto al login --}}
                    <a href="{{ route('login') }}" class="flex md:hidden items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                        <i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                    </a>
                    <div class="flex flex-col items-start">
                        <span class="font-bold text-base">{{ __('ui.playlist') }}</span>
                        <p class="text-gray-400 text-xs">{{ __('ui.playlist_description') }}</p>
                    </div>
                </div>
                @endauth
            </li>
            <li>
                <a href="{{ auth()->check() ? '#' : route('login') }}" class="flex items-center gap-3">
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
                <a href="{{ auth()->check() ? '#' : route('login') }}" class="flex items-center">
                    <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                        <i class="fa-regular fa-folder-closed fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <div class="flex flex-col items-start">
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
        <img src="{{ asset('media/' . $favoriteArtist->image) }}" alt="{{ $favoriteArtist->name }}" class="w-20 h-20 rounded-full object-cover shrink-0">
        <div class="flex flex-col justify-center">
            <p class="text-white font-bold">{{ $favoriteArtist->name }}</p>
            <p class="text-sm text-gray-400">{{ __('ui.artist') }}</p>
        </div>
    </a>
    @endforeach

    @foreach(auth()->user()->playlists as $userPlaylist)
    <div class="flex justify-between items-center">
        <a href="{{ route('playlists.show', $userPlaylist) }}" class="flex gap-3 ps-3 min-w-0">
            <x-playlist-cover :playlist="$userPlaylist" class="w-20 h-20 rounded-md" />
            <div class="flex flex-col justify-center min-w-0">
                <p class="text-white font-bold truncate">{{ $userPlaylist->name }}</p>
                <p class="text-sm text-gray-400">{{ __('ui.playlist') }}</p>
            </div>
        </a>
        <form action="{{ route('playlists.destroy', $userPlaylist) }}" method="POST" onsubmit="return confirm(@js(__('ui.confirm_delete_playlist')))">
            @csrf
            @method('DELETE')
            <button class="p-5" aria-label="{{ __('ui.delete_playlist') }}">
                <i class="fa-solid fa-trash hover:text-red-600"></i>
            </button>
        </form>
    </div>
    @endforeach

    @unless($compact)
    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
        <h3 class="text-white font-bold">{{ __('ui.search_podcast') }}</h3>
        <p class="text-white text-sm">{{ __('ui.podcast_description') }}</p>
        <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">{{ __('ui.browse_podcast') }}</a>
    </div>
    @endunless
@else
    <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
        <h3 class="text-white font-bold">{{ __('ui.create_playlist') }}</h3>
        <p class="text-white text-sm">{{ __('ui.first_playlist_description') }}</p>

        {{-- Mobile: link diretto al login --}}
        <a href="{{ route('login') }}" class="md:hidden btn bg-white text-black rounded-3xl">
            {{ __('ui.create_playlist') }}
        </a>

        {{-- Desktop: dropdown con finestra blu --}}
        <div class="hidden md:block dropdown dropdown-right">
            <button tabindex="0" class="btn bg-white text-black rounded-3xl">{{ __('ui.create_playlist') }}</button>
            <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[65%] translate-y-[-60%]">
                <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                <h3 class="font-bold text-lg">{{ __('ui.create_playlist') }}</h3>
                <p class="py-4 text-sm">{{ __('ui.login_create_playlist') }}</p>
                <div class="flex gap-4 justify-end">
                    <button type="button" onclick="document.activeElement.blur()" class="text-white font-bold">{{ __('ui.not_now') }}</button>
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
