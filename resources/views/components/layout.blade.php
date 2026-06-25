<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BeatFlow</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ tab: new URLSearchParams(window.location.search).get('tab') || 'home' }">
  <x-navbar />

  {{$slot}}
  <x-audio-player />
  <x-footer />
</body>

</html>