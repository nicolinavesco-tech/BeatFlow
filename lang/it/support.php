<?php

// Testi della pagina Assistenza (resources/views/support.blade.php)
return [
    'title' => 'Assistenza BeatFlow',
    'ai_search' => 'Cerca con l\'IA',
    'basic_search' => 'Ricerca di base',
    'search_placeholder' => 'Fai una domanda o descrivi il problema',
    'browse_articles' => 'Sfoglia gli articoli dell\'assistenza',

    // Ogni sezione: icona, titolo e gruppi di articoli
    'sections' => [
        [
            'icon' => 'fa-regular fa-credit-card',
            'title' => 'Pagamenti e fatturazione',
            'groups' => [
                'Argomenti consigliati' => [
                    'Aggiornamenti dei prezzi',
                    'Assistenza per pagamento non riuscito',
                    'Metodi di pagamento accettati',
                    'Come modificare il metodo di pagamento',
                    'Il buono regalo non funziona',
                    'Buoni regalo BeatFlow',
                    'Come annullare i piani Premium',
                    'Pagamenti per il piano Duo',
                    'Pagamenti per il piano BeatFlow Premium Family',
                ],
                'Gestisci pagamenti' => [
                    'Come modificare i dettagli di pagamento',
                    'Pagamenti per il piano Duo',
                    'Pagamenti per il piano BeatFlow Premium Family',
                    'Controllare le tue ricevute',
                    'Come annullare i piani Premium',
                    'La tua data di fatturazione',
                    'Non è possibile abbonarsi a Premium nell\'app iOS',
                ],
            ],
        ],
        [
            'icon' => 'fa-solid fa-user',
            'title' => 'Gestisci il tuo account',
            'groups' => [
                'Accesso' => [
                    'Non riesco ad accedere a BeatFlow',
                    'Come reimpostare o modificare la password di BeatFlow',
                    'Metodi di accesso a BeatFlow',
                    'Accesso a BeatFlow con Facebook',
                    'Accesso a BeatFlow con Apple',
                    'Accesso a BeatFlow con Google',
                ],
                'Assistenza profilo' => [
                    'Gestisci e personalizza il tuo profilo BeatFlow',
                    'Il nome utente e il nome visualizzato di BeatFlow',
                    'La tua immagine del profilo BeatFlow',
                    'Linee guida sulle immagini di profilo e playlist',
                    'Controlli relativi alla privacy e ai social',
                    'Artisti ascoltati di recente',
                ],
            ],
        ],
        [
            'icon' => 'fa-solid fa-star',
            'title' => 'Piani Premium',
            'groups' => [
                'Piani disponibili' => [
                    'Premium Individual',
                    'Premium Student',
                    'Piano Duo',
                    'Piano Family',
                ],
                'Impostazioni del piano' => [
                    'Dettagli del tuo piano BeatFlow',
                    'Come annullare i piani Premium',
                    'Come modificare i piani Premium',
                    'Premium non funziona',
                ],
            ],
        ],
        [
            'icon' => 'fa-brands fa-connectdevelop',
            'title' => 'Funzionalità in-app',
            'groups' => [
                'Per iniziare' => [
                    'Guida introduttiva a BeatFlow',
                    'Cos\'è BeatFlow?',
                    'La tua libreria',
                    'Vista Stai ascoltando',
                    'Dove è disponibile BeatFlow?',
                    'Dispositivi supportati',
                ],
                'Impostazioni app' => [
                    'Impostazioni video',
                    'Impostazioni relative ai contenuti espliciti',
                    'Normalizzazione del volume',
                    'Qualità audio',
                    'Riproduzione automatica',
                    'Come cambiare la lingua dell\'app',
                ],
            ],
        ],
        [
            'icon' => 'fa-regular fa-headphones',
            'title' => 'Risoluzione dei problemi e dispositivi',
            'groups' => [
                'Altoparlanti' => [
                    'BeatFlow e gli altoparlanti',
                    'BeatFlow sui dispositivi Alexa',
                    'BeatFlow sui dispositivi Google',
                ],
                'Smartwatch' => [
                    'BeatFlow e gli smartwatch',
                    'BeatFlow su Fitbit',
                    'BeatFlow sugli smartwatch Garmin',
                ],
            ],
        ],
        [
            'icon' => 'fa-solid fa-lock',
            'title' => 'Sicurezza e privacy',
            'groups' => [
                'I tuoi diritti sui dati e le scelte sulla privacy' => [],
                'Comprendere i tuoi dati' => [],
                'Contenuti con limiti di età e controlli sull\'età' => [],
            ],
        ],
    ],

    'quick_help' => 'Aiuto rapido',
    'quick_help_links' => [
        'Non riesco ad accedere a BeatFlow',
        'Assistenza per pagamento non riuscito',
        'Addebiti imprevisti',
        'Invitare o rimuovere membri del piano Family',
        'Come modificare i dettagli di pagamento',
    ],

    'community_title' => 'Visita la nostra community',
    'community_description' => 'Hai domande? Ottieni risposte dalla nostra community di fan esperti.',
    'community_button' => 'Vai alla community',
];
