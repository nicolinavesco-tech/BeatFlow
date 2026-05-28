<x-layout>

    <main class="flex gap-2 bg-black">
        <section class="min-h-screen flex justify-content-center align-items-center pt-20 gap-2 ">
            <div class="border rounded-xl border-base-100 bg-base-100 w-100 space-y-5">
                <div class="flex justify-between">
                    <p class="text-xl font-bold mb-4 p-5">La tua libreria</p>
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
                            <span>Crea</span>
                        </label>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                            <li>
                                <a href="" class="flex items-center gap-3">
                                    <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                        <i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                    </div>
                                    <div class="flex flex-col items-start ">
                                        <span class="font-bold text-base">Playlist</span>
                                        <p class="text-gray-400 text-xs">Riunisci i tuoi brani preferiti</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" class="flex items-center gap-3">
                                    <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                        <i class="fa-solid fa-chart-pie fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="font-bold text-base">Blend</span>
                                        <p class="text-gray-400 text-xs">Fondi i gusti dei tuoi amici in una playlist</p>
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
                                        <span class="font-bold text-base">Cartella</span>
                                        <p class="text-gray-400 text-xs">Organizza le tue playlist</p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                    <h3 class="text-white font-bold">Crea la tua prima playlist</h3>
                    <p class="text-white text-sm">E' facile, ti aiuteremo</p>
                    <div class="dropdown dropdown-right">
                        <button tabindex="0" class="btn bg-white text-black rounded-3xl">Crea playlist</button>
                        <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[65%] translate-y-[-60%]">
                            <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                            <h3 class="font-bold text-lg ">Crea una playlist</h3>
                            <p class="py-4 text-sm">Accedi per creare e condividere playlist.</p>
                            <div class="flex gap-4 justify-end">
                                <button class=" text-white font-bold">Non ora</button>
                                <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">Accedi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border border-slate-700 rounded-xl p-5 space-y-4 bg-slate-700/55 me-2 ms-2">
                    <h3 class="text-white font-bold">Cerca qualche podcast da seguire</h3>
                    <p class="text-white text-sm">Ti aggiorneremo sui nuovi episodi</p>
                    <a href="{{ route('podcast') }}" class="btn bg-white text-black rounded-3xl">Sfoglia i podcast</a>
                </div>
            </div>
        </section>
        <section class="pt-20 w-362">
            <div class="flex border border-base-100 rounded-xl h-100 flex-col gap-6 p-8 bg-base-100 bg-[linear-gradient(to_top,transparent_10%,#15803d_50%,#4ade80)]">
                <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                    <i class="fa-solid fa-chevron-left"></i>
                    <span>Torna indietro</span>
                </a>

                <div class="flex ">
                    <h1 class="text-9xl font-bold">Podcast</h1>

                </div>
            </div>

            <div class="flex border border-base-100 bg-base-100 w-362 bg flex-col gap-2 p-5">
                <a href="" class="text-2xl font-bold">Radar Creators Italia</a>

                <div class="relative w-full">

                    <div
                        id="trendingCarousel"
                        class="flex gap-4 overflow-x-auto scroll-smooth pt-2 pb-4 px-10"
                        style="scrollbar-width: none;">

                        <!-- foreach  -->
                        <div class="group shrink-0 w-52 flex flex-col relative hover:bg-slate-700/55 rounded-lg p-2 transition">
                            <a href="" class="block">
                                <img
                                    src="https://imgs.search.brave.com/TiFnlXYcbZLp9DAoxIDiw38YP6Y6d8wY27_dBuj54P4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/bWFnbmlmaWMuY29t/L3ByZW1pdW0tcHNk/L3BvZGNhc3QtdGFs/ay1zaG93LXByb21v/dGlvbmFsLXNvY2lh/bC1tZWRpYS1wb3N0/XzU4NDE5Ny0yNzI3/LmpwZz9zZW10PWFp/c19oeWJyaWQmdz03/NDAmcT04MA"
                                    alt=""
                                    class="w-48 h-48 rounded-lg object-cover">

                                <h3 class="font-bold pt-2 truncate">
                                    
                                </h3>

                                <p class="text-sm text-gray-400 truncate">
                                    
                                </p>
                            </a>

                            <button
                                type="button"
                                onclick="event.stopPropagation(); playSong('')"
                                class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300">
                                <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
                            </button>

                            <audio id="">
                                <source src="" type="audio/mpeg">
                            </audio>
                        </div>
                        <!-- endforeach -->

                    </div>
                </div>

                <a href="" class="text-2xl font-bold pt-15">Gli episodi del giorno</a>

                <div class="flex w-full gap-4 pt-2">
                    <!-- foreach  -->
                    <div class="group flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative">
                        <a href="" class="block">
                            <img
                                src="https://imgs.search.brave.com/TiFnlXYcbZLp9DAoxIDiw38YP6Y6d8wY27_dBuj54P4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/bWFnbmlmaWMuY29t/L3ByZW1pdW0tcHNk/L3BvZGNhc3QtdGFs/ay1zaG93LXByb21v/dGlvbmFsLXNvY2lh/bC1tZWRpYS1wb3N0/XzU4NDE5Ny0yNzI3/LmpwZz9zZW10PWFp/c19oeWJyaWQmdz03/NDAmcT04MA"
                                alt=""
                                class="cover w-48 h-45 ">
                            <h3 class="font-bold pt-2"></h3>
                            <p class="text-sm text-gray-400">Artista</p>
                        </a>
                    </div>
                    <!-- endforeach -->
                </div>

                <a href="" class="text-2xl font-bold pt-15">Categorie</a>

                <div class="flex w-full gap-3 pt-2">
                    <!-- foreach  -->
                    <div class="group flex flex-col hover:bg-slate-700/55 rounded-lg p-2 relative">
                        <a href="" class="block">
                            <img src="https://imgs.search.brave.com/TiFnlXYcbZLp9DAoxIDiw38YP6Y6d8wY27_dBuj54P4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/bWFnbmlmaWMuY29t/L3ByZW1pdW0tcHNk/L3BvZGNhc3QtdGFs/ay1zaG93LXByb21v/dGlvbmFsLXNvY2lh/bC1tZWRpYS1wb3N0/XzU4NDE5Ny0yNzI3/LmpwZz9zZW10PWFp/c19oeWJyaWQmdz03/NDAmcT04MA" alt="" class="cover w-48 h-48 rounded-lg">
                            <h3 class="font-bold pt-2"></h3>
                            <p class="text-sm text-gray-400"></p>
                        </a>
                       
                    </div>

                    <!-- endforeach -->
                </div>
            </div>
        </section>
    </main>
</x-layout>