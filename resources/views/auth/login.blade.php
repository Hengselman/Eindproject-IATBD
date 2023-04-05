<x-guest-layout>
    <div class="form--parent">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="form--wrapper" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form--div">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form--div">
                <x-input-label for="password" :value="__('Wachtwoord')" />

                <x-text-input id="password" class=""
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="form--div">
                <label for="remember_me" class="">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="">Wachtwoord onthouden</span>
                </label>
            </div>

            <div class="form--div">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </a>
                @endif

                <x-primary-button class="form--div form--div--button">
                    {{ __('Aanmelden') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
