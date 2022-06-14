<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EO/WO Booking web</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('landingpage.layoutlanding.css')
</head>

<body>

    <!-- ======= navbar ======= -->
    @include('landingpage.navbar')
    <!-- End navbar -->
    <!-- ======= main konten ======= -->
    <main id="main">
        @yield('content')
    </main>
    <!-- End konten -->
    <!-- ======= Footer ======= -->
    @include('landingpage.footer')

    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>





    @include('landingpage.layoutlanding.js')
    @stack('script-custom')
</body>

</html>

<body>
