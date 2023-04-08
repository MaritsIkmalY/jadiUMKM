<x-app-layout>
    <div class="container ">
        <div class="m-5">
            <h1 class="text-center font-bold">Formulir</h1>
        </div>
        <form action="{{ route('videos.store') }}" method="POST">
            @csrf
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Judul</span>
                </label>
                <input type="text" placeholder="Judul Video" class="input input-bordered w-full max-w-xs"
                    name='title' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Deskripsi singkat</span>
                </label>
                <input type="text" placeholder="Deskripsi singkat" class="input input-bordered w-full max-w-xs"
                    name='subtitle' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Tautan</span>
                </label>
                <input type="text" placeholder="Tautan" class="input input-bordered w-full max-w-xs"
                    name='link' />
            </div>
            <div class="form-control m-auto w-full max-w-xs items-start">
                <label class="label cursor-pointer">
                    <input type="radio" name="is_subscribe" value="1" class="radio checked:bg-blue-500 " />
                    <span class="label-text text-start mx-3">Berbayar</span>
                </label>
            </div>
            <div class="form-control m-auto w-full max-w-xs flex items-start">
                <label class="label cursor-pointer">
                    <input type="radio" name="is_subscribe" value="0" class="radio checked:bg-blue-500" />
                    <span class="label-text mx-3">Gratis</span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-sm m-auto flex">Tambahkan</button>
        </form>
    </div>
</x-app-layout>
