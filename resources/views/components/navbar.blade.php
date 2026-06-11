<div class="navbar fixed top-0 left-0 right-0 h-20 z-50 flex justify-between bg-black shadow-sm">
  <div class="w-100 ms-3">
    <a href="{{ route('homepage') }}" class="">
      <img src="/logo/logo.png" class="w-15" alt="Logo di BeatFlow" />
    </a>
  </div>

  <div class="navbar-center gap-2 hidden lg:flex justify-center flex-1 ">
    <a href="{{ route('homepage') }}" class="btn rounded-full"><i class="fa-regular fa-house text-white"></i></a>
    <form action="{{ route('global.search') }}" method="GET">
      <label class="input w-100 flex items-center gap-2">

        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <g
            stroke-linejoin="round"
            stroke-linecap="round"
            stroke-width="2.5"
            fill="none"
            stroke="currentColor">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.3-4.3"></path>
          </g>
        </svg>

        <input type="search" name="q" value="{{ request('q') }}" required placeholder="Cosa vuoi ascoltare?" class="flex-1" />
        <select name="source" class="bg-slate-800/70 text-white text-sm outline-none ">
          <option value="local" @selected(request('source')==='local' )>
            Libreria
          </option>
          <option value="jamendo" @selected(request('source')==='jamendo' )>
            Esplora
          </option>
        </select>
      </label>
    </form>
  </div>

  <div class="flex items-center gap-1 md:gap-4">
    @auth
    <button class="hidden md:block btn bg-white text-black rounded-3xl">Esplora Premium</button>

    <a href="" class="hidden md:block"><span class="text-gray-400"><i class="fa-solid fa-circle-down text-gray-400"></i> Installa app</span></a>
    <i class="fa-solid fa-bell text-white"></i>
    <div class="dropdown hidden md:block">
      <button tabindex="0"><i class="fa-solid fa-people-line text-white"></i></button>
      <div tabindex="-1" class="menu menu-sm dropdown-content  bg-slate-700/80 rounded-box z-1 w-55 p-2 space-y-5 mt-3 shadow translate-x-[-50%]">
        <div class="flex flex-col items-center">
          <h4 class="text-white font-bold text-lg text-center p-5">Controlla cosa stanno riproducendo i tuoi amici con l'app Windows</h4>
          <p class="text-gray-300 text-center">Esplora le tracce che i tuoi amici stanno ascoltando e lasciati ispirare.</p>
        </div>
        <div class="flex flex-col items-center gap-3">
          <button class="cursor-pointer">
            <div class="flex max-w-36 h-12 px-3 gap-2 rounded-xl items-center justify-center bg-black text-white dark:text-black dark:bg-white sm:h-14">
              <i class="fa-brands fa-microsoft text-blue-700 fa-2x"></i>
              <div>
                <div class="text-[.5rem] sm:text-xs text-left">Scarica da</div>
                <div class="text-sm font-semibold font-sans -mt-1 sm:text-xl">
                  Microsoft
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="{{ route('download') }}" class=" text-center text-white text-sm hover:underline">Scarica direttamente da BeatFlow</a>
      </div>
    </div>


    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost avatar h-15 rounded-full gap-3">
        <span class="text-white">{{ auth()->user()->name }}</span>
        <div class="w-15 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul tabindex="-1" class="menu menu-sm dropdown-content bg-slate-700/80 rounded-box z-1 mt-3 w-90 p-2 space-y-3 shadow translate-x-[-50%]">
        <li>
          <a href="{{ route('accountOverview') }}" class="flex justify-between items-center text-white text-base">
            <span>Account</span>
            <i class="fa-solid fa-up-right-from-square"></i>
          </a>
        </li>
        <li><a class="text-white text-base">Profilo</a></li>
        <li><a class="text-white text-base">Recenti</a></li>
        <li>
          <a href="{{ route('premium') }}" class="flex justify-between items-center text-white text-base">
            <span>Effettua l'upgrade a Premium</span>
            <i class="fa-solid fa-up-right-from-square"></i>
          </a>
        </li>
        <li>
          <a href="{{ route('support') }}" class="flex justify-between items-center text-white text-base">
            <span>Assistenza</span>
            <i class="fa-solid fa-up-right-from-square"></i>
          </a>
        </li>
        <li>
          <a href="{{ route('download') }}" class="flex justify-between items-center text-white text-base">
            <span>Scarica</span>
            <i class="fa-solid fa-up-right-from-square"></i>
          </a>
        </li>
        <li><a class="text-white text-base">Settings</a></li>
        <li>
          <form action="{{route('logout')}}" method="POST" class="">
            @csrf
            <button class="text-white text-base" type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
    @else

    <div class="navbar-end md:hidden">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
        </div>
        <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 space-y-3 shadow translate-x-[-70%]">
          <li>
            <a href="{{ route('premium') }}" class="text-base font-bold">
              <span>Premium</span>
            </a>
          </li>
          <li>
            <a href="{{ route('support') }}" class="text-base font-bold">
              <span>Assistenza</span>
            </a>
          </li>
          <li>
            <a href="{{ route('download') }}" class="text-base font-bold">
              <span>Scarica </span>
            </a>
          </li>
          <li>
            <a href="{{ route('download') }}" class="text-base text-gray-400">Installa app</a>
          </li>
          <li>
            <a href="{{route('register')}}" class="text-base font-bold">Iscriviti</a>
          </li>
          <li>
            <a href="{{route('login')}}" class="btn rounded-2xl w-25 bg-amber-50 text-black">Accedi</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="hidden md:flex items-center gap-6">
      <a href="{{ route('premium') }}">
        <span>Premium</span>
      </a>
      <a href="{{ route('support') }}">
        <span>Assistenza</span>
      </a>
      <a href="{{ route('download') }}">
        <span>Scarica</span>
      </a>
      <a href="{{ route('download') }}" class=" text-gray-400 flex items-center gap-1">
        <i class="fa-solid fa-circle-down"></i>
        <span>Installa app</span>
      </a>

      <div class="w-px h-5 bg-gray-500"></div>

      <a href="{{ route('register') }}" class="text-lg font-bold">Iscriviti</a>
      <a href="{{ route('login') }}" class="btn rounded-2xl w-25 bg-amber-50 text-black">Accedi</a>
    </div>
    @endauth


  </div>
</div>