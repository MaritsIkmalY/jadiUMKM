<form action="{{ route('skill.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="py-4 text-xl font-bold">Tambah Keahlian</div>

    <div class="form-control mb-4 w-full">
        <label for="name">Nama Keahlian</label>
        <input type="text" id="name" name="name" placeholder="Type here"
            class="input input-bordered w-full max-w-xs" />
    </div>

    <input type="submit" value="Tambah" class="btn btn-primary">

</form>
