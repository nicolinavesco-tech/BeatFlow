<x-layout>
    <main class="flex justify-center items-center flex-col min-h-screen pt-35 md:pt-20 bg-[url('/public/media/background-auth.jpg')] bg-cover bg-center pb-10">
        <img src="logo/logo.png" alt="" class="logo-register hidden md:block w-30 md:w-40" />
        <form action="{{ route('register') }}" class="flex justify-center pt-5" method="POST">
            @csrf
            <div class="fieldset bg-base-100 border-gray-700 rounded-2xl w-90 md:w-100 border mt-2.5 text-center p-4 space-y-3">
                <h2 class="fieldset-legend text-3xl mx-auto px-2">{{ __('ui.register') }}</h2>

                <div>
                    <label class="label" for="name"></label>
                    <input type="text" class="input" id="name" name="name" required placeholder="{{ __('ui.name') }}" />
                </div>

                <div>
                    <label class="label" for="lastname"></label>
                    <input type="text" class="input" id="lastname" name="lastname" required placeholder="{{ __('ui.lastname') }}" />
                </div>
                <div>
                    <label class="label" for="username"></label>
                    <input type="text" class="input" id="username" name="username" required placeholder="{{ __('ui.username') }}" />
                </div>

                <div>
                    <label class="label" for="email"></label>
                    <input type="email" class="input" id="email" name="email" required placeholder="{{ __('ui.email_placeholder') }}" />
                </div>

                <div>
                    <label class="label" for="password"></label>
                    <input type="password" class="input" id="password" name="password" required placeholder="{{ __('ui.password') }}" />
                </div>

                <div>
                    <label class="label" for="password_confirmation"></label>
                    <input type="password" class="input" id="password_confirmation" name="password_confirmation" required placeholder="{{ __('ui.confirm_password') }}" />
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
                <button type="submit" class="btn bg-green-500 hover:bg-green-600 mt-4 text-l">
                    {{ __('ui.register') }}
                </button>
            </div>
        </form>

        <div class="mt-2 text-center">
            <span>
                {{ __('ui.already_account') }}
                <a href="{{ route('login') }}" class="text-white underline hover:text-green-400 font-extrabold">{{ __('ui.login') }}</a>
            </span>
        </div>
    </main>
</x-layout>