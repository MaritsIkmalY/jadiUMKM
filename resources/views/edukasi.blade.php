<x-main-layout>
    <div class="container">

        <div class="sm:flex sm:flex-col sm:justify-center sm:items-center lg:flex-row">
            <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
                <figure class="h-96"><img src="/assets/images/pembelajaran.jpg" alt="Video" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Pembelajaran</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary"><a href="{{ route('video') }}">Lihat Pembelajaran</a></button>
                    </div>
                </div>
            </div>
            <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
                <figure class="h-96"><img src="/assets/images/premium.jpg" alt="Video Premium" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Pembelajaran Premium</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary"><a href="https://t.me/+BielMi-IEV5mOGQ1"
                                target="_blank">Berlangganan</a></button>
                    </div>
                </div>
            </div>
            <div class="card sm:w-96 bg-base-100 shadow-xl sm:my-3 lg:mx-3">
                <figure class="h-96"><img src="/assets/images/webinar.jpg" alt="Webinar" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Webinar</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <a href={{ route('webinar') }} class="btn btn-primary">Lihat Webinar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
