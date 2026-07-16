<form action="{{ route('setLocale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="flex items-center gap-3 w-full text-left">
        <img src="{{asset('vendor/blade-flags/country-'.$lang.'.svg')}}" alt="{{$lang}}" class="w-6 h-6 rounded-sm">
        {{ $slot }}
        
    </button>
</form>
