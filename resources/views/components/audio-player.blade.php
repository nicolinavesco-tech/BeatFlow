<div class="card-audio" id="global-player">
  <div class="top">
    <div class="pfp">
      <img id="player-cover" src="" alt="" class="w-full h-full object-cover rounded-md hidden">
      <div class="playing" id="playing-animation">
        <div class="greenline line-1"></div>
        <div class="greenline line-2"></div>
        <div class="greenline line-3"></div>
        <div class="greenline line-4"></div>
        <div class="greenline line-5"></div>
      </div>
    </div>
    <div class="texts">
      <p class="title-1" id="player-title">—</p>
      <p class="title-2" id="player-artist">—</p>
    </div>
  </div>

  <div class="controls">
    <div class="volume-wrapper">
      <svg class="volume_button" width="24" height="20" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M11.26 3.691A1.2 1.2 0 0 1 12 4.8v14.4a1.199 1.199 0 0 1-2.048.848L5.503 15.6H2.4a1.2 1.2 0 0 1-1.2-1.2V9.6a1.2 1.2 0 0 1 1.2-1.2h3.103l4.449-4.448a1.2 1.2 0 0 1 1.308-.26Zm6.328-.176a1.2 1.2 0 0 1 1.697 0A11.967 11.967 0 0 1 22.8 12a11.966 11.966 0 0 1-3.515 8.485 1.2 1.2 0 0 1-1.697-1.697A9.563 9.563 0 0 0 20.4 12a9.565 9.565 0 0 0-2.812-6.788 1.2 1.2 0 0 1 0-1.697Zm-3.394 3.393a1.2 1.2 0 0 1 1.698 0A7.178 7.178 0 0 1 18 12a7.18 7.18 0 0 1-2.108 5.092 1.2 1.2 0 1 1-1.698-1.698A4.782 4.782 0 0 0 15.6 12a4.78 4.78 0 0 0-1.406-3.394 1.2 1.2 0 0 1 0-1.698Z" clip-rule="evenodd" />
      </svg>
      <div class="volume">
        <div class="slider">
          <div class="green" id="volume-fill"></div>
        </div>
        <div class="circle" id="volume-thumb"></div>
      </div>
    </div>

    <button class="contro-btn hover:text-[#23da63]" id="btn-casual">
      <i class="fa-solid fa-shuffle"></i>
    </button>

    <button id="btn-prev" class="control-btn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8906 4.20444C19.2197 3.31836 21 4.27115 21 5.86854V18.1315C21 19.7289 19.2197 20.6817 17.8906 19.7956L8.69337 13.6641C7.50591 12.8725 7.50591 11.1276 8.69337 10.3359L17.8906 4.20444ZM19 5.86854L9.80277 12L19 18.1315V5.86854Z" />
        <path d="M5 5C5 4.44772 4.55228 4 4 4C3.44772 4 3 4.44772 3 5V19C3 19.5523 3.44772 20 4 20C4.55228 20 5 19.5523 5 19V5Z" />
      </svg>
    </button>


    <button id="btn-play-pause" class="control-btn play-btn">
      <svg id="icon-pause" width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M21.6 12a9.6 9.6 0 1 1-19.2 0 9.6 9.6 0 0 1 19.2 0ZM8.4 9.6a1.2 1.2 0 1 1 2.4 0v4.8a1.2 1.2 0 1 1-2.4 0V9.6Zm6-1.2a1.2 1.2 0 0 0-1.2 1.2v4.8a1.2 1.2 0 1 0 2.4 0V9.6a1.2 1.2 0 0 0-1.2-1.2Z" clip-rule="evenodd" />
      </svg>
      <svg id="icon-play" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" class="hidden">
        <path fill-rule="evenodd" d="M12 2.4a9.6 9.6 0 1 0 0 19.2A9.6 9.6 0 0 0 12 2.4ZM9.6 8.4l6 3.6-6 3.6V8.4Z" clip-rule="evenodd" />
      </svg>
    </button>

    <button id="btn-next" class="control-btn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.1094 4.20444C4.78029 3.31836 3 4.27115 3 5.86854V18.1315C3 19.7289 4.78029 20.6817 6.1094 19.7956L15.3066 13.6641C16.4941 12.8725 16.4941 11.1276 15.3066 10.3359L6.1094 4.20444ZM5 5.86854L14.1972 12L5 18.1315V5.86854Z" />
        <path d="M21 5C21 4.44772 20.5523 4 20 4C19.4477 4 19 4.44772 19 5V19C19 19.5523 19.4477 20 20 20C20.5523 20 21 19.5523 21 19V5Z" />
      </svg>
    </button>
    <button class="control-btn hover:text-[#23da63]" id="btn-repeat">
      <i class="fa-solid fa-repeat"></i>
    </button>

  </div>
  <div class="player-right">
    <button id="btn-like" class="control-btn">
      <svg width="24" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
        <path d="M3.343 7.778a4.5 4.5 0 0 1 7.339-1.46L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 20.364l-7.682-7.682a4.501 4.501 0 0 1-.975-4.904Z" />
      </svg>
    </button>
  </div>

  <div class="time ">
    <div class="elapsed" id="player-progress"></div>
  </div>
  <p class="timetext time_now" id="player-current-time">0:00</p>
  <p class="timetext time_full" id="player-duration">0:00</p>
</div>