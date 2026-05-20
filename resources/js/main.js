
// Riproduzione audio con controllo di riproduzione e pausa
let currentAudio=null;

window.playSong = function (audioId) {
    const newAudio = document.getElementById(audioId);

    if (!newAudio) {
        console.error('Audio non trovato:', audioId);
        return;
    }

    if (currentAudio === newAudio) {
        if(newAudio.paused) {
            newAudio.play();
        }else{
            newAudio.pause();
        }
        return;
    }

    if (currentAudio) {
        currentAudio.pause();
        currentAudio.currentTime = 0;
    }

    newAudio.play().catch(error => {
        console.error('Errore nella riproduzione:', error);
    });
    
    currentAudio = newAudio;
};

// Toggle per mostrare/nascondere le canzoni aggiuntive
const btn=document.querySelector('#toggleBtn');
const hiddenSongs=document.querySelectorAll('.hidden.extra-song');

let expanded=false;
btn.addEventListener('click', () => {
    expanded=!expanded;

    hiddenSongs.forEach(song => {
        if(expanded) {
            song.classList.remove('hidden');
            song.classList.add('show');
        } else {
            song.classList.remove('show');
            song.classList.add('hidden');
        }
    });
    btn.textContent=expanded ? 'Mostra meno' : 'Mostra altro';
});

// Carosello Brani di tendenza
function scrollTrending(amount) {
    const carousel = document.getElementById('trendingCarousel');

    if (!carousel) return;

    carousel.scrollBy({
        left: amount,
        behavior: 'smooth'
    });
}

// Rendi la funzione globale (importante per onclick nel Blade)
window.scrollTrending = scrollTrending;