<x-layout>
    <main class=" bg-black">
        <section class="min-h-screen flex flex-col md:flex-row pt-20 gap-2 px-2 md:px-4">
            <div class=" flex justify-center md:hidden left-0 right-0 gap-1 bg-black z-40 px-4 py-2">
                <a href="{{ route('homepage') }}" class="btn rounded-full"><i class="fa-regular fa-house text-white"></i></a>
                <form action="{{ route('global.search') }}" method="GET">
                    <label class="input w-70 flex items-center gap-2">

                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g
                                stroke-linejoin="round"
                                stroke-linecap="round"
                                stroke-width="2.5"
                                fill="none"
                                stroke="currentColor">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </g>
                        </svg>

                        <input type="search" name="q" value="{{ request('q') }}" required placeholder="{{ __('ui.search_placeholder') }}" class="flex-1" />
                        <select name="source" class="bg-slate-800/70 text-white text-sm outline-none ">
                            <option value="local" @selected(request('source')==='local' )>
                                {{ __('ui.library') }}
                            </option>
                            <option value="jamendo" @selected(request('source')==='jamendo' )>
                                {{ __('ui.explore') }}
                            </option>
                        </select>
                    </label>
                </form>
            </div>
            <div class="border rounded-xl border-base-100 bg-base-100 w-full md:w-90 space-y-5 shrink-0">
                <x-library />
            </div>
            <div class="flex rounded-xl border border-base-100 bg-base-100 flex-1 min-w-0 flex-col gap-2 p-5 content-bar bg-[linear-gradient(to_top,transparent_60%,#15803d_90%,#4ade80)]">
                <a href="{{ route('homepage') }}" class="flex items-center gap-2 text-white px-4 py-2 m-5 bg-black/40 backdrop-blur-md rounded-full hover:bg-black/60 transition w-fit">
                    <i class="fa-solid fa-chevron-left"></i>
                    <span>{{ __('ui.back') }}</span>
                </a>


                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-9xl font-bold px-5 py-8">Podcast</h1>

                <div class="flex border-base-100  flex-col gap-2 p-5 ">
                    <h2 class="text-2xl font-bold">Italy Creator Radar</h2>

                    <div class=" w-full">

                        <div class="relative w-full group/carousel">
                            <button type="button" onclick="scrollCarousel('radarCarousel', -350)" class="btn btn-circle absolute left-0 top-17 md:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100">
                                ❮
                            </button>
                            <div id="radarCarousel" class="flex gap-2 md:gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">

                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/TiFnlXYcbZLp9DAoxIDiw38YP6Y6d8wY27_dBuj54P4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/bWFnbmlmaWMuY29t/L3ByZW1pdW0tcHNk/L3BvZGNhc3QtdGFs/ay1zaG93LXByb21v/dGlvbmFsLXNvY2lh/bC1tZWRpYS1wb3N0/XzU4NDE5Ny0yNzI3/LmpwZz9zZW10PWFp/c19oeWJyaWQmdz03/NDAmcT04MA" title="Italy Creator Radar" description="A podcast for content creators in Italy" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/HsB44VL-50dgYA0mp11rAQS7ENFa3R9vUPTdSQI39vU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/cGl4YWJheS5jb20v/cGhvdG8vMjAyMy8w/MS8xNS8xMy8wNS9w/b2RjYXN0LTc3MjAx/MDZfMTI4MC5qcGc" title="Capiamo" description="Gioelle Arreghini e Thomas Asueni" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/p2Aaie31gvY2ADSukVw_KpbQHHMsnIGo8ri7segyVSI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTYz/NTc5ODIzNS9pdC9m/b3RvL3ByaW1vLXBp/YW5vLWRpLXVuLWdp/b3ZhbmUtdW9tby1z/b3JyaWRlbnRlLWNo/ZS1yZWdpc3RyYS1w/b2RjYXN0LWUtZmEt/c3RyZWFtaW5nLWxp/dmUtdXNhbmRvLmpw/Zz9zPTYxMng2MTIm/dz0wJms9MjAmYz1L/OUh0Nm5NTHlUdzR4/R1d5c2k5a3dpUkhW/WHRFTVI0bnNQalps/RENNOVJBPQ" title="Hypersimposio" description="Hypersimposio" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/xbQIpuo0WA6PaNS48qcEeYCaV2LH-N_cBqi9UJKxEq4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9wb2Rz/dGFyLml0L3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIyLzA4L3Bv/ZGNhc3QtbWFya2V0/aW5nLmpwZw" title="Made IT-Storie Italiane di successo" description="Ines Makula e Camilla Scassellati" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/Hu4Gf8r2aC06YdTYH2EIoe0nd9vmqd7ScHaBNrQCamQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c2h1dHRlcnN0b2Nr/LmNvbS9ibG9nL3dw/LWNvbnRlbnQvdXBs/b2Fkcy9zaXRlcy81/LzIwMjIvMDIvUG9k/Y2FzdC1jb3Zlci1h/cnRfZmVhdHVyZWQu/anBn" title="Streetsmart" description="Streetsmart-Corax" />
                                <x-podcast-cards.radars-card image="https://imgs.search.brave.com/o3NosAIgMwMPuJgx_k849WCVh4-Egrw-GOiIRjpT-fk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzk2Lzgy/L2RlLzk2ODJkZTAy/MzhjZjhjNTcyMjIw/NDdmMGI1ODA4Y2Mw/LmpwZw" title="Generazione sospesa" description="Factanza Media" />
                            </div>
                            <button type="button" onclick="scrollCarousel('radarCarousel', 350)" class="btn btn-circle absolute right-0 top-17 md:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100">
                                ❯
                            </button>


                        </div>
                    </div>

                    <h2 class="text-2xl font-bold pt-15">{{ __('ui.todays_episodes') }}</h2>

                    <div class="relative w-full group/carousel">
                        <button type="button" onclick="scrollCarousel('radarCarousel', -350)" class="btn btn-circle absolute left-0 top-17 md:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100">
                            ❮
                        </button>
                        <div id="radarCarousel" class="flex gap-2 md:gap-4 overflow-x-auto scroll-smooth pt-2 pb-4" style="scrollbar-width: none;">

                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/OOlJhTR-bdo3rfxUC7P7Rx5UKpSF_QHcuMc9L_USpnk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9iaW9n/cmFmaWVvbmxpbmUu/aXQvaW1nL2Jpby9B/bGVzc2FuZHJvX0Nh/dHRlbGFuXzUuanBn" title="SUPERNOVA" description="Alessandro Cattelan" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/Zehsp6KI_6XMT3IDlqi4vkhx02xUh9IXNBYkXQmqo3Y/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pMC53/cC5jb20vY2luZW1h/bmRvLmJsb2cvd3At/Y29udGVudC91cGxv/YWRzLzIwMjAvMTAv/NS00LWUxNjA0MDg1/OTA5MjU0LmpwZz9m/aXQ9MTI4MCw3MjAm/c3NsPTE" title="Non aprite quella Podcast" description="Non aprite quella Podcast" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/FlasRfLoIBhWdhq9g00-7Yqus_k0KL4XNRrcJtnfeP8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTE2/OTQ3NzA0OC9waG90/by9pLXdpbGwtdGVs/bC1hLWpva2Utbm93/LmpwZz9zPTYxMng2/MTImdz0wJms9MjAm/Yz0xUDNFdXVKazkt/ajJjYURXZGFreWta/R1pzbGthNUc2R2F2/OXRjUUxTZkNNPQ" title="Passa dal BSMT" description="Gianluca Gazzoli" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/KOZNM0EnpXexvI-GFYISrXtmdgqkCFI7imQ6cUjzko8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtcGxhdGZvcm0u/OTlzdGF0aWMuY29t/Ly93elBhdzVuVGV6/UkphcUxyZ0t1cWRw/a1JGUm89LzYzeDYz/Ojg5OXg4OTkvZml0/LWluLzUwMHg1MDAv/OTlkZXNpZ25zLWNv/bnRlc3RzLWF0dGFj/aG1lbnRzLzEyNy8x/MjcyOTkvYXR0YWNo/bWVudF8xMjcyOTk1/MDA" title="The Bull" description="Il tuo podcast di finanza personale" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/f_ALCMe0Prge9KOPmcUSGJ7loicyQSkgpFY26Daz3OM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTQ2/NTU1ODQyNy9waG90/by9wZW9wbGUtaW4t/dGhlLXBvZGNhc3Qt/c3R1ZGlvLXRhbGtp/bmctYW5kLXJlY29y/ZGluZy5qcGc_cz02/MTJ4NjEyJnc9MCZr/PTIwJmM9T09XeHVX/VnJZTUlyQ0N1X05f/VjlNdUc0VnRZVi00/NjJYbTZBeHh2WHJV/ND0" title="EST Radio" description="Est Radio" />
                            <x-podcast-cards.episode-card image="https://imgs.search.brave.com/TNceTd0ffyDnlvEVjICAsASr1EAUz4jrIcrgL53A-ss/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvOTA0/MjQ4MTkvcGhvdG8v/bWljaGFlbC1qYWNr/c29uLXBlcmZvcm1z/LW9uLXN0YWdlLW9u/LWhpcy1oaXN0b3J5/LXRvdXItaW4tZGVj/ZW1iZXItMTk5Ni5q/cGc_cz02MTJ4NjEy/Jnc9MCZrPTIwJmM9/bFo4NGMtM2k1QmJR/V2c0N0ZmZVg1RHdD/ZmhjNmpBMWVyVFJq/RDN3X3JoQT0" title="Danni Riversibile" description="Il caso di Michael Jackson" />
                        </div>
                        <button type="button" onclick="scrollCarousel('radarCarousel', 350)" class="btn btn-circle absolute right-0 top-17 md:top-23 z-20 bg-black/20 border-none text-white opacity-100 lg:opacity-0 lg:group-hover/carousel:opacity-100">
                            ❯
                        </button>


                    </div>

                    <h2 class="text-2xl font-bold pt-15">{{ __('ui.categories') }}</h2>

                    <div class="flex w-full flex-wrap gap-3 pt-2">
                        <x-podcast-cards.categories-card color="bg-green-700" title="Podcast charts" />
                        <x-podcast-cards.categories-card color="bg-purple-700" title="New podcast releases" />
                        <x-podcast-cards.categories-card color="bg-yellow-700" title="Video podcasts" />
                        <x-podcast-cards.categories-card color="bg-cyan-700" title="Mental health & wellness" />
                        <x-podcast-cards.categories-card color="bg-orange-700" title="Education" />
                        <x-podcast-cards.categories-card color="bg-indigo-700" title="Political news" />
                        <x-podcast-cards.categories-card color="bg-teal-700" title="Stories" />
                        <x-podcast-cards.categories-card color="bg-violet-700" title="True crime" />
                        <x-podcast-cards.categories-card color="bg-pink-700" title="Comedy" />
                        <x-podcast-cards.categories-card color="bg-lime-700" title="Influencers" />
                        <x-podcast-cards.categories-card color="bg-sky-700" title="History" />
                        <x-podcast-cards.categories-card color="bg-fuchsia-700" title="Books" />
                        <x-podcast-cards.categories-card color="bg-amber-700" title="Personal relationships" />
                        <x-podcast-cards.categories-card color="bg-rose-700" title="Science" />
                    </div>

                    <button class="btn bg-green-700 text-white rounded-3xl mt-5 w-50">{{ __('ui.browse_all_categories') }}</button>
                </div>

            </div>

        </section>
    </main>
</x-layout>