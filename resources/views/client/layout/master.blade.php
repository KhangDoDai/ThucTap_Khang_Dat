<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('asset/css/bootstrap.min.css') }}>
    <!-- Site CSS -->
    <link rel="stylesheet" href={{ asset('asset/css/style.css') }}>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href={{ asset('asset/css/responsive.css') }}>
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{ asset('asset/css/custom.css') }}>

</head>

<body>
    <section>
        @yield('main')
    </section>

    <script src={{ asset('asset/js/jquery-3.2.1.min.js') }}></script>
    <script src={{ asset('asset/js/popper.min.js') }}></script>
    <script src={{ asset('asset/js/bootstrap.min.js') }}></script>
    <!-- ALL PLUGINS -->
    <script src={{ asset('asset/js/jquery.superslides.min.js') }}></script>
    <script src={{ asset('asset/js/bootstrap-select.js') }}></script>
    <script src={{ asset('asset/js/inewsticker.js') }}></script>
    <script src={{ asset('asset/js/bootsnav.js') }}></script>
    <script src={{ asset('asset/js/images-loded.min.js') }}></script>
    <script src={{ asset('asset/js/isotope.min.js') }}></script>
    <script src={{ asset('asset/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('asset/js/baguetteBox.min.js') }}></script>
    <script src={{ asset('asset/js/form-validator.min.js') }}></script>
    <script src={{ asset('asset/js/contact-form-script.js') }}></script>
    <script src={{ asset('asset/js/custom.js') }}></script>
</body>

</html>
