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
        <form action="{{ route('webinar.update', $webinar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Judul</span>
                </label>
                <input type="text" value="{{ $webinar->title }}" class="input input-bordered w-full max-w-xs"
                    name='title' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Deskripsi</span>
                </label>
                <input type="text" value="{{ $webinar->description }}" class="input input-bordered w-full max-w-xs"
                    name='description' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Tautan</span>
                </label>
                <input type="text" value="{{ $webinar->link }}" class="input input-bordered w-full max-w-xs"
                    name='link' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Poster</span>
                </label>
                <input type="file" class="file-input file-input-bordered file-input-primary" name="photo" />
            </div>
            <div class="my-5"></div>
            <button type="submit" class="btn btn-primary btn-sm m-auto flex">Perbarui</button>
        </form>
    </div>
</x-app-layout>
