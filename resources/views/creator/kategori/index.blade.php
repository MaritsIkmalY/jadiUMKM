<x-app-layout>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container py-5 max-w-2xl px-6 m-auto bg-white min-h-screen">
        <div class="m-5 flex justify-between">
            <h1 class="text-start font-bold">Kategori</h1>
            <label for="addKategori" class="btn btn-primary btn-xs">Tambahkan Kategori</label>
        </div>
        <div class="divider"></div>
        @if (count($kategori) == 0)
            Halo
        @else
            <div class="overflow-x-auto">
                <table class="table-auto m-auto">
                    @foreach ($kategori as $item)
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="border-b-2 px-5">
                                    <h2>{{ $item->category->name }}</h2>
                                </td>
                                <td class="border-b-2">
                                    <a href="{{ route('kategori.edit', $item->id) }}"
                                        class="btn btn-primary btn-xs">Edit</a>
                                </td>
                                <td class="border-b-2">
                                    <a href="{{ route('kategori.destroy', $item->id) }}"
                                        class="btn btn-primary btn-xs">Hapus</a>
                                </td>

                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
    </div>
    @endif

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="addKategori" class="modal-toggle" />
    <label for="addKategori" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <h1>Kategori</h1>
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="mt-4">
                    <select id="kategori" class="select select-bordered w-full max-w-xs" name="category_id"
                        :value="old('kategori')" required>
                        <option disabled selected>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="my-3"></div>
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                </div>
            </form>
        </label>
    </label>
</x-app-layout>
