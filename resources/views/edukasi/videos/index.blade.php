<x-app-layout>
    @foreach ($videos as $video)
        {{ $video->title }}


        <iframe width="420" height="315" src="{{ $video->link }}">
        </iframe>
    @endforeach
</x-app-layout>
