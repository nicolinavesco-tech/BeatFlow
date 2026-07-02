<x-layout>
    <div x-show="tab === 'home'">
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
                            @auth
                            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                                <li>
                                    <div class="dropdown dropdown-right flex">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <button @click.prevent="tab = 'createPlaylist'" tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">Playlist</span>
                                            <p class="text-gray-400 text-xs">Riunisci i tuoi brani preferiti</p>
                                        </div>
                                    </div>

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
                            @else
                            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-84 p-2 shadow border border-slate-700/80 mt-2">
                                <li>
                                    <div class="dropdown dropdown-right flex">
                                        <div class="flex items-center justify-center w-14 h-14 border border-gray-600 bg-gray-300/40 rounded-full shrink-0">
                                            <button tabindex="0"><i class="fa-brands fa-itunes-note fa-2x hover:text-[#1DB954] hover:scale-110 hover:rotate-12 transition-transform duration-300"></i></button>
                                            <div tabindex="0" class="dropdown-content bg-blue-600 text-white rounded-xl p-4 w-84 shadow-xl translate-x-[5%] translate-y-[-30%]">
                                                <i class="absolute fa-solid fa-caret-left fa-2x text-blue-600 left-0 top-1/2 -translate-x-[50%] -translate-y-1/2"></i>
                                                <h3 class="font-bold text-lg ">Crea una playlist</h3>
                                                <p class="py-4 text-sm">Accedi per creare e condividere playlist.</p>
                                                <div class="flex gap-4 justify-end">
                                                    <button onclick="this.closest('.dropdown-content').classList.add('hidden')" class=" text-white font-bold">Non ora</button>
                                                    <a href="{{ route('login') }}" class="btn bg-white border-none text-black rounded-3xl font-bold">Accedi</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-start ">
                                            <span class="font-bold text-base">Playlist</span>
                                            <p class="text-gray-400 text-xs">Riunisci i tuoi brani preferiti</p>
                                        </div>
                                    </div>

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
                            @endauth
                        </div>
                    </div>

                    @auth
                    @foreach(auth()->user()->favoriteArtists as $favoriteArtist)
                    <a href="{{ route('artists.show', $favoriteArtist) }}" class="flex gap-3 ps-3">
                        <img src="/media/{{ $favoriteArtist->image }}" alt="{{ $favoriteArtist->name }}" class="cover w-20 h-20 rounded-full {{ in_array($favoriteArtist->name, ['Skai IsYourGod', 'Blackpink', 'Twenty One Pilots']) ? 'object-cover' : '' }}">
                        <div class="flex flex-col justify-center">
                            <p class="text-white font-bold">{{ $favoriteArtist->name }}</p>
                            <p class="text-sm text-gray-400">Artista</p>
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
                                <p class="text-sm text-gray-400">Playlist</p>
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
                    @else
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
                    @endauth
                </div>
                <div class="flex border border-base-100 rounded-xl w-362 flex-col gap-6 bg-base-100 bg-[linear-gradient(to_top,transparent_60%,#15803d_90%,#4ade80)]">
                    <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 m-5 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span>Torna indietro</span>
                    </a>


                    <h1 class="text-9xl font-bold p-8">Podcast</h1>

                    <div class="flex border-base-100  flex-col gap-2 p-5 ">
                        <a href="" class="text-2xl font-bold">Radar Creators Italia</a>

                        <div class=" w-full">

                            <div class="flex w-full gap-4 pt-2">
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/TiFnlXYcbZLp9DAoxIDiw38YP6Y6d8wY27_dBuj54P4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/bWFnbmlmaWMuY29t/L3ByZW1pdW0tcHNk/L3BvZGNhc3QtdGFs/ay1zaG93LXByb21v/dGlvbmFsLXNvY2lh/bC1tZWRpYS1wb3N0/XzU4NDE5Ny0yNzI3/LmpwZz9zZW10PWFp/c19oeWJyaWQmdz03/NDAmcT04MA" title="Radars Creators Italia" description="Podcast dedicato ai creatori di contenuti in Italia" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/HsB44VL-50dgYA0mp11rAQS7ENFa3R9vUPTdSQI39vU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/cGl4YWJheS5jb20v/cGhvdG8vMjAyMy8w/MS8xNS8xMy8wNS9w/b2RjYXN0LTc3MjAx/MDZfMTI4MC5qcGc" title="Capiamo" description="Gioelle Arreghini e Thomas Asueni" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/p2Aaie31gvY2ADSukVw_KpbQHHMsnIGo8ri7segyVSI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTYz/NTc5ODIzNS9pdC9m/b3RvL3ByaW1vLXBp/YW5vLWRpLXVuLWdp/b3ZhbmUtdW9tby1z/b3JyaWRlbnRlLWNo/ZS1yZWdpc3RyYS1w/b2RjYXN0LWUtZmEt/c3RyZWFtaW5nLWxp/dmUtdXNhbmRvLmpw/Zz9zPTYxMng2MTIm/dz0wJms9MjAmYz1L/OUh0Nm5NTHlUdzR4/R1d5c2k5a3dpUkhW/WHRFTVI0bnNQalps/RENNOVJBPQ" title="Hypersimposio" description="Hypersimposio" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/xbQIpuo0WA6PaNS48qcEeYCaV2LH-N_cBqi9UJKxEq4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9wb2Rz/dGFyLml0L3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIyLzA4L3Bv/ZGNhc3QtbWFya2V0/aW5nLmpwZw" title="Made IT-Storie Italiane di successo" description="Ines Makula e Camilla Scassellati" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/Hu4Gf8r2aC06YdTYH2EIoe0nd9vmqd7ScHaBNrQCamQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c2h1dHRlcnN0b2Nr/LmNvbS9ibG9nL3dw/LWNvbnRlbnQvdXBs/b2Fkcy9zaXRlcy81/LzIwMjIvMDIvUG9k/Y2FzdC1jb3Zlci1h/cnRfZmVhdHVyZWQu/anBn" title="Streetsmart" description="Streetsmart-Corax" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/o3NosAIgMwMPuJgx_k849WCVh4-Egrw-GOiIRjpT-fk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzk2Lzgy/L2RlLzk2ODJkZTAy/MzhjZjhjNTcyMjIw/NDdmMGI1ODA4Y2Mw/LmpwZw" title="Generazione sospesa" description="Factanza Media" />


                            </div>
                        </div>

                        <a href="" class="text-2xl font-bold pt-15">Gli episodi del giorno</a>

                        <div class="flex w-full gap-4 pt-2">

                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/OOlJhTR-bdo3rfxUC7P7Rx5UKpSF_QHcuMc9L_USpnk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9iaW9n/cmFmaWVvbmxpbmUu/aXQvaW1nL2Jpby9B/bGVzc2FuZHJvX0Nh/dHRlbGFuXzUuanBn" title="SUPERNOVA" description="Alessandro Cattelan" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/Zehsp6KI_6XMT3IDlqi4vkhx02xUh9IXNBYkXQmqo3Y/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pMC53/cC5jb20vY2luZW1h/bmRvLmJsb2cvd3At/Y29udGVudC91cGxv/YWRzLzIwMjAvMTAv/NS00LWUxNjA0MDg1/OTA5MjU0LmpwZz9m/aXQ9MTI4MCw3MjAm/c3NsPTE" title="Non aprite quella Podcast" description="Non aprite quella Podcast" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/FlasRfLoIBhWdhq9g00-7Yqus_k0KL4XNRrcJtnfeP8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTE2/OTQ3NzA0OC9waG90/by9pLXdpbGwtdGVs/bC1hLWpva2Utbm93/LmpwZz9zPTYxMng2/MTImdz0wJms9MjAm/Yz0xUDNFdXVKazkt/ajJjYURXZGFreWta/R1pzbGthNUc2R2F2/OXRjUUxTZkNNPQ" title="Passa dal BSMT" description="Gianluca Gazzoli" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/KOZNM0EnpXexvI-GFYISrXtmdgqkCFI7imQ6cUjzko8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtcGxhdGZvcm0u/OTlzdGF0aWMuY29t/Ly93elBhdzVuVGV6/UkphcUxyZ0t1cWRw/a1JGUm89LzYzeDYz/Ojg5OXg4OTkvZml0/LWluLzUwMHg1MDAv/OTlkZXNpZ25zLWNv/bnRlc3RzLWF0dGFj/aG1lbnRzLzEyNy8x/MjcyOTkvYXR0YWNo/bWVudF8xMjcyOTk1/MDA" title="The Bull" description="Il tuo podcast di finanza personale" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/f_ALCMe0Prge9KOPmcUSGJ7loicyQSkgpFY26Daz3OM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTQ2/NTU1ODQyNy9waG90/by9wZW9wbGUtaW4t/dGhlLXBvZGNhc3Qt/c3R1ZGlvLXRhbGtp/bmctYW5kLXJlY29y/ZGluZy5qcGc_cz02/MTJ4NjEyJnc9MCZr/PTIwJmM9T09XeHVX/VnJZTUlyQ0N1X05f/VjlNdUc0VnRZVi00/NjJYbTZBeHh2WHJV/ND0" title="EST Radio" description="Est Radio" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/TNceTd0ffyDnlvEVjICAsASr1EAUz4jrIcrgL53A-ss/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvOTA0/MjQ4MTkvcGhvdG8v/bWljaGFlbC1qYWNr/c29uLXBlcmZvcm1z/LW9uLXN0YWdlLW9u/LWhpcy1oaXN0b3J5/LXRvdXItaW4tZGVj/ZW1iZXItMTk5Ni5q/cGc_cz02MTJ4NjEy/Jnc9MCZrPTIwJmM9/bFo4NGMtM2k1QmJR/V2c0N0ZmZVg1RHdD/ZmhjNmpBMWVyVFJq/RDN3X3JoQT0" title="Danni Riversibile" description="Il caso di Michael Jackson" />


                        </div>

                        <a href="" class="text-2xl font-bold pt-15">Categorie</a>

                        <div class="flex w-full flex-wrap gap-3 pt-2">
                            <x-podcast-cards.categories-card color="bg-green-700" title="Classifiche podcast" />
                            <x-podcast-cards.categories-card color="bg-purple-700" title="Nuove uscite nei podcast" />
                            <x-podcast-cards.categories-card color="bg-yellow-700" title="Video podcast" />
                            <x-podcast-cards.categories-card color="bg-cyan-700" title="Salute mentale e Benessere" />
                            <x-podcast-cards.categories-card color="bg-orange-700" title="Istruzione" />
                            <x-podcast-cards.categories-card color="bg-indigo-700" title="Notizia politica" />
                            <x-podcast-cards.categories-card color="bg-teal-700" title="Storie" />
                            <x-podcast-cards.categories-card color="bg-violet-700" title="True crime" />
                            <x-podcast-cards.categories-card color="bg-pink-700" title="Commedia" />
                            <x-podcast-cards.categories-card color="bg-lime-700" title="Influencers" />
                            <x-podcast-cards.categories-card color="bg-sky-700" title="Qui si fa la storia" />
                            <x-podcast-cards.categories-card color="bg-fuchsia-700" title="Libri" />
                            <x-podcast-cards.categories-card color="bg-amber-700" title="Relazioni personali" />
                            <x-podcast-cards.categories-card color="bg-rose-700" title="Scienza" />
                        </div>

                        <button class="btn bg-green-700 text-white rounded-3xl mt-5 w-50">Sfoglia tutte le categorie</button>
                    </div>

                </div>

            </section>
        </main>
    </div>
    <div x-show="tab === 'createPlaylist'">
        @include('playlists.createPlaylist')
    </div>
</x-layout>