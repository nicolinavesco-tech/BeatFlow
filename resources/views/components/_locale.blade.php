<form action="{{ route('setLocale', $lang) }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/country-'.$lang.'.svg')}}" alt="{{$lang}}" class="w-6 h-6">
    </button>
</form>