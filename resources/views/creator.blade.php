<x-main-layout>
    @php
        error_reporting(0);
    @endphp
    <x-jadiumkm-header title="Konten Kreator / Freelancer" isBack="{{ false }}">
        <div class="flex items-center flex-wrap">
            <form action="{{ route('filter') }}" method="get">
                @csrf
                <x-jadiumkm-btn variant="{{ request()->get('id') == 0 ? 'primary' : 'secondary' }}" value="0"
                    name="id">Semua</x-jadiumkm-btn>
                @foreach ($categories as $category)
                    <x-jadiumkm-btn variant="{{ request()->get('id') == $category->id ? 'primary' : 'secondary' }}"
                        value="{{ $category->id }}" name="id">{{ $category->name }}</x-jadiumkm-btn>
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
                    <x-jadiumkm-creator-card name="{{ $creator->user->name }}"
                        src="{{ Str::contains($creator->user->photo, 'default') ? '/assets/images/webinar.jpg' : '/storage/' . $creator->user->photo }}"
                        category="{{ $creator->category }}" desc="{{ $creator->description }}" id="{{ $creator->id }}"
                        detail="creator.detail">
                        <div class="flex items-center gap-2 flex-wrap p-2 justify-center min-h-[5rem]">
                            @foreach ($creator->category->take(2) as $category)
                                <span
                                    class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $category->category->name }}</span>
                            @endforeach
                        </div>

                    </x-jadiumkm-creator-card>
                @endforeach
            @endif
        </div>
    </x-jadiumkm-header>

</x-main-layout>
