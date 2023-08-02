<x-app-layout>
    <form action="{{ route('portofolio.update', $portofolio->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="py-4 font-bold text-xl">Formulir Edit Portofolio</div>

        <div class="form-control">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="input input-bordered w-full" value="{{ $portofolio->title }}"/>
        </div>

        <div class="form-control w-full my-4">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="textarea textarea-bordered" placeholder="Deskripsi" id="description">{{ $portofolio->description }}</textarea>
        </div>

        <div class="py-4">Gambar Portofolio</div>

        <img src="/storage/{{ $portofolio->photo }}" class="w-96 h-96" alt="" id="output">

        <div class="my-4">
            <input type="file" name="photo" accept='image/*' onchange='openFile(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>

        <input type="submit" value="Edit Portofolio" class="btn btn-primary">
    </form>
</x-app-layout>
