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
                WhatsApp
                <div class="font-bold">
                    {{ $product->creator->user->phone }}
                </div>
            </div>
        </div>
    </div>


</x-main-layout>
