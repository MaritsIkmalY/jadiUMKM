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

        <form action="{{ route('category.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-control w-full max-w-xs m-auto">
                <label class="label">
                    <span class="label-text">Kategori</span>
                    <p>{{ $kategori->category->name }}</p>
                </label>
                <select id="kategori" class="select select-bordered w-full max-w-xs" name="category_id"
                    :value="old('kategori')" required>
                    <option disabled selected>Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="my-3"></div>
            <button type="submit" class="btn btn-primary btn-sm m-auto flex">Perbarui</button>
        </form>
    </div>
</x-app-layout>
