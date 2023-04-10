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
        <form action="{{ route('videos.update', $video->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Judul</span>
                </label>
                <input type="text" value="{{ $video->title }}" class="input input-bordered w-full max-w-xs"
                    name='title' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Deskripsi singkat</span>
                </label>
                <input type="text" value="{{ $video->subtitle }}" class="input input-bordered w-full max-w-xs"
                    name='subtitle' />
            </div>
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Tautan</span>
                </label>
                <input type="text" value="{{ $video->link }} class="input input-bordered w-full max-w-xs"
                    name='link' />
            </div>
            <div class="form-control m-auto w-full max-w-xs items-start">
                <label class="label cursor-pointer">
                    <input type="radio" name="is_subscribe" value="1"
                        {{ $video->is_subscribe == 1 ? 'checked' : 'unchecked' }} class="radio checked:bg-blue-500 " />
                    <span class="label-text text-start mx-3">Berbayar</span>
                </label>
            </div>
            <div class="form-control m-auto w-full max-w-xs flex items-start">
                <label class="label cursor-pointer">
                    <input type="radio" name="is_subscribe" {{ $video->is_subscribe == 0 ? 'checked' : 'unchecked' }}
                        value="0" class="radio checked:bg-blue-500" />
                    <span class="label-text mx-3">Gratis</span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-sm m-auto flex">Perbarui</button>
        </form>
    </div>
</x-app-layout>
