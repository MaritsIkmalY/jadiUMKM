<x-app-layout>
    <div class="container ">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="m-5">
            <h1 class="text-center font-bold">Formulir</h1>
        </div>
        <form action="{{ route('webinar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Judul</span>
                </label>
                <input type="text" placeholder="Judul Webinar" class="input input-bordered w-full max-w-xs"
                    name='title' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Deskripsi</span>
                </label>
                <textarea class="textarea textarea-bordered" placeholder="Deskripsi" name="description"></textarea>
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Tautan</span>
                </label>
                <input type="text" placeholder="Tautan" class="input input-bordered w-full max-w-xs"
                    name='link' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Poster</span>
                </label>
                <img id="output" src="" class="my-2">
                <input type="file" class="file-input file-input-bordered file-input-primary" name="photo"
                    accept="image/*" onchange="openFile(event)" />
            </div>
            <div class="my-5"></div>
            <button type="submit" class="btn btn-primary btn-sm m-auto flex">Tambahkan</button>
        </form>
    </div>
</x-app-layout>
