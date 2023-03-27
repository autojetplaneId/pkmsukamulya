<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>UPT Puskesmas Sukamulya - Welcome</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('Medilab/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('Medilab/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('Medilab/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('Medilab/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('Medilab/assets/css/style.css') }}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Medilab - v4.8.1
        * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>
        @include('landingPage.topbar')
        @include('landingPage.navbar')
        @include('landingPage.hero')
        @include('landingPage.whyus')
        @include('landingPage.counts')
        @include('landingPage.unitkerja')
        @include('landingPage.footer')
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        @include('landingPage.javascript')
    </body>
</html>
