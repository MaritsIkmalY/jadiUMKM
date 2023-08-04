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
    <livewire:styles>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>JadiUMKM</title>
</head>

<body>
    <x-jadiumkm-navbar />

    <div class="mt-20">
        {{ $slot }}
    </div>

    <x-footer />
    
    <livewire:scripts>
</body>

</html>
