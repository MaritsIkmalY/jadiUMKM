<x-main-layout>
    <div class="max-w-7xl mx-auto p-4 min-h-screen">
        <x-jadiumkm-btn variant="secondary" class="flex gap-2 items-center" href="{{ route('edukasi') }}"><svg
                class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 5H1m0 0 4 4M1 5l4-4" />
            </svg>Kembali</x-jadiumkm-btn>
        <h1 class="mt-4 font-bold text-2xl text-center">Video Edukasi UMKM</h1>


        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 w-full gap-4 mt-5">
            @foreach ($videos as $video)
                <x-jadiumkm-card title="{{ $video->title }}" body="{{ $video->subtitle }}"
                    src="/assets/images/pembelajaran.jpg" button="Tonton" data-modal-target="{{ $video->id }}"
                    data-modal-toggle="{{ $video->id }}" />

                <x-jadiumkm-modal id="{{ $video->id }}" title="{{ $video->title }}">

                    <iframe width="100%" height="100%"
                        src="{{ $video->link }}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                </x-jadiumkm-modal>
            @endforeach
        </div>
    </div>


</x-main-layout>
