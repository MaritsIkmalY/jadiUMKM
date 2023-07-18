<x-main-layout>
    <div class="text-2xl font-bold mb-4">Ai Recommender</div>

    <div class="flex justify-center items-center">
        <div class="bg-white p-8 shadow-md w-9/12">
            <form action="{{ route('airecommender') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="jenisrekom" class="block text-gray-700">Jenis Rekomendasi</label>
                    <input type="text" id="jenisrekom" name="jenisrekom"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="desain, pemasaran, dll">
                </div>
                <div class="mb-4">
                    <label for="bidang" class="block text-gray-700">Bidang Usaha</label>
                    <input type="text" id="bidang" name="bidang"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="makanan, pakaian, dll">
                </div>
                <button class="btn btn-primary hover:btn-blue-600 font-semibold px-4 py-2 rounded-md">Lihat
                    Rekomendasi</button>
            </form>
        </div>
    </div>

    @if ($result)
        <div class="flex justify-center mt-2">
            <div class="w-9/12 rounded-md bg-white border-2 border-gray-600 p-4 min-h-[500px]">
                <div>
                    <textarea class="min-h-[500px] w-full outline-none" spellcheck="false">{{ $result }}
                    </textarea>
                </div>
            </div>
        </div>
    @endif
</x-main-layout>
