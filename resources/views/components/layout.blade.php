<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BeatFlow</title>
  @php
    // Testi usati da resources/js/main.js, tradotti nella lingua corrente
    $jsTranslations = collect(['song', 'add', 'added', 'no_results', 'show_more', 'show_less'])
        ->mapWithKeys(fn ($key) => [$key => __('ui.' . $key)]);
  @endphp
  <script>
    window.BeatFlow = { i18n: @json($jsTranslations), loggedIn: @json(auth()->check()) };
  </script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ tab: new URLSearchParams(window.location.search).get('tab') || 'home' }">
  <x-navbar />

  {{$slot}}
  <x-audio-player />
  <x-footer />
</body>

</html>
