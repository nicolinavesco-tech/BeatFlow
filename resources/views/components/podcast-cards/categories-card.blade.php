@props(['image', 'title', 'color' => 'bg-slate-700'])

<div class="group shrink-0 w-80 flex flex-col relative {{ $color }} rounded-lg p-2 transition">
    <a href="" class="block">
        <div class="w-80 h-48 rounded-lg object-cover">
            <h3 class="font-bold p-3 text-xl truncate">{{ $title }}</h3>
        </div>

    </a>
</div>