// Testi tradotti passati da Blade (vedi components/layout.blade.php)
const t = (key) => window.BeatFlow?.i18n?.[key] ?? key;

const csrfToken = () => document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

// Evita che titoli o nomi inseriti dagli utenti vengano interpretati come HTML (XSS)
function escapeHtml(value) {
    const div = document.createElement('div');
    div.textContent = value ?? '';
    return div.innerHTML;
}

function formatTime(sec) {
    if (!Number.isFinite(sec)) return '0:00';
    const m = Math.floor(sec / 60);
    const s = Math.floor(sec % 60).toString().padStart(2, '0');
    return `${m}:${s}`;
}

// Player globale
const globalPlayer = {
    audio: new Audio(),
    currentSongId: null,
    isFavorite: false,

    load(src, title, artist, songId) {
        this.audio.src = src;
        this.audio.play().catch(e => console.error('Play error:', e));
        this.currentSongId = songId;
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

    setLikeIcon(isFavorite) {
        this.isFavorite = isFavorite;
        const svg = document.querySelector('#btn-like svg');
        if (!svg) return;
        svg.setAttribute('fill', isFavorite ? '#1DB954' : 'none');
        svg.setAttribute('stroke', isFavorite ? '#1DB954' : 'currentColor');
    },

    updateLikeButton(songId) {
        this.setLikeIcon(false);
        // gli ospiti non hanno preferiti: evitiamo una richiesta che finirebbe in 401
        if (!songId || !window.BeatFlow?.loggedIn || !document.getElementById('btn-like')) return;

        fetch(`/songs/${songId}/is-favorite`, { headers: { 'Accept': 'application/json' } })
            .then(res => (res.ok ? res.json() : null)) // utente non loggato: niente da fare
            .then(data => {
                // l'utente potrebbe aver già cambiato canzone nel frattempo
                if (data && songId === this.currentSongId) this.setLikeIcon(data.is_favorite);
            })
            .catch(e => console.error(e));
    },

    // Chiamato UNA SOLA VOLTA, dopo aver definito l'oggetto
    init() {
        this.audio.addEventListener('timeupdate', () => {
            const pct = this.audio.duration ? (this.audio.currentTime / this.audio.duration) * 100 : 0;
            const el = document.getElementById('player-progress');
            if (el) el.style.width = pct + '%';

            const curr = document.getElementById('player-current-time');
            if (curr) curr.textContent = formatTime(this.audio.currentTime);
        });

        this.audio.addEventListener('loadedmetadata', () => {
            const dur = document.getElementById('player-duration');
            if (dur) dur.textContent = formatTime(this.audio.duration);
        });

        // A fine brano torna l'icona play
        this.audio.addEventListener('ended', () => this.setPlayIcon());
    }
};
globalPlayer.init();

// Riproduzione di un brano: legge titolo, artista e id dalla card che contiene l'<audio>
window.playSong = function (audioId) {
    const audioEl = document.getElementById(audioId);
    if (!audioEl) {
        console.error('Audio non trovato:', audioId);
        return;
    }

    const source = audioEl.querySelector('source')?.src;
    if (!source) return;

    const card = audioEl.closest('[data-song-title]');
    const title = card?.dataset.songTitle || document.getElementById(audioId.replace('audio-', 'title-'))?.textContent || t('song');
    const artist = card?.dataset.songArtist || '';
    const songId = card?.dataset.songId || null;

    globalPlayer.load(source, title, artist, songId);
};

// Cuore del player: aggiunge o toglie dai preferiti
document.querySelector('#btn-like')?.addEventListener('click', () => {
    const songId = globalPlayer.currentSongId;
    if (!songId) return;

    const wasFavorite = globalPlayer.isFavorite;

    fetch(`/songs/${songId}/favorite`, {
        method: wasFavorite ? 'DELETE' : 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken(),
            'Accept': 'application/json',
        }
    })
        .then(response => {
            if (response.status === 401) {
                window.location.href = '/login';
                return;
            }
            if (response.ok) globalPlayer.setLikeIcon(!wasFavorite);
        })
        .catch(e => console.error(e));
});

// Play / pausa
document.getElementById('btn-play-pause')?.addEventListener('click', () => {
    if (!globalPlayer.audio.src) return;

    if (globalPlayer.audio.paused) {
        globalPlayer.audio.play();
        globalPlayer.setPauseIcon();
    } else {
        globalPlayer.audio.pause();
        globalPlayer.setPlayIcon();
    }
});

// Seek sulla barra del tempo
document.querySelector('.card-audio .time')?.addEventListener('click', (e) => {
    // prima che il brano sia caricato la durata è NaN
    if (!Number.isFinite(globalPlayer.audio.duration)) return;

    const rect = e.currentTarget.getBoundingClientRect();
    const pct = (e.clientX - rect.left) / rect.width;
    globalPlayer.audio.currentTime = pct * globalPlayer.audio.duration;
});

// Volume: trascinamento dello slider
const volumeSlider = document.querySelector('.volume .slider');
const volumeFill = document.getElementById('volume-fill');
const volumeThumb = document.getElementById('volume-thumb');

function showVolume(pct) {
    if (volumeFill) volumeFill.style.width = (pct * 100) + '%';
    if (volumeThumb) volumeThumb.style.left = (pct * 100) + '%';
}

if (volumeSlider) {
    let isDragging = false;

    function setVolume(e) {
        const rect = volumeSlider.getBoundingClientRect();
        const pct = Math.max(0, Math.min(1, (e.clientX - rect.left) / rect.width));

        globalPlayer.audio.volume = pct;
        showVolume(pct);
    }

    volumeSlider.addEventListener('click', setVolume);
    volumeSlider.addEventListener('mousedown', () => isDragging = true);
    document.addEventListener('mousemove', (e) => { if (isDragging) setVolume(e); });
    document.addEventListener('mouseup', () => isDragging = false);
}

// Volume: pulsante muto
let previousVolume = 0.8;
document.querySelector('.volume_button')?.addEventListener('click', () => {
    if (globalPlayer.audio.volume > 0) {
        previousVolume = globalPlayer.audio.volume;
        globalPlayer.audio.volume = 0;
    } else {
        globalPlayer.audio.volume = previousVolume;
    }
    showVolume(globalPlayer.audio.volume);
});

// Mostra / nasconde le canzoni aggiuntive nella pagina artista
const toggleBtn = document.querySelector('#toggleBtn');
const hiddenSongs = document.querySelectorAll('.hidden.extra-song');

if (toggleBtn) {
    let expanded = false;
    toggleBtn.addEventListener('click', () => {
        expanded = !expanded;
        hiddenSongs.forEach(song => song.classList.toggle('hidden', !expanded));
        toggleBtn.textContent = expanded ? t('show_less') : t('show_more');
    });
}

// Caroselli orizzontali
window.scrollCarousel = function (carouselId, amount) {
    document.getElementById(carouselId)?.scrollBy({ left: amount, behavior: 'smooth' });
};

// Ricerca canzoni da aggiungere a una playlist (sempre nella libreria locale:
// i brani di Jamendo non sono nel database e non si possono aggiungere)
window.searchForPlaylist = function (event) {
    event.preventDefault();

    const form = event.target;
    const query = form.querySelector('#playlistSearchInput').value;
    const resultsBox = document.querySelector('#playlistSearchResults');
    const playlistId = form.dataset.playlistId;

    fetch(`/search?q=${encodeURIComponent(query)}&source=local`, {
        headers: { 'Accept': 'application/json' }
    })
        .then(response => (response.ok ? response.json() : []))
        .then(songs => {
            if (!songs.length) {
                resultsBox.innerHTML = `<p class="text-gray-400 p-2">${escapeHtml(t('no_results'))}</p>`;
                return;
            }

            resultsBox.innerHTML = songs.map(song => `
            <div class="flex items-center justify-between gap-3 hover:bg-slate-700/55 rounded-lg p-2">
                <div class="flex gap-3 min-w-0">
                    <img src="/${escapeHtml(song.image_path)}" alt="" class="w-12 h-12 rounded object-cover shrink-0">
                    <div class="min-w-0">
                        <p class="text-white font-bold truncate">${escapeHtml(song.title)}</p>
                        <p class="text-gray-400 text-sm truncate">${escapeHtml(song.artist)}</p>
                    </div>
                </div>
                <button type="button" data-song-id="${Number(song.id)}" class="add-to-playlist btn rounded-full border border-white shrink-0">${escapeHtml(t('add'))}</button>
            </div>`).join('');

            resultsBox.querySelectorAll('.add-to-playlist').forEach(button => {
                button.addEventListener('click', () => addSongToPlaylist(button.dataset.songId, playlistId, button));
            });
        })
        .catch(error => console.error('Errore', error));
};

// Aggiunta di una canzone alla playlist (utente loggato)
function addSongToPlaylist(songId, playlistId, buttonEl) {
    fetch(`/playlists/${playlistId}/songs`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken(),
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({ song_id: songId })
    })
        .then(response => {
            if (response.ok) {
                buttonEl.textContent = t('added') + ' ✓';
                buttonEl.disabled = true;
                buttonEl.classList.add('opacity-50');
                setTimeout(() => location.reload(), 800);
            }
        })
        .catch(error => console.error('Errore', error));
}

// Anteprima dell'immagine scelta per una nuova playlist.
// Va su window perché è richiamata da onchange="" nell'HTML e main.js è un modulo.
window.previewNewPlaylistImage = function (event) {
    const file = event.target.files[0];
    if (!file) return;

    const preview = document.getElementById('new-playlist-preview');
    const placeholder = document.getElementById('new-playlist-placeholder');

    preview.src = URL.createObjectURL(file);
    preview.classList.remove('hidden');
    placeholder?.classList.add('hidden');
};
