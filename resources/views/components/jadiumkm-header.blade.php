@props(['title' => 'title', 'back' => ''])

<div class="max-w-7xl mx-auto p-4 min-h-screen">
    <x-jadiumkm-btn variant="secondary" class="flex gap-2 items-center" href="{{ route($back) }}"><svg
            class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 5H1m0 0 4 4M1 5l4-4" />
        </svg>Kembali</x-jadiumkm-btn>
    <h1 class="mt-4 font-bold text-2xl text-center">{{ $title }}</h1>

    <div class="flex items-center justify-center w-full flex-wrap gap-4 mt-5">
        {{ $slot }}
    </div>

</div>
