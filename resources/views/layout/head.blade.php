<head>
    <meta charset="utf-8">
    <title>Revive Health Partners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="{{ asset('assets/appImg/fevicon.svg') }}">

    {{-- Preload hero image (fix path) --}}
    <!-- <link rel="preload" as="image" href="{{ asset('assets/appImg/home-hero.webp') }}" fetchpriority="high">
    <link rel="preload" as="image" href="{{ asset('assets/appImg/home-hero.webp') }}"/> -->

    {{-- Preconnect/DNS-prefetch for fonts & CDNs --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">

    {{-- Google Fonts (non-blocking) --}}
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;600;700&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;600;700&display=swap">
    </noscript>

    {{-- Icon Fonts (make non-blocking) --}}
    <link rel="preload"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    </noscript>

    <link rel="preload"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    </noscript>

    {{-- Bootstrap core CSS (safer: blocking). If you already inline critical CSS, you can swap to preload like app.css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    {{-- Site CSS (async to reduce render-blocking) --}}
    <link rel="preload" href="{{ asset('assets/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></noscript>

    {{-- Library CSS (defer – only needed after first paint) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/lib/owlcarousel/assets/owl.carousel.min.css') }}" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/lib/owlcarousel/assets/owl.carousel.min.css') }}"></noscript>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.css"
            media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.css"></noscript>
</head>
