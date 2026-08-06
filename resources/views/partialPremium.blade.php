<main class="bg-zinc-900">
    <div class="flex min-h-screen">

        {{-- Sidebar nascosta su mobile--}}
        <aside class="hidden lg:flex w-90 bg-base-100 rounded-xl flex-col h-screen sticky top-20 space-y-6 shrink-0 m-2 z-9999">
            <div class="flex justify-between">
                <p class="text-xl font-bold mb-4 p-5">{{ __('ui.your_library') }}</p>
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
                        <span>{{ __('ui.create') }}</span>
                    </label>
                    @auth
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                        <li>
                            <div class="dropdown dropdown-right flex">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <a href="{{ route('homepage') }}?tab=createPlaylist">
                                        <i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                    </a>
                                </div>
                                <div class="flex flex-col items-start ">
                                    <span class="font-bold text-base">{{ __('ui.playlist') }}</span>
                                    <p class="text-gray-400 text-xs">{{ __('ui.playlist_description') }}</p>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="flex items-center gap-3">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <i class="fa-solid fa-chart-pie fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                </div>
                                <div class="flex flex-col items-start">
                                    <span class="font-bold text-base">{{ __('ui.blend') }}</span>
                                    <p class="text-gray-400 text-xs">{{ __('ui.blend_description') }}</p>
                                </div>
                            </a>
                        </li>
                        <hr class="border-t border-gray-600 my-2">
                        <li>
                            <a href="" class="flex items-center">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <i class="fa-regular fa-folder-closed fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                </div>
                                <div class="flex flex-col items-start ">
                                    <span class="font-bold text-base">{{ __('ui.folder') }}</span>
                                    <p class="text-gray-400 text-xs">{{ __('ui.folder_description') }}</p>
                                </div>
                            </a>
                        </li>

                    </ul>
                    @else
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                        <li>
                            <div class="dropdown dropdown-right flex">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <button tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                    <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[5%] translate-y-[-30%]">
                                        <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                                        <h3 class="font-bold text-lg ">{{ __('ui.create_playlist') }}</h3>
                                        <p class="py-4 text-sm">{{ __('ui.create_playlist_description') }}</p>
                                        <div class="flex gap-4 justify-end">
                                            <button onclick="this.closest('.dropdown-content').classList.add('hidden')" class=" text-white font-bold">{{ __('ui.not_now') }}</button>
                                            <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">{{ __('ui.login') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-start ">
                                    <span class="font-bold text-base">{{ __('ui.playlist') }}</span>
                                    <p class="text-gray-400 text-xs">{{ __('ui.playlist_description') }}</p>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="flex items-center gap-3">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <i class="fa-solid fa-chart-pie fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                </div>
                                <div class="flex flex-col items-start">
                                    <span class="font-bold text-base">{{ __('ui.blend') }}</span>
                                    <p class="text-gray-400 text-xs">{{ __('ui.blend_description') }}</p>
                                </div>
                            </a>
                        </li>
                        <hr class="border-t border-gray-600 my-2">
                        <li>
                            <a href="" class="flex items-center">
                                <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                    <i class="fa-regular fa-folder-closed fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                </div>
                                <div class="flex flex-col items-start ">
                                    <span class="font-bold text-base">{{ __('ui.folder') }}</span>
                                    <p class="text-gray-400 text-xs">{{ __('ui.folder_description') }}</p>
                                </div>
                            </a>
                        </li>

                    </ul>
                    @endauth
                </div>
            </div>

            @auth
            @foreach(auth()->user()->favoriteArtists as $favoriteArtist)
            <a href="{{ route('artists.show', $favoriteArtist) }}" class="flex gap-3 ps-3">
                <img src="/media/{{ $favoriteArtist->image }}" alt="{{ $favoriteArtist->name }}" class="cover w-20 h-20 rounded-full {{ in_array($favoriteArtist->name, ['Skai IsYourGod', 'Blackpink', 'Twenty One Pilots']) ? 'object-cover' : '' }}">
                <div class="flex flex-col justify-center">
                    <p class="text-white font-bold">{{ $favoriteArtist->name }}</p>
                    <p class="text-sm text-gray-400">{{ __('ui.artist') }}</p>
                </div>
            </a>
            @endforeach

            <!-- Playlist utente -->
            @foreach(auth()->user()->playlists as $userPlaylist)
            <div class="flex justify-between items-center">
                <a href="{{ route('playlists.show', $userPlaylist)}}" class="flex gap-3 ps-3">
                    <img src="{{$userPlaylist->image_path ? Storage::url($userPlaylist->image_path) : 'https://placehold.co/80x80/282828/ffffff?text=♪'}}" alt="{{$userPlaylist->name}}" class="w-20 h-20 rounded-md object-cover shrink-0">
                    <div class="flex flex-col justify-center">
                        <p class="text-white font-bold">{{$userPlaylist->name}}</p>
                        <p class="text-sm text-gray-400">{{ __('ui.playlist') }}</p>
                    </div>
                </a>
                <form action="{{route('playlists.destroy', $userPlaylist)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="p-5">
                        <i class="fa-solid fa-trash hover:text-red-600"></i>
                    </button>
                </form>
            </div>
            @endforeach
            <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                <h3 class="text-white font-bold">{{ __('ui.search_podcast') }}</h3>
                <p class="text-white text-sm">{{ __('ui.podcast_description') }}</p>
                <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">{{ __('ui.browse_podcast') }}</a>
            </div>
            @else
            <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                <h3 class="text-white font-bold">{{ __('ui.first_playlist') }}</h3>
                <p class="text-white text-sm">{{ __('ui.first_playlist_description') }}</p>
                <div class="dropdown dropdown-right">
                    <button tabindex="0" class="btn bg-white text-black rounded-3xl">{{ __('ui.create_playlist') }}</button>
                    <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[65%] translate-y-[-60%]">
                        <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                        <h3 class="font-bold text-lg ">{{ __('ui.create_playlist') }}</h3>
                        <p class="py-4 text-sm">{{ __('ui.create_playlist_description') }}</p>
                        <div class="flex gap-4 justify-end">
                            <button class=" text-white font-bold">{{ __('ui.not_now') }}</button>
                            <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">{{ __('ui.login') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                <h3 class="text-white font-bold">{{ __('ui.search_podcast') }}</h3>
                <p class="text-white text-sm">{{ __('ui.podcast_description') }}</p>
                <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">{{ __('ui.browse_podcast') }}</a>
            </div>
            @endauth

        </aside>

        <div class="flex flex-col flex-1 min-w-0 ">

            {{-- First section --}}
            <section class=" flex justify-center items-start pt-20 gap-2">
                <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-10 w-full px-6 md:px-20 pt-20 bg-[linear-gradient(to_top,transparent_40%,#15803d_70%,#4ade80)]">
                    <div class="flex flex-col gap-5 md:gap-7 w-full md:w-200 text-center md:text-left">
                        <h1 class="text-3xl md:text-5xl text-white font-bold">{{ __('ui.premium_title') }}</h1>
                        <span class="text-white font-bold">{{ __('ui.premium_description') }}</span>
                        <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                            <button class="btn bg-[#1DB954] text-black rounded-3xl px-8 py-4 text-lg hover:scale-110">{{ __('ui.try_premium') }}</button>
                            <button class="btn bg-black text-white border border-gray-400 rounded-3xl px-8 py-4 text-lg hover:scale-110">{{ __('ui.premium_view_plans') }}</button>
                        </div>
                        <p class="text-sm text-gray-300">{{ __('ui.premium_terms') }}</p>
                    </div>
                    <div class="w-48 md:w-70">
                        <img src="media/premiumsection.png" alt="Immagine promozionale di BeatFlow Premium" class="w-full">
                    </div>
                </div>
            </section>

            {{-- Second section --}}
            <section class="w-full pt-16 md:pt-30 flex flex-col items-center justify-center gap-5 px-6">
                <h2 class="text-3xl md:text-5xl text-white font-bold text-center">{{ __('ui.premium_plans_for_everyone') }}</h2>
                <p class="text-white text-center max-w-2xl">{{ __('ui.premium_plans_description') }}</p>

                <div class="flex gap-3 flex-wrap justify-center">
                    <img src="https://paymentsdk.spotifycdn.com/svg/cards/visa.svg" alt="Visa" class="w-12 md:w-15">
                    <img src="https://paymentsdk.spotifycdn.com/svg/cards/mastercard.svg" alt="Mastercard" class="w-12 md:w-15">
                    <img src="https://paymentsdk.spotifycdn.com/svg/cards/amex.svg" alt="Amex" class="w-12 md:w-15">
                    <img src="https://paymentsdk.spotifycdn.com/svg/cards/postepay.svg" alt="Postepay" class="w-12 md:w-15">
                    <img src="https://paymentsdk.spotifycdn.com/svg/providers/paypal.svg" alt="PayPal" class="w-12 md:w-15 bg-white p-1 rounded">
                </div>

                <div class="flex flex-col md:flex-row gap-6 md:gap-10 items-start md:items-center pt-10 w-full max-w-3xl">
                    <h2 class="text-2xl md:text-3xl text-white font-bold text-center md:text-left">{{ __('ui.all_premium_plans_include') }}</h2>
                    <div class="flex flex-col gap-2">
                        @foreach([__('ui.feature_ad_free'), __('ui.feature_offline'), __('ui.feature_unlimited'), __('ui.feature_lossless'), __('ui.feature_friends_tip'), __('ui.feature_queue')] as $item)
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-white"></i>
                            <span class="text-white">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Third Section - Cards --}}
            <section class="w-full pt-16 md:pt-30 flex flex-wrap items-stretch justify-center gap-5 px-6 pb-10">

                {{-- Individual --}}
                <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                    <span class="text-black font-bold bg-[#ffc9db] px-2 py-1 rounded w-40">{{ __('ui.student_badge') }}</span>
                    <div class="card-body">
                        <div class="flex gap-2 items-center">
                            <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                            <span class="text-white text-lg">{{ __('ui.premium') }}</span>
                        </div>
                        <h2 class="card-title text-3xl text-[#ffc9db]">{{ __('ui.individual_plan') }}</h2>
                        <span class="font-bold text-white text-lg">{{ __('ui.student_badge') }}</span>
                        <span class="text-gray-400">{{ __('ui.individual_after_price') }}</span>
                        <hr class="border-t border-gray-600 my-4">
                        <ul class="list-disc list-inside text-base">
                            <li>{{ __('ui.student_description') }}</li>
                            <li>{{ __('ui.cancel_anytime') }}</li>
                        </ul>
                        <div class="card-actions flex flex-col gap-2 pb-4 mt-auto">
                            <button class="btn bg-[#ffc9db] text-black font-bold rounded-2xl text-base w-full hover:scale-110">{{ __('ui.try_premium') }}</button>
                            <p class="text-center pt-5 text-gray-400 text-sm">{{ __('ui.premium_offer_terms') }} <a href="" class="underline underline-offset-2">{{ __('ui.terms_conditions') }}</a> {{ __('ui.offer_end') }}</p>
                        </div>
                    </div>
                </div>


                <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                    <span class="text-black font-bold bg-[#ecb8fb] px-2 py-1 rounded w-40">{{ __('ui.student_badge') }}</span>
                    <div class="card-body">
                        <div class="flex gap-2 items-center">
                            <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                            <span class="text-white text-lg">{{ __('ui.premium') }}</span>
                        </div>
                        <h2 class="card-title text-3xl text-[#ecb8fb]">{{ __('ui.student_plan') }}</h2>
                        <span class="font-bold text-white text-lg">{{ __('ui.student_badge') }}</span>
                        <span class="text-gray-400">{{ __('ui.student_after_price') }}</span>
                        <hr class="border-t border-gray-600 my-4">
                        <ul class="list-disc list-inside text-base">
                            <li>{{ __('ui.student_description') }}</li>
                            <li>{{ __('ui.student_discount') }}</li>
                            <li>{{ __('ui.cancel_anytime') }}</li>
                        </ul>
                        <div class="card-actions pt-5 mt-auto">
                            <button class="btn bg-[#ecb8fb] text-black font-bold rounded-2xl text-base w-full hover:scale-110">{{ __('ui.try_premium') }}</button>
                            <p class="text-center pt-5 text-gray-400 text-sm">{{ __('ui.student_badge') }}, {{ __('ui.student_after_price') }} <a href="" class="underline underline-offset-2">{{ __('ui.terms_conditions') }}</a></p>
                        </div>
                    </div>
                </div>


                <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                    <div class="card-body">
                        <div class="flex gap-2 items-center">
                            <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                            <span class="text-white text-lg">{{ __('ui.premium') }}</span>
                        </div>
                        <h2 class="card-title text-3xl text-[#ffe571]">{{ __('ui.duo_plan') }}</h2>
                        <span class="font-bold text-white text-lg">{{ __('ui.duo_price') }}</span>
                        <hr class="border-t border-gray-600 my-4">
                        <ul class="list-disc list-inside text-base">
                            <li>{{ __('ui.duo_features.0') }}</li>
                            <li>{{ __('ui.duo_features.1') }}</li>
                        </ul>
                        <div class="card-actions mt-auto pt-5">
                            <button class="btn bg-[#ffe571] text-black font-bold rounded-2xl text-base w-full hover:scale-110">{{ __('ui.duo_button') }}</button>
                            <p class="pt-5 text-gray-400 text-sm">{{ __('ui.duo_terms') }} <a href="" class="underline underline-offset-2">{{ __('ui.terms_conditions') }}</a></p>
                        </div>
                    </div>
                </div>


                <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                    <div class="card-body">
                        <div class="flex gap-2 items-center">
                            <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                            <span class="text-white text-lg">{{ __('ui.premium') }}</span>
                        </div>
                        <h2 class="card-title text-3xl text-[#ac9eff]">{{ __('ui.family_plan') }}</h2>
                        <span class="font-bold text-white text-lg">{{ __('ui.family_price') }}</span>
                        <hr class="border-t border-gray-600 my-4">
                        <ul class="list-disc list-inside text-base">
                            <li>{{ __('ui.family_features.0') }}</li>
                            <li>{{ __('ui.family_features.1') }}</li>
                            <li>{{ __('ui.family_features.2') }}</li>
                            <li>{{ __('ui.family_features.3') }}</li>
                        </ul>
                        <div class="card-actions mt-auto pt-5">
                            <button class="btn bg-[#ac9eff] text-black font-bold rounded-2xl text-base w-full hover:scale-110">{{ __('ui.family_button') }}</button>
                            <p class="pt-5 text-gray-400 text-sm">{{ __('ui.family_terms') }} <a href="" class="underline underline-offset-2">{{ __('ui.terms_conditions') }}</a></p>
                        </div>
                    </div>
                </div>

            </section>
            {{-- Forth Section --}}
            <section class="w-full flex flex-col items-center justify-center gap-8 py-20 px-6">
                <h2 class="text-3xl md:text-5xl text-white font-bold text-center">{{ __('ui.premium_test_difference') }}</h2>
                <p class="font-bold text-base md:text-xl text-center text-white">{{ __('ui.premium_switch_description') }}</p>

                <div class="flex flex-col justify-center w-full max-w-2xl">
                    <div class="flex justify-between items-center border-b pb-5">
                        <span class="text-white w-40 md:w-50 font-bold flex pt-5 md:pt-20">{{ __('ui.what_you_get') }}</span>
                        <span class="w-20 font-bold text-sm md:text-base text-center">{{ __('ui.free_plan') }}</span>
                        <div class="flex items-center gap-1">
                            <img src="logo/logo.png" alt="Logo BeatFlow" class="w-5 h-5 md:w-7 md:h-7">
                            <span class="w-20 font-bold text-sm md:text-base text-center">{{ __('ui.premium_plan') }}</span>
                        </div>
                    </div>

                    @php
                    $features = [
                    ['label' =>  __('ui.feature_ad_free'), 'tip' => __('ui.feature_ad_free_tip')],
                    ['label' => __('ui.feature_offline'), 'tip' => __('ui.feature_offline_tip')],
                    ['label' => __('ui.feature_any_order'), 'tip' => __('ui.feature_any_order_tip')],
                    ['label' => __('ui.feature_lossless'), 'tip' => __('ui.feature_lossless_tip')],
                    ['label' => __('ui.feature_friends'), 'tip' => __('ui.feature_friends_tip')],
                    ['label' => __('ui.feature_queue'), 'tip' => __('ui.feature_queue_tip')],
                    ];
                    @endphp

                    @foreach($features as $feature)
                    <div class="flex justify-between items-center border-b pb-5 pt-5 p-2 hover:bg-[#383737]">
                        <div class="tooltip tooltip-right w-40 md:w-50" data-tip="{{ $feature['tip'] }}">
                            <span class="text-white underline decoration-dashed underline-offset-4 text-sm md:text-base">{{ $feature['label'] }}</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="10" viewBox="0 0 100 10">
                            <rect x="10" y="4" width="20" height="4" fill="gray" />
                        </svg>
                        <i class="fa-regular fa-circle-check text-xl md:text-2xl pe-8 md:pe-15 text-white"></i>
                    </div>
                    @endforeach
                </div>
            </section>


        </div>
    </div>
</main>