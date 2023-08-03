@foreach ($videos as $video)
    <x-jadiumkm-card title="{{ $video->title }}" body="{{ $video->subtitle }}" src="/assets/images/pembelajaran.jpg"
        button="Tonton" data-modal-target="{{ $video->id }}" data-modal-toggle="{{ $video->id }}">
        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 14 16">
            <path
                d="M0 .984v14.032a1 1 0 0 0 1.506.845l12.006-7.016a.974.974 0 0 0 0-1.69L1.506.139A1 1 0 0 0 0 .984Z" />
        </svg>
    </x-jadiumkm-card>

    <x-jadiumkm-modal id="{{ $video->id }}" title="{{ $video->title }}">
        <iframe width="100%" height="100%" src="{{ $video->link }}" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

    </x-jadiumkm-modal>
@endforeach
