<x-app-layout>

    <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="py-4 font-bold text-xl">Formulir Edit Produk</div>

        <div class="form-control">
            <label for="title">Nama Produk</label>
            <input type="text" id="title" name="title" class="input input-bordered w-full" value="{{ $produk->title }}"/>
        </div>

        <div class="form-control w-full my-4">
            <label for="description">Deskripsi Produk</label>
            <textarea name="description" class="textarea textarea-bordered" placeholder="Deskripsi" id="description">{{ $produk->description }}</textarea>
        </div>

        <div class="form-control">
            <label for="price">Harga Produk</label>
            <input type="text" id="price" name="price" class="input input-bordered w-full" value={{$produk->price}}/>
        </div>

        <div class="py-4">Gambar Produk</div>

        <img src="/storage/{{ $produk->photo }}" class="w-96 h-96" alt="" id="output">

        <div class="my-4">
            <input type="file" name="photo" accept='image/*' onchange='openFile(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>

        <input type="submit" value="Edit Produk" class="btn btn-primary">

    </form>
</x-app-layout>
