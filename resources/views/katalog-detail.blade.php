<x-main-layout>
    <div class="flex flex-col gap-4 items-start">
        <div class="mx-auto">
            <figure class="rounded-md border">
                <img class="rounded-md w-96" src="/storage/{{ $product->photo }}" alt="product">
            </figure>
        </div>
        <div class="flex flex-col gap-2">
            <div>
                <h1 class="text-2xl font-bold">{{ $product->title }}</h1>
                {{ $product->description }}
                <p class="text-primary font-semibold mt-2 text-xl">
                    {{ $product->price }}
                </p>
            </div>


            <div class="text-xl font-bold">
                {{ $product->creator->user->name }}
            </div>
            <div class="text-success bg">
                @if(is_null($product->creator->user->phone))
                    <div class="text-bold">Nomor Belum Tersedia</div>
                @else
                <a href="https://wa.me/{{$product->creator->user->phone}}"
                    class="btn btn-success" target="_blank">WhatsApp</a>
                @endif
            </div>
        </div>
    </div>


</x-main-layout>
