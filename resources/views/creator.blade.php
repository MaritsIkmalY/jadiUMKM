<x-main-layout>
    @php
        error_reporting(0);
    @endphp
    <h1 class="my-2 font-bold text-2xl">Content Creator</h1>
    <div>
        <form action="{{ route('filter') }}" method="get">
            @csrf
            <button class="btn btn-primary" value="0" name="id">semua</button>
            @foreach ($categories as $category)
                <button value="{{ $category->id }}" class="btn btn-primary" name="id">{{ $category->name }}</button>
            @endforeach
        </form>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-10">

        @if (is_array($creators[0]) || count($creators) == 0)
            <div>
                Tidak ada content creator
            </div>
        @else
            @foreach ($creators as $creator)
            <div>
                <a href="{{ route('creator.detail', $creator->id) }}" class="card bg-base-100 shadow-xl">
                    <figure>
                        @if (!is_null($creator->user->photo))
                            <img src="/storage/{{ $creator->user->photo }}" class="h-96" alt="Shoes" />
                        @else
                            <img src="/assets/images/webinar.jpg" class="h-96" alt="profile" />
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
            </div>
            @endforeach
        @endif
    </div>

</x-main-layout>
