<x-main-layout>
    <x-jadiumkm-header title="Produk Katalog" isBack="{{ false }}">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <x-jadiumkm-katalog-card title="{{ $product->title }}" price="{{ $product->price }}"
                    src="/storage/{{ $product->photo }}" href="{{ route('katalog-detail', $product->id) }}" />
            @endforeach
        </div>
    </x-jadiumkm-header>
</x-main-layout>
