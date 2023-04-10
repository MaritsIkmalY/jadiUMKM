<x-main-layout>
    <h1>Content Creator</h1>

    <div class="grid grid-cols-3 justify-center gap-4 mt-24">
        @foreach ($creators as $creator)
            <a href="{{ route('creator.detail', $creator->id) }}" class="card bg-base-100 shadow-xl">
                <figure>
                    @if (!is_null($creator->user->photo))
                        <img src="/storage/{{ $creator->user->photo }}" class="h-96" alt="Shoes" />
                    @else
                        <img src="assets/images/webinar.jpg" class="h-96" alt="profile" />
                    @endif
                </figure>

                <div class="card-body">
                    <h2 class="card-title">
                        {{ $creator->user->name }}

                    </h2>
                    <p>{{ $creator->description }}</p>
                    <div class="card-actions justify-end">
                        @foreach ($creator->category as $category)
                            <div class="badge badge-outline">{{ $category->category->name }}</div>
                        @endforeach
                    </div>

                </div>
            </a>
        @endforeach

    </div>
</x-main-layout>
