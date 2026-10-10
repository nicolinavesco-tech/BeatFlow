<main class="container-fluid">

    <section class="min-h-screen flex bg-black justify-center items-start pt-20 gap-2">

        {{-- Sidebar nascosta su mobile--}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0 z-9999">
            <x-library />
        </aside>
        <div class="min-h-screen flex rounded-xl border border-base-100 w-full min-w-0 bg-base-100 flex-col gap-6 pt-20 bg-[linear-gradient(135deg,#0a0a0a_0%,#1DB954_100%)]">
            <div class="w-full max-w-100 ps-10">
                <a href="{{ route('homepage') }}" class="text-white text-2xl font-bold flex items-center gap-2">
                    <img src="/logo/logo.png" class="w-15" alt="Logo di BeatFlow" />
                    BeatFlow
                </a>
            </div>
            <h2 class="text-3xl  text-white font-bold ps-10">{{ __('ui.download_windows_title') }}</h2>
            <p class="text-white text-xl max-w-2xl ps-10 text-semibold">{{ __('ui.download_windows_description') }}</p>
            <div class="flex flex-col gap-4 justify-start ps-10">
                <button class="cursor-pointer">
                    <div class="flex max-w-36 h-12 px-3 gap-2 rounded-xl items-center justify-center bg-black text-white dark:text-black dark:bg-white sm:h-14">
                        <i class="fa-brands fa-microsoft text-blue-700 fa-2x"></i>
                        <div>
                            <div class="text-[.5rem] sm:text-xs text-left">{{ __('ui.download_from') }}</div>
                            <div class="text-sm font-semibold font-sans -mt-1 sm:text-xl">
                                Microsoft
                            </div>
                        </div>
                    </div>
                </button>
                <a href="{{ route('download') }}" class=" text-white hover:underline">{{ __('ui.download_direct') }}</a>
            </div>
        </div>
    </section>
</main>