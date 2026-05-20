<x-layout>
    <main class="container-fluid">
        <section class="min-h-screen flex bg-black justify-content-center align-items-center pt-20 gap-2">

            <div class="border rounded-xl border-base-100 bg-base-100 w-100 space-y-5">
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
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                    <h3 class="text-white font-bold">Crea la tua prima playlist</h3>
                    <p class="text-white text-sm">E' facile, ti aiuteremo</p>
                    <button class="btn bg-white text-black rounded-3xl">Crea playlist</button>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                    <h3 class="text-white font-bold">Cerca qualche podcast da seguire</h3>
                    <p class="text-white text-sm">Ti aggiorneremo sui nuovi episodi</p>
                    <button class="btn bg-white text-black rounded-3xl">Sfoglia i podcast</button>
                </div>
            </div>

            <div class="flex rounded-xl border border-base-100 w-375 flex-col gap-6 p-8 bg-base-100 bg-[linear-gradient(to_top,transparent_50%,#15803d_70%,#4ade80)]">
                <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                    <i class="fa-solid fa-chevron-left"></i>
                    <span>Torna indietro</span>
                </a>

                <div class="flex gap-8 items-end">
                    <img
                        src="/media/{{ $song->artistModel->image }}"
                        alt="{{ $song->artist }}"
                        class="w-72 h-72 rounded-xl shadow-lg object-cover hover:transform hover:scale-105 transition duration-300">

                    <div class="flex flex-col gap-3">
                        <p class="text-sm uppercase tracking-wide text-white">Singolo</p>
                        <h1 class="text-9xl font-bold">{{ $song->title }}</h1>
                        <p class="text-xl text-white">{{ $song->genre->name }}</p>
                    </div>
                </div>

                <div class="pt-4 flex items-center gap-5">
                    <button
                        type="button"
                        onclick="playSong('audio-detail')"
                        class="rounded-full">
                        <i class="fa-solid fa-circle-play fa-4x" style="color: rgb(0, 182, 27);"></i>
                    </button>

                    <audio id="audio-detail">
                        <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                    </audio>

                    <i class="fa-solid fa-circle-plus fa-2x text-gray-400 hover:text-white"></i>

                    <button class="" popovertarget="popover-1" style="anchor-name:--anchor-1">
                        <i class="fa-solid fa-ellipsis fa-2x text-gray-400 hover:text-white"></i>
                    </button>

                    <ul class="dropdown menu w-52 rounded-box bg-base-100 shadow-sm"
                        popover id="popover-1" style="position-anchor:--anchor-1">
                        <li><a><i class="fa-solid fa-circle-plus text-gray-400 hover:text-white"></i>Aggiungi alla libreria</a></li>
                        <li><a><i class="fa-solid fa-podcast text-gray-400 hover:text-white"></i>Vai a radio dell'artista</a></li>
                        <li class="border-t border-gray-400"><a><i class="fa-solid fa-plus text-gray-400 hover:text-white"></i>Aggiungi alla playlist</a></li>
                        <li><a><i class="fa-solid fa-arrow-up-from-bracket text-gray-400 hover:text-white"></i>Condividi</a></li>
                        <li class="border-t border-gray-400"><a><i class="fa-solid fa-desktop text-gray-400 hover:text-white"></i>Apri con l'app del desktop</a></li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-700">
                    <h2 class="text-2xl font-bold mb-4">Dettagli del brano</h2>
                    <p class="text-lg">
                        <span class="font-bold">Titolo:</span> {{ $song->title }}
                    </p>
                    <p class="text-lg">
                        <span class="font-bold">Artista:</span> {{ $song->artist }}
                    </p>
                    <p class="text-lg">
                        <span class="font-bold">Genere:</span> {{ $song->genre->name }}
                    </p>
                </div>

                <div class="flex flex-col pt-15">
                    <h2 class="font-bold text-white text-3xl">Altro di {{ $song->artist }}</h2>

                    <div class="flex w-full pt-4 gap-2">
                        @forelse ($otherSongs as $otherSong)
                        <div class="group relative hover:bg-slate-700/55 rounded-lg p-2">
                            <a href="{{ route('songs.show', $otherSong) }}" class="block">
                                <img
                                    src="{{ asset($otherSong->image_path) }}"
                                    alt="{{ $otherSong->artist }}"
                                    class="w-45 h-43 rounded-lg">

                                <h3 class="font-bold pt-2">{{ $otherSong->title }}</h3>
                                <p class="text-sm text-gray-400">{{ $otherSong->artist }}</p>
                            </a>

                            <button
                                type="button"
                                onclick="event.stopPropagation(); playSong('audio-{{ $otherSong->id }}')"
                                class="absolute bottom-20 right-4 z-10 opacity-0 group-hover:opacity-100 transition duration-300">
                                <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                            </button>

                            <audio id="audio-{{ $otherSong->id }}">
                                <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                            </audio>
                        </div>
                        @empty
                        <p class="text-white pt-4">Nessun altro brano di questo artista.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>