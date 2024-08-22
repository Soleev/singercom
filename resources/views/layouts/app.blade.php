<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title') | Singeruz</title>
</head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>@yield('title') | Singeruz</title>
    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="shortcut icon">
    <!-- CSS -->
    <link href="../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="../assets/plugins/justified-gallery/justified-gallery.min.css" rel="stylesheet">
    <link href="../assets/plugins/sal/sal.min.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="../assets/plugins/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/all.css" rel="stylesheet">
    <link href="../assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
    <link href="../assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
</head>
<body data-preloader="3">
<!-- Animated Cursor -->
<div id="animated-cursor"></div>
<!-- end Animated Cursor -->

<div class="wrapper">

    <!-- Scroll to Top -->
    <div class="scrolltotop">
        <a class="button-circle button-circle-md button-circle-black" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- end Scroll to Top -->
@include('includes.header')

@yield('content')


@include('includes.footer')
</body>
</html>
