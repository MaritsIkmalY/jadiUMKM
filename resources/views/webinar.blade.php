<x-main-layout>
  <div class="grid grid-cols-1 justify-center sm:grid-cols-3 gap-4">
    @foreach ($webinar as $item)
        <div class="card card-compact bg-base-100 shadow-xl  sm:my-5 md:my-2">
            <figure class="h-96"><img src="/storage/{{ $item->photo }}" alt="{{ $item->title }}" /></figure>
            <div class="card-body gap-4">
                <h2 class="card-title">{{ $item->title }}</h2>
                <div class="flex justify-between">
                    <p>{{ $item->description }}</p>
                    <div class="badge badge-secondary">Gratis</div>
                </div>
                <a class="btn btn-primary w-full" href="{{ $item->link }}" target="_blank">Ikut Webinar</a>
                @if (Auth::user()->role_id == 3)
                    <a class="btn btn-secondary w-full" href="{{ route('webinar.edit', $item->id) }}">Edit</a>
                    <a class="btn btn-danger w-full" href="{{ route('webinar.destroy', $item->id) }}">Hapus</a>
                @endif
            </div>
        </div>
    @endforeach
  </div>
</x-main-layout>
