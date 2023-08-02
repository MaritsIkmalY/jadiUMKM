<div
    class="max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
    <form {{ $attributes->merge(['method' => 'post']) }} action="{{ route('airecommender') }}">
        @csrf
        <div class="mb-4">
            <x-jadiumkm-textfield id="jenisrekom" name="jenisrekom" placeholder="Desain, pemasaran, dll"
                label="Jenis Rekomendasi" />
        </div>
        <div class="mb-6">
            <x-jadiumkm-textfield id="bidang" name="bidang" placeholder="Makanan, pakaian, dll"
                label="Bidang Usaha" />
        </div>

        <x-jadiumkm-btn>Lihat
            Rekomendasi</x-jadiumkm-btn>
    </form>

</div>
