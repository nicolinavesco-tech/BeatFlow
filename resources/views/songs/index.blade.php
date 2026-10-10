<x-layout>
    <main>
        <x-mobile-search />
        <section class="min-h-screen flex flex-col lg:flex-row bg-black items-start pt-10 lg:pt-20 gap-2">
            <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl min-h-screen flex-col sticky top-20 space-y-6 shrink-0 z-40">
                <x-library />
            </aside>

            <div class="flex rounded-xl border border-base-100 w-full min-w-0 bg-base-100 flex-col gap-6 p-5 min-h-screen md:p-8">
                <h1 class="text-2xl font-bold text-white">{{ __('ui.all_songs') }}</h1>

                @if(session('success'))
                <div class="bg-[#1DB954] text-black font-bold px-4 py-3 rounded-lg flex items-center gap-2">
                    <i class="fa-solid fa-check"></i>
                    {{ session('success') }}
                </div>
                @endif

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-4">
                    @forelse ($songs as $song)
                    <div class="group flex flex-col relative hover:bg-slate-700/55 rounded-lg p-2 transition"
                        data-song-title="{{ $song->title }}"
                        data-song-artist="{{ $song->artist }}"
                        data-song-id="{{ $song->id }}">
                        <a href="{{ route('songs.show', $song) }}" class="block">
                            <img src="{{ asset($song->image_path ?: 'media/' . $song->artistModel?->image) }}" alt="{{ $song->title }}" class="w-full aspect-square rounded-lg object-cover">
                            <h3 class="font-bold pt-2 truncate">{{ $song->title }}</h3>
                            <p class="text-sm text-gray-400 truncate">{{ $song->artist }}</p>
                        </a>
                        <button type="button" onclick="playSong('audio-{{ $song->id }}')" aria-label="{{ __('ui.play') }}"
                            class="absolute bottom-16 right-4 z-10 opacity-100 xl:opacity-0 translate-y-0 xl:translate-y-4 xl:group-hover:opacity-100 xl:group-hover:translate-y-0 transition duration-300">
                            <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                        </button>
                        <audio id="audio-{{ $song->id }}">
                            <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                        </audio>
                    </div>
                    @empty
                    <p class="text-white">{{ __('ui.no_results') }}</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
</x-layout>
