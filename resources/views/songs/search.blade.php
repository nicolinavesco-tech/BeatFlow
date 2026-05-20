<x-layout>
    <main class="container-fluid">
        <section class="min-h-screen flex bg-black justify-center items-start pt-20 gap-2">

            <!-- Sidebar -->
            <aside class="w-100 bg-base-100 rounded-xl flex flex-col h-screen sticky top-0 space-y-6">
                <div class="flex justify-between">
                    <p class="text-xl font-bold mb-4 p-5">La tua libreria</p>

                    <div class="dropdown dropdown-start p-4">
                        <label tabindex="0" class="btn flex items-center rounded-2xl gap-2 px-4 bg-slate-700/55 border-none">
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

                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-10 w-52 p-2 shadow">
                            <li><a href="#">Crea playlist</a></li>
                            <li><a href="#">Crea cartella</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 mx-2">
                    <h2 class="text-white font-bold">Crea la tua prima playlist</h2>
                    <p class="text-white text-sm">È facile, ti aiuteremo</p>
                    <button type="button" class="btn bg-white text-black rounded-3xl border-none">
                        Crea playlist
                    </button>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 mx-2">
                    <h2 class="text-white font-bold">Cerca qualche podcast da seguire</h2>
                    <p class="text-white text-sm">Ti aggiorneremo sui nuovi episodi</p>
                    <button type="button" class="btn bg-white text-black rounded-3xl border-none">
                        Sfoglia i podcast
                    </button>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="flex rounded-xl border border-base-100 w-375 bg-base-100 flex-col gap-6">


                <h1 class="text-2xl font-bold mb-4 p-5">
                    Risultati per: "{{ $search }}"
                </h1>

                @forelse ($songs as $song)
                <div class="p-4 mb-3 rounded bg-gray-800 text-white">

                    {{-- Immagine --}}
                    @if ($song->image_path)
                    <img src="{{ asset($song->image_path ?? 'media/irina' . $artist->image) }}" alt="{{ $song->title }}" class="w-16 h-16 rounded object-cover mb-2">
                    @endif

                    <h2 class="text-lg font-semibold">{{ $song->title }}</h2>
                    <p>Genere: {{ $song->genre->name ?? 'Nessun genere' }}</p>

                    {{-- Audio --}}
                    @if ($song->file_path)
                    <audio id="audio-{{ $song->id }}" controls class="mt-2 w-full">
                        <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                    </audio>
                    @endif

                </div>
                @empty
                <p class="text-white">Nessun risultato trovato.</p>
                @endforelse
            </div>
        </section>
    </main>
</x-layout>