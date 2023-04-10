<x-app-layout>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="text-center text-2xl mb-4">Webinar yang akan datang</div>
    @if (Auth::user()->role_id == 3)
        <a href="{{ route('webinar.create') }}" class="btn btn-primary btn-xs my-5">Tambahkan</a>
    @endif

    <div class="lg:grid grid-cols-3 gap-4 justify-center items-center">
        @foreach ($webinar as $item)
            <div class="card card-compact bg-base-100 shadow-xl  sm:my-5 md:my-2">
                <figure class="h-96"><img src="/storage/{{ $item->photo }}" alt="{{ $item->title }}" /></figure>
                <div class="card-body gap-4">
                    <h2 class="card-title">{{ $item->title }}</h2>
                    <div class="flex justify-between">
                        <p>{{ $item->description }}</p>
                        <div class="badge badge-secondary">Gratis</div>
                    </div>
                    <a class="btn btn-primary w-full" href="{{ $item->link }}" target="_blank">Ikut Webinar</a>
                    @if (Auth::user()->role_id == 3)
                        <a class="btn btn-secondary w-full" href="{{ route('webinar.edit', $item->id) }}">Edit</a>
                        <a class="btn btn-danger w-full" href="{{ route('webinar.destroy', $item->id) }}">Hapus</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

{{-- <script>
    function hitungWaktu(endTime) {
        var endDate = new Date(endTime).getTime();

        var x = setInterval(function() {
            var now = new Date().getTime();
            var timeLeft = endDate - now;

            var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            var hours = Math.floor(
                (timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            var countdown =
                days + " hari " + hours + " jam " + minutes + " menit " + seconds + " detik ";

            let second = document.querySelectorAll('.detik');
            let day = document.querySelectorAll('.hari');
            let jam = document.querySelectorAll('.jam');
            let menit = document.querySelectorAll('.menit');


            second.forEach(element => {

                element.innerHTML = seconds;
            });
            day.forEach(element => {

                element.innerHTML = days;
            });
            jam.forEach(element => {

                element.innerHTML = hours;
            });
            menit.forEach(element => {

                element.innerHTML = minutes;
            });

            if (timeLeft < 0) {
                clearInterval(x);
                document.getElementById("countdown-timer").innerHTML =
                    "Waktu telah habis.";
            }
        }, 1000);
    }
    hitungWaktu("2023-04-19T12:00:00"); // Menghitung mundur waktu hingga tanggal 8 April 2023 pukul 12:00:00
</script> --}}
