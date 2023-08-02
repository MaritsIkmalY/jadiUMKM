<x-main-layout>
    <x-jadiumkm-header :title="__('Webinar UMKM')" :back="__('edukasi')">
        @foreach ($webinar as $item)
            <x-jadiumkm-card title="{{ $item->title }}" src="/storage/{{ $item->photo }}" href="{{ $item->link }}"
                body="{{ $item->description }}" />
        @endforeach
    </x-jadiumkm-header>

</x-main-layout>
