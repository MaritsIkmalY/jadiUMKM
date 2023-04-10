<x-main-layout>

    <div class="flex flex-col gap-4 justify-center items-center">
        <h1>Video Gratis</h1>
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


</x-main-layout>
