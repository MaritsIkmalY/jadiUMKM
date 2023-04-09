<x-app-layout>

    <form action="{{ route('portofolio.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="py-4">Portofolio</div>

        <div class="form-control">
            <label class="input-group">
                <span>Judul</span>
                <input type="text" name="title" class="input input-bordered" />
            </label>
        </div>

        <div class="form-control mt-4 w-full">
            <textarea id="myeditorinstance" name="description">Description</textarea>
        </div>

        <div class="py-4">Gambar Portofolio</div>

        <img src="" id="output">

        <div class="my-4">
            <input type="file" name="photo" accept='image/*' onchange='openFile(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>



        <input type="submit" value="Upload" class="btn btn-primary">

    </form>

</x-app-layout>
