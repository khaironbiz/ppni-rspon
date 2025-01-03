<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Khairon Here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="{{ asset('compact/images/favicon.png') }}" type="image/x-icon">

    <!-- LOAD CSS FILES -->
    <link href="{{ asset('compact/style.css') }}" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('compact/switcher/demo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('compact/switcher/colors/blue.css') }}" type="text/css" id="colors">
</head>

<body>
<!-- Preload images start //-->
<div class="images-preloader" id="images-preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Preload images end //-->

<div id="wrapper">

    <!-- header begin -->
    <header class="site-header-1 site-header">
        <!-- Main bar start -->
        <div id="sticked-menu" class="main-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- logo begin -->
                        <div id="logo" class="pull-left">
                            <a href="theme/index.html">
                                <img src="{{ asset('compact/images/logo.png') }}" alt="" class="logo">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- btn-mobile menu begin -->
                        <a id="show-mobile-menu" class="btn-mobile-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></a>
                        <!-- btn-mobile menu close -->

                        <!-- mobile menu begin -->
                        <nav id="mobile-menu" class="site-mobile-menu hidden-lg hidden-md">
                            <ul></ul>
                        </nav>
                        <!-- mobile menu close -->

                        <!-- desktop menu begin -->
                        <nav id="desktop-menu" class="site-desktop-menu hidden-xs hidden-sm">
                            <ul class="clearfix">
                                <li class="active"><a href="theme/index.html">Home</a>
                                    <ul>
                                        <li><a href="theme/index.html">Homepage 1</a></li>
                                        <li><a href="index2.html">Homepage 2</a></li>
                                        <li><a href="index3.html">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Features</a>
                                    <ul>
                                        <li><a href="comingsoon.html">Coming Soon</a></li>
                                        <li><a href="theme/404.html">404 Error</a></li>
                                        <li><a href="#">Sub Headers</a>
                                            <ul>
                                                <li><a href="sub-header.html">Sub Header 1</a></li>
                                                <li><a href="sub-header1.html">Sub Header 2</a></li>
                                                <li><a href="sub-header2.html">Sub Header 3</a></li>
                                                <li><a href="sub-header3.html">Sub Header 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">3rd Level Menu</a>
                                            <ul>
                                                <li><a href="#">Sub link 1</a></li>
                                                <li><a href="#">Sub link 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="theme/pricing.html">Pricing Tables</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="element.html">Elements</a></li>
                                        <li><a href="faqs.html">FAQs</a></li>
                                    </ul>
                                </li>
                                <li><a href="projects.html">Portfolios</a>
                                    <ul>
                                        <li><a href="projects-3-cols.html">Portfolio 3 Columns</a></li>
                                        <li><a href="projects-4-cols.html">Portfolio 4 Columns</a></li>
                                        <li><a href="projects-5-cols.html">Portfolio 5 Columns</a></li>
                                        <li><a href="project-detail.html">Single Project</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop-catalog.html">Online Store Catalog</a></li>
                                        <li><a href="shop-cart.html">Online Store Shopping Cart</a></li>
                                        <li><a href="shop-checkout.html">Online Store Checkout</a></li>
                                        <li><a href="shop-single.html">Single Store Product</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-single.html">Blog Article</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact Us</a>
                                    <ul>
                                        <li><a href="contact1.html">Contact Us 01</a></li>
                                        <li><a href="contact2.html">Contact Us 02</a></li>
                                        <li><a href="contact3.html">Contact Us 03</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- desktop menu close -->

                        <!-- Header Group Button Right begin -->
                        <div class="header-buttons pull-right hidden-xs hidden-sm">

                            <div class="header-contact">
                                <ul class="clearfix">
                                    <li class="phone"><i class="fa fa-phone"></i> <span>0112-826-2789</span></li>
                                    <li class="border-line">|</li>
                                </ul>
                            </div>

                            <!-- Button Modal popup searchbox -->
                            <div class="search-button">
                                <!-- Trigger the modal with a button -->
                                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a>
                            </div>

                            <!-- Top Cart -->
                            <div class="cart-button">
                                <a href="#" class="dropdown-toggle cart-contents" data-toggle="dropdown" ><i class="fa fa-shopping-bag"></i> <span class="mini-cart-counter">3</span></a>
                                <div class="dropdown-menu top_cart_list_product">
                                    <ul class="cart_list product_list_widget clearfix">
                                        <li class="mini_cart_item">
                                            <div class="img-thumb">
                                                <img alt="" class="attachment-shop_thumbnail" src="{{ asset('compact/images/shop/thumb/product-thumb-1.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <a class="remove" href=""><i class="fa fa-times"></i></a>
                                                <a href="#">Bed Dream</a>
                                                <span class="quantity">1 ×
                                                        <span class="amount">$600</span>
                                                    </span>
                                            </div>
                                        </li>
                                        <li class="mini_cart_item">
                                            <div class="img-thumb">
                                                <img alt="" class="attachment-shop_thumbnail" src="{{ asset('compact/images/shop/thumb/product-thumb-2.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <a class="remove" href=""><i class="fa fa-times"></i></a>
                                                <a href="#">Bed Gravida</a>
                                                <span class="quantity">2 ×
                                                        <span class="amount">$550</span>
                                                    </span>
                                            </div>
                                        </li>
                                        <li class="mini_cart_item">
                                            <div class="img-thumb">
                                                <img alt="" class="attachment-shop_thumbnail" src="{{ asset('compact/images/shop/thumb/product-thumb-3.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <a class="remove" href=""><i class="fa fa-times"></i></a>
                                                <a href="#">Bed Wood</a>
                                                <span class="quantity">1 ×
                                                        <span class="amount">$450</span>
                                                    </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="total"><strong>Subtotal:</strong> <span class="amount">$2,150</span></p>
                                    <p class="buttons">
                                        <a class="button wc-forward btn btn-primary" href="">View Cart</a>
                                        <a class="button checkout wc-forward btn btn-secondary pull-right" href="">Checkout</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Button Menu OffCanvas right -->
                            <div class="navright-button">
                                <a href="" id="btn-offcanvas-menu"><i class="fa fa-bars"></i></a>
                            </div>

                        </div>
                        <!-- Header Group Button Right close -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
    <div class="gray-line-2"></div>

    <!-- Modal Search begin -->
    <div id="myModal" class="modal fade" role="dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form role="search" method="get" class="search-form" action="">
                        <input type="search" class="search-field" placeholder="Search here..." value="" title="" />
                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search close -->

    <!-- Menu OffCanvas right begin -->
    <div class="navright-button hidden-sm">
        <div class="compact-menu-canvas" id="offcanvas-menu">
            <h3>menu</h3><a id="btn-close-canvasmenu"><i class="fa fa-close"></i></a>
            <nav>
                <ul class="clearfix">
                    <li><a href="theme/index.html">Home</a></li>
                    <li><a href="features.html">Features</a></li>
                    <li><a href="pages.html">Pages</a></li>
                    <li><a href="portfolio.html">Portfolios</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="theme/contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Menu OffCanvas right close -->

    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog List</h1>
                    <ul class="breadcrumbs">
                        <li><a href="theme/index.html">Home</a></li>
                        <b>/</b>
                        <li class="active">Blog List</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- content begin -->
    @yield('content')

    <!-- content close -->

    <!-- footer begin -->
    <footer class="footer-1 bg-color-1">

        <!-- main footer begin -->
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="compact-widget">
                            <div class="widget-inner">
                                <img class="logo-footer" src="{{ asset('compact/images/logo-footer.png') }}" alt="compact company">
                                <p>Compact is a clean PSD theme suitable for corporate, You can customize it very easy to fit your needs, semper suscipit metus accumsan at. Vestibulum et lacus urna. Nam luctus ac tortor eu</p>
                                <div class="social-icons clearfix">
                                    <a href="#" class="facebook" ><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter" ><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="google" ><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="youtube" ><i class="fa fa-youtube-play"></i></a>
                                    <a href="#" class="linkedin" ><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="compact-widget">
                            <h3 class="widget-title">Features</h3>
                            <div class="widget-inner">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Term &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Sites Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="compact-widget">
                            <h3 class="widget-title">Contact Us</h3>
                            <div class="widget-inner">
                                <p>Address: 379 5th Ave  New York, NYC <br> 10018, United States</p>
                                <p>Phone: +(112) 345 6879</p>
                                <p>Fax: +(112) 345 8796</p>
                                <p>Email: contact@compact.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="compact-widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="widget-inner">
                                <div class="newsletter newsletter-widget">
                                    <p>Stay informed about our news and events</p>
                                    <form action="" method="post">
                                        <p><input class="newsletter-email" type="email" name="email" placeholder="Your email"><i class="fa fa-envelope-o"></i></p>
                                        <p><input class="newsletter-submit" type="submit" value="Subscribe"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- main footer close -->

        <!-- sub footer begin -->
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Copyright &copy; 2016 Designed by AuThemes. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- sub footer close -->

    </footer>
    <!-- footer close -->
</div>

<a id="to-the-top" ><i class="fa fa-angle-up"></i></a>

<!-- LOAD JS FILES -->
<script type="text/javascript" src="{{ asset('compact/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('compact/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('compact/js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('compact/js/easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('compact/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('compact/js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('compact/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('compact/js/jquery.magnific-popup.min.js') }}"></script>

<!-- Waypoints-->
<script type="text/javascript" src="{{ asset('compact/js/jquery.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('compact/js/sticky.min.js') }}"></script>

<script src="{{ asset('compact/js/compact.js') }}"></script>
<script src="{{ asset('compact/switcher/demo.js') }}"></script>
<div id="switcher">
    <span class="custom-close"></span>
    <span class="custom-show"></span>

    <a class="btn btn-primary width" href="#">Button</a>

    <div class="clearfix"></div>

    <span class="sw-title">Layout Style</span>
    <select name="switcher" id="tm-layout-switch">
        <option value="wide" selected="selected">Wide</option>
        <option value="boxed">Boxed</option>
    </select>
    <div class="clearfix spacing-10"></div>

    <span class="sw-title">Boxed Background</span>
    <ul id="tm-boxed-bg">
        <li class="bg1" data-value="01"></li>
        <li class="bg2" data-value="02"></li>
        <li class="bg3" data-value="03"></li>
        <li class="bg4" data-value="04"></li>
        <li class="bg5" data-value="05"></li>
        <li class="bg6" data-value="06"></li>
        <li class="bg7" data-value="07"></li>
        <li class="bg8" data-value="08"></li>
        <li class="jpg9" data-value="09"></li>
        <li class="jpg10" data-value="10"></li>
        <li class="jpg11" data-value="11"></li>
        <li class="jpg12" data-value="12"></li>
        <li class="jpg13" data-value="13"></li>
        <li class="jpg14" data-value="14"></li>
    </ul>
    <div class="clearfix spacing-10"></div>

    <span class="sw-title">Main Colors:</span>
    <ul id="tm-color">
        <li class="color1"></li>
        <li class="color2"></li>
        <li class="color3"></li>
        <li class="color4"></li>
        <li class="color5"></li>
        <li class="color6"></li>
        <li class="color7"></li>
        <li class="color8"></li>
        <li class="color9"></li>
        <li class="color10"></li>
    </ul>
</div>

</body>
</html>
