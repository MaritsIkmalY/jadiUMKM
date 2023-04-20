<x-app-layout>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container py-5 max-w-2xl px-6 m-auto bg-white min-h-screen">
        <div class="m-5 flex justify-between">
            <h1 class="text-start font-bold">Pendidikan</h1>
            <label for="addPendidikan" class="btn btn-primary btn-xs">Tambahkan Pendidikan</label>
        </div>
        <div class="divider"></div>
        @if (count($pendidikan) == 0)
            Pendidikan Masih Kosong
        @else
            <div class="overflow-x-auto">
                <table class="table-auto m-auto">
                    @foreach ($pendidikan as $item)
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="border-b-2 px-5">
                                    <h2>{{ $item->name }}</h2>
                                </td>

                                <td class="border-b-2">
                                    <a href="{{ route('pendidikan.edit', $item->id) }}"
                                        class="btn btn-primary btn-xs">Edit</a>
                                </td>
                                <td class="border-b-2">
                                    <a href="{{ route('pendidikan.destroy', $item->id) }}"
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
    <input type="checkbox" id="addPendidikan" class="modal-toggle" />
    <label for="addPendidikan" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <h1>Pendidikan</h1>
            <form action="{{ route('pendidikan.store') }}" method="POST">
                @csrf
                <div class="form-control w-full max-w-xs m-auto">
                    <label class="label">
                        <span class="label-text">Pendidikan</span>
                    </label>
                    <input type="text" placeholder="Pendidikan" class="input input-bordered w-full max-w-xs"
                        name='name' />
                </div>
                <div class="my-3"></div>
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                </div>
            </form>
        </label>
    </label>
</x-app-layout>
