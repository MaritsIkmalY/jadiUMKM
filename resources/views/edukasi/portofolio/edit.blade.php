<x-app-layout>

    <form action="{{ route('portofolio.update', $portofolio->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="py-4">Portofolio</div>

        <div class="form-control">
            <label class="input-group">
                <span>Judul</span>
                <input type="text" name="title" class="input input-bordered" value={{ $portofolio->title }} />
            </label>
        </div>

        <div class="py-4">Deskripsi</div>

        <div class="form-control mt-4">
            <textarea id="myeditorinstance" name="description">{{ $portofolio->description }}</textarea>
        </div>

        <div class="py-4">Gambar Portofolio</div>

        <img src="" class="w-96" alt="" id="output">

        <div class="my-4">
            <input type="file" name="photo" accept='image/*' onchange='openFile(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>

        <input type="submit" value="Edit Portofolio" class="btn btn-primary">

    </form>
</x-app-layout>
