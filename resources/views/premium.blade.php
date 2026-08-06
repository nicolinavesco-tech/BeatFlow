<x-layout>
    <main class="bg-zinc-900 w-full">
        {{-- Hero Section --}}
        <section class="w-full pt-28 md:pt-40 bg-[linear-gradient(to_top,transparent_40%,#15803d_70%,#4ade80)]">
            <div class="flex flex-col md:flex-row justify-center gap-6 md:gap-10 w-full px-4 sm:px-8 md:px-16 pb-10">
                <div class="flex flex-col gap-5 md:gap-7 w-full md:max-w-xl max-w-full text-center md:text-left">
                    <h1 class="text-2xl sm:text-3xl md:text-5xl text-white font-bold">{{ __('ui.premium_title')}}</h1>
                    <span class="text-white font-bold text-sm sm:text-base">{{ __('ui.premium_offer_description')}}</span>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                        <button class="btn bg-[#1DB954] text-black rounded-3xl px-6 py-3 text-base sm:text-lg hover:scale-110">{{ __('ui.try_premium')}}</button>
                        <button class="btn bg-black text-white border border-gray-400 rounded-3xl px-6 py-3 text-base sm:text-lg hover:scale-110">{{ __('ui.premium_view_plans')}}</button>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('ui.premium_offer_terms')}} {{ __('ui.offer_end') }} {{ __('ui.terms_conditions') }}</p>
                </div>
                <div class="w-full max-w-55 hidden md:block">
                    <img src="media/premiumsection.png" class="w-full h-auto">
                </div>
            </div>
        </section>

        <!-- Second Section -->
        <section class="w-full flex flex-col items-center justify-center gap-8 py-20 px-6">
            <h2 class="text-3xl md:text-5xl text-white font-bold text-center">{{__('ui.premium_test_difference')}}</h2>
            <p class="font-bold text-base md:text-xl text-center text-white">{{ __('ui.premium_switch_description') }}</p>

            <div class="flex flex-col justify-center w-full max-w-2xl">
                <div class="flex justify-between items-center border-b pb-5">
                    <span class="text-white w-28 sm:w-32 md:w-40 font-bold flex pt-5 md:pt-20">{{ __('ui.what_you_get') }}</span>
                    <span class="w-20 font-bold text-sm md:text-base text-center">{{ __('ui.free_plan') }}</span>
                    <div class="flex items-center gap-1 ">
                        <img src="logo/logo.png" alt="Logo BeatFlow" class="w-5 h-5 md:w-7 md:h-7">
                        <span class="w-20 font-bold text-sm md:text-base text-center">{{ __('ui.premium_plan') }}</span>
                    </div>
                </div>

                @php
                $features = [
                ['label' => __('ui.feature_ad_free'), 'tip' => __('ui.feature_ad_free_tip')],
                ['label' => __('ui.feature_offline'), 'tip' => __('ui.feature_offline_tip')],
                ['label' => __('ui.feature_any_order'), 'tip' => __('ui.feature_any_order_tip')],
                ['label' => __('ui.feature_lossless'), 'tip' => __('ui.feature_lossless_tip')],
                ['label' => __('ui.feature_queue'), 'tip' => __('ui.feature_queue_tip')],
                ];
                @endphp

                @foreach($features as $feature)
                <div class="flex justify-between items-center border-b pb-5 pt-5 p-2 hover:bg-[#383737]">
                    <div class="tooltip tooltip-bottom w-32 sm:w-40" data-tip="{{ $feature['tip'] }}">
                        <span class="text-white underline decoration-dashed underline-offset-4 text-sm md:text-base">{{ $feature['label'] }}</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" class="w-12 h-2 md:w-20 md:h-3 me-12 md:me-0">
                        <rect x="10" y="4" width="20" height="4" fill="gray" />
                    </svg>
                    <i class="fa-regular fa-circle-check text-xl md:text-2xl pe-2 md:pe-4 text-white"></i>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Third section -->
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

            <div class="flex flex-col md:flex-row gap-4 md:gap-10 items-start md:items-center pt-10 w-full max-w-3xl">
                <h2 class="text-2xl md:text-3xl text-white font-bold text-center md:text-left">{{ __('ui.all_premium_plans_include') }}</h2>
                <div class="flex flex-col gap-2">
                    @foreach([__('ui.feature_ad_free'), __('ui.feature_offline'), __('ui.feature_any_order'), __('ui.feature_lossless'), __('ui.feature_friends'), __('ui.feature_queue')] as $item)
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-check text-white"></i>
                        <span class="text-white">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Cards -->
        <section class="w-full pt-16 md:pt-30 flex flex-wrap items-stretch justify-center gap-5 px-6 pb-10">

            {{-- Individual --}}
            <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                <span class="text-black font-bold bg-[#ffc9db] px-2 py-1 rounded w-fit max-w-full">{{ __('ui.student_badge') }}</span>
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
                        <p class="text-center pt-5 text-gray-400 text-sm">{{ __('ui.individual_terms') }}</p>
                    </div>
                </div>
            </div>


            <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                <span class="text-black font-bold bg-[#ecb8fb] px-2 py-1 rounded w-fit max-w-full">{{ __('ui.student_badge') }}</span>
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

        {{-- FAQ --}}
        <section class="w-full pt-16 md:pt-30 flex flex-col items-center justify-center gap-5 pb-20 px-6">
            <h2 class="text-3xl md:text-4xl text-white font-bold text-center">{{ __('ui.faq_title') }}</h2>
            <p class="text-white text-base text-center">{{ __('ui.faq_subtitle') }}</p>
            <p class="text-white text-base text-center">{{ __('ui.faq_more_answers') }}
                <a href="" class="underline underline-offset-2 hover:font-bold">{{ __('ui.faq_support_site') }}</a>.
            </p>

            <div class="w-full max-w-3xl pt-10">

                @php
                $faqs = [
                ['q' => __('ui.faq_q1'), 'a' => __('ui.faq_a1')],
                ['q' => __('ui.faq_q2'), 'a' => __('ui.faq_a2')],
                ['q' => __('ui.faq_q3'), 'a' => __('ui.faq_a3')],
                ['q' => __('ui.faq_q4'), 'a' => __('ui.faq_a4')],
                ['q' => __('ui.faq_q5'), 'a' => __('ui.faq_a5')],
                ['q' => __('ui.faq_q6'), 'a' => __('ui.faq_a6')],
                ];
                @endphp

                @foreach($faqs as $faq)
                <details class="collapse collapse-arrow border-b border-gray-400/50">
                    <summary class="collapse-title font-bold text-base md:text-lg hover:underline underline-offset-2 hover:bg-[#838383] text-white">{{ $faq['q'] }}</summary>
                    <div class="collapse-content">
                        <p class="text-base text-gray-300">{{ $faq['a'] }}</p>
                    </div>
                </details>
                @endforeach

            </div>
        </section>

    </main>
</x-layout>