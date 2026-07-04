<x-layout>
    <main class="min-h-screen flex justify-center items-center md:p-0 flex-col bg-[url('/public/media/background-auth.jpg')] bg-cover bg-center">
        <img src="logo/logo.png" alt="" class="logo hidden md:block w-30 md:w-40" />

        <form method="POST" action="{{ route('login') }}" class="login_form flex justify-center pt-5">
            @csrf
            <fieldset class="fieldset bg-base-100 border-gray-700 rounded-2xl w-75 md:w-100 border mt-2.5 text-center p-4 space-y-3">
                <h2 class="text-3xl font-bold text-white mb-2">{{ __('ui.login_title') }}</h2>
                <div>

                    <label class="label" for="email"></label>
                    <input type="email" class="input" id="email" placeholder="{{ __('ui.email_placeholder') }}" required name="email">


                </div>

                <div>

                    <label class="label" for="password"></label>
                    <input type="password" class="input" id="password" name="password" required placeholder="{{ __('ui.password') }}" />

                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <button type="submit" class="btn bg-green-500 hover:bg-green-600 mt-4 text-l">{{ __('ui.login') }}</button>
            </fieldset>

        </form>
        <div class="mt-2 text-center px-15">
            <span>{{ __('ui.no_account') }} <a href="{{ route('register') }}" class="text-white underline hover:text-green-400 font-extrabold">{{ __('ui.create_account') }}</a></span>
        </div>
    </main>
</x-layout>