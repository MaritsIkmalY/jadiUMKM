<x-main-layout>
    <x-jadiumkm-header title="Detail Produk {{ $product->title }}" back="katalog">
        <div class="flex flex-col md:flex-row justify-start items-start gap-2 flex-wrap">
            <figure class="rounded-md border flex-1">
                <img class="rounded-md" src="/storage/{{ $product->photo }}" alt="product">
            </figure>

            <div class="flex flex-col gap-6 p-6">
                <h1 class="text-2xl font-bold">{{ $product->title }}</h1>
                {{ $product->description }}
                <p class="text-blue-600 font-semibold text-xl">
                    Rp. {{ $product->price }}
                </p>

                <div class="flex items-center gap-2">
                    <img class="w-10 h-10 rounded-full"
                        src="{{ Str::contains($product->creator->user->photo, 'default') ? '/assets/images/webinar.jpg' : '/storage/' . $product->creator->user->photo }}"
                        alt="Rounded avatar">
                    <span class="text-xl font-bold">{{ $product->creator->user->name }}</span>
                </div>

                @if (!is_null($product->creator->user->phone))
                    <x-jadiumkm-btn href="https://wa.me/{{ $product->creator->user->phone }}" target="_blank">Hubungi
                        Penjual</x-jadiumkm-btn>
                @endif

            </div>


        </div>

    </x-jadiumkm-header>


</x-main-layout>
