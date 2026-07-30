<footer class="bg-neutral text-neutral-content pt-10 pb-6 px-10">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 pb-8 border-b border-gray-700">
        <div class="col-span-2 md:col-span-3 lg:col-span-1 flex flex-col gap-3">
            <a href="{{ route('homepage') }}">
                <img src="/logo/logo.png" class="w-15" alt="Logo di BeatFlow" />
            </a>
            <p class="text-sm text-gray-400">
                {{ __('ui.footer_slogan') }}<br/>
                {{ __('ui.footer_slogan_2') }}
            </p>
            <div class="flex gap-4 mt-2">
                <a href="" class="hover:text-[#1DB954] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                </a>
                <a href="" class="hover:text-[#1DB954] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg>
                </a>
                <a href="" class="hover:text-[#1DB954] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg>
                </a>
                <a href="" class="hover:text-[#1DB954] transition-colors">
                    <i class="fa-brands fa-instagram fa-lg"></i>
                </a>
            </div>
        </div>
        <nav class="flex flex-col gap-2">
            <h6 class="footer-title text-white">{{ __('ui.discover') }}</h6>
            <a href="{{ route('homepage') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.home') }}</a>
            <a href="{{ route('global.search') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.search_music') }}</a>
            <a href="{{ route('podcast') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.podcast') }}</a>
            <a href="{{ route('premium') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.beatflow_premium') }}</a>
        </nav>

        <nav class="flex flex-col gap-2">
            <h6 class="footer-title text-white">{{ __('ui.company') }}</h6>
            <a href="" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.about_us') }}</a>
            <a href="{{ route('support') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.support') }}</a>
            <a href="" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.work_with_us') }}</a>
            <a href="" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.for_artists') }}</a>
        </nav>

        <nav class="flex flex-col gap-2">
            <h6 class="footer-title text-white">{{ __('ui.app') }}</h6>
            <a href="{{ route('download') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.download_windows') }}</a>
            <a href="{{ route('download') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.download_mac') }}</a>
            <a href="{{ route('download') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.download_ios') }}</a>
            <a href="{{ route('download') }}" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.download_android') }}</a>
        </nav>

        <nav class="flex flex-col gap-2">
            <h6 class="footer-title text-white">{{ __('ui.legal') }}</h6>
            <a href="" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.terms') }}</a>
            <a href="" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.privacy') }}</a>
            <a href="" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.cookie') }}</a>
            <a href="" class="link link-hover text-gray-400 hover:text-white text-sm">{{ __('ui.accessibility') }}</a>
        </nav>

    </div>

    <div class="flex flex-col md:flex-row justify-between items-center gap-3 pt-6 text-xs text-gray-500">
        <p>© {{ date('Y') }} {{ __('ui.all_rights_reserved') }}</p>
        <div class="flex gap-4">
            <a href="" class="hover:text-white transition-colors">{{ __('ui.privacy') }}</a>
            <a href="" class="hover:text-white transition-colors">{{ __('ui.cookie') }}</a>
            <a href="" class="hover:text-white transition-colors">{{ __('ui.terms') }}</a>
        </div>
    </div>

</footer>