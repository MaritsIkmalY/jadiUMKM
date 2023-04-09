<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/style.css',
        'resources/css/plugins/pe-icon-7-stroke.css',
        'resources/css/plugins/font-awesome.min.css',
        'resources/css/plugins/animate.min.css',
        'resources/css/plugins/swiper-bundle.min.css',
        'resources/css/plugins/odometer.min.css',
        'resources/css/plugins/nice-select.css',
        'resources/css/plugins/select2.min.css',
        'resources/css/plugins/ion.rangeSlider.min.css',
        'resources/js/vendor/modernizr-3.11.2.min.js',
        'resources/js/vendor/jquery-3.5.1.min.js',
        'resources/js/plugins/popper.min.js',
        'resources/js/plugins/bootstrap.min.js',
        'resources/js/plugins/swiper-bundle.min.js',
        'resources/js/plugins/ajax-contact.js',
        'resources/js/plugins/appear.js',
        'resources/js/plugins/odometer.min.js',
        'resources/js/plugins/jquery.nice-select.min.js',
        'resources/js/plugins/select2.min.js',
        'resources/js/plugins/ion.rangeSlider.min.js',
        'resources/js/plugins/jquery.zoom.min.js',
        'resources/js/main.js',
        //
    ])
    <title>JadiUMKM</title>
</head>

<body>
    <x-navbar />

    {{ $slot }}

</body>

</html>
