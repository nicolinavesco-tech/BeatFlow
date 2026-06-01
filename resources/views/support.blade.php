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
                            <div class="collapse-content text-sm">Aggiornamenti dei prezzi</div>
                            <div class="collapse-content text-sm">Assistenza per pagamento non riuscito</div>
                            <div class="collapse-content text-sm">Metodi di pagamento accettati</div>
                            <div class="collapse-content text-sm">Come modificare il metodo di pagamento</div>
                            <div class="collapse-content text-sm">Il buono regalo non funziona</div>
                            <div class="collapse-content text-sm">Buoni regali BeatFlow</div>
                            <div class="collapse-content text-sm">Come annullare i piani premium</div>
                            <div class="collapse-content text-sm">Pagamenti per il piano Duo</div>
                            <div class="collapse-content text-sm">Pagamento per il piano BeatFlow Premium Family</div>


                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Gestisci pagamenti</summary>
                            <div class="collapse-content text-sm">Come modificare i dettagli di pagamento</div>
                            <div class="collapse-content text-sm">Pagamenti per il piano Duo</div>
                            <div class="collapse-content text-sm">Pagamenti per il piano BeatFlow Premium Family</div>
                            <div class="collapse-content text-sm">Controllare le tue ricevute</div>
                            <div class="collapse-content text-sm">Come annullare i piani Premium</div>
                            <div class="collapse-content text-sm">La tua data di fatturazione</div>
                            <div class="collapse-content text-sm">Non è possibile abbonarsi a Premium nell'app iOS</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Metodo di pagamento</summary>
                            <div class="collapse-content text-sm">Metodi di pagamento accettati</div>
                            <div class="collapse-content text-sm">Pagamenti BeatFlow tramite la bolletta telefonica</div>
                            <div class="collapse-content text-sm">Pagamenti PayPal per BeatFlow</div>
                            <div class="collapse-content text-sm">Buoni regalo BeatFlow</div>
                            <div class="collapse-content text-sm">Pagare BeatFlow con Google Play Billing</div>
                            <div class="collapse-content text-sm">Il buono regalo non funziona</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Assistenza sugli addebiti</summary>
                            <div class="collapse-content text-sm">Assistenza per pagamento non riuscito</div>
                            <div class="collapse-content text-sm">Abbonamento annullato ma continuano gli addebiti</div>
                            <div class="collapse-content text-sm">Politica di rimborso</div>
                            <div class="collapse-content text-sm">Addebito senza usare BeatFlow Premium</div>
                            <div class="collapse-content text-sm">Addebiti eccessivi</div>
                            <div class="collapse-content text-sm">Doppio addebito</div>
                            <div class="collapse-content text-sm">Addebito per un periodo di prova gratuita</div>
                            <div class="collapse-content text-sm">Aggiornamenti dei prezzi</div>
                            <div class="collapse-content text-sm">Autenticazione del pagamento tramite carta</div>
                            <div class="collapse-content text-sm">Il prezzo di Premium include l'IVA o altre imposte?</div>
                            <div class="collapse-content text-sm">Contattaci</div>
                        </details>
                    </div>
                </details>

                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-solid fa-user" style="color: rgb(74, 222, 128);"></i> Gestisci il tuo account</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Accesso</summary>
                            <div class="collapse-content text-sm">Non riesco ad accedere a BeatFlow</div>
                            <div class="collapse-content text-sm">Come reimpostare o modificare la password di BeatFlow</div>
                            <div class="collapse-content text-sm">Metodi di accesso a BeatFlow</div>
                            <div class="collapse-content text-sm">Accesso a BeatFlow con Facebook</div>
                            <div class="collapse-content text-sm">Accesso a BeatFlow con Apple</div>
                            <div class="collapse-content text-sm">Accesso a BeatFlow con Google</div>
                            <div class="collapse-content text-sm">Accesso a Spotify con Samsung</div>
                            <div class="collapse-content text-sm">Impossibile riprodurre i contenuti all'estero</div>
                            <div class="collapse-content text-sm">Account BeatFlow disattivati</div>
                            <div class="collapse-content text-sm">Come disconnettersi da BeatFlow</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Assistenza profilo</summary>
                            <div class="collapse-content text-sm">Gestisci e personalizza il tuo profilo Beatflow</div>
                            <div class="collapse-content text-sm">Il nome utente e il nome visualizzato di BeatFlow</div>
                            <div class="collapse-content text-sm">La tua immagine del profilo BeatFlow</div>
                            <div class="collapse-content text-sm">Linee guida sulle immagini di profilo e playlist dell'utente</div>
                            <div class="collapse-content text-sm">Controlli relativi alla privacy e ai social</div>
                            <div class="collapse-content text-sm">Artisti ascoltati di recente</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Impostazioni dell'account</summary>
                            <div class="collapse-content text-sm">Sostituzione dell'indirizzo e-mail</div>
                            <div class="collapse-content text-sm">Modificare le impostazioni relative al Paese o alla regione</div>
                            <div class="collapse-content text-sm">Chiusura dell'account ed eliminazione dei dati</div>
                            <div class="collapse-content text-sm">Le tue impostazioni delle notifiche di BeatFlow</div>
                            <div class="collapse-content text-sm">Modifica del sesso o della data di nascita</div>
                            <div class="collapse-content text-sm">Come disconnettersi da Spotify</div>
                            <div class="collapse-content text-sm">Scollegare il tuo account Spotify da creatori di terze parti</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Sicurezza</summary>
                            <div class="collapse-content text-sm">Proteggi il tuo account BeatFlow</div>
                            <div class="collapse-content text-sm">Pensi che qualcuno si sia appropriato del tuo account?</div>
                            <div class="collapse-content text-sm">Questa e-mail di BeatFlow è legittima?</div>
                            <div class="collapse-content text-sm">Rilevamento degli abusi</div>
                            <div class="collapse-content text-sm">Verifica il tuo indirizzo e-mail</div>
                            <div class="collapse-content text-sm">Contattaci</div>
                        </details>
                    </div>
                </details>

                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-solid fa-star" style="color: rgb(74, 222, 128);"></i> Piani Premium</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Piani disponibili</summary>
                            <div class="collapse-content text-sm">Premium Individual</div>
                            <div class="collapse-content text-sm">Premium Student</div>
                            <div class="collapse-content text-sm">Piano Duo</div>
                            <div class="collapse-content text-sm">Piano Family</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Impostazioni del piano</summary>
                            <div class="collapse-content text-sm">Dettagli del tuo piano BeatFlow</div>
                            <div class="collapse-content text-sm">Come annullare i piani Premium</div>
                            <div class="collapse-content text-sm">Come modificare i piani Premium</div>
                            <div class="collapse-content text-sm">Premium non funziona</div>
                            <div class="collapse-content text-sm">Impossibile unirsi al piano Family</div>
                            <div class="collapse-content text-sm">Impossibile unirsi al piano Duo</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Premium Family</summary>
                            <div class="collapse-content text-sm">Piano Family</div>
                            <div class="collapse-content text-sm">Invitare o rimuovere membri del piano Family</div>
                            <div class="collapse-content text-sm">Indirizzo e verifica per il piano Family</div>
                            <div class="collapse-content text-sm">Pagamenti per il piano BeatFlow Premium Family</div>
                            <div class="collapse-content text-sm">Impossibile unirsi al piano Family</div>
                            <div class="collapse-content text-sm">Account gestiti per giovani ascoltatori</div>
                            <div class="collapse-content text-sm">Configurare un account gestito su Premium Family</div>
                            <div class="collapse-content text-sm">Passare a un account autogestito</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Premium Duo</summary>
                            <div class="collapse-content text-sm">Piano Duo</div>
                            <div class="collapse-content text-sm">Invitare o rimuovere membri del piano Duo</div>
                            <div class="collapse-content text-sm">Indirizzo e verifica per il piano Duo</div>
                            <div class="collapse-content text-sm">Pagamenti per il piano BeatFlow Premium Duo</div>
                            <div class="collapse-content text-sm">Impossibile unirsi al piano Duo</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Premium Student</summary>
                            <div class="collapse-content text-sm">Premium Student</div>
                            <div class="collapse-content text-sm">Rinnova Premium Student</div>
                            <div class="collapse-content text-sm">Verifica Premium Student non funzionante</div>
                            <div class="collapse-content text-sm">Università o istituto superiore non presente nell'elenco per Premium Student</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Account gestiti</summary>
                            <div class="collapse-content text-sm">Account gestiti per giovani ascoltatori</div>
                            <div class="collapse-content text-sm">Configurare un account gestito su Premium Family</div>
                            <div class="collapse-content text-sm">Configurare un account gestito</div>
                            <div class="collapse-content text-sm">Passare a un account autogestito</div>
                        </details>
                    </div>
                </details>

                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-brands fa-connectdevelop" style="color: rgb(74, 222, 128);"></i> Funzionalità in-app</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Per iniziare</summary>
                            <div class="collapse-content text-sm">Guida introduttiva a BeatFlow</div>
                            <div class="collapse-content text-sm">Cos'è BeatFlow?</div>
                            <div class="collapse-content text-sm">La tua libreria</div>
                            <div class="collapse-content text-sm">Vista Stai ascoltando</div>
                            <div class="collapse-content text-sm">Dove è disponibile BeatFlow?</div>
                            <div class="collapse-content text-sm">Dispositivi supportati per BeatFlow</div>
                            <div class="collapse-content text-sm">BeatFlow per uso pubblico o commerciale</div>
                            <div class="collapse-content text-sm">Tasti di scelta rapida BeatFlow</div>
                            <div class="collapse-content text-sm">BeatFlow for Artists</div>
                            <div class="collapse-content text-sm">BeatFlow for Creators</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Impostazioni app</summary>
                            <div class="collapse-content text-sm">Impostazioni video</div>
                            <div class="collapse-content text-sm">Impostazioni relative ai contenuti espliciti</div>
                            <div class="collapse-content text-sm">Normalizzazione del volume</div>
                            <div class="collapse-content text-sm">Qualità audio</div>
                            <div class="collapse-content text-sm">Brani con riproduzione automatica</div>
                            <div class="collapse-content text-sm">Transizioni tra i brani</div>
                            <div class="collapse-content text-sm">Equalizzatore</div>
                            <div class="collapse-content text-sm">Come abilitare l'ascolto privato</div>
                            <div class="collapse-content text-sm">Utilizzo di dati e Internet</div>
                            <div class="collapse-content text-sm">Informazioni sull'archiviazione di BeatFlow</div>
                            <div class="collapse-content text-sm">Come nascondere e visualizzare il pulsante Crea</div>
                            <div class="collapse-content text-sm">Come cambiare la lingua dell'app</div>
                            <div class="collapse-content text-sm">Il tuo backup, offline</div>
                            <div class="collapse-content text-sm">Exclusive mode</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Risoluzione dei problemi</summary>
                            <div class="collapse-content text-sm">Reinstallazione dell'app BeatFlow</div>
                            <div class="collapse-content text-sm">Aggiornamento della tua app BeatFlow</div>
                            <div class="collapse-content text-sm">BeatFlow non riproduce</div>
                            <div class="collapse-content text-sm">Perché l'app è cambiata?</div>
                            <div class="collapse-content text-sm">BeatFlow è in modalità offline</div>
                            <div class="collapse-content text-sm">Non riesco a sentire alcun suono su BeatFlow</div>
                            <div class="collapse-content text-sm">Musica o podcast mancanti</div>
                            <div class="collapse-content text-sm">Assistenza per il lettore web BeatFlow</div>
                            <div class="collapse-content text-sm">Risoluzione di controversie online</div>
                            <div class="collapse-content text-sm">Problematiche in corso</div>
                            <div class="collapse-content text-sm">Metadati difettosi o imprecisi</div>
                            <div class="collapse-content text-sm">Verifica della versione dell'app BeatFlow</div>
                            <div class="collapse-content text-sm">Contattaci</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Playlist</summary>
                            <div class="collapse-content text-sm">Crea e modifica le playlist</div>
                            <div class="collapse-content text-sm">Trova le playlist su BeatFlow</div>
                            <div class="collapse-content text-sm">Playlist mixate</div>
                            <div class="collapse-content text-sm">I mix di BeatFlow</div>
                            <div class="collapse-content text-sm">Salvare e ripristinare le playlist</div>
                            <div class="collapse-content text-sm">Playlist collaborative</div>
                            <div class="collapse-content text-sm">Cartelle playlist</div>
                            <div class="collapse-content text-sm">Pubblicazione di playlist sul tuo profilo</div>
                            <div class="collapse-content text-sm">Personalizza la copertina della playlist</div>
                            <div class="collapse-content text-sm">Linee guida sulle immagini di profilo e playlist dell'utente</div>
                            <div class="collapse-content text-sm">Consigli dai social nelle playlist</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Caratteristiche</summary>
                            <div class="collapse-content text-sm">Vista Stai ascoltando</div>
                            <div class="collapse-content text-sm">Cerca</div>
                            <div class="collapse-content text-sm">Completamento automatico della ricerca</div>
                            <div class="collapse-content text-sm">La tua libreria</div>
                            <div class="collapse-content text-sm">Ascolta in modalità offline</div>
                            <div class="collapse-content text-sm">Ordina e filtra</div>
                            <div class="collapse-content text-sm">Brani in coda</div>
                            <div class="collapse-content text-sm">Attività recente</div>
                            <div class="collapse-content text-sm">Riproduzione casuale</div>
                            <div class="collapse-content text-sm">BeatFlow Radio</div>
                            <div class="collapse-content text-sm">Visualizzazione del testo</div>
                            <div class="collapse-content text-sm">File locali</div>
                            <div class="collapse-content text-sm">Segui artisti, podcast e show</div>
                            <div class="collapse-content text-sm">BeatFlow Connect</div>
                            <div class="collapse-content text-sm">BeatFlow su altre app</div>
                            <div class="collapse-content text-sm">Come nascondere e mostrare i brani</div>
                            <div class="collapse-content text-sm">Suggerisci una funzionalità</div>
                            <div class="collapse-content text-sm">Escludi una playlist o una traccia dal profilo dei tuoi gusti</div>
                            <div class="collapse-content text-sm">DJ</div>
                            <div class="collapse-content text-sm">Widget per la schermata di blocco di BeatFlow su iPhone</div>
                            <div class="collapse-content text-sm">Widget della schermata Home di BeatFlow su Android</div>
                            <div class="collapse-content text-sm">Video musicali su BeatFlow</div>
                            <div class="collapse-content text-sm">Fitness con BeatFlow</div>
                            <div class="collapse-content text-sm">I tuoi aggiornamenti</div>
                            <div class="collapse-content text-sm">Messaggi BeatFlow</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Funzionalità social</summary>
                            <div class="collapse-content text-sm">Wrapped di BeatFlow</div>
                            <div class="collapse-content text-sm">Come abilitare l'ascolto privato</div>
                            <div class="collapse-content text-sm">Segui i tuoi amici e gestisci i follower</div>
                            <div class="collapse-content text-sm">Condivisione da BeatFlow</div>
                            <div class="collapse-content text-sm">Attività amici</div>
                            <div class="collapse-content text-sm">Inizia o partecipa a una Jam</div>
                            <div class="collapse-content text-sm">Discord e BeatFlow</div>
                            <div class="collapse-content text-sm">BeatFlow su SharePlay</div>
                            <div class="collapse-content text-sm">Consigli dai social nelle playlist</div>
                            <div class="collapse-content text-sm">TikTok e BeatFlow</div>
                            <div class="collapse-content text-sm">Attività di ascolto</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Podcast</summary>
                            <div class="collapse-content text-sm">Podcast e show</div>
                            <div class="collapse-content text-sm">BeatFlow for Creators</div>
                            <div class="collapse-content text-sm">Abbonamenti a pagamento ai podcast</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Audiolibri</summary>
                            <div class="collapse-content text-sm">Audiolibri nei piani Premium</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Privacy realtiva all'ascolto</summary>
                            <div class="collapse-content text-sm">Come abilitare l'ascolto privato</div>
                            <div class="collapse-content text-sm">Pubblicazione di playlist sul tuo profilo</div>
                            <div class="collapse-content text-sm">Privacy e accesso delle playlist</div>
                            <div class="collapse-content text-sm">Controlli relativi alla privacy e ai social</div>

                        </details>
                    </div>
                </details>
                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-regular fa-headphones" style="color: rgb(74, 222, 128);"></i> Risoluzione dei problemi e dispositivi</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Altoparlanti</summary>
                            <div class="collapse-content text-sm">BeatFlow e altoparlanti</div>
                            <div class="collapse-content text-sm">BeatFlow sui dispositivi Alexa</div>
                            <div class="collapse-content text-sm">BeatFlow sui dispositivi Google</div>
                            <div class="collapse-content text-sm">BeatFlow su Sonos</div>
                            <div class="collapse-content text-sm">BeatFlow su Connect</div>
                            <div class="collapse-content text-sm">Assistenza con il Bluetooth per BeatFlow</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Smartwatch</summary>
                            <div class="collapse-content text-sm">BeatFlow e smartwatch</div>
                            <div class="collapse-content text-sm">BeatFlow su Fitbit</div>
                            <div class="collapse-content text-sm">BeatFlow su Garmin Smartwatch</div>
                            <div class="collapse-content text-sm">BeatFlow sugli smartwatch Samsung Tizen</div>
                            <div class="collapse-content text-sm">BeatFlow su Connect</div>
                            <div class="collapse-content text-sm">Assistenza con il Bluetooth per BeatFlow</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">TV</summary>
                            <div class="collapse-content text-sm">BeatFlow e TV</div>
                            <div class="collapse-content text-sm">BeatFlow su Connect</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Gaming</summary>
                            <div class="collapse-content text-sm">BeatFlow su PlayStation</div>
                            <div class="collapse-content text-sm">BeatFlow su Xbox</div>
                            <div class="collapse-content text-sm">BeatFlow su Connect</div>
                            <div class="collapse-content text-sm">Discord e BeatFlow</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Automobili</summary>
                            <div class="collapse-content text-sm">BeatFlow e automobili</div>
                            <div class="collapse-content text-sm">Google Maps e BeatFlow</div>
                            <div class="collapse-content text-sm">BeatFlow Connect</div>
                            <div class="collapse-content text-sm">Assistenza con il Bluetooth per BeatFlow</div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Asistenti vocali</summary>
                            <div class="collapse-content text-sm">Siri e BeatFlow</div>
                            <div class="collapse-content text-sm">Bixby e BeatFlow</div>
                            <div class="collapse-content text-sm">BeatFlow sui dispositivi Google</div>
                        </details>
                    </div>
                </details>
                <details class="collapse collapse-arrow w-full max-w-lg" name="my-accordion-det-1">
                    <summary class="collapse-title font-semibold"><i class="fa-solid fa-lock" style="color: rgb(74, 222, 128);"></i> Sicurezza e privacy</summary>
                    <div class="collapse-content flex flex-col gap-2">
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Diritti in materia di dati e scelte inerenti alla privacy</summary>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Comprendere i tuoi dati</summary>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Contenuti soggetti a limiti di età e controllo della tue età</summary>
                        </details>
                        <details class="collapse collapse-arrow bg-base-200">
                            <summary class="collapse-title text-sm font-medium">Centro sulla privacy e sulla sicurezza</summary>
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