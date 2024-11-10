<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title', 'JobPortal') </title>
    <meta name="description" content="@yield('meta_description', 'JobPortal')">
    <meta name="keywords" content="@yield('keywords', 'JobPortal')">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('meta_title', 'JobPortal')">
    <meta property="og:description" content="@yield('meta_description', 'JobPortal')">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="@yield('meta_image', asset('public/logo1.png') )">
    <meta property="og:type" content="article">

    <!-- Twitter -->
    <meta name="twitter:card" content="@yield('meta_image', asset('public/logo1.png') )">
    <meta name="twitter:title" content="@yield('meta_title', 'JobPortal')">
    <meta name="twitter:description" content="@yield('meta_description', 'JobPortal')">
    <meta name="twitter:image" content="@yield('meta_image', asset('public/logo1.png') )">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
       "@context": "https://schema.org",
       "@type": "BlogPosting",
       "headline": "@yield('meta_title', 'JobPortal')",
       "image": "@yield('meta_image', asset('public/logo1.png') )",
       "author": {
           "@type": "Person",
           "name": "@yield('author', 'Adarsh')"
       },
       "publisher": {
           "@type": "Organization",
           "name": "@yield('meta_title', 'JobPortal')",
           "logo": {
               "@type": "ImageObject",
               "url": "@yield('meta_image', asset('public/logo1.png') )"
           }
       },
       "datePublished": "2024-11-10T08:00:00+00:00",
       "description": "@yield('meta_description', 'JobPortal')"
    }
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/web') }}/css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <!-- Link Bootstrap's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('public/theme/web') }}/style.css">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- script ================================================== -->
    <script src="{{ asset('public/theme/web') }}/js/modernizr.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">

    @include('partials.header') 

    @yield('content')      

    @include('partials.footer') 


    <script src="{{ asset('public/theme/web') }}/js/jquery-1.11.0.min.js"></script>
    <script src="{{ asset('public/theme/web') }}/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>