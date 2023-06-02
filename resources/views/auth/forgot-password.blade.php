<x-guest-layout>
    <div class="form--parent ">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="form--wrapper" method="POST" action="{{ route('password.email') }}">
            @csrf

            <p class="div--forgot--password">Voer de e-mail in waarmee je een account hebt aangemaakt. Check je mail om je wachtwoord te resetten.</p>

            <!-- Email Address -->
            <div class="form--div">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <x-primary-button class="form--div form--div--button">
                {{ __('Reset wachtwoord') }}
            </x-primary-button>

        </form>
    </div>
</x-guest-layout>
