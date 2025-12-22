<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="thumbnail" content="assets/images/Techco_page_thumbnail_2.webp">
    <meta name="description" content="@yield('description', 'ADH Group – Solutions & Innovation')">
    <meta name="keywords" content="@yield('keywords', 'IT Solutions, Digital Transformation, Cloud, Cybersecurity')">
    <meta name="author" content="ADH Group">

    <title>@yield('title', 'ADH Group – Solutions & Innovation')</title>
    
    <link rel="shortcut icon" href="{{ asset('images/site_logo/favourite_icon_2.svg') }}">

    <!-- Framework - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Icon - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/odometer.min.css') }}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>

<body>
    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

        <!-- Preloader - Start -->
        <div id="preloader" class="preloader">
            <div class="loader-circle">
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-logo">
                    <img src="{{ asset('images/site_logo/site_logo_2.svg') }}" alt="Site Logo – ADH Group">
                </div>
            </div>
        </div>
        <!-- Preloader - End -->

        <!-- Back To Top - Start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>
        <!-- Back To Top - End -->

        <!-- Site Header - Start -->
        <header class="site_header site_header_2">
            <div class="header_bottom stricky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-5">
                            <div class="site_logo">
                                <a class="site_link" href=" ">
                                    <img src="{{ asset('images/site_logo/site_logo.png') }}" alt="Site Logo – ADH Group">
                                    <img src="{{ asset('images/site_logo/site_logo.png') }}" alt="Site Logo – ADH Group">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-2">
                            <nav class="main_menu navbar navbar-expand-lg">
                                <div class="main_menu_inner collapse navbar-collapse justify-content-lg-center" id="main_menu_dropdown">
                                    <ul class="main_menu_list unordered_list justify-content-center">
                                        <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
                                            <a class="nav-link" href=" {{ route('home') }}">
                                                Accueil
                                            </a>
                                        </li>
                                        <li class="{{ Request::routeIs('services') ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('services') }}">
                                                Nos services
                                            </a>
                                        </li>
                                        <li class="{{ Request::routeIs('about') ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('about') }}">
                                                À propos
                                            </a>
                                        </li>
                                        <li class="{{ Request::routeIs('realisations') ? 'active' : '' }}">
                                            <a class="nav-link" href=" {{ route('realisations') }}">
                                                Nos réalisations
                                            </a>
                                        </li>
                                        <li class="{{ Request::routeIs('contact') ? 'active' : '' }}">
                                            <a href=" {{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-3 col-5">
                            <ul class="header_btns_group unordered_list justify-content-end">
                                <li>
                                    <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="far fa-bars"></i>
                                    </button>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href=" ">
                                        <span class="btn_label" data-text="Démarrer">Nous Contacter</span>
                                        <span class="btn_icon">
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Site Header - End -->

        <!-- Main Body - Start -->
        <main class="page_content">
            @yield('content')
        </main>
        <!-- Main Body - End -->

        <!-- Site Footer - Start -->
        <footer class="site_footer footer_layout_2 section_decoration" style="background-image: url('{{ asset('images/shapes/bg_pattern_3.svg') }}');">
            <div class="decoration_item shape_image_1">
                <img src="{{ asset('images/shapes/shape_space_2.svg') }}" alt="ADH Group">
            </div>

            <div class="container">
                <div class="service_pill_carousel swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="service_pill_block" href="#">
                                <i class="fa-solid fa-check"></i>
                                <span>Applications Web sur mesure</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="service_pill_block" href="#">
                                <i class="fa-solid fa-check"></i>
                                <span>Développement d'applications</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="service_pill_block" href="#">
                                <i class="fa-solid fa-check"></i>
                                <span>Développement web</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="service_pill_block" href="#">
                                <i class="fa-solid fa-check"></i>
                                <span>Solutions logicielles</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="service_pill_block" href="#">
                                <i class="fa-solid fa-check"></i>
                                <span>Applications d'entreprise</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="service_pill_block" href="#">
                                <i class="fa-solid fa-check"></i>
                                <span>Services DevOps</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer_main_content">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-2 col-md-6">
                            <div class="footer_widget">
                                <h3 class="footer_info_title">Entreprise</h3>
                                <ul class="icon_list unordered_list_block">
                                    <li><a href="{{ route('about') }}"><span class="icon_list_text">À propos</span></a></li>
                                    <li><a href=" "><span class="icon_list_text">Nos réalisations</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Nos partenaires</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Nos implantations</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Carrières</span></a></li>
                                    <li><a href=" "><span class="icon_list_text">Contact</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer_widget">
                                <h3 class="footer_info_title">Expertise</h3>
                                <ul class="icon_list unordered_list_block">
                                    <li><a href="#!"><span class="icon_list_text">Solutions cloud</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Entrepôt de données</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Gestion des données</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Services BI</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Big Data</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Data Science</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer_widget">
                                <h3 class="footer_info_title">Secteurs</h3>
                                <ul class="icon_list unordered_list_block">
                                    <li><a href="#!"><span class="icon_list_text">Assurance</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Banque</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Fintech</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Logistique</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Commerce</span></a></li>
                                    <li><a href="#!"><span class="icon_list_text">Santé</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="footer_widget pe-lg-3">
                                <h2 class="footer_info_title">Newsletter</h2>
                                <p>
                                    Inscrivez-vous à notre newsletter hebdomadaire pour recevoir nos dernières actualités.
                                </p>
                                <form class="footer_newslatter_2" action="#">
                                    <label for="footer_mail_input">
                                        <img src="{{ asset('images/icons/icon_mail_2.svg') }}" alt="Mail Icon">
                                    </label>
                                    <input id="footer_mail_input" type="email" name="email" placeholder="Entrez votre adresse e-mail">
                                    <button type="submit">S'inscrire</button>
                                </form>
                                <ul class="social_icons_block unordered_list">
                                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#!"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_bottom" style="background-image: url('{{ asset('images/shapes/shape_space_6.svg') }}');">
                <div class="container d-md-flex align-items-md-center justify-content-md-between">
                    <p class="copyright_text m-0">
                        © {{ date('Y') }} ADH Group. Tous droits réservés.
                    </p>
                    <ul class="icon_list unordered_list">
                        <li>
                            <a href="#!">
                                <span class="icon_list_icon"><i class="fa-solid fa-circle"></i></span>
                                <span class="icon_list_text">Conditions d'utilisation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <span class="icon_list_icon"><i class="fa-solid fa-circle"></i></span>
                                <span class="icon_list_text">Politique de confidentialité</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- Site Footer - End -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Framework - Jquery Include -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-dropdown-ml-hack.min.js') }}"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    <!-- Parallax Effects - jquery include -->
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!-- Countdown - Jquery Include -->
    <script src="{{ asset('js/countdown.js') }}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>

    <!-- Counter - Jquery Include -->
    <script src="{{ asset('js/appear.min.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>

    <!-- Circular Progress Bar - Jquery Include -->
    <script src="{{ asset('js/circularProgressBar.min.js') }}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>