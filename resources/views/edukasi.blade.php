<x-main-layout>

    <div class="sm:flex sm:flex-col sm:justify-center sm:items-center lg:flex-row">
        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/pembelajaran.jpg" alt="Video" /></figure>
            <div class="card-body">
                <h2 class="card-title">Pembelajaran</h2>
                <p>Belajar bisnis makin asik dengan video pembelajaran!</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"><a href="{{ route('video') }}">Lihat Pembelajaran</a></button>
                </div>
            </div>
        </div>
        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/premium.jpg" alt="Video Premium" /></figure>
            <div class="card-body">
                <h2 class="card-title">Sharing UMKM</h2>
                <p>Sharing dengan mentor terbaik untuk meningkatkan bisnis dan digitalisasi!</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary"><a href="https://t.me/+BielMi-IEV5mOGQ1"
                            target="_blank">Bergabung</a></button>
                </div>
            </div>
        </div>
        <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
            <figure class="h-96"><img src="/assets/images/webinar.jpg" alt="Webinar" /></figure>
            <div class="card-body">
                <h2 class="card-title">Pelatihan Bisnis</h2>
                <p>Mau belajar bisnis secara offline? Yuk diskusi sama ahlinya!</p>
                <div class="card-actions justify-end">
                    <a href={{ route('webinar') }} class="btn btn-primary">Lihat Webinar</a>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
