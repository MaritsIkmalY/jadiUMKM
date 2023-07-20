<x-app-layout>
    <form action="{{ route('nib.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="py-4 font-bold text-xl">Formulir Pengajuan Nomor Induk Berusaha</div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="input input-bordered w-full" />
        </div>
        <div class="form-control">
            <label for="no_hp">No HP</label>
            <input type="text" id="no_hp" name="no_hp" class="input input-bordered w-full" />
        </div>
        <div class="form-control w-full my-4">
            <label for="deskripsi">Deskripsi Usaha</label>
            <textarea name="deskripsi" class="textarea textarea-bordered" id="deskripsi"></textarea>
        </div>
        <div class="py-4">KTP</div>
        <img class="w-48 h-48" id="output">
        <div class="my-4">
            <input type="file" name="ktp" accept='image/*' onchange='openFile(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>
        <div class="py-4">NPWP</div>
        <img class="w-48 h-48" id="output2">
        <div class="my-4">
            <input type="file" name="npwp" accept='image/*' onchange='openFile2(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>
        <div class="py-4">Akte Perusahaan</div>
        <img class="w-48 h-48" id="output3">
        <div class="my-4">
            <input type="file" name="npwp" accept='image/*' onchange='openFile3(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>
        <div class="py-4">Sketsa Lokasi</div>
        <img class="w-48 h-48" id="output4">
        <div class="my-4">
            <input type="file" name="npwp" accept='image/*' onchange='openFile4(event)'
                class="file-input file-input-bordered  w-full max-w-xs" />
        </div>
        <input type="submit" value="Upload" class="btn btn-primary">
    </form>
</x-app-layout>
