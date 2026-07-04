// Riproduzione audio con controllo di riproduzione e pausa
// Stato globale player
let currentAudio = null;
let isPlaying = false;

window.playSong = function (audioId) {
    const audioEl = document.getElementById(audioId);
    if (!audioEl) {
        console.error('Audio non trovato:', audioId);
        return;
    }

    const source = audioEl.querySelector('source')?.src;
    const card = audioEl.closest('[data-song-title]');
    const title = card?.dataset.songTitle || document.getElementById(audioId.replace('audio-', 'title-'))?.textContent || 'Brano';
    const artist = card?.dataset.songArtist || '';
    const songId = card?.dataset.songId || null;

    globalPlayer.load(source, title, artist, songId);
};

// Player globale
const globalPlayer = {
    audio: new Audio(),
    currentSongId: null,

    load(src, title, artist, songId) {
        this.audio.src = src;
        this.audio.play().catch(e => console.error('Play error:', e));
        this.currentSongId = songId;
        isPlaying = true;
        this.updateLikeButton(songId)
        this.updateUI(title, artist);
        this.updateLikeButton(songId);
        this.setPauseIcon();
    },

     updateUI(title, artist) {
        document.querySelector('#player-title').textContent = title;
        document.querySelector('#player-artist').textContent = artist;
        document.querySelector('.card-audio').classList.add('active');
        document.body.style.paddingBottom = '90px';
    },

    setPauseIcon() {
        document.getElementById('icon-pause').classList.remove('hidden');
        document.getElementById('icon-play').classList.add('hidden');
    },

    setPlayIcon() {
        document.getElementById('icon-pause').classList.add('hidden');
        document.getElementById('icon-play').classList.remove('hidden');
    },

    updateLikeButton(songId) {
    if (!songId) return;
    const btn = document.getElementById('btn-like');
    if (!btn) return;

    fetch(`/songs/${songId}/is-favorite`, {
        headers: { 'Accept': 'application/json' }
    })
    .then(res => {
        if (!res.ok) return; // utente non loggato — niente da fare
        return res.json();
    })
    .then(data => {
        if (!data) return;
        const svg = btn.querySelector('svg');
        if (data.is_favorite) {
            svg.setAttribute('fill', '#1DB954');
            svg.setAttribute('stroke', '#1DB954');
        } else {
            svg.setAttribute('fill', 'none');
            svg.setAttribute('stroke', 'currentColor');
        }
    })
    .catch(e => console.error(e));
},

    // bindEvents viene chiamato UNA SOLA VOLTA
    init() {
        this.audio.addEventListener('timeupdate', () => {
            const pct = this.audio.duration
                ? (this.audio.currentTime / this.audio.duration) * 100
                : 0;
            const el = document.getElementById('player-progress');
            if (el) el.style.width = pct + '%';

            const curr = document.getElementById('player-current-time');
            if (curr) curr.textContent = formatTime(this.audio.currentTime);
        });

        this.audio.addEventListener('loadedmetadata', () => {
            const dur = document.getElementById('player-duration');
            if (dur) dur.textContent = formatTime(this.audio.duration);
        });
    }
};
// Chiama init() UNA SOLA VOLTA dopo aver definito l'oggetto
globalPlayer.init();



function formatTime(sec) {
    if (isNaN(sec)) return '0:00';
    const m = Math.floor(sec / 60);
    const s = Math.floor(sec % 60).toString().padStart(2, '0');
    return `${m}:${s}`;
}
// Button add favorites
document.querySelector('#btn-like')?.addEventListener('click', () => {
    const songId = globalPlayer.currentSongId;
    if (!songId) return;

    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch(`/songs/${songId}/favorite`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
    })
        .then(response => {
            if (response.ok) {
                // Cambia il cuore in verde
                const btn = document.querySelector('#btn-like');
                const svg = btn.querySelector('svg');
                svg.setAttribute('fill', '#1DB954');
                svg.setAttribute('stroke', '#1DB954');
            }
        })
        .catch(e => console.error(e));

});


// Volume slider drag
const volumeSlider = document.querySelector('.volume .slider');
const volumeFill = document.getElementById('volume-fill');
const volumeThumb = document.getElementById('volume-thumb');

if (volumeSlider) {
    let isDragging = false;

    function setVolume(e) {
        const rect = volumeSlider.getBoundingClientRect();
        let pct = (e.clientX - rect.left) / rect.width;
        pct = Math.max(0, Math.min(1, pct)); // clamp 0-1

        globalPlayer.audio.volume = pct;
        volumeFill.style.width = (pct * 100) + '%';
        if (volumeThumb) volumeThumb.style.left = (pct * 100) + '%';
    }

    volumeSlider.addEventListener('click', setVolume);

    volumeSlider.addEventListener('mousedown', () => isDragging = true);
    document.addEventListener('mousemove', (e) => { if (isDragging) setVolume(e); });
    document.addEventListener('mouseup', () => isDragging = false);
}

// Volume button toggle mute
document.querySelector('.volume_button')?.addEventListener('click', () => {
    if (globalPlayer.audio.volume > 0) {
        globalPlayer.audio._prevVolume = globalPlayer.audio.volume;
        globalPlayer.audio.volume = 0;
        volumeFill.style.width = '0%';
    } else {
        globalPlayer.audio.volume = globalPlayer.audio._prevVolume || 0.8;
        volumeFill.style.width = (globalPlayer.audio.volume * 100) + '%';
    }
});

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
function scrollCarousel(carouselId, amount) {
    const carousel = document.getElementById(carouselId);
    if (!carousel) return;
    carousel.scrollBy({
        left: amount,
        behavior: 'smooth'
    });
}

window.scrollCarousel = scrollCarousel;

// Ricerca canzoni nella createPlaylist 
window.searchForPlaylist = function (event) {
    event.preventDefault();

    const query = document.querySelector('#playlistSearchInput').value;
    const resultsBox = document.querySelector('#playlistSearchResults');
    const source = document.querySelector('[name="source"]')?.value || 'local';

    const form = event.target;
    const playlistId = form.dataset.playlistId || null;

    fetch(`/search?q=${encodeURIComponent(query)}&source=${source}`, {
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
window.addSongToPlaylist = function (songId, playlistId, buttonEl) {
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch(`/playlists/${playlistId}/songs`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({ song_id: songId })
    })
        .then(response => {
            if (response.ok) {
                buttonEl.textContent = 'Aggiunta ✓';
                buttonEl.disabled = true;
                buttonEl.classList.add('opacity-50');
                setTimeout(() => location.reload(), 800);
            }
        })
        .catch(error => console.error('Errore', error));
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

// Global player 

document.getElementById('btn-play-pause')?.addEventListener('click', () => {
    if (globalPlayer.audio.paused) {
        globalPlayer.audio.play();
        document.getElementById('icon-pause').classList.remove('hidden');
        document.getElementById('icon-play').classList.add('hidden');
    } else {
        globalPlayer.audio.pause();
        document.getElementById('icon-pause').classList.add('hidden');
        document.getElementById('icon-play').classList.remove('hidden');
    }
});

// Seek sulla barra del tempo
document.querySelector('.card-audio .time')?.addEventListener('click', (e) => {
    const rect = e.currentTarget.getBoundingClientRect();
    const pct = (e.clientX - rect.left) / rect.width;
    globalPlayer.audio.currentTime = pct * globalPlayer.audio.duration;
});