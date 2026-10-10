@php
    // Il codice della lingua non coincide sempre con quello del paese della bandiera (en -> gb)
    $flag = ['en' => 'gb'][$lang] ?? $lang;
@endphp
<form action="{{ route('setLocale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="flex items-center gap-3 w-full text-left">
        <img src="{{ asset('vendor/blade-flags/country-' . $flag . '.svg') }}" alt="{{ $lang }}" class="w-6 h-6 rounded-sm">
        {{ $slot }}
    </button>
</form>
