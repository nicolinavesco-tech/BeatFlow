<?php

// Testi della pagina Assistenza (resources/views/support.blade.php)
return [
    'title' => 'BeatFlow Support',
    'ai_search' => 'AI search',
    'basic_search' => 'Basic search',
    'search_placeholder' => 'Ask a question or describe the issue',
    'browse_articles' => 'Browse support articles',

    // Ogni sezione: icona, titolo e gruppi di articoli
    'sections' => [
        [
            'icon' => 'fa-regular fa-credit-card',
            'title' => 'Payments & billing',
            'groups' => [
                'Recommended topics' => [
                    'Price updates',
                    'Payment failed support',
                    'Accepted payment methods',
                    'How to change your payment method',
                    'Gift card not working',
                    'BeatFlow gift cards',
                    'How to cancel Premium plans',
                    'Payments for the Duo plan',
                    'Payments for the BeatFlow Premium Family plan',
                ],
                'Manage payments' => [
                    'How to change payment details',
                    'Duo plan payments',
                    'BeatFlow Premium Family plan payments',
                    'Check your receipts',
                    'How to cancel Premium plans',
                    'Your billing date',
                    'Unable to subscribe to Premium in the iOS app',
                ],
            ],
        ],
        [
            'icon' => 'fa-solid fa-user',
            'title' => 'Manage your account',
            'groups' => [
                'Access' => [
                    'I can’t log in to BeatFlow',
                    'How to reset or change your BeatFlow password',
                    'BeatFlow login methods',
                    'Logging in to BeatFlow with Facebook',
                    'Logging in to BeatFlow with Apple',
                    'Logging in to BeatFlow with Google',
                ],
                'Profile help' => [
                    'Manage and customize your BeatFlow profile',
                    'BeatFlow username and display name',
                    'Your BeatFlow profile picture',
                    'Profile and playlist image guidelines',
                    'Privacy and social controls',
                    'Recently played artists',
                ],
            ],
        ],
        [
            'icon' => 'fa-solid fa-star',
            'title' => 'Premium plans',
            'groups' => [
                'Available plans' => [
                    'Premium Individual',
                    'Premium Student',
                    'Duo plan',
                    'Family plan',
                ],
                'Plan settings' => [
                    'Your BeatFlow plan details',
                    'How to cancel Premium plans',
                    'How to change Premium plans',
                    'Premium is not working',
                ],
            ],
        ],
        [
            'icon' => 'fa-brands fa-connectdevelop',
            'title' => 'In-app features',
            'groups' => [
                'Get started' => [
                    'BeatFlow quick start guide',
                    'What is BeatFlow?',
                    'Your library',
                    'Now Playing view',
                    'Where is BeatFlow available?',
                    'Supported devices',
                ],
                'App settings' => [
                    'Video settings',
                    'Explicit content settings',
                    'Volume normalization',
                    'Audio quality',
                    'Automatic playback',
                    'How to change the app language',
                ],
            ],
        ],
        [
            'icon' => 'fa-regular fa-headphones',
            'title' => 'Troubleshooting & devices',
            'groups' => [
                'Speakers' => [
                    'BeatFlow and speakers',
                    'BeatFlow on Alexa devices',
                    'BeatFlow on Google devices',
                ],
                'Smartwatches' => [
                    'BeatFlow and smartwatches',
                    'BeatFlow on Fitbit',
                    'BeatFlow on Garmin smartwatches',
                ],
            ],
        ],
        [
            'icon' => 'fa-solid fa-lock',
            'title' => 'Security & privacy',
            'groups' => [
                'Your data rights and privacy choices' => [],
                'Understand your data' => [],
                'Age-restricted content and age controls' => [],
            ],
        ],
    ],

    'quick_help' => 'Quick help',
    'quick_help_links' => [
        'I can’t log in to BeatFlow',
        'Payment failed support',
        'Unexpected charges',
        'Invite or remove members from the Family plan',
        'How to change payment details',
    ],

    'community_title' => 'Visit our community',
    'community_description' => 'Have questions? Get answers from our expert fan community.',
    'community_button' => 'Go to the community',
];
