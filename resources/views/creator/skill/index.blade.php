<x-app-layout>
    <div class="py-4 font-bold text-xl">
        Unggah keahlianmu disini
    </div>

    <!-- The button to open modal -->
    <label for="my-modal-4" class="btn my-4">Tambah keahlian</label>

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
    <label for="my-modal-4" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            @include('creator.components.skill-create-form')
        </label>
    </label>

    <div class="overflow-x-auto my-4">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($skills as $skill)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $skill->name }}</td>
                        <td class="flex gap-4">
                            <a href="{{ route('skill.edit', $skill->id) }}" class="btn bg-yellow-500 border-none hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('skill.destroy', $skill->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Hapus"
                                    class="btn bg-red-600 border-none hover:bg-red-500" />
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>
