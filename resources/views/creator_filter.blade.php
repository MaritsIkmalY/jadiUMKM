<x-main-layout>
    @foreach ($creators as $creator)
        {{ $creator->user->name }}
    @endforeach
</x-main-layout>
