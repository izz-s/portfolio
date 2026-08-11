<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- =====================================================
         PRIMARY SEO
    ====================================================== --}}
    <title>
        @yield('title', 'Faiz Pratama — Fullstack Web Developer')
    </title>

    <meta name="description" content="@yield('meta_description', 'Portfolio of Faiz Pratama, a Fullstack Web Developer focused on Laravel, MySQL, JavaScript, REST API, and modern web application development.')">

    <meta name="author" content="Faiz Pratama">

    <meta name="robots" content="index, follow">


    {{-- =====================================================
         OPEN GRAPH
         WhatsApp / LinkedIn / Facebook Preview
    ====================================================== --}}
    <meta property="og:type" content="website">

    <meta property="og:title" content="@yield('og_title', 'Faiz Pratama — Fullstack Web Developer')">

    <meta property="og:description" content="@yield('og_description', 'Fullstack Web Developer specializing in Laravel, MySQL, JavaScript, REST API, and modern web applications.')">

    <meta property="og:image" content="@yield('og_image', asset('images/og/portfolio-preview.png'))">

    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:site_name" content="Faiz Pratama Portfolio">


    {{-- =====================================================
         TWITTER / X CARD
    ====================================================== --}}
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="@yield('og_title', 'Faiz Pratama — Fullstack Web Developer')">

    <meta name="twitter:description" content="@yield('og_description', 'Fullstack Web Developer specializing in Laravel, MySQL, JavaScript, REST API, and modern web applications.')">

    <meta name="twitter:image" content="@yield('og_image', asset('images/og/portfolio-preview.png'))">


    {{-- =====================================================
         FAVICON
    ====================================================== --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">


    {{-- =====================================================
         ASSETS
    ====================================================== --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <div class="scroll-progress">
        <div class="scroll-progress-bar" id="scrollProgress"></div>
    </div>

    <main>
        @yield('content')
    </main>

</body>

</html>
