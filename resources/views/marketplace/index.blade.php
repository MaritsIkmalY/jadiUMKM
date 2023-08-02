<x-app-layout>
    <div class="sm:flex sm:flex-col sm:justify-center sm:items-center lg:flex-row">
        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/slider/slider1.png" alt="gambar toko" /></figure>
            <div class="card-body">
                <h2 class="card-title">Produk</h2>
                <div class="card-actions w-full">
                    <button class="btn btn-primary"><a href="{{ route('products.index') }}">Lihat Produk</a></button>
                </div>
            </div>
        </div>
</x-app-layout>
