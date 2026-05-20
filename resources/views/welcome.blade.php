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

            <div class="flex rounded-xl border border-base-100 bg-base-100 w-375 bg flex-col gap-2 p-5">
                <a href="" class="text-2xl font-bold">Brani di tendenza</a>

                <div class="relative w-full">

                    <button
                        type="button"
                        onclick="scrollTrending(-350)"
                        class="btn btn-circle absolute left-0 top-20 z-20 bg-black/20 border-none text-white">
                        ❮
                    </button>

                    <div
                        id="trendingCarousel"
                        class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4 px-10"
                        style="scrollbar-width: none;">

                        @foreach ($songs as $song)
                        <div class="group shrink-0 w-52 flex flex-col relative hover:bg-slate-700/55 rounded-lg p-2 transition">
                            <a href="{{ route('songs.show', $song) }}" class="block">
                                <img
                                    src="{{ asset('media/' . $song->artistModel->image) }}"
                                    alt="{{ $song->title }}"
                                    class="w-48 h-48 rounded-lg object-cover">

                                <h3 class="font-bold pt-2 truncate">
                                    {{ $song->title }}
                                </h3>

                                <p class="text-sm text-gray-400 truncate">
                                    {{ $song->artist }}
                                </p>
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
                        onclick="scrollTrending(350)"
                        class="btn btn-circle absolute right-0 top-20 z-20 bg-black/20 border-none text-white">
                        ❯
                    </button>

                </div>

                <a href="" class="text-2xl font-bold pt-15">Artisti più popolari</a>

                <div class="flex w-full gap-4 pt-2">
                    @foreach ($artists as $artist)
                    <div class="group flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative">
                        <a href="{{ route('artists.show', $artist) }}" class="block">
                            <img
                                src="media/{{ $artist->image }}"
                                alt="{{ $artist->name }}"
                                class="cover w-48 h-45 rounded-full {{ in_array($artist->name, ['Skai IsYourGod', 'Blackpink', 'Twenty One Pilots']) ? 'object-cover' : '' }}">
                            <h3 class="font-bold pt-2">{{ $artist->name }}</h3>
                            <p class="text-sm text-gray-400">Artista</p>
                        </a>

                        <button
                            type="button"
                            onclick="event.stopPropagation(); playSong('')"
                            class="absolute bottom-20 right-4 z-10 opacity-0 translate-y-5 group-hover:opacity-100 transition duration-300">
                            <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                        </button>

                    </div>
                    @endforeach
                </div>

                <a href="" class="text-2xl font-bold pt-15">Album e singoli popolari</a>

                <div class="flex w-full gap-3 pt-2">
                    @foreach ($albums as $album)
                    <div class="group flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative">
                        <a href="{{ route('albums.show', $album) }}" class="block">
                            <img src="{{ asset($album->cover_image) }}" alt="{{ $album->title }}" class="cover w-48 h-48 rounded-lg">
                            <h3 class="font-bold pt-2">{{ $album->title }}</h3>
                            <p class="text-sm text-gray-400">{{ $album->artist->name }}</p>
                        </a>
                        <button
                            type="button"
                            onclick="event.stopPropagation(); playSong('')"
                            class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300">
                            <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                        </button>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
    </main>
</x-layout>