<x-layout>
    <main>
        <x-mobile-search />
        <section class="min-h-screen flex bg-black justify-center items-start pt-10 lg:pt-20 gap-2">
            <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
                <x-library />
            </aside>

            <!-- Main Content -->
            <div class="flex rounded-xl border border-base-100 w-full min-w-0 bg-base-100 flex-col gap-6 min-h-screen p-5 md:p-8">

                <h1 class="text-2xl font-bold mb-4 text-white truncate">
                    {{ __('ui.results_for', ['query' => $query]) }}
                </h1>

                @forelse ($tracks as $track)
                <div class="p-4 mb-3 rounded bg-gray-800 text-white flex flex-col sm:flex-row gap-4 sm:items-center">

                    <img src="{{ $track['image'] ?? '' }}" alt="{{ $track['name'] }}" class="w-20 h-20 object-cover rounded mx-auto sm:mx-0">

                    <div class="flex-1 min-w-0">
                        <h2 class="text-lg font-semibold truncate">{{ $track['name'] }}</h2>
                        <p class="text-gray-300 truncate">{{ __('ui.artist') }}: {{ $track['artist_name'] }}</p>
                        <p class="text-gray-400 text-sm truncate">{{ __('ui.album') }}: {{ $track['album_name'] ?? __('ui.no_album') }}</p>
                        <audio controls preload="none" class="mt-2 w-full">
                            <source src="{{ $track['audio'] }}" type="audio/mpeg">
                            {{ __('ui.audio_not_supported') }}
                        </audio>
                    </div>
                </div>
                @empty
                <p class="text-white">{{ __('ui.no_results') }}</p>
                @endforelse
            </div>
        </section>
    </main>
</x-layout>
