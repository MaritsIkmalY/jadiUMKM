<x-app-layout>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container py-5 max-w-2xl px-6 m-auto bg-white min-h-screen">
        <div class="m-5 flex justify-between">
            <h1 class="text-start font-bold">Video Pembelajaran</h1>
            @if (Auth::user()->role_id == 3)
                <a href="{{ route('videos.create') }}" class="btn btn-primary btn-sm">Tambah</a>
            @endif
        </div>
        <div class="divider"></div>
        <div class="overflow-x-auto">
            <table class="table-auto m-auto">
                @foreach ($videos as $video)
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border-b-2 px-5">
                                <h2>{{ $video->title }}</h2>
                                <p class="text-gray-400 text-xs">{{ $video->subtitle }}</p>
                            </td>
                            <td class="border-b-2">
                                <label for="{{ $video->id }}" class="btn btn-primary btn-xs mx-5">Tonton</label>
                            </td>
                            @if (Auth::user()->role_id == 3)
                                <td class="border-b-2">
                                    <a href="/admin/edukasi/videos/{{ $video->id }}"
                                        class="btn btn-primary btn-xs">Edit</a>
                                </td>
                                <td class="border-b-2">
                                    <a href="{{ route('videos.destroy', $video->id) }}"
                                        class="btn btn-primary btn-xs">Hapus</a>
                                </td>
                            @endif

                        </tr>
                    </tbody>
                    <input type="checkbox" id="{{ $video->id }}" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box relative h-96 w-full">
                            <label for="{{ $video->id }}"
                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                            <h3 class="text-lg font-bold mb-5">{{ $video->title }}</h3>
                            <iframe width="100%" height="250vh" src="{{ $video->link }}">
                            </iframe>
                        </div>
                    </div>
                @endforeach
            </table>
        </div>
    </div>

</x-app-layout>
