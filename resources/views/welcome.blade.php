<x-main-layout>
    <div class="flex justify-center flex-col items-center gap-4">
        <div class="text-2xl">
            Selamat datang di website JadiUMKM
        </div>

        @if (Auth::user())
            <div>
                Kamu sudah masuk sebagai <span class="text-primary font-bold">{{ Auth::user()->role->name }}</span>
            </div>
        @else
            <div>
                Silahkan masuk atau daftar terlebih dahulu 
            </div>
        @endif
    </div>
</x-main-layout>
