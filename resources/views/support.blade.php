<x-layout>
    <section class="w-full bg-zinc-900 pt-40 mx-auto p-5">
        <div class="flex flex-col items-center gap-5 p-5 ">

            <h1 class="text-7xl text-white font-bold text-center pb-20 ">Assistenza BeatFlow</h1>
            <div class="w-full max-w-lg border border-white rounded p-5 ">
                <div class="flex justify-center">
                    <button class="btn rounded-3xl border border-[#1DB954]"><i class="fa-solid fa-magnifying-glass"></i> Cerca con l'IA</button>
                    <button class="btn rounded-xl">Ricerca di base</button>

                </div>
                <textarea class="p-5 bg-transparent text-lg w-full border-none focus:outline-none resize-none h-24" placeholder="Fai una domanda o descrivi il problema"></textarea>
                <div class="flex justify-end">
                    <button class="btn btn-circle btn-sm bg-[#1DB954] border-none hover:bg-green-500">
                        <i class="fa-solid fa-xl fa-arrow-right text-black "></i>
                    </button>
                </div>
            </div>

            {{-- Accordion con sotto-accordion --}}
            <div class=" pt-10 w-full max-w-lg">
                <h2 class="text-2xl pb-5 font-bold">Sfoglia gli articoli dell'assistenza</h2>
                <details class="collapse collapse-arrow w-full" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-regular fa-credit-card" style="color: rgb(74, 222, 128);"></i> Pagamenti e fatturazione</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Argomenti consigliati</summary>
                            <div class="collapse-content text-sm">Contenuto argomenti consigliati.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Gestisci pagamenti</summary>
                            <div class="collapse-content text-sm">Contenuto gestisci pagamenti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Metodo di pagamento</summary>
                            <div class="collapse-content text-sm">Contenuto metodo di pagamento.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Assistenza sugli addebiti</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                    </div>
                </details>

                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-solid fa-user" style="color: rgb(74, 222, 128);"></i> Gestisci il tuo account</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Accesso</summary>
                            <div class="collapse-content text-sm">Contenuto argomenti consigliati.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Assistenza profilo</summary>
                            <div class="collapse-content text-sm">Contenuto gestisci pagamenti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Impostazioni dell'account</summary>
                            <div class="collapse-content text-sm">Contenuto metodo di pagamento.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Sicurezza</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                    </div>
                </details>

                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-solid fa-star" style="color: rgb(74, 222, 128);"></i> Piani Premium</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Piani disponibili</summary>
                            <div class="collapse-content text-sm">Contenuto argomenti consigliati.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Impostazioni del piano</summary>
                            <div class="collapse-content text-sm">Contenuto gestisci pagamenti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Premium Family</summary>
                            <div class="collapse-content text-sm">Contenuto metodo di pagamento.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Premium Duo</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Account gestiti</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                    </div>
                </details>

                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-brands fa-connectdevelop" style="color: rgb(74, 222, 128);"></i> Funzionalità in-app</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Per iniziare</summary>
                            <div class="collapse-content text-sm">Contenuto argomenti consigliati.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Impostazioni app</summary>
                            <div class="collapse-content text-sm">Contenuto gestisci pagamenti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Risoluzione dei problemi</summary>
                            <div class="collapse-content text-sm">Contenuto metodo di pagamento.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Playlist</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Caratteristiche</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Funzionalità social</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Podcast</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Audiolibri</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Privacy realtiva all'ascolto</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                    </div>
                </details>
                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-regular fa-headphones" style="color: rgb(74, 222, 128);"></i> Risoluzione dei problemi e dispositivi</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Altoparlanti</summary>
                            <div class="collapse-content text-sm">Contenuto argomenti consigliati.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Smartwatch</summary>
                            <div class="collapse-content text-sm">Contenuto gestisci pagamenti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">TV</summary>
                            <div class="collapse-content text-sm">Contenuto metodo di pagamento.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Gaming</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Automobili</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Asistenti vocali</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                    </div>
                </details>
                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-solid fa-lock" style="color: rgb(74, 222, 128);"></i> Sicurezza e privacy</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Diritti in materia di dati e scelte inerenti alla privacy</summary>
                            <div class="collapse-content text-sm">Contenuto argomenti consigliati.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Comprendere i tuoi dati</summary>
                            <div class="collapse-content text-sm">Contenuto gestisci pagamenti.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Contenuti soggetti a limiti di età e controllo della tue età</summary>
                            <div class="collapse-content text-sm">Contenuto metodo di pagamento.</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Centro sulla privacy e sulla sicurezza</summary>
                            <div class="collapse-content text-sm">Contenuto assistenza addebiti.</div>
                        </details>
                    </div>

                </details>
            </div>
    </section>
    <!-- Seconda sezione -->
    <section class="w-full mx-auto p-5">
        <div class="flex flex-col items-center">
            <div class="w-full max-w-lg p-5 ">
                <h2 class="text-2xl text-white font-bold">Assistenza rapida</h2>
                <div class="pt-10 w-full flex flex-col gap-5">
                    <a href="" class="text-white hover:underline flex justify-between w-full">Non riesco ad accedere a BeatFlow <i class="fa-solid fa-angle-right text-white"></i></a>
                    <a href="" class="text-white hover:underline flex justify-between w-full">Assistenza per pagamento non riuscito <i class="fa-solid fa-angle-right text-white"></i></a>
                    <a href="" class="text-white hover:underline flex justify-between w-full">Addebiti eccessivi <i class="fa-solid fa-angle-right text-white"></i></a>
                    <a href="" class="text-white hover:underline flex justify-between w-full">Invitare o rimuovere membri del piano Family <i class="fa-solid fa-angle-right text-white"></i></a>
                    <a href="" class="text-white hover:underline flex justify-between w-full">Come modificare i dettagli di pagamento <i class="fa-solid fa-angle-right text-white"></i></a>
                </div>
            </div>



        </div>

    </section>
    <!-- Terza sezione -->
    <section class="w-full bg-zinc-900 mx-auto p-5">
        <div class="flex flex-col items-center gap-10 p-5">
            <h2 class="text-5xl text-white font-bold">Visita la nostra community</h2>
            <p class="text-white text-center">Hai domande? Trova risposte dalla nostra community di fan esperti.</p>
            <button class="btn  bg-[#1DB954] font-bold text-black rounded-3xl">Vai alla community</button>
        </div>
    </section>
</x-layout>