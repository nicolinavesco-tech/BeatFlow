<x-layout>
    <main class="min-h-screen flex justify-center items-center md:p-0 flex-col bg-[url('/public/media/background-auth.jpg')] bg-cover bg-center">
        <img src="logo/logo.png" alt="" class="logo hidden md:block w-30 md:w-40" />

        <form method="POST" action="{{ route('login') }}" class="login_form flex justify-center pt-5">
            @csrf
            <fieldset class="fieldset bg-base-100 border-gray-700 rounded-2xl w-75 md:w-100 border mt-2.5 text-center p-4 space-y-3">
                <h2 class="text-3xl font-bold text-white mb-2">Login</h2>
                <div>

                    <label class="label" for="email"></label>
                    <input type="email" class="input" id="email" placeholder="mario@rossi.com" name="email">


                </div>

                <div>

                    <label class="label" for="password"></label>
                    <input type="password" class="input" id="password" name="password" placeholder="Password" />

                </div>
                <button type="submit" class="btn bg-green-500 hover:bg-green-600 mt-4 text-l">Login</button>
            </fieldset>

        </form>
        <div class="mt-2 text-center px-15">
            <span>Non hai un account BeatFlow? <a href="{{ route('register') }}" class="text-white underline hover:text-green-400 font-extrabold">Crea un nuovo account</a></span>
        </div>
    </main>
</x-layout>