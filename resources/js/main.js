// Riproduzione audio con controllo di riproduzione e pausa
let currentAudio = null;
let playlistId = null;

window.playSong = function (audioId) {
    const newAudio = document.getElementById(audioId);

    if (!newAudio) {
        console.error('Audio non trovato:', audioId);
        return;
    }

    if (currentAudio === newAudio) {
        if (newAudio.paused) {
            newAudio.play();
        } else {
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
const btn = document.querySelector('#toggleBtn');
const hiddenSongs = document.querySelectorAll('.hidden.extra-song');

if (btn) {
    let expanded = false;
    btn.addEventListener('click', () => {
        expanded = !expanded;

        hiddenSongs.forEach(song => {
            if (expanded) {
                song.classList.remove('hidden');
                song.classList.add('show');
            } else {
                song.classList.remove('show');
                song.classList.add('hidden');
            }
        });
        btn.textContent = expanded ? 'Mostra meno' : 'Mostra altro';
    });
}

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

// Ricerca canzoni nella createPlaylist 
window.searchForPlaylist = function (event) {
    event.preventDefault();

    const query = document.querySelector('#playlistSearchInput').value;
    const resultsBox = document.querySelector('#playlistSearchResults');

    const urlParts=window.location.pathname.split('/');
    playlistId = urlParts[urlParts.indexOf('playlists')+1];

    fetch(`/search?q=${encodeURIComponent(query)}`, {
        headers: { 'Accept': 'application/json' }
    })
        .then(response => response.json())
        .then(songs => {
            resultsBox.innerHTML = songs.map(song => `
            <div class= "flex items-center justify-between gap-3 hover:bg-slate-700/55 rounded-lg p-2">
                <div class="flex gap-3">
                   <img src="/${song.image_path}" class="w-12 h-12 rounded object-cover">
                  <div>
                      <p class="text-white font-bold">${song.title}</p>
                      <p class="text-gray-400 text-sm">${song.artist}</p>
                    </div>
                </div>
               <button type="button" onclick="addSongToPlaylist(${song.id}, ${playlistId}, this)" class="btn rounded-full border border-white">Aggiungi</button>
            </div>`).join('');
        });
};
// Aggiunta canzone alla playlist quando l'utente è loggato
window.addSongToPlaylist=function(songId, playlistId, buttonEl){
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch(`/playlists/${playlistId}/songs`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({song_id:songId})
    })
        .then(response=>{
            if(response.ok){
                buttonEl.textContent = 'Aggiunta ✓';
                buttonEl.disabled=true;
                buttonEl.classList.add('opacity-50');
                setTimeout(()=>location.reload(), 800);
            }
        })
        .catch(error=>console.error('Errore', error));
}

// Preview playlist
function previewNewPlaylistImage(event) {
    const file = event.target.files[0];
    if (!file) return;

    const preview = document.getElementById('new-playlist-preview');
    const placeholder = document.getElementById('new-playlist-placeholder');

    preview.src = URL.createObjectURL(file);
    preview.classList.remove('hidden');
    placeholder.classList.add('hidden');
}