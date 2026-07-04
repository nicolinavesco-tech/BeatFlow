<x-layout>
    <main class="bg-zinc-900 ">
        {{-- Hero Section --}}
        <section class="pt-24 md:pt-40 bg-[linear-gradient(to_top,transparent_40%,#15803d_70%,#4ade80)]">
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-10 w-full px-4 sm:px-8 md:px-16 pb-10">
                <div class="flex flex-col gap-5 md:gap-7 w-full md:max-w-xl text-center md:text-left">
                    <h1 class="text-2xl sm:text-3xl md:text-5xl text-white font-bold">0 € per 3 mesi di Premium Individual</h1>
                    <span class="text-white font-bold text-sm sm:text-base">Goditi musica senza pubblicità, riproduzione in modalità offline e molto altro ancora. Annulla quando vuoi.</span>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                        <button class="btn bg-[#1DB954] text-black rounded-3xl px-6 py-3 text-base sm:text-lg hover:scale-110">Prova 3 mesi a 0 €</button>
                        <button class="btn bg-black text-white border border-gray-400 rounded-3xl px-6 py-3 text-base sm:text-lg hover:scale-110">Visualizza tutti i piani</button>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-300">Solo per Premium Individual. 0 € per 3 mesi, poi 11,99 € al mese. Offerta disponibile solo se non hai ancora provato Premium. Si applicano termini e condizioni. L'offerta termina il giorno 22 giugno 2026.</p>
                </div>
                <div class="w-40 sm:w-56 md:w-72 shrink-0">
                    <img src="media/premiumsection.png" alt="Immagine promozionale di BeatFlow Premium" class="w-full">
                </div>
            </div>
        </section>

        <!-- Second Section -->
        <section class="w-full flex flex-col items-center justify-center gap-8 py-20 px-6">
            <h2 class="text-3xl md:text-5xl text-white font-bold text-center">Prova la differenza</h2>
            <p class="font-bold text-base md:text-xl text-center text-white">Passa a Premium e approfitta del pieno controllo della musica che ascolti. Annulla quando vuoi.</p>

            <div class="flex flex-col justify-center w-full max-w-2xl">
                <div class="flex justify-between items-center border-b pb-5">
                    <span class="text-white w-40 md:w-50 font-bold flex pt-5 md:pt-20">Cosa otterrai</span>
                    <span class="w-20 font-bold text-sm md:text-base text-center">Piano gratuito</span>
                    <div class="flex items-center gap-1">
                        <img src="logo/logo.png" alt="Logo BeatFlow" class="w-5 h-5 md:w-7 md:h-7">
                        <span class="w-20 font-bold text-sm md:text-base text-center">Piano Premium</span>
                    </div>
                </div>

                @php
                $features = [
                    ['label' => 'Musica senza pubblicità', 'tip' => 'Ascolta la musica senza interruzioni pubblicitarie.'],
                    ['label' => 'Download per ascoltare offline', 'tip' => 'Scarica i tuoi brani preferiti e ascoltali anche senza connessione.'],
                    ['label' => 'Riproduzione in qualsiasi ordine', 'tip' => 'Scegli l\'ordine di ascolto dei tuoi brani preferiti senza limitazioni.'],
                    ['label' => 'Qualità audio lossless', 'tip' => 'Ascolta la musica alla massima qualità audio disponibile.'],
                    ['label' => 'Ascolto con gli amici', 'tip' => 'Condividi l\'ascolto con i tuoi amici in tempo reale.'],
                    ['label' => 'Organizzazione coda di ascolto', 'tip' => 'Organizza e gestisci la coda di riproduzione come preferisci.'],
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

        <!-- Third section -->
        <section class="w-full pt-16 md:pt-30 flex flex-col items-center justify-center gap-5 px-6">
            <h2 class="text-3xl md:text-5xl text-white font-bold text-center">Piani convenienti per ogni situazione</h2>
            <p class="text-white text-center max-w-2xl">Scegli un piano Premium e ascolta musica senza pubblicità e senza limiti tramite telefono, altoparlante e altri dispositivi. Paga in vari modi. Annulla quando vuoi.</p>

            <div class="flex gap-3 flex-wrap justify-center">
                <img src="https://paymentsdk.spotifycdn.com/svg/cards/visa.svg" alt="Visa" class="w-12 md:w-15">
                <img src="https://paymentsdk.spotifycdn.com/svg/cards/mastercard.svg" alt="Mastercard" class="w-12 md:w-15">
                <img src="https://paymentsdk.spotifycdn.com/svg/cards/amex.svg" alt="Amex" class="w-12 md:w-15">
                <img src="https://paymentsdk.spotifycdn.com/svg/cards/postepay.svg" alt="Postepay" class="w-12 md:w-15">
                <img src="https://paymentsdk.spotifycdn.com/svg/providers/paypal.svg" alt="PayPal" class="w-12 md:w-15 bg-white p-1 rounded">
            </div>

            <div class="flex flex-col md:flex-row gap-6 md:gap-10 items-start md:items-center pt-10 w-full max-w-3xl">
                <h2 class="text-2xl md:text-3xl text-white font-bold text-center md:text-left">Tutti i piani premium includono</h2>
                <div class="flex flex-col gap-2">
                    @foreach(['Musica senza pubblicità', 'Download per ascoltare in modalità offline', 'Riproduzione dei brani in qualsiasi ordine', 'Qualità audio lossless', 'Ascolto con gli amici in tempo reale', 'Organizzazione della coda di ascolto'] as $item)
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
                <span class="text-black font-bold bg-[#ffc9db] px-2 py-1 rounded w-40">0 € per 3 mesi</span>
                <div class="card-body">
                    <div class="flex gap-2 items-center">
                        <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                        <span class="text-white text-lg">Premium</span>
                    </div>
                    <h2 class="card-title text-3xl text-[#ffc9db]">Individual</h2>
                    <span class="font-bold text-white text-lg">0 € per 3 mesi</span>
                    <span class="text-gray-400">Dopo, 11,99 € al mese</span>
                    <hr class="border-t border-gray-600 my-4">
                    <ul class="list-disc list-inside text-base">
                        <li>1 account Premium</li>
                        <li>Annulla quando vuoi</li>
                    </ul>
                    <div class="card-actions flex flex-col gap-2 pb-4 mt-auto">
                        <button class="btn bg-[#ffc9db] text-black font-bold rounded-2xl text-base w-full hover:scale-110">Prova 3 mesi a 0 €</button>
                        <p class="text-center pt-5 text-gray-400 text-sm">0 € per 3 mesi, poi 11,99 € al mese. Offerta disponibile solo se non hai ancora provato Premium. <a href="" class="underline underline-offset-2">Si applicano termini e condizioni.</a> L'offerta termina il giorno 22 giugno 2026.</p>
                    </div>
                </div>
            </div>

            
            <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                <span class="text-black font-bold bg-[#ecb8fb] px-2 py-1 rounded w-40">0 € per 1 mese</span>
                <div class="card-body">
                    <div class="flex gap-2 items-center">
                        <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                        <span class="text-white text-lg">Premium</span>
                    </div>
                    <h2 class="card-title text-3xl text-[#ecb8fb]">Student</h2>
                    <span class="font-bold text-white text-lg">0 € per 1 mese</span>
                    <span class="text-gray-400">Dopo, 6,49 € al mese</span>
                    <hr class="border-t border-gray-600 my-4">
                    <ul class="list-disc list-inside text-base">
                        <li>1 account Premium Verificato</li>
                        <li>Sconto per studenti idonei</li>
                        <li>Annulla quando vuoi</li>
                    </ul>
                    <div class="card-actions pt-5 mt-auto">
                        <button class="btn bg-[#ecb8fb] text-black font-bold rounded-2xl text-base w-full hover:scale-110">Prova 1 mese a 0 €</button>
                        <p class="text-center pt-5 text-gray-400 text-sm">0 € per 1 mese, poi 6,49 € al mese. <a href="" class="underline underline-offset-2">Si applicano termini e condizioni.</a></p>
                    </div>
                </div>
            </div>

            
            <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                <div class="card-body">
                    <div class="flex gap-2 items-center">
                        <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                        <span class="text-white text-lg">Premium</span>
                    </div>
                    <h2 class="card-title text-3xl text-[#ffe571]">Duo</h2>
                    <span class="font-bold text-white text-lg">16,99 € / mese</span>
                    <hr class="border-t border-gray-600 my-4">
                    <ul class="list-disc list-inside text-base">
                        <li>2 account Premium</li>
                        <li>Annulla quando vuoi</li>
                    </ul>
                    <div class="card-actions mt-auto pt-5">
                        <button class="btn bg-[#ffe571] text-black font-bold rounded-2xl text-base w-full hover:scale-110">Passa a Premium Duo</button>
                        <p class="pt-5 text-gray-400 text-sm">Per le coppie che risiedono allo stesso indirizzo. <a href="" class="underline underline-offset-2">Si applicano termini e condizioni.</a></p>
                    </div>
                </div>
            </div>

            
            <div class="card w-full sm:w-80 md:w-96 shadow-sm bg-gray-700/50">
                <div class="card-body">
                    <div class="flex gap-2 items-center">
                        <img src="logo/logo.png" alt="Logo BeatFlow" class="w-10">
                        <span class="text-white text-lg">Premium</span>
                    </div>
                    <h2 class="card-title text-3xl text-[#ac9eff]">Family</h2>
                    <span class="font-bold text-white text-lg">24,99 € / mese</span>
                    <hr class="border-t border-gray-600 my-4">
                    <ul class="list-disc list-inside text-base">
                        <li>Fino a 6 account Premium</li>
                        <li>Controllo genitori su tutti i membri</li>
                        <li>I membri under 14 possono usufruire dei vantaggi Premium</li>
                        <li>Annulla quando vuoi</li>
                    </ul>
                    <div class="card-actions mt-auto pt-5">
                        <button class="btn bg-[#ac9eff] text-black font-bold rounded-2xl text-base w-full hover:scale-110">Passa a Premium Family</button>
                        <p class="pt-5 text-gray-400 text-sm">Per un massimo di 6 membri della famiglia che risiedono allo stesso indirizzo. <a href="" class="underline underline-offset-2">Si applicano termini e condizioni.</a></p>
                    </div>
                </div>
            </div>

        </section>

        {{-- FAQ --}}
        <section class="w-full pt-16 md:pt-30 flex flex-col items-center justify-center gap-5 pb-20 px-6">
            <h2 class="text-3xl md:text-4xl text-white font-bold text-center">Hai domande?</h2>
            <p class="text-white text-base text-center">Abbiamo noi le risposte.</p>
            <p class="text-white text-base text-center">Trovi altre risposte sul
                <a href="" class="underline underline-offset-2 hover:font-bold">sito dell'assistenza</a>.
            </p>

            <div class="w-full max-w-3xl pt-10">

                @php
                $faqs = [
                    ['q' => 'Come funziona il periodo di prova di BeatFlow Premium?', 'a' => 'Se non hai mai avuto Premium prima d\'ora, potresti avere diritto a un periodo di prova gratuito (o a una tariffa ridotta). Per i periodi di prova, devi comunque inserire un metodo di pagamento valido per iscriverti. Lo utilizzeremo per confermare il tuo Paese o la tua regione ed effettuare i pagamenti qualora decidessi di tenere Premium al termine dell\'offerta. Ti invieremo un promemoria 7 giorni prima del termine del periodo di prova. Si applicano termini e condizioni e restrizioni in base al Paese.'],
                    ['q' => 'Come posso annullare il mio piano Premium?', 'a' => 'Puoi annullare il piano Premium quando vuoi sulla pagina del tuo account. Una volta annullato, l\'abbonamento Premium proseguirà fino alla prossima data di fatturazione, quindi il tuo account passerà al servizio gratuito. Se annulli durante il periodo di prova gratuito, perderai immediatamente l\'accesso ai vantaggi Premium. Con il servizio gratuito, manterrai tutte le tue playlist e la musica salvata e potrai ascoltarle con gli annunci.'],
                    ['q' => 'Come funziona il piano Premium Duo?', 'a' => 'Premium Duo è un piano per coppie che vivono insieme. È più conveniente rispetto a due account Premium Individual a prezzo pieno. Ti chiederemo l\'indirizzo per assicurarci che risiediate nello stesso luogo. Ogni membro dispone di un account Premium separato e può ascoltare musica contemporaneamente.'],
                    ['q' => 'Come funziona il piano Premium Family?', 'a' => 'Premium Family è un piano per un massimo di 6 persone che vivono insieme. Ogni membro dispone di un account Premium separato. I membri della famiglia di età inferiore a 13 anni possono essere invitati tramite account gestiti con controllo parentale.'],
                    ['q' => 'Come funziona il piano Premium Student?', 'a' => 'Se hai effettuato l\'iscrizione a un\'università accreditata idonea all\'offerta e hai più di 18 anni, puoi passare a Premium Student per un massimo di 4 anni.'],
                    ['q' => 'Quanto costa BeatFlow Premium in Italia?', 'a' => 'I prezzi in Italia: Individual 11,99 € al mese, Duo 16,99 € al mese, Family 20,99 € al mese, Student 6,49 € al mese. Se non hai mai avuto un piano Premium prima d\'ora, potresti avere diritto a un periodo di prova gratuito. Si applicano termini e condizioni.'],
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