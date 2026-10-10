<x-layout>
    <section class="w-full bg-zinc-900 pt-40 mx-auto p-5">
        <div class="flex flex-col items-center gap-5 p-5">

            <h1 class="text-5xl md:text-7xl text-white font-bold text-center pb-20">{{ __('support.title') }}</h1>
            <div class="w-full max-w-lg border border-white rounded p-5">
                <div class="flex justify-center">
                    <button class="btn rounded-3xl border border-[#1DB954]"><i class="fa-solid fa-magnifying-glass"></i> {{ __('support.ai_search') }}</button>
                    <button class="btn rounded-xl">{{ __('support.basic_search') }}</button>
                </div>
                <textarea class="p-5 bg-transparent text-lg w-full border-none focus:outline-none resize-none h-24" placeholder="{{ __('support.search_placeholder') }}" aria-label="{{ __('support.search_placeholder') }}"></textarea>
                <div class="flex justify-end">
                    <button class="btn btn-circle btn-sm bg-[#1DB954] border-none hover:bg-green-500" aria-label="{{ __('support.basic_search') }}">
                        <i class="fa-solid fa-xl fa-arrow-right text-black"></i>
                    </button>
                </div>
            </div>

            <div class="pt-10 w-full max-w-lg">
                <h2 class="text-2xl pb-5 font-bold">{{ __('support.browse_articles') }}</h2>

                {{-- Le sezioni e gli articoli sono in lang/{it,en}/support.php --}}
                @foreach (__('support.sections') as $section)
                <details class="collapse collapse-arrow w-full" name="support-sections">
                    <summary class="collapse-title font-semibold"><i class="{{ $section['icon'] }}" style="color: rgb(74, 222, 128);"></i> {{ $section['title'] }}</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        @foreach ($section['groups'] as $groupTitle => $articles)
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">{{ $groupTitle }}</summary>
                            @foreach ($articles as $article)
                            <div class="collapse-content text-sm hover:text-[#1DB954]">{{ $article }}</div>
                            @endforeach
                        </details>
                        @endforeach
                    </div>
                </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="w-full mx-auto p-5">
        <div class="flex flex-col items-center">
            <div class="w-full max-w-lg p-5">
                <h2 class="text-2xl text-white font-bold">{{ __('support.quick_help') }}</h2>
                <div class="pt-10 w-full flex flex-col gap-5">
                    @foreach (__('support.quick_help_links') as $link)
                    <a href="#" class="text-white hover:underline flex justify-between w-full">{{ $link }} <i class="fa-solid fa-angle-right text-white"></i></a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-zinc-900 mx-auto p-5">
        <div class="flex flex-col items-center gap-10 p-5">
            <h2 class="text-3xl md:text-5xl text-white font-bold text-center">{{ __('support.community_title') }}</h2>
            <p class="text-white text-center">{{ __('support.community_description') }}</p>
            <button class="btn bg-[#1DB954] font-bold text-black rounded-3xl">{{ __('support.community_button') }}</button>
        </div>
    </section>
</x-layout>
