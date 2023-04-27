<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? ' ' }}</title>

    <!-- CDN Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- CDN Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- CDN Animation on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Website icon -->
    <link rel="shortcut icon" href="/img/Logo Tab - Color.png">

    @vite('resources/css/app.css')
</head>

<body>

    {{-- NAVBAR ---------------------------- --}}
    <x-navbar></x-navbar>

    @if (Route::currentRouteName() !== 'homepage')
        <div class="space"></div>
    @endif

    <div class="space-body">
        {{ $slot }}
    </div>

    {{-- FOOTER ---------------------------- --}}

    @if (Route::currentRouteName() !== 'dashboard.admin')
        <x-footer></x-footer>
    @endif





    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/cc498b00a6.js" crossorigin="anonymous"></script>

    <!-- Animation on scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- JS Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    @vite('resources/js/app.js')
</body>

</html>
