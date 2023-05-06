<x-app-layout>

    <h1>Produk</h1>

    @if (session()->has('success'))
        <div class="alert alert-success my-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('produk.create') }}" class="btn btn-primary">Upload Produk</a>

    <div class="grid  grid-cols-1 sm:grid-cols-3 justify-center gap-4 mt-4">
        @foreach ($products as $item)
            <div class="card card-compact bg-base-100 shadow-xl">
                <figure><img src="/storage/{{ $item->photo }}" alt="Shoes" class="h-96" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $item->title }}</h2>
                    <span>Rp. {{$item->price}}</span>
                    <div class="card-actions justify-end items-center">

                        <a href={{ route('produk.edit', $item->id) }} class="btn btn-primary">Edit</a>

                        <form action="{{ route('produk.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Hapus"
                                class="btn border-none hover:bg-red-600 bg-red-600 p-4 text-white text-bold rounded-md font-bold cursor-pointer" />

                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
