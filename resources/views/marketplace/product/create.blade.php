<x-app-layout>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="py-4 font-bold text-xl">Formulir Tambah Produk</div>

        <div class="form-control">
            <label for="title">Nama Produk</label>
            <input type="text" id="title" name="title" class="input input-bordered w-full" />
        </div>

        <div class="form-control w-full my-4">
            <label for="description">Deskripsi Produk</label>
            <textarea name="description" class="textarea textarea-bordered" placeholder="Deskripsi" id="description"></textarea>
        </div>

        <div class="form-control">
            <label for="price">Harga Produk</label>
            <input type="text" id="price" name="price" class="input input-bordered w-full" />
        </div>

        <div class="py-4">Gambar Produk</div>

        <img class="w-96 h-96" id="output">

        <div class="my-4">
            <input type="file" name="photo" accept='image/*' onchange='openFile(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>

        <input type="submit" value="Upload" class="btn btn-primary">

    </form>

</x-app-layout>
