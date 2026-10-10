{{-- Form di ricerca: libreria locale oppure Jamendo. Usato dalla navbar e dalla barra mobile. --}}
<form action="{{ route('global.search') }}" method="GET">
    <label {{ $attributes->merge(['class' => 'input flex items-center gap-2']) }}>
        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </g>
        </svg>

        <input type="search" name="q" value="{{ request('q') }}" required placeholder="{{ __('ui.search_placeholder') }}" class="flex-1 min-w-0" />
        <select name="source" class="bg-slate-800/70 text-white text-sm outline-none" aria-label="{{ __('ui.search_source') }}">
            <option value="local" @selected(request('source') === 'local')>{{ __('ui.library') }}</option>
            <option value="jamendo" @selected(request('source') === 'jamendo')>{{ __('ui.explore') }}</option>
        </select>
    </label>
</form>
