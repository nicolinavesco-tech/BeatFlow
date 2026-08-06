<x-layout>
    <main class="container mx-auto pt-30">
        <section class="flex justify-center">
            <div class="w-200 flex bg-[linear-gradient(to_left,#121212_0%,#1DB954_100%)] gap-10 p-5 rounded-xl">
                <div class="flex items-center">
                    <img src="/media/overviewAccount.jpg" alt="" class="w-40 m-5">
                </div>
                <div class="flex flex-col  justify-center w-full gap-3">
                    <h1 class="text-2xl font-bold text-white">{{ __('ui.premium_title') }}</h1>
                    <p class="text-gray-300 text-sm">{{ __('ui.premium_offer_description') }}</p>
                    <p class="text-gray-300 text-xs">{{ __('ui.premium_offer_terms') }}</p>
                    <p class="text-gray-300 text-xs">{{ __('ui.offer_end') }}</p>

                    <button class="btn bg-green-600 border-none text-white rounded-3xl font-bold w-40">{{ __('ui.try_premium') }}</button>
                </div>
            </div>
        </section>


        <section class="flex justify-center pt-5">
            <label class="input w-200">
                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g
                        stroke-linejoin="round"
                        stroke-linecap="round"
                        stroke-width="3.5"
                        fill="none"
                        stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </g>
                </svg>
                <input type="search" required placeholder="Cerca nell'account o negli articoli dell'assistenza" />
            </label>
        </section>
        <section class="flex justify-center pt-5">


            <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 mx-2 w-140">
                <span class="text-white font-bold text-xs absolute translate-y-[-64%] translate-x-[-25%] bg-slate-600 rounded-sm p-2">{{ __('ui.your_plan') }}</span>
                <h2 class="text-gray-300 text-4xl pt-8 ">{{ __('ui.plan_free') }}</h2>

            </div>
            <div class="flex flex-col items-center border border-slate-700 rounded-xl p-10 space-y-4 bg-[linear-gradient(to_left,#121212_0%,#1DB954_100%)] mx-2">
                <i class="fa-regular fa-gem text-white text-xl"></i>
                <h2 class="text-white font-bold">{{ __('ui.join_premium') }}</h2>
            </div>
        </section>
        <section class="flex justify-center pt-5">
            <div class="border border-slate-700 rounded-xl bg-slate-700/55 mx-2 w-200 p-3">

                <h2 class="text-white font-bold text-2xl">{{ __('ui.account') }}</h2>
                <div class="pt-10 w-full flex flex-col">
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-pen text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.manage_subscription') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-user text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.edit_personal_info') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-shield text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.parental_controls') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-rotate-left text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.restore_playlist') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                </div>


            </div>
        </section>
        <section class="flex justify-center pt-5">
            <div class="border border-slate-700 rounded-xl bg-slate-700/55 mx-2 w-200 p-3">

                <h2 class="text-white font-bold text-2xl">{{ __('ui.payment') }}</h2>
                <div class="pt-10 w-full flex flex-col">
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-receipt text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.order_history') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-regular fa-credit-card text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.saved_cards') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-tag text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.redeem') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                </div>
            </div>
        </section>
        <section class="flex justify-center pt-5">
            <div class="border border-slate-700 rounded-xl bg-slate-700/55 mx-2 w-200 p-3">

                <h2 class="text-white font-bold text-2xl">{{ __('ui.security_privacy') }}</h2>
                <div class="pt-10 w-full flex flex-col">
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-table-cells text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.manage_apps') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-regular fa-bell text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.notification_settings') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-regular fa-eye text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.account_privacy') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-key text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.edit_login_methods') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                      <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-regular fa-mobile text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.set_device_password') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                      <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-regular fa-trash-can text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.close_account') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                      <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-solid fa-arrow-right-from-bracket text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.signout_everywhere') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                </div>


            </div>
        </section>
        <section class="flex justify-center pt-5">
            <div class="border border-slate-700 rounded-xl bg-slate-700/55 mx-2 w-200 p-3">

                <h2 class="text-white font-bold text-2xl">{{ __('ui.advertising') }}</h2>
                <div class="pt-5 w-full flex flex-col">
                    <a href="#" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-regular fa-pen-to-square text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.add_favorites') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                </div>


            </div>
        </section>
        <section class="flex justify-center pt-5 pb-5">
            <div class="border border-slate-700 rounded-xl bg-slate-700/55 mx-2 w-200 p-3">

                <h2 class="text-white font-bold text-2xl">{{ __('ui.support') }}</h2>
                <div class="pt-5 w-full flex flex-col">
                    <a href="{{ route('support') }}" class="text-white hover:bg-slate-800 flex items-center gap-4 p-3 rounded-lg">
                        <i class="fa-regular fa-circle-question text-gray-400 w-5"></i>
                        <span class="flex-1">{{ __('ui.support') }}</span>
                        <i class="fa-solid fa-angle-right text-gray-400"></i>
                    </a>
                </div>


            </div>
        </section>
    </main>
</x-layout>