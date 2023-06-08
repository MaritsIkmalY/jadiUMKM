<x-app-layout>
    <div class="sm:flex sm:flex-col sm:justify-center sm:items-center lg:flex-row">
        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/pembelajaran.jpg" alt="Video" /></figure>
            <div class="card-body">
                <h2 class="card-title">Portofolio</h2>
                <div class="card-actions w-full">
                    <button class="btn btn-primary"><a href="{{ route('portofolio.index') }}">Edit Portofolio</a></button>
                </div>
            </div>
        </div>

        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/pembelajaran.jpg" alt="Video" /></figure>
            <div class="card-body">
                <h2 class="card-title">Kategori</h2>
                <div class="card-actions w-full">
                    <button class="btn btn-primary"><a href="{{ route('kategori') }}">Edit Kategori</a></button>
                </div>
            </div>
        </div>

        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/premium.jpg" alt="Video Premium" /></figure>
            <div class="card-body">
                <h2 class="card-title">Pendidikan</h2>

                <div class="card-actions w-full">
                    <button class="btn btn-primary"><a href="{{ route('pendidikan.index') }}">Edit
                            Pendidikan</a></button>
                </div>
            </div>
        </div>
        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/webinar.jpg" alt="Webinar" /></figure>
            <div class="card-body">
                <h2 class="card-title">Kemampuan</h2>

                <div class="card-actions w-full">
                    <a href={{ route('skill.index') }} class="btn btn-primary">Edit Kemampuan</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
