<main class="container-fluid">

    <section class="min-h-screen flex bg-black justify-center items-start pt-20 gap-2">

        {{-- Sidebar nascosta su mobile--}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0 z-9999">
            <x-library />

        </aside>
        <div class="min-h-screen flex rounded-xl border border-base-100 w-full min-w-0 bg-base-100 flex-col gap-6 pt-20">
            <div class="w-full space-y-4 flex flex-col items-center">
                <h2 class="text-white text-3xl font-bold flex items-center gap-2">{{ __('ui.whats_new') }}</h2>
                <p class="text-white text-base text-semibold">{{ __('ui.whats_new_description') }}</p>
                <div class="flex gap-4">
                    <a href="{{ route('homepage') }}" class="btn bg-base-300 text-white rounded-3xl">{{ __('ui.music') }}</a>
                    <a href="{{ route('podcast') }}" class="btn bg-base-300 text-white rounded-3xl">{{ __('ui.podcasts_and_shows') }}</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 items-center pt-10">
                <h3 class="text-white text-3xl font-bold">{{ __('ui.no_updates_title') }}</h3>
                <p class="text-white text-base text-semibold">{{ __('ui.no_updates_description') }}</p>
            </div>
        </div>


    </section>
</main>