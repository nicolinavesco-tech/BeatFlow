{{-- Barra di ricerca per mobile e tablet (su desktop la ricerca è nella navbar) --}}
<div class="flex gap-2 pt-20 justify-center lg:hidden bg-black">
    <a href="{{ route('homepage') }}" class="btn rounded-full" aria-label="Home"><i class="fa-regular fa-house text-white"></i></a>
    <x-search-form class="w-65 md:w-100" />
</div>
