<x-main-layout>
    <div class="max-w-7xl m-auto p-4 min-h-screen">
        <div class="text-2xl font-bold mb-4 text-center">Ai Recommender</div>

        <x-jadiumkm-airecommender />

        @if ($result)
            <div class="flex justify-center mt-2">
                <div class="w-9/12 rounded-md bg-white border-2 border-gray-600 p-4 min-h-[500px]">
                    <div>
                        <a class="min-h-[500px] w-full outline-none" spellcheck="false"
                            href="{{ route('creator') }}">{{ $result }}</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-main-layout>
