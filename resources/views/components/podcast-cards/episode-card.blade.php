@props(['image', 'title', 'description'])

<div class="group shrink-0 w-52 flex flex-col relative hover:bg-slate-700/55 p-2 transition">
    <a href="" class="block">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-48 h-48  object-cover">
        <h3 class="font-bold pt-2 truncate">{{ $title }}</h3>
        <p class="text-sm text-gray-400 truncate">{{ $description }}</p>
    </a>
    <button type="button" class="absolute bottom-16 right-4 z-10 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300">
        <i class="fa-solid fa-circle-play fa-3x" style="color: rgb(0, 182, 27);"></i>
    </button>
</div>