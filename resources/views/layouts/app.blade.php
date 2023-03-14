<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Platinum Works</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        
        {{-- Bootsrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Template Main CSS File -->
        <link href="/css/style.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        {{-- AOS scroll lib --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


        {{-- GLightbox --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
        
        {{-- BoxIcons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

         {{-- Swiper --}}
         <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
         />
         <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

         {{-- Isotope filter --}}
         <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

        @livewireStyles
    </head>
    <body class="antialiased">
        
        @include('partials.navbar')
        {{ $slot }}
        @include('partials.footer')

        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        {{-- AOS --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        {{-- Glighbox --}}
        
        <script type="text/javascript">
            const lightbox = GLightbox({ ...options });
        </script>

        {{-- isotope filter --}}
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>


        <!-- Template Main JS File -->
        <script src="/js/main.js"></script>
        
        @livewireScripts
    </body>
</html>
