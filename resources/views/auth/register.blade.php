<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-jadiumkm-textfield :id="__('name')" :name="__('name')" label="Nama" type="text"
                placeholder="Isi dengan nama lengkap anda" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-jadiumkm-textfield :id="__('email')" :name="__('email')" label="Email" type="email"
                placeholder="Contoh email : email@gmail.com" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">

            <x-jadiumkm-select :name="__('role')" label="Daftar Sebagai">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </x-jadiumkm-select>

            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-jadiumkm-textfield :id="__('password')" :name="__('password')" label="Kata Sandi" type="password"
                placeholder="Isi Kata Sandi" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-jadiumkm-textfield :id="__('password_confirmation')" :name="__('password_confirmation')" label="Konfirmasi Kata Sandi" type="password"
                placeholder="Isi Konfirmasi Kata Sandi" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Sudah punya akun ?') }}
            </a>

            <x-jadiumkm-btn class="ml-4">
                {{ __('Register') }}
            </x-jadiumkm-btn>
        </div>
    </form>
</x-guest-layout>
