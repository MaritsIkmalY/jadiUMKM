<x-app-layout>
    <div class="text-center text-2xl mb-4">Webinar yang akan datang</div>
    <div class="grid grid-cols-3 gap-4 justify-center items-center">
        @foreach ($webinar as $item)
            <div class="card card-compact bg-base-100 shadow-xl h-96">
                <figure><img src={{ $item->photo }} alt="{{ $item->title }}" /></figure>
                <div class="card-body gap-4">
                    <h2 class="card-title">{{ $item->title }}</h2>
                    <div class="flex justify-between">

                        <p>{{ $item->description }}</p>
                        <div class="badge badge-secondary">Gratis</div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex flex-col items-center">
                            <div class="hari">1</div>
                            <div>Hari</div>
                        </div>
                        <div class="divider lg:divider-horizontal"></div>
                        <div class="flex flex-col items-center">
                            <div class="jam">1</div>
                            <div>Jam</div>
                        </div>
                        <div class="divider lg:divider-horizontal"></div>
                        <div class="flex flex-col items-center">
                            <div class="menit">1</div>
                            <div>Menit</div>
                        </div>
                        <div class="divider lg:divider-horizontal"></div>
                        <div class="flex flex-col items-center">
                            <div class="detik">1</div>
                            <div>Detik</div>
                        </div>
                    </div>


                    <button class="btn btn-primary w-full">Ikut Webinar</button>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

<script>
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
</script>
