<main class="container-fluid">

    <section class="min-h-screen flex bg-black justify-center items-start pt-20 gap-2">

        {{-- Sidebar nascosta su mobile--}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col min-h-screen sticky top-20 space-y-6 shrink-0 z-40">
            <x-library />
        </aside>
        <!-- Main Content -->
        <div class="min-h-screen flex rounded-xl border border-base-100 w-full items-center min-w-0 bg-base-100 flex-col gap-4 pt-5">

            <div class="w-full max-w-4xl mx-auto px-8 py-10 space-y-6 mb-6">
                <h2 class="text-white text-3xl font-bold flex items-center gap-2">{{ __('ui.settings') }}</h2>

                <p class="text-white text-xl font-bold">{{ __('ui.account') }}</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-sm text-gray-400">{{ __('ui.edit_login_methods') }}</p>
                    <button class="btn bg-transparent text-white border border-white rounded-3xl">{{ __('ui.edit') }}</button>
                </div>

                <p class="text-white text-xl font-bold">{{ __('ui.language') }}</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-sm text-gray-400">{{ __('ui.choose_language') }}</p>
                    {{-- Cambia davvero la lingua: invia il form della rotta setLocale --}}
                    <form method="POST" action="{{ route('setLocale', app()->getLocale()) }}">
                        @csrf
                        <select class="select" onchange="this.form.action = @js(url('lingua')) + '/' + this.value; this.form.submit()" aria-label="{{ __('ui.language') }}">
                            <option value="it" @selected(app()->getLocale() === 'it')>Italiano</option>
                            <option value="en" @selected(app()->getLocale() === 'en')>English</option>
                        </select>
                    </form>
                </div>
                <p class="text-white text-xl font-bold">{{ __('ui.audio_quality') }}</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-sm text-gray-400">{{ __('ui.listening_quality') }}</p>
                    <select class="select" aria-label="{{ __('ui.listening_quality') }}">
                        <option selected>{{ __('ui.quality_auto') }}</option>
                        <option>{{ __('ui.quality_low') }}</option>
                        <option>{{ __('ui.quality_normal') }}</option>
                        <option>{{ __('ui.quality_high') }}</option>
                        <option>{{ __('ui.quality_very_high') }}</option>
                    </select>
                </div>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-sm text-gray-400">{{ __('ui.normalize_volume') }}</p>
                    <input type="checkbox" class="toggle" aria-label="{{ __('ui.normalize_volume') }}" />
                </div>
                <p class="text-white text-xl font-bold">{{ __('ui.your_library') }}</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-sm text-gray-400">{{ __('ui.compact_library') }}</p>
                    <input type="checkbox" class="toggle" aria-label="{{ __('ui.compact_library') }}" />
                </div>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-sm text-gray-400">{{ __('ui.import_your_library') }}</p>
                    <button class="btn bg-transparent text-white border border-white rounded-3xl">{{ __('ui.import_library') }}</button>
                </div>
                <p class="text-white text-xl font-bold">{{ __('ui.display') }}</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-sm text-gray-400">{{ __('ui.now_playing_panel') }}</p>
                    <input type="checkbox" class="toggle toggle-success" checked aria-label="{{ __('ui.now_playing_panel') }}" />
                </div>
                <p class="text-white text-xl font-bold">{{ __('ui.video_canvas') }}</p>
                <p class="text-white text-base font-bold">{{ __('ui.music_videos') }}</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-xs text-gray-400">{{ __('ui.music_videos_description') }}</p>
                    <input type="checkbox" class="toggle toggle-success" checked aria-label="{{ __('ui.music_videos') }}" />
                </div>
                <p class="text-white text-base font-bold">Canvas</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-xs text-gray-400">{{ __('ui.canvas_description') }}</p>
                    <input type="checkbox" class="toggle toggle-success" checked aria-label="Canvas" />
                </div>
                <p class="text-white text-base font-bold">{{ __('ui.other_videos') }}</p>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-xs text-gray-400">{{ __('ui.other_videos_description') }}</p>
                    <input type="checkbox" class="toggle toggle-success" checked aria-label="{{ __('ui.other_videos') }}" />
                </div>
                <div class="flex flex-col items-start border border-slate-700/80 bg-slate-800/50 rounded-xl p-4 gap-4">
                    <h2 class="text-white text-2xl font-bold">{{ __('ui.optimize_audio_title') }}</h2>
                    <div class="flex flex-col md:flex-row md:items-center justify-between w-full gap-4">
                        <p class="text-base text-gray-400">{{ __('ui.optimize_audio_description') }}</p>
                        <a href="{{ route('download') }}" class="btn bg-[#1DB954] text-black rounded-3xl font-bold shrink-0">{{ __('ui.download_free_app') }}</a>
                    </div>
                </div>

                <p class="text-white text-xl font-bold">Social</p>

                <div class="flex gap-5 items-center justify-between">
                    <p class="text-xs text-gray-400">{{ __('ui.social_playlists') }}</p>
                    <input type="checkbox" class="toggle toggle-success" checked aria-label="{{ __('ui.social_playlists') }}" />
                </div>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-xs text-gray-400">{{ __('ui.social_followers') }}</p>
                    <input type="checkbox" class="toggle toggle-success" checked aria-label="{{ __('ui.social_followers') }}" />
                </div>
                <div class="flex gap-5 items-center justify-between">
                    <p class="text-xs text-gray-400">{{ __('ui.social_activity') }}</p>
                    <input type="checkbox" class="toggle" aria-label="{{ __('ui.social_activity') }}" />
                </div>

            </div>

        </div>

    </section>
</main>
