<form action="{{ route('portofolio.store') }}" method="post">
    @csrf
    <div class="py-4">Portofolio</div>

    <div class="form-control">
        <label class="input-group">
            <span>Judul</span>
            <input type="text" name="title" class="input input-bordered" value={{ $title }} />
        </label>
    </div>

    <div class="form-control mt-4">
        <label class="input-group">
            <span>Deskripsi</span>
            <input type="text" name="description" class="input input-bordered" value={{ $description }}/>
        </label>
    </div>

    <div class="py-4">Gambar Portofolio</div>

    <div class="mb-8">
        <input type="file" name="file" id="file" class="sr-only" />
        <label for="file"
            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
            <div>
                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                    Drop files here
                </span>
                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                    Or
                </span>
                <span
                    class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                    Browse
                </span>
            </div>
        </label>
    </div>

    <input type="submit" value="Upload" class="btn btn-primary">

</form>
