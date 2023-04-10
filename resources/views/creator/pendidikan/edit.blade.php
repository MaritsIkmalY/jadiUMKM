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
        <form action="{{ route('pendidikan.update', $pendidikan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Pendidikan</span>
                </label>
                <input type="text" value="{{ $pendidikan->name }}" class="input input-bordered w-full max-w-xs"
                    name='name' />
            </div>
            <div class="my-3"></div>
            <button type="submit" class="btn btn-primary btn-sm m-auto flex">Tambahkan</button>
        </form>
    </div>
</x-app-layout>
