<x-main-layout>
    <div  class="max-w-7xl m-auto p-4 min-h-screen">
    <div class="text-2xl font-bold mb-4">Produk Katalog</div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($products as $product)
            <a href={{ route('katalog-detail', $product->id) }}
                class="card card-compact h-72 bg-base-100 hover:shadow-md hover:cursor-pointer">
                <figure><img class="h-48" src="/storage/{{ $product->photo }}" alt="Shoes" /></figure>
                <div class="card-body justify-between">
                    <h2 class="card-title overflow-hidden">{{ $product->title }}</h2>
                    <div class="card-actions justify-end">
                        <span class="text-primary font-semibold">Rp. {{ $product->price }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    </div>
</x-main-layout>
