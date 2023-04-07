function hitungWaktu(endTime) {
    var endDate = new Date(endTime).getTime();

    var x = setInterval(function () {
        var now = new Date().getTime();
        var timeLeft = endDate - now;

        var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        var countdown =
            days + "d " + hours + "h " + minutes + "m " + seconds + "s";
        document.getElementById("countdown-timer").innerHTML = countdown;

        if (timeLeft < 0) {
            clearInterval(x);
            document.getElementById("countdown-timer").innerHTML =
                "Waktu telah habis.";
        }
    }, 1000);
}
