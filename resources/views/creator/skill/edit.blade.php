<x-app-layout>
    <form action="{{ route('skill.update', $skill->id) }}" method="post">
        @csrf
        @method('patch')

        <div class="py-4 text-xl font-bold">Edit Keahlian</div>
        <div>
          <label for="name">Nama Keahlian</label>
          <input type="text" id="name" name="name" placeholder="Type here"
              class="input input-bordered w-full max-w-xs" value="{{ $skill->name }}"/>
        </div>

        <input type="submit" value="Tambah" class="btn btn-primary">

    </form>
</x-app-layout>
