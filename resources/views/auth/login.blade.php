<x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-jadiumkm-textfield :id="__('email')" :name="__('email')" label="Email" type="email"
                placeholder="Contoh email : email@gmail.com" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-jadiumkm-textfield :id="__('password')" :name="__('password')" label="Kata Sandi" type="password"
                placeholder="Isi Kata Sandi" :value="old('password')" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('register') }}">
                {{ __('Belum punya akun ?') }}
            </a>

            <x-jadiumkm-btn class="ml-3">
                Masuk
            </x-jadiumkm-btn>
        </div>
    </form>
</x-guest-layout>
