<!DOCTYPE html>

<html lang="en">

<head>
    <!-- TrustBox script -->
    <script type="text/javascript" src="{{ asset('assets/bootstrap/v5/bootstrap.min.js') }}"></script>
    <!-- End TrustBox script -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Techie - TrustPilot Reviews</title>
    <meta content="" name="description">
    <meta content="" name="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  ======================================================== -->
</head>

<body>
    <center>
        <h7>Check Out Our Ratings</h7>
    </center>

    <center><img src="{{ asset('assets/img/Trustpilot.jpg') }}" alt="centered image" height="50" width="50">
    </center>
    <!-- ======= Header ======= -->
    @include('frontend.layouts._header')
    <!-- End Header -->
    
    
    <main>
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layouts._footer')
    <!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>


</html>
{{-- <script type="text/javascript">
    var config = {
        phone: " 91 9988971816",
        call: "Message Us",
        position: "ww-right",
        size: "ww-normal",
        text: "",
        type: "ww-standard",
        brand: "TECHIE",
        subtitle: "",
        welcome: ""
    };
    var proto = document.location.protocol,
        host = "cloudfront.net",
        url = proto + "//d3kzab8jj16n2f." + host;
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = url + "/v2/main.js";
    s.onload = function() {
        tmWidgetInit(config)
    };
    var x = document.getElementsByTagName("script")[0];
    x.parentNode.insertBefore(s, x);
</script> --}}
