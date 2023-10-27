<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Eventre - Event &amp; Conference Html5 Template</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Event and Conference Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Eventre HTML Template v1.0">

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="assets/theme/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/theme/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="assets/theme/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="assets/themep/lugins/slick/slick.css" rel="stylesheet">
    <link href="assets/themep/lugins/slick/slick-theme.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="assets/theme/css/style.css" rel="stylesheet">

    <!-- FAVICON -->
    <link href="assets/theme/images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->
<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="index.html">
            <img src="assets/theme/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.home') }}">Home
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.news') }}">News
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.events') }}">Events
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.photos') }}">Photos
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.faq') }}">Faq
                        <span>/</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
            <a href="contact.html" class="ticket">

                <span>Login</span>
            </a>
        </div>
    </div>
</nav>

<!--====  End of Navigation Section  ====-->

<!--================================
=            Yield            =
=================================-->

@yield('content')
<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <div class="footer-logo">
                        <img src="assets/theme/images/footer-logo.png" alt="logo" class="img-fluid">
                    </div>
                    <ul class="social-links-footer list-inline">
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-rss"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-vimeo"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="copyright-text">
                    <p><a href="index.html">Eventre</a> &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>


<!-- JAVASCRIPTS -->
<!-- jQuey -->
<script src="assets/theme/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/theme/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Shuffle -->
<script src="assets/theme/plugins/shuffle/shuffle.min.js"></script>
<!-- Magnific Popup -->
<script src="assets/theme/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Slick Carousel -->
<script src="assets/theme/plugins/slick/slick.min.js"></script>
<!-- SyoTimer -->
<script src="assets/theme/plugins/syotimer/jquery.syotimer.min.js"></script>
<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="assets/theme/plugins/google-map/gmap.js"></script>
<!-- Custom Script -->
<script src="assets/theme/js/script.js"></script>
</body>

</html>
