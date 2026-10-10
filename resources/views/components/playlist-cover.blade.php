{{-- Copertina di una playlist: l'immagine caricata oppure un riquadro con la nota musicale --}}
@props(['playlist', 'icon' => 'fa-2x'])

@if ($playlist->image_path)
<img src="{{ Storage::url($playlist->image_path) }}" alt="{{ $playlist->name }}" {{ $attributes->merge(['class' => 'object-cover shrink-0']) }}>
@else
<div role="img" aria-label="{{ $playlist->name }}" {{ $attributes->merge(['class' => 'shrink-0 flex items-center justify-center bg-[#282828] text-white']) }}>
    <i class="fa-solid fa-music {{ $icon }}"></i>
</div>
@endif
