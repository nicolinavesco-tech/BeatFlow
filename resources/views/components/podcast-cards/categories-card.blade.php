@props(['image', 'title', 'color' => 'bg-slate-700'])

<div class="group shrink-0 w-full max-w-full flex flex-col relative {{ $color }} rounded-lg p-2 transition">
    <a href="" class="block">
        <div class="w-full h-48 rounded-lg object-cover">
            <h3 class="font-bold p-3 text-xl truncate">{{ $title }}</h3>
        </div>

    </a>
</div>