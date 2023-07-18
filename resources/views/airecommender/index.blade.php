<x-main-layout>
    <a href="{{ route('home') }}">
        <h3>AI Recommender</h3>
    </a>
    <form action="{{ route('airecommender') }}" method="post">
        @csrf
        <h4>Jenis rekomendasi</h4>
        <input type="text" name="jenisrekom" placeholder="contoh: desain, pemasaran, dll" required />
        <h4>Bidang usaha</h4>
        <input type="text" name="bidang" placeholder="contoh: makanan, pakaian, dll" required />
        <input type="submit" value="Lihat rekomendasi" />
    </form>
    <div class="result">{{ $result }}</div>
</x-main-layout>

