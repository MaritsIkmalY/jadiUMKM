<x-app-layout>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container py-5 max-w-2xl px-6 m-auto bg-white min-h-screen">
        <div class="m-5 flex justify-between">
            <h1 class="text-start font-bold">Pendidikan</h1>
            <a href="{{ route('pendidikan.create') }}" class="btn btn-primary btn-xs">Tambah pendidikan</a>
        </div>
        <div class="divider"></div>
        @if (count($pendidikan) == 0)
            Halo
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
</x-app-layout>
