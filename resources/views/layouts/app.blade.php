<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'ADH Group - Solutions & Innovation')</title>

    <!-- Fonts & Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">

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

     <style>
        /* =============================================
           RESET & BASE
        ============================================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #FFFFFF;
            color: #111827;
            overflow-x: hidden;
            font-family: 'Space Grotesk', 'Inter', sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* =============================================
           BOUTONS GLOBAUX
        ============================================= */
        .btn-primary {
            background-color: #0066FF;
            color: white;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: none;
            cursor: pointer;
            font-family: 'Space Grotesk', sans-serif;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0052cc;
            transform: translateY(-2px);
        }

        .btn-secondary {
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            cursor: pointer;
            font-family: 'Space Grotesk', sans-serif;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: white;
            transform: translateY(-2px);
        }

        .btn-start-project {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            padding: 0 28px;
            border-radius: 8px;
            border: 1px solid #0066FF;
            background: #0066FF;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: #FFFFFF;
            white-space: nowrap;
            transition: background 0.3s ease;
        }

        .btn-start-project:hover {
            background: #0052cc;
        }

        .btn-icon-wrapper {
            display: inline-flex;
            align-items: center;
            margin-left: 10px;
        }

        .btn-icon-wrapper i {
            color: #FFFFFF;
            font-size: 14px;
            transform: rotate(44deg);
            display: inline-block;
        }

        /* =============================================
           TOP BAR
        ============================================= */
        .top-bar {
            background-color: #0066FF;
            color: white;
            padding: 10px 0;
            font-size: 14px;
        }

        .top-bar-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 24px;
            flex-wrap: wrap;
            gap: 8px;
        }

        .top-bar-info {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .top-bar-info span {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.6;
        }

        .top-bar-info span i {
            margin-right: 6px;
        }

        .top-bar-links {
            display: flex;
            gap: 14px;
            align-items: center;
        }

        .top-bar-links .separator {
            opacity: 0.4;
        }

        .top-bar-links a:hover {
            opacity: 0.8;
        }

        /* =============================================
           HEADER / NAV
        ============================================= */
        .main-header {
            background: white;
            padding: 16px 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 24px;
            gap: 20px;
        }

        .logo img {
            height: 38px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: 'Space Grotesk', sans-serif;
        }

        .nav-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 36px;
            padding: 0 12px;
            border-radius: 5px;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            font-size: 15px;
            color: #10171E;
            white-space: nowrap;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #E4EFFF;
            color: #10171E;
        }

        .nav-link i {
            font-size: 10px;
            margin-left: 5px;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 10px;
            background: #FFFFFF;
            min-width: 300px;
            border-radius: 0 0 16px 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            z-index: 100;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item {
            display: block;
            padding: 16px 22px;
            color: #111827;
            font-size: 14px;
            font-weight: 700;
            border-bottom: 1px solid #F3F4F6;
            transition: color 0.2s, background 0.2s;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover,
        .dropdown-item.active-item {
            color: #0066FF;
            background-color: #FAFBFC;
        }

        /* Burger menu */
        .burger-btn {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
        }

        .burger-btn span {
            display: block;
            width: 24px;
            height: 2px;
            background: #10171E;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-btn.open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        .burger-btn.open span:nth-child(2) {
            opacity: 0;
        }

        .burger-btn.open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        /* Mobile nav overlay */
        .mobile-nav {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: white;
            z-index: 999;
            padding: 90px 24px 40px;
            flex-direction: column;
            gap: 8px;
            overflow-y: auto;
        }

        .mobile-nav.open {
            display: flex;
        }

        .mobile-nav a {
            display: block;
            padding: 14px 16px;
            font-weight: 700;
            font-size: 18px;
            color: #10171E;
            border-radius: 8px;
            border-bottom: 1px solid #F3F4F6;
        }

        .mobile-nav a:hover {
            background: #E4EFFF;
            color: #0066FF;
        }

        .mobile-nav .mobile-nav-sub {
            padding-left: 28px;
            font-size: 15px;
            font-weight: 500;
            color: #4B5563;
        }

        .mobile-nav .mobile-cta {
            margin-top: 16px;
            background: #0066FF;
            color: white;
            text-align: center;
            border-radius: 8px;
            padding: 16px;
            font-weight: 700;
            border-bottom: none;
        }

        .mobile-nav .mobile-cta:hover {
            background: #0052cc;
            color: white;
        }

        .mobile-nav-close {
            position: absolute;
            top: 20px;
            right: 24px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #10171E;
        }

        /* =============================================
           HERO SECTION
        ============================================= */
        .hero-section {
            background-color: #000000;
            background-image:
                linear-gradient(195.4deg, rgba(0, 0, 0, 0.29) 14.05%, #000000 61.15%),
                url('images/hero.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            position: relative;
            padding: 100px 0 160px 0;
            overflow: hidden;
        }

        .hero-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            padding: 0 24px;
            gap: 40px;
        }

        .hero-content {
            flex: 1.1;
            display: flex;
            flex-direction: column;
            gap: 24px;
            z-index: 5;
        }

        .hero-content h1 {
            font-size: 54px;
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -1px;
        }

        .hero-content .highlight {
            background-color: #0066FF;
            padding: 2px 14px;
            border-radius: 8px;
            display: inline-block;
        }

        .hero-content p {
            font-size: 17px;
            color: #FFFFFF;
            line-height: 1.6;
            border-top: 1px solid #FFFFFF;
            padding-top: 24px;
            margin-top: 8px;
        }

        .hero-features {
            display: flex;
            gap: 24px;
            margin-top: 8px;
            flex-wrap: wrap;
        }

        .hero-features span {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #E5E7EB;
        }

        .hero-features .icon-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 26px;
            height: 26px;
            background: rgba(0, 106, 255, 0.28);
            border: 0.59px solid rgba(0, 106, 255, 0.3);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .hero-features .icon-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 14px;
            height: 14px;
            background-color: #FFFFFF;
            border-radius: 50%;
        }

        .hero-features .icon-inner i {
            color: #006AFF;
            font-size: 8px;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            margin-top: 12px;
            flex-wrap: wrap;
        }

        .hero-actions i {
            font-size: 14px;
            transform: rotate(44deg);
            display: inline-block;
        }

        .hero-image-container {
            flex: 0.9;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: relative;
        }

        .hero-main-img {
            position: relative;
            z-index: 2;
            width: 85%;
        }

        .hero-badge-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            width: fit-content;
            height: 34px;
            padding: 8px 16px;
            background: #F4F8FF;
            border: 1px solid rgba(0, 102, 255, 0.1);
            border-radius: 9999px;
            color: #006AFF;
            font-weight: 700;
            font-size: 12px;
            text-transform: uppercase;
        }

        .hero-badge-tag::before {
            content: '';
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #006AFF;
            border-radius: 50%;
            flex-shrink: 0;
        }

        /* TICKER TAPE */
        .ticker-tape {
            background-color: #0066FF;
            height: 70px;
            overflow: hidden;
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 10;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
        }

        .ticker-wrapper {
            display: flex;
            width: max-content;
            align-items: center;
        }

        .ticker-item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 30px;
            color: #FFFFFF;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            font-size: 22px;
            letter-spacing: -0.32px;
            white-space: nowrap;
        }

        .ticker-item span {
            margin-left: 60px;
            color: #FFFFFF;
            font-size: 20px;
            display: inline-flex;
            align-items: center;
        }

        /* =============================================
           PARTENAIRES
        ============================================= */
        .partners-section {
            background: #FFFFFF;
            padding: 48px 80px;
            border-top: 1px solid #F1F5F9;
            border-bottom: 1px solid #F1F5F9;
        }

        .partners-section h3 {
            color: #232F3F;
            letter-spacing: 1.5px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 24px;
            text-transform: uppercase;
            font-size: 12px;
            line-height: 16px;
        }

        .partners-logos {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap;
        }

        .partners-logos img {
            max-height: 40px;
            width: auto;
            max-width: 100px;
            object-fit: contain;
            transition: all 0.3s ease;
            filter: grayscale(30%);
        }

        .partners-logos img:hover {
            filter: grayscale(0%);
            opacity: 1;
        }
        .partners-ticker {
            overflow: hidden;
            width: 100%;
            padding: 40px 0;
            background: #fff;
        }

        .ticker-track {
            display: flex;
            gap: 60px; /* Espace entre les logos */
            animation: scrollLogos 20s linear infinite;
            width: max-content;
        }

        .ticker-track img {
            height: 60px; /* Ajuste selon tes besoins */
            object-fit: contain;
            transition: 0.3s;
        }

       

@keyframes scrollLogos {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); } /* Défile jusqu'à la moitié */
}

        /* =============================================
           SECTION À PROPOS
        ============================================= */
        .about-section {
            background: #DEECFF;
            max-width: 1393px;
            margin: 64px auto 64px auto;
            border-radius: 16px;
            padding: 60px 40px;
        }

        .about-container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            gap: 60px;
            align-items: center;
        }

        .about-content {
            flex: 1.1;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .about-content .badge-outline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            width: fit-content;
            padding: 10px 20px;
            background: #FFFFFF;
            border-radius: 6px;
            color: #000000;
            font-weight: 700;
            font-size: 16px;
            text-transform: uppercase;
        }

        .about-content .badge-outline::before,
        .about-content .badge-outline::after {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            background-color: #000000;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .about-content h2 {
            color: #242538;
            font-weight: 700;
            font-size: 50px;
            line-height: 1.2;
            letter-spacing: -1.1px;
            margin: 0;
        }

        .about-content p.lead-text,
        .about-content p.normal-text {
            font-weight: 700;
            font-size: 16px;
            line-height: 1.7;
            color: #10171E;
            margin: 0;
        }

        .btn-about-more {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            height: 52px;
            padding: 0 32px;
            background: #0066FF;
            border: 1px solid #0066FF;
            border-radius: 8px;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 15px;
            font-family: 'Space Grotesk', sans-serif;
            transition: background 0.3s ease;
        }

        .btn-about-more i {
            font-size: 14px;
            transform: rotate(44deg);
            display: inline-block;
        }

        .btn-about-more:hover {
            background: #0052cc;
        }

        .about-images-wrapper {
            flex: 1.2;
            display: flex;
            gap: 24px;
            align-self: stretch;
            min-height: 400px;
        }

        .about-img-box {
            flex: 1;
            position: relative;
            height: 100%;
        }

        .about-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 16px;
        }

        .image-corner-badge {
            position: absolute;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #FFFFFF;
            border-radius: 14px;
            padding: 10px 14px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            z-index: 10;
        }

        .left-box .image-corner-badge {
            top: 24px;
            left: -15px;
        }

        .right-box .image-corner-badge {
            bottom: 24px;
            right: -15px;
        }

        .badge-icon-square {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 10px;
            flex-shrink: 0;
        }

        .left-box .badge-icon-square {
            background: #EDF3FF;
        }

        .left-box .badge-icon-square i {
            color: #0066FF;
            font-size: 15px;
        }

        .right-box .badge-icon-square {
            background: #E8F9F3;
        }

        .right-box .badge-icon-square i {
            color: #10B981;
            font-size: 15px;
        }

        .badge-text-column {
            display: flex;
            flex-direction: column;
            gap: 1px;
        }

        .badge-text-column .badge-label {
            font-weight: 700;
            font-size: 10px;
            color: #8A94A6;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-text-column .badge-title {
            font-weight: 700;
            font-size: 14px;
            color: #0A192F;
        }

        /* =============================================
   SECTION SERVICES - CADRE BLANC AVEC MARGE VERTICALE
============================================= */
//* Ciblez le wrapper pour garantir le masquage */
.services-grid-wrapper {
    scrollbar-width: none;        /* Firefox */
    -ms-overflow-style: none;     /* IE/Edge */
}

/* Ciblez le wrapper pour Chrome, Safari, Edge */
.services-grid-wrapper::-webkit-scrollbar {
    display: none;
    width: 0;
    height: 0;
}

/* Gardez aussi la règle sur la grille elle-même par sécurité */
.services-grid {
    scrollbar-width: none;
    -ms-overflow-style: none;
}
.services-grid::-webkit-scrollbar {
    display: none;
}
.services-section {
    background-color: #0D1B3E;
    color: white;
    padding: 80px 0;
    font-family: 'Space Grotesk', sans-serif;
    background-image: radial-gradient(circle at top right, #1a3a7a 0%, transparent 45%);
    overflow-x: clip;
}

.services-header {
    max-width: 1280px;
    margin: 0 auto 48px auto;
    padding: 0 24px;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    gap: 20px;
}

.services-header-text {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.badge-lime {
    display: inline-flex;
    align-items: center;
    background: #DDF247;
    color: #1a1a1a;
    font-weight: 700;
    font-size: 20px;
    letter-spacing: -0.28px;
    text-transform: uppercase;
    padding: 12px 25px;
    border-radius: 8px;
    width: fit-content;
    line-height: 1;
}

.services-header h2 {
    font-weight: 700;
    font-size: 52px;
    line-height: 1.1;
    letter-spacing: -1.1px;
    margin: 0;
    max-width: 460px;
}

.carousel-arrows {
    display: flex;
    gap: 12px;
}

.arrow-btn {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    transition: all 0.3s;
    flex-shrink: 0;
}

.arrow-btn:hover {
    background: #0066FF;
    border-color: #0066FF;
}

.services-grid-wrapper {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
    overflow-x: auto;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
}

.services-grid {
    display: flex;
    gap: 30px;
}

.service-card-container {
    position: relative;
    flex: 0 0 590px;
    min-height: 380px;
    display: flex;
    align-items: center;
    scroll-snap-align: start;
}

/* Conteneur de l'image - hauteur fixe */
.service-card-img-bg {
    position: absolute;
    z-index: 2;
    right: 0;
    top: 0;
    bottom: 0;
    width: 350px;
    border-radius: 16px;
    overflow: hidden;
}

.service-card-img-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Cadre blanc - plus petit en hauteur avec marges 16px en haut et en bas */
.service-card-text-box {
    position: relative;
    z-index: 10;
    max-width: 280px;
    background: #FFFFFF;
    border-radius: 10px;
    padding: 28px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    
    /* IMPORTANT : marge verticale par rapport à l'image */
    margin-top: 16px;
    margin-bottom: 16px;
    align-self: stretch;
    
    /* Pour que le cadre ne dépasse pas la hauteur de l'image */
    max-height: calc(100% - 32px);
    overflow-y: auto;
}

.card-num {
    border: 1px solid #101010;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 700;
    color: #101010;
    font-size: 13px;
    flex-shrink: 0;
}

.service-card-text-box h3 {
    color: #242538;
    font-size: 18px;
    font-weight: 700;
    margin: 0;
    line-height: 1.3;
}

.service-card-text-box p {
    color: #101010;
    line-height: 1.5;
    font-size: 13px;
    font-weight: 400;
    margin: 0;
}

.btn-link {
    color: #0066FF;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    text-decoration: none;
    border: 1.5px solid #0066FF;
    border-radius: 6px;
    padding: 8px 16px;
    width: fit-content;
    transition: all 0.2s;
}

.btn-link:hover {
    background: #0066FF;
    color: #ffffff;
}

/* ========== RESPONSIVE ========== */

/* Tablette (≤1024px) */
@media (max-width: 1024px) {
    .service-card-container {
        flex: 0 0 500px;
        min-height: 340px;
    }
    .service-card-text-box {
        max-width: 240px;
        padding: 22px;
        gap: 14px;
    }
    .service-card-img-bg {
        width: 300px;
    }
    .services-header h2 {
        font-size: 38px;
    }
}

/* Mobile (≤768px) */
@media (max-width: 768px) {
    .services-section {
        padding: 60px 0;
    }
    .services-header {
        padding: 0 16px;
        margin-bottom: 32px;
    }
    .services-header h2 {
        font-size: 28px;
        max-width: 280px;
    }
    .badge-lime {
        font-size: 13px;
        padding: 8px 16px;
    }
    .carousel-arrows {
        gap: 8px;
    }
    .arrow-btn {
        width: 40px;
        height: 40px;
        font-size: 14px;
    }
    .services-grid-wrapper {
        padding: 0 16px;
    }
    .services-grid {
        gap: 20px;
    }
    
    .service-card-container {
        flex: 0 0 420px;
        min-height: 300px;
    }
    
    .service-card-img-bg {
        width: 250px;
    }
    
    .service-card-text-box {
        max-width: 190px;
        padding: 16px;
        gap: 12px;
        /* Les marges 16px sont conservées */
        margin-top: 16px;
        margin-bottom: 16px;
    }
    
    .service-card-text-box h3 {
        font-size: 14px;
    }
    
    .service-card-text-box p {
        font-size: 11px;
    }
    
    .card-num {
        width: 28px;
        height: 28px;
        font-size: 11px;
    }
    
    .btn-link {
        font-size: 11px;
        padding: 6px 12px;
    }
}

/* Petit mobile (≤550px) */
@media (max-width: 550px) {
    .service-card-container {
        flex: 0 0 340px;
        min-height: 260px;
    }
    
    .service-card-img-bg {
        width: 200px;
    }
    
    .service-card-text-box {
        max-width: 155px;
        padding: 12px;
        gap: 10px;
        margin-top: 16px;
        margin-bottom: 16px;
    }
    
    .service-card-text-box h3 {
        font-size: 12px;
    }
    
    .service-card-text-box p {
        font-size: 10px;
        line-height: 1.4;
    }
    
    .card-num {
        width: 24px;
        height: 24px;
        font-size: 10px;
    }
    
    .btn-link {
        font-size: 9px;
        padding: 5px 10px;
    }
    
    .btn-link i {
        font-size: 8px;
    }
}

/* Très petit mobile (≤450px) */
@media (max-width: 450px) {
    .service-card-container {
        flex: 0 0 300px;
        min-height: 240px;
    }
    
    .service-card-img-bg {
        width: 175px;
    }
    
    .service-card-text-box {
        max-width: 135px;
        padding: 10px;
        gap: 8px;
        margin-top: 16px;
        margin-bottom: 16px;
    }
    
    .service-card-text-box h3 {
        font-size: 11px;
    }
    
    .service-card-text-box p {
        font-size: 9px;
        line-height: 1.3;
    }
    
    .card-num {
        width: 20px;
        height: 20px;
        font-size: 9px;
    }
    
    .btn-link {
        font-size: 8px;
        padding: 4px 8px;
    }
}

        /* =============================================
           SECTION CTA
        ============================================= */
        .cta-section {
            background-color: #FFFFFF;
            background-image: radial-gradient(circle at bottom right, #DEECFF99 0%, transparent 40%);
            padding: 100px 40px;
        }

        .cta-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .cta-text-content {
            max-width: 550px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
        }

        .badge-together {
            display: inline-flex;
            align-items: center;
            background: #DDF247;
            color: #1a1a1a;
            font-weight: 700;
            font-size: 20px;
            letter-spacing: -0.48px;
            text-transform: uppercase;
            padding: 10px 20px;
            border-radius: 8px;
            line-height: 1;
        }

        .cta-text-content h2 {
            font-size: 50px;
            font-weight: 700;
            line-height: 1.2;
            color: #000000;
            margin: 0;
            letter-spacing: -1.1px;
        }

        .cta-text-content h2 span {
            color: #0066FF;
        }

        .cta-text-content p {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.6;
            color: #10171E;
            margin: 0;
        }

        .btn-cta {
            background: #0066FF;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            padding: 16px 32px;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .btn-cta:hover {
            background: #004ecc;
        }

        .cta-text-content .btn-cta i {
            display: inline-block;
            transform: rotate(44deg);
            font-size: 14px;
        }

        .cta-visual-wrapper {
            position: relative;
            padding: 20px;
            animation: floatVisualBlock 5s ease-in-out infinite;
            flex-shrink: 0;
        }

        @keyframes floatVisualBlock {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        .cta-main-img {
            position: relative;
            z-index: 2;
            width: 480px;
            height: 340px;
            border-radius: 24px;
            overflow: hidden;
        }

        .cta-main-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .floating-badge {
            position: absolute;
            bottom: 15px;
            left: -15px;
            z-index: 3;
            background: #FFFFFF;
            border-radius: 12px;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 14px;
            box-shadow: 0 15px 35px rgba(0, 102, 255, 0.12), 0 5px 15px rgba(0, 0, 0, 0.06);
            width: max-content;
        }

        .cta-visual-wrapper::before,
        .cta-visual-wrapper::after {
            content: "";
            position: absolute;
            width: 128px;
            height: 128px;
            z-index: 1;
            border-style: solid;
            border-color: #0066FF4D;
        }

        .cta-visual-wrapper::before {
            top: 0;
            left: 0;
            border-top-width: 4px;
            border-left-width: 4px;
            border-bottom-width: 0;
            border-right-width: 0;
            border-top-left-radius: 32px;
        }

        .cta-visual-wrapper::after {
            bottom: 0;
            right: 0;
            border-bottom-width: 4px;
            border-right-width: 4px;
            border-top-width: 0;
            border-left-width: 0;
            border-bottom-right-radius: 32px;
        }

        .floating-icon {
            background: #EDF5FF;
            color: #0066FF;
            width: 38px;
            height: 38px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .floating-text {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .floating-text .title {
            font-size: 14px;
            font-weight: 700;
            color: #111827;
        }

        .floating-text .subtitle {
            font-size: 11px;
            color: #6B7280;
        }

        /* =============================================
           SECTION STATS
        ============================================= */
        .stats-section {
            position: relative;
            width: 100%;
            padding: 60px 0;
            overflow: hidden;
        }

        .stats-container {
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
        }

        .stats-left-img {
            width: 65%;
            height: 490px;
            border-radius: 0 12px 12px 0;
            overflow: hidden;
            position: relative;
            z-index: 2;
        }

        .stats-left-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .stats-grid {
            position: absolute;
            right: 10%;
            width: 32%;
            height: 360px;
            background-color: #0066FF;
            border-radius: 16px;
            z-index: 3;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .stat-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 16px 24px;
        }

        .stat-box:nth-child(1),
        .stat-box:nth-child(2) {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-box:nth-child(1),
        .stat-box:nth-child(3) {
            border-right: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-box h4 {
            font-size: 36px;
            font-weight: 700;
            color: #FFFFFF;
            margin: 0 0 6px 0;
            letter-spacing: -1px;
            line-height: 1;
        }

        .stat-box .label {
            background: #FFFFFF;
            color: #101010;
            font-size: 12px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 5px;
            width: fit-content;
            display: inline-block;
            margin-bottom: 8px;
        }

        .stat-box p {
            font-size: 12px;
            line-height: 1.35;
            color: #FFFFFF;
            margin: 0;
        }

        .stats-dots-bg {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 280px;
            height: 490px;
            z-index: 1;
            background-image: url('images/point.png');
            background-repeat: no-repeat;
            background-position: right center;
            background-size: contain;
        }

        /* =============================================
           SECTION CONTACT
        ============================================= */
        .contact-section {
            padding: 100px 24px;
            background-color: #F8FAFC;
        }

        .contact-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            gap: 64px;
            align-items: flex-start;
        }

        .contact-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .contact-info h2 {
            font-weight: 700;
            font-size: 40px;
            line-height: 1.2;
            letter-spacing: -1.2px;
            color: #0A2540;
        }

        .contact-info p {
            color: #4A5568;
            line-height: 1.6;
            font-size: 16px;
        }

        .info-cards {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 16px;
        }

        .info-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
            border: 1px solid #E5E7EB;
        }

        .icon-circle {
            background: #F4F8FF;
            color: #0066FF;
            width: 52px;
            height: 52px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .info-card small {
            font-size: 10px;
            font-weight: 700;
            color: #94A3B8;
            letter-spacing: 0.5px;
            display: block;
            margin-bottom: 4px;
        }

        .info-card p {
            font-size: 15px;
            font-weight: 700;
            color: #0A2540;
            margin: 0;
        }

        .contact-form-container {
            flex: 1.3;
            background: white;
            padding: 48px;
            border-radius: 24px;
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.05);
            border: 1px solid #E5E7EB;
        }

        .contact-form-container h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #0A2540;
        }

        .contact-form-container>p {
            color: #4A5568;
            font-size: 14px;
        }

        .contact-form {
            margin-top: 32px;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .form-row {
            display: flex;
            gap: 24px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            color: #94A3B8;
            font-weight: 700;
            font-size: 11px;
            letter-spacing: 0.6px;
            text-transform: uppercase;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 14px 16px;
            border: 1px solid #F1F5F9;
            border-radius: 8px;
            background-color: #F8FAFC;
            font-size: 14px;
            outline: none;
            color: #111827;
            font-family: 'Space Grotesk', sans-serif;
            transition: all 0.3s;
            width: 100%;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #0066FF;
            background-color: #FFFFFF;
            box-shadow: 0 0 0 4px rgba(0, 102, 255, 0.1);
        }

        .form-group textarea {
            height: 140px;
            resize: none;
        }

        .btn-submit {
            background-color: #0066FF;
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 15px;
            font-family: 'Space Grotesk', sans-serif;
            transition: all 0.3s;
            align-self: flex-start;
        }

        .btn-submit:hover {
            background-color: #0052cc;
            transform: translateY(-2px);
        }

        /* =============================================
           FOOTER
        ============================================= */
        .main-footer {
            background-color: #010C1C;
            color: #9CA3AF;
            padding: 80px 24px 40px;
            font-size: 14px;
        }

        .footer-top {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.4fr 0.8fr 1fr 1.2fr;
            gap: 48px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding-bottom: 60px;
        }

        .footer-brand img {
            height: 38px;
            margin-bottom: 20px;
        }

        .footer-brand p {
            line-height: 1.6;
            font-size: 14px;
        }

        .footer-socials {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .footer-socials a {
            background: rgba(255, 255, 255, 0.04);
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s;
        }

        .footer-socials a:hover {
            background: #0066FF;
            border-color: #0066FF;
            transform: translateY(-3px);
        }

        .footer-links h4,
        .footer-newsletter h4 {
            color: white;
            margin-bottom: 20px;
            font-size: 15px;
            font-weight: 700;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #94A3B8;
            font-size: 14px;
            transition: all 0.2s;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 6px;
        }

        .footer-newsletter p {
            line-height: 1.6;
            margin-bottom: 16px;
            font-size: 14px;
        }

        .newsletter-box {
            display: flex;
            background: white;
            padding: 5px;
            border-radius: 10px;
        }

        .newsletter-box input {
            border: none;
            padding: 10px 12px;
            flex: 1;
            outline: none;
            font-size: 14px;
            color: #111827;
            font-family: 'Space Grotesk', sans-serif;
            min-width: 0;
        }

        .newsletter-box button {
            background-color: #0066FF;
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Space Grotesk', sans-serif;
            white-space: nowrap;
            transition: background 0.3s;
        }

        .newsletter-box button:hover {
            background-color: #0052cc;
        }

        .footer-bottom {
            max-width: 1280px;
            margin: 40px auto 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #6B7280;
            font-size: 13px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-bottom-links a:hover {
            color: white;
        }

        /* =============================================
           RESPONSIVE — TABLET (≤1024px)
        ============================================= */
        @media (max-width: 1024px) {

            /* Header */
            .nav-menu,
            .header-cta {
                display: none;
            }

            .burger-btn {
                display: flex;
            }

            /* Hero */
            .hero-content h1 {
                font-size: 42px;
            }

            .hero-image-container {
                display: none;
            }

            .hero-content {
                flex: 1;
            }

            /* About */
            .about-container {
                flex-direction: column;
                gap: 40px;
            }

            .about-images-wrapper {
                min-height: 300px;
                height: 320px;
                width: 100%;
            }

            .about-content h2 {
                font-size: 38px;
            }

            /* Services */
            .services-header h2 {
                font-size: 38px;
            }

            .badge-lime {
                font-size: 16px;
            }

            .services-grid {
                gap: 40px;
            }

            .service-card-container {
                width: 500px;
            }

            /* CTA */
            .cta-container {
                flex-direction: column;
                gap: 48px;
                align-items: center;
            }

            .cta-text-content {
                max-width: 100%;
                align-items: center;
                text-align: center;
            }

            .cta-main-img {
                width: 100%;
                max-width: 440px;
                height: auto;
                aspect-ratio: 4/3;
            }

            .cta-text-content h2 {
                font-size: 38px;
            }

            /* Stats */
            .stats-left-img {
                width: 60%;
            }

            .stats-grid {
                right: 5%;
                width: 38%;
            }

            /* Contact */
            .contact-container {
                flex-direction: column;
                gap: 40px;
            }

            .contact-form-container {
                padding: 32px;
            }

            /* Footer */
            .footer-top {
                grid-template-columns: 1fr 1fr;
                gap: 36px;
            }
        }

        /* =============================================
           RESPONSIVE — MOBILE (≤768px)
        ============================================= */
        @media (max-width: 768px) {

            /* Top bar */
            .top-bar-info span:not(:first-child) {
                display: none;
            }

            /* Hero */
            .hero-section {
                padding: 70px 0 130px 0;
            }

            .hero-content h1 {
                font-size: 32px;
            }

            .hero-content p {
                font-size: 15px;
            }

            .hero-features {
                flex-direction: column;
                gap: 12px;
            }

            .hero-actions {
                flex-direction: column;
            }

            .hero-actions .btn-primary,
            .hero-actions .btn-secondary {
                width: 100%;
                justify-content: center;
            }

            .ticker-item {
                font-size: 16px;
            }

            /* Partners */
            .partners-section {
                padding: 32px 24px;
            }

            .partners-logos {
                gap: 16px;
                justify-content: center;
            }

            .partners-logos img {
                width: 60px;
            }

            /* About */
            .about-section {
                margin: 0 16px 40px;
                padding: 36px 24px;
                border-radius: 12px;
            }

            .about-content .badge-outline {
                font-size: 13px;
                padding: 8px 14px;
            }

            .about-content h2 {
                font-size: 30px;
                line-height: 1.25;
            }

            .about-content p.normal-text {
                font-size: 14px;
            }

            .about-images-wrapper {
                flex-direction: column;
                height: auto;
                gap: 16px;
            }

            .about-img-box {
                height: 200px;
                flex: none;
                width: 100%;
            }

            .left-box .image-corner-badge {
                left: 8px;
                top: 8px;
            }

            .right-box .image-corner-badge {
                right: 8px;
                bottom: 8px;
            }

            /* Services */
            .services-header {
                padding: 0 20px;
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                margin-bottom: 32px;
            }

            .services-header h2 {
                font-size: 28px;
                max-width: 100%;
            }

            .badge-lime {
                font-size: 13px;
                padding: 10px 18px;
            }

            .services-grid-wrapper {
                padding: 0 20px;
                overflow-x: auto;
            }

            .services-grid {
                gap: 24px;
            }

            .service-card-container {
                width: 300px;
                min-height: auto;
            }

            .service-card-text-box {
                max-width: 240px;
                margin-right: -20px;
                padding: 20px;
            }

            .service-card-img-bg {
                width: 200px;
            }

            /* CTA */
            .cta-section {
                padding: 60px 20px;
            }

            .cta-text-content h2 {
                font-size: 28px;
            }

            .cta-text-content p {
                font-size: 16px;
            }

            .badge-together {
                font-size: 14px;
                padding: 8px 16px;
            }

            .cta-main-img {
                width: 100%;
                max-width: 100%;
            }

            .cta-visual-wrapper {
                width: 100%;
                padding: 16px;
            }

            .floating-badge {
                left: 0;
                bottom: -10px;
            }

            /* Stats */
            .stats-section {
                padding: 40px 0;
            }

            .stats-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .stats-left-img {
                width: 100%;
                height: 260px;
                border-radius: 0;
            }

            .stats-grid {
                position: relative;
                right: auto;
                width: calc(100% - 40px);
                margin: -40px 20px 0;
                height: auto;
                z-index: 3;
            }

            .stat-box {
                padding: 20px 16px;
            }

            .stat-box h4 {
                font-size: 28px;
            }

            .stats-dots-bg {
                display: none;
            }

            /* Contact */
            .contact-section {
                padding: 60px 20px;
            }

            .contact-info h2 {
                font-size: 28px;
            }

            .contact-form-container {
                padding: 24px;
                border-radius: 16px;
            }

            .form-row {
                flex-direction: column;
                gap: 16px;
            }

            /* Footer */
            .footer-top {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 12px;
            }

            .footer-bottom-links {
                justify-content: center;
            }

            .main-footer {
                padding: 60px 20px 32px;
            }
        }

        /* =============================================
           RESPONSIVE — SMALL MOBILE (≤480px)
        ============================================= */
        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 26px;
            }

            .hero-badge-tag {
                font-size: 10px;
            }

            .about-content h2 {
                font-size: 24px;
            }

            .services-header h2 {
                font-size: 24px;
            }

            .cta-text-content h2 {
                font-size: 24px;
            }

            .contact-info h2 {
                font-size: 24px;
            }

            .stat-box h4 {
                font-size: 24px;
            }

            .badge-lime {
                font-size: 12px;
                padding: 8px 14px;
            }

            .badge-together {
                font-size: 12px;
                padding: 8px 14px;
            }
        }


        /* ===== BOUTON PRIMARY BLUE (pour les pages internes) ===== */
.btn-primary-blue {
    background-color: #0066FF;
    color: white;
    padding: 14px 28px;
    border-radius: 8px;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: none;
    cursor: pointer;
    font-family: 'Space Grotesk', sans-serif;
    transition: all 0.3s ease;
}

.btn-primary-blue:hover {
    background-color: #0052cc;
    transform: translateY(-2px);
}

.btn-primary-blue i {
    font-size: 14px;
    transform: rotate(44deg);
    display: inline-block;
}

/* ===== STATS SECTION (pour la page about) ===== */
.stats-section {
    position: relative;
    width: 100%;
    padding: 60px 0;
    overflow: hidden;
}

.stats-container {
    width: 100%;
    display: flex;
    align-items: center;
    position: relative;
}

.stats-left-img {
    width: 65%;
    height: 490px;
    border-radius: 0 12px 12px 0;
    overflow: hidden;
    position: relative;
    z-index: 2;
}

.stats-left-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.stats-grid {
    position: absolute;
    right: 10%;
    width: 32%;
    height: 360px;
    background-color: #0066FF;
    border-radius: 16px;
    z-index: 3;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(2, 1fr);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.stat-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 16px 24px;
}

.stat-box:nth-child(1),
.stat-box:nth-child(2) {
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-box:nth-child(1),
.stat-box:nth-child(3) {
    border-right: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-box h4 {
    font-size: 36px;
    font-weight: 700;
    color: #FFFFFF;
    margin: 0 0 6px 0;
    letter-spacing: -1px;
    line-height: 1;
}

.stat-box .label {
    background: #FFFFFF;
    color: #101010;
    font-size: 12px;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 5px;
    width: fit-content;
    display: inline-block;
    margin-bottom: 8px;
}

.stat-box p {
    font-size: 12px;
    line-height: 1.35;
    color: #FFFFFF;
    margin: 0;
}

/* Responsive stats */
@media (max-width: 1024px) {
    .stats-left-img {
        width: 60%;
    }
    .stats-grid {
        right: 5%;
        width: 38%;
    }
}

@media (max-width: 768px) {
    .stats-section {
        padding: 40px 0;
    }
    .stats-container {
        flex-direction: column;
        align-items: flex-start;
    }
    .stats-left-img {
        width: 100%;
        height: 260px;
        border-radius: 0;
    }
    .stats-grid {
        position: relative;
        right: auto;
        width: calc(100% - 40px);
        margin: -40px 20px 0;
        height: auto;
        z-index: 3;
    }
    .stat-box {
        padding: 20px 16px;
    }
    .stat-box h4 {
        font-size: 28px;
    }
}


    </style>

        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #FFFFFF;
            color: #111827;
            overflow-x: hidden;
            font-family: 'Space Grotesk', 'Inter', sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* ===== BUTTONS ===== */
        .btn-primary-blue {
            background-color: #0066FF;
            color: white;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: none;
            cursor: pointer;
            font-family: 'Space Grotesk', sans-serif;
            transition: all 0.3s ease;
        }

        .btn-primary-blue:hover {
            background-color: #0052cc;
            transform: translateY(-2px);
        }

        .btn-primary-blue i {
            font-size: 14px;
            transform: rotate(44deg);
            display: inline-block;
        }

        /* ===== TOP BAR ===== */
        .top-bar {
            background-color: #0066FF;
            color: white;
            padding: 10px 0;
            font-size: 14px;
        }

        .top-bar-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 24px;
            flex-wrap: wrap;
            gap: 8px;
        }

        .top-bar-info {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .top-bar-info span {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 400;
            font-size: 14px;
        }

        .top-bar-info span i {
            margin-right: 6px;
        }

        .top-bar-links {
            display: flex;
            gap: 14px;
            align-items: center;
        }

        .top-bar-links .separator {
            opacity: 0.4;
        }

        .top-bar-links a:hover {
            opacity: 0.8;
        }

        /* ===== HEADER ===== */
        .main-header {
            background: white;
            padding: 16px 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 24px;
            gap: 20px;
        }

        .logo img {
            height: 38px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 36px;
            padding: 0 12px;
            border-radius: 5px;
            font-weight: 700;
            font-size: 15px;
            color: #10171E;
            white-space: nowrap;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #E4EFFF;
            color: #10171E;
        }

        .nav-link i {
            font-size: 10px;
            margin-left: 5px;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 10px;
            background: #FFFFFF;
            min-width: 300px;
            border-radius: 0 0 16px 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            z-index: 100;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item {
            display: block;
            padding: 16px 22px;
            color: #111827;
            font-size: 14px;
            font-weight: 700;
            border-bottom: 1px solid #F3F4F6;
            transition: color 0.2s, background 0.2s;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            color: #0066FF;
            background-color: #FAFBFC;
        }

        .btn-start-project {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            padding: 0 28px;
            border-radius: 8px;
            border: 1px solid #0066FF;
            background: #0066FF;
            font-weight: 700;
            font-size: 16px;
            color: #FFFFFF;
            white-space: nowrap;
            transition: background 0.3s ease;
        }

        .btn-start-project:hover {
            background: #0052cc;
        }

        .btn-icon-wrapper {
            display: inline-flex;
            align-items: center;
            margin-left: 10px;
        }

        .btn-icon-wrapper i {
            color: #FFFFFF;
            font-size: 14px;
            transform: rotate(44deg);
            display: inline-block;
        }

        /* Burger */
        .burger-btn {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
        }

        .burger-btn span {
            display: block;
            width: 24px;
            height: 2px;
            background: #10171E;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-btn.open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        .burger-btn.open span:nth-child(2) {
            opacity: 0;
        }

        .burger-btn.open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        .mobile-nav {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: white;
            z-index: 999;
            padding: 90px 24px 40px;
            flex-direction: column;
            gap: 8px;
            overflow-y: auto;
        }

        .mobile-nav.open {
            display: flex;
        }

        .mobile-nav a {
            display: block;
            padding: 14px 16px;
            font-weight: 700;
            font-size: 18px;
            color: #10171E;
            border-radius: 8px;
            border-bottom: 1px solid #F3F4F6;
        }

        .mobile-nav a:hover {
            background: #E4EFFF;
            color: #0066FF;
        }

        .mobile-nav .mobile-nav-sub {
            padding-left: 28px;
            font-size: 15px;
            font-weight: 500;
            color: #4B5563;
        }

        .mobile-nav .mobile-cta {
            margin-top: 16px;
            background: #0066FF;
            color: white;
            text-align: center;
            border-radius: 8px;
            padding: 16px;
            font-weight: 700;
            border-bottom: none;
        }

        .mobile-nav .mobile-cta:hover {
            background: #0052cc;
            color: white;
        }

        .mobile-nav-close {
            position: absolute;
            top: 20px;
            right: 24px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #10171E;
        }

        /* ===== PAGE BANNER ===== */
        .page-banner {
            background-color: #0D1B3E;
            background-image: radial-gradient(circle at top right, #1a3a7a 0%, transparent 50%);
            color: white;
            padding: 80px 24px;
            text-align: center;
        }

        .page-banner-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .page-banner .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 8px;
            align-items: center;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 20px;
        }

        .page-banner .breadcrumb a {
            color: rgba(255, 255, 255, 0.6);
        }

        .page-banner .breadcrumb a:hover {
            color: white;
        }

        .page-banner .breadcrumb i {
            font-size: 10px;
        }

        .page-banner h1 {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 16px;
            color: rgba(255, 255, 255, 0.75);

        }

        .page-banner p {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.75);
            line-height: 1.6;
        }

        /* ===== SECTION INTRO ===== */
        .intro-section {
            padding: 80px 24px;
            background: #FFFFFF;
        }

        .intro-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            gap: 64px;
            align-items: center;
        }

        .intro-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .badge-outline-dark {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            width: fit-content;
            padding: 10px 20px;
            background: #F4F8FF;
            border-radius: 6px;
            color: #0066FF;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            border: 1px solid rgba(0, 102, 255, 0.15);
        }

        .badge-outline-dark::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: #0066FF;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .intro-content h2 {
            font-size: 46px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -1px;
            color: #0A2540;
        }

        .intro-content p {
            font-size: 16px;
            line-height: 1.7;
            color: #4B5563;
            font-weight: 500;
        }

        .intro-image {
            flex: 1;
            position: relative;
        }

        .intro-image img {
            width: 100%;
            border-radius: 16px;
            object-fit: cover;
            height: 420px;
        }

        .intro-image-badge {
            position: absolute;
            bottom: 24px;
            left: -20px;
            background: white;
            border-radius: 14px;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 14px;
            box-shadow: 0 15px 35px rgba(0, 102, 255, 0.12), 0 5px 15px rgba(0, 0, 0, 0.06);
        }

        .intro-image-badge .badge-icon {
            background: #EDF5FF;
            color: #0066FF;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .intro-image-badge .badge-text .label {
            font-size: 11px;
            color: #94A3B8;
            font-weight: 700;
            text-transform: uppercase;
            display: block;
        }

        .intro-image-badge .badge-text .value {
            font-size: 16px;
            font-weight: 700;
            color: #0A2540;
        }

        /* ===== MISSION / VISION / AMBITION ===== */
        .mvv-section {
            background: #DEECFF;
            padding: 80px 24px;
        }

        .mvv-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .section-label {
            display: inline-flex;
            align-items: center;
            background: #DDF247;
            color: #1a1a1a;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: -0.28px;
            text-transform: uppercase;
            padding: 10px 22px;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .mvv-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .mvv-card {
            background: white;
            border-radius: 16px;
            padding: 36px 32px;
            display: flex;
            flex-direction: column;
            gap: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease;
        }

        .mvv-card:hover {
            transform: translateY(-6px);
        }

        .mvv-icon {
            width: 52px;
            height: 52px;
            background: #EDF5FF;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #0066FF;
        }

        .mvv-card h3 {
            font-size: 22px;
            font-weight: 700;
            color: #0A2540;
        }

        .mvv-card p {
            font-size: 15px;
            line-height: 1.65;
            color: #4B5563;
        }

        /* ===== VALEURS ===== */
        .values-section {
            padding: 80px 24px;
            background: #FFFFFF;
        }

        .values-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            gap: 64px;
            align-items: center;
        }

        .values-image {
            flex: 1;
        }

        .values-image img {
            width: 100%;
            border-radius: 16px;
            object-fit: cover;
            height: 480px;
        }

        .values-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        .values-content h2 {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -1px;
            color: #0A2540;
        }

        .values-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .value-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 18px;
            background: #F8FAFC;
            border-radius: 12px;
            border: 1px solid #E5E7EB;
            transition: all 0.3s ease;
        }

        .value-item:hover {
            background: #EDF5FF;
            border-color: rgba(0, 102, 255, 0.2);
        }

        .value-item-icon {
            background: #EDF5FF;
            color: #0066FF;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
        }

        .value-item-text strong {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: #0A2540;
            margin-bottom: 4px;
        }

        .value-item-text span {
            font-size: 13px;
            color: #6B7280;
            line-height: 1.5;
        }

        /* ===== STATS ===== */
        .stats-section {
            position: relative;
            width: 100%;
            padding: 60px 0;
            overflow: hidden;
        }

        .stats-container {
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
        }

        .stats-left-img {
            width: 65%;
            height: 490px;
            border-radius: 0 12px 12px 0;
            overflow: hidden;
            position: relative;
            z-index: 2;
        }

        .stats-left-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .stats-grid {
            position: absolute;
            right: 10%;
            width: 32%;
            height: 360px;
            background-color: #0066FF;
            border-radius: 16px;
            z-index: 3;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .stat-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 16px 24px;
        }

        .stat-box:nth-child(1),
        .stat-box:nth-child(2) {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-box:nth-child(1),
        .stat-box:nth-child(3) {
            border-right: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-box h4 {
            font-size: 36px;
            font-weight: 700;
            color: #FFFFFF;
            margin: 0 0 6px 0;
            letter-spacing: -1px;
            line-height: 1;
        }

        .stat-box .label {
            background: #FFFFFF;
            color: #101010;
            font-size: 12px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 5px;
            width: fit-content;
            margin-bottom: 8px;
        }

        .stat-box p {
            font-size: 12px;
            line-height: 1.35;
            color: #FFFFFF;
            margin: 0;
        }

        /* ===== CTA BAND ===== */
        .cta-band {
            background: #0D1B3E;
            padding: 60px 24px;
        }

        .cta-band-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
        }

        .cta-band h2 {
            font-size: 36px;
            font-weight: 700;
            color: white;
            letter-spacing: -0.8px;
            line-height: 1.3;
        }

        .cta-band h2 span {
            color: #DDF247;
        }

        .cta-band p {
            color: rgba(255, 255, 255, 0.65);
            font-size: 16px;
            margin-top: 8px;
        }

        /* ===== FOOTER ===== */
        .main-footer {
            background-color: #010C1C;
            color: #9CA3AF;
            padding: 80px 24px 40px;
            font-size: 14px;
        }

        .footer-top {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.4fr 0.8fr 1fr 1.2fr;
            gap: 48px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding-bottom: 60px;
        }

        .footer-brand img {
            height: 38px;
            margin-bottom: 20px;
        }

        .footer-brand p {
            line-height: 1.6;
            font-size: 14px;
        }

        .footer-socials {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .footer-socials a {
            background: rgba(255, 255, 255, 0.04);
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s;
        }

        .footer-socials a:hover {
            background: #0066FF;
            border-color: #0066FF;
            transform: translateY(-3px);
        }

        .footer-links h4,
        .footer-newsletter h4 {
            color: white;
            margin-bottom: 20px;
            font-size: 15px;
            font-weight: 700;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #94A3B8;
            font-size: 14px;
            transition: all 0.2s;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 6px;
        }

        .footer-newsletter p {
            line-height: 1.6;
            margin-bottom: 16px;
            font-size: 14px;
        }

        .newsletter-box {
            display: flex;
            background: white;
            padding: 5px;
            border-radius: 10px;
        }

        .newsletter-box input {
            border: none;
            padding: 10px 12px;
            flex: 1;
            outline: none;
            font-size: 14px;
            color: #111827;
            font-family: 'Space Grotesk', sans-serif;
            min-width: 0;
        }

        .newsletter-box button {
            background-color: #0066FF;
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Space Grotesk', sans-serif;
            white-space: nowrap;
            transition: background 0.3s;
        }

        .newsletter-box button:hover {
            background-color: #0052cc;
        }

        .footer-bottom {
            max-width: 1280px;
            margin: 40px auto 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #6B7280;
            font-size: 13px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-bottom-links a:hover {
            color: white;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {

            .nav-menu,
            .header-cta {
                display: none;
            }

            .burger-btn {
                display: flex;
            }

            .page-banner h1 {
                font-size: 38px;
            }

            .intro-container {
                flex-direction: column;
                gap: 40px;
            }

            .intro-content h2 {
                font-size: 34px;
            }

            .mvv-grid {
                grid-template-columns: 1fr;
            }

            .values-container {
                flex-direction: column;
            }

            .values-image img {
                height: 320px;
            }

            .stats-left-img {
                width: 60%;
            }

            .stats-grid {
                right: 5%;
                width: 38%;
            }

            .footer-top {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .page-banner {
                padding: 60px 20px;
            }

            .page-banner h1 {
                font-size: 28px;
            }

            .intro-section {
                padding: 50px 20px;
            }

            .mvv-section {
                padding: 50px 20px;
            }

            .mvv-grid {
                grid-template-columns: 1fr;
            }

            .values-section {
                padding: 50px 20px;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .stats-left-img {
                width: 100%;
                height: 260px;
                border-radius: 0;
            }

            .stats-grid {
                position: relative;
                right: auto;
                width: calc(100% - 40px);
                margin: -40px 20px 0;
                height: auto;
                z-index: 3;
            }

            .stat-box {
                padding: 20px 16px;
            }

            .stat-box h4 {
                font-size: 28px;
            }

            .cta-band-container {
                flex-direction: column;
                text-align: center;
            }

            .footer-top {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>

    <style>
    /* =============================================
       PAGE BANNER
    ============================================= */
    .page-banner {
        background-color: #0D1B3E;
        background-image: radial-gradient(circle at top right, #1a3a7a 0%, transparent 50%),
            radial-gradient(circle at bottom left, #0066FF22 0%, transparent 40%);
        color: white;
        padding: 90px 24px 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .page-banner::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 20% 50%, rgba(0, 102, 255, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(221, 242, 71, 0.05) 0%, transparent 40%);
    }

    .page-banner-inner {
        position: relative;
        z-index: 2;
        max-width: 760px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .page-banner .badge-lime {
        display: inline-flex;
        align-items: center;
        background: #DDF247;
        color: #1a1a1a;
        font-weight: 700;
        font-size: 13px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        padding: 8px 20px;
        border-radius: 8px;
    }

    .page-banner h1 {
        font-size: 48px;
        font-weight: 700;
        line-height: 1.15;
        letter-spacing: -1px;
        color: white;
        margin: 0;
    }

    .page-banner p {
        font-size: 17px;
        color: rgba(255, 255, 255, 0.75);
        line-height: 1.65;
        max-width: 620px;
        margin: 0;
    }

    .banner-actions {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 8px;
    }

    .btn-banner-primary {
        background: #0066FF;
        color: white;
        padding: 14px 28px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 15px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: background 0.3s;
    }

    .btn-banner-primary:hover {
        background: #0052cc;
    }

    .btn-banner-primary i {
        transform: rotate(44deg);
        display: inline-block;
        font-size: 13px;
    }

    .btn-banner-outline {
        border: 1.5px solid rgba(255, 255, 255, 0.35);
        color: white;
        padding: 14px 28px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 15px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s;
    }

    .btn-banner-outline:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: white;
    }

    /* =============================================
       SECTION APPROCHE
    ============================================= */
    .section-approach {
        background: #F8FAFC;
        padding: 80px 24px;
    }

    .section-approach .inner {
        max-width: 820px;
        margin: 0 auto;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .section-approach h2 {
        font-size: 38px;
        font-weight: 700;
        color: #0A2540;
        letter-spacing: -0.8px;
        line-height: 1.2;
    }

    .section-approach p {
        font-size: 16px;
        line-height: 1.7;
        color: #4A5568;
    }

    /* =============================================
       SECTION MÉTHODES
    ============================================= */
    .section-methods {
        background: #0D1B3E;
        padding: 80px 24px;
    }

    .section-methods .container {
        max-width: 1280px;
        margin: 0 auto;
    }

    .section-methods .section-heading {
        text-align: center;
        margin-bottom: 52px;
    }

    .section-methods .section-heading h2 {
        font-size: 40px;
        font-weight: 700;
        color: white;
        letter-spacing: -0.8px;
        margin-bottom: 12px;
    }

    .section-methods .section-heading p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.6);
        max-width: 520px;
        margin: 0 auto;
    }

    .methods-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .method-card {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 36px 28px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        transition: all 0.3s ease;
    }

    .method-card:hover {
        background: rgba(0, 102, 255, 0.08);
        border-color: rgba(0, 102, 255, 0.3);
        transform: translateY(-4px);
    }

    .method-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: rgba(0, 102, 255, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: #4D9AFF;
    }

    .method-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: white;
        margin: 0;
    }

    .method-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.6);
        line-height: 1.6;
        margin: 0;
    }

    .method-note {
        text-align: center;
        margin-top: 32px;
        font-size: 15px;
        color: rgba(255, 255, 255, 0.5);
    }

    .method-note strong {
        color: #DDF247;
    }

    /* =============================================
       SECTION PHASES
    ============================================= */
    .section-phases {
        background: #FFFFFF;
        padding: 80px 24px;
    }

    .section-phases .container {
        max-width: 1280px;
        margin: 0 auto;
    }

    .section-phases .section-heading {
        text-align: center;
        margin-bottom: 52px;
    }

    .section-phases .section-heading h2 {
        font-size: 40px;
        font-weight: 700;
        color: #0A2540;
        letter-spacing: -0.8px;
    }

    .phases-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .phase-card {
        background: #F8FAFC;
        border-radius: 16px;
        padding: 32px 28px;
        border: 1px solid #E5E7EB;
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 16px;
        transition: all 0.3s ease;
    }

    .phase-card:hover {
        border-color: #0066FF;
        box-shadow: 0 12px 32px rgba(0, 102, 255, 0.08);
        transform: translateY(-3px);
    }

    .phase-num {
        position: absolute;
        top: -16px;
        right: 24px;
        background: #0066FF;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 14px;
        box-shadow: 0 4px 12px rgba(0, 102, 255, 0.3);
    }

    .phase-card h3 {
        font-size: 18px;
        font-weight: 700;
        color: #0A2540;
        margin: 0;
    }

    .phase-card p {
        font-size: 14px;
        color: #4A5568;
        line-height: 1.6;
        margin: 0;
    }

    .phase-deliverables {
        display: flex;
        flex-direction: column;
        gap: 6px;
        margin-top: 4px;
    }

    .phase-deliverables .del-label {
        font-size: 11px;
        font-weight: 700;
        color: #94A3B8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .phase-deliverables ul {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .phase-deliverables li {
        font-size: 13px;
        color: #374151;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .phase-deliverables li::before {
        content: '';
        display: inline-block;
        width: 6px;
        height: 6px;
        background: #0066FF;
        border-radius: 50%;
        flex-shrink: 0;
    }

    /* =============================================
       SECTION COLLABORATION
    ============================================= */
    .section-collab {
        background: #DEECFF;
        padding: 80px 24px;
    }

    .section-collab .container {
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 64px;
        align-items: center;
    }

    .collab-block h2 {
        font-size: 34px;
        font-weight: 700;
        color: #0A2540;
        letter-spacing: -0.7px;
        margin-bottom: 20px;
    }

    .collab-block p {
        font-size: 15px;
        color: #4A5568;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .collab-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .collab-list li {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 15px;
        font-weight: 600;
        color: #0A2540;
    }

    .collab-list .check-icon {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #0066FF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .collab-list .check-icon i {
        color: white;
        font-size: 12px;
    }

    .benefits-block h3 {
        font-size: 28px;
        font-weight: 700;
        color: #0A2540;
        letter-spacing: -0.5px;
        margin-bottom: 20px;
    }

    .benefits-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .benefits-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 15px;
        color: #374151;
        line-height: 1.5;
    }

    .benefits-list .star-icon {
        width: 28px;
        height: 28px;
        border-radius: 8px;
        background: #DDF247;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    .benefits-list .star-icon i {
        color: #1a1a1a;
        font-size: 12px;
    }

    /* =============================================
       FORM SECTION
    ============================================= */
    .section-form {
        background: #F8FAFC;
        padding: 80px 24px;
    }

    .section-form .container {
        max-width: 1280px;
        margin: 0 auto;
    }

    .form-intro {
        text-align: center;
        margin-bottom: 52px;
    }

    .form-intro h2 {
        font-size: 40px;
        font-weight: 700;
        color: #0A2540;
        letter-spacing: -0.8px;
        margin-bottom: 12px;
    }

    .form-intro p {
        font-size: 16px;
        color: #4A5568;
    }

    .form-card {
        max-width: 760px;
        margin: 0 auto;
        background: white;
        border-radius: 24px;
        padding: 52px;
        box-shadow: 0 20px 60px -15px rgba(0, 0, 0, 0.06);
        border: 1px solid #E5E7EB;
    }

    .form-step-title {
        font-size: 22px;
        font-weight: 700;
        color: #0A2540;
        margin-bottom: 28px;
        padding-bottom: 20px;
        border-bottom: 2px solid #F1F5F9;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .form-step-title .step-num {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #0066FF;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 700;
        flex-shrink: 0;
    }

    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin-bottom: 20px;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }

    .form-group label {
        color: #94A3B8;
        font-weight: 700;
        font-size: 11px;
        letter-spacing: 0.6px;
        text-transform: uppercase;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 13px 16px;
        border: 1.5px solid #F1F5F9;
        border-radius: 8px;
        background-color: #F8FAFC;
        font-size: 14px;
        outline: none;
        color: #111827;
        font-family: 'Space Grotesk', sans-serif;
        transition: all 0.25s;
        width: 100%;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #0066FF;
        background-color: #FFFFFF;
        box-shadow: 0 0 0 4px rgba(0, 102, 255, 0.08);
    }

    .form-group input.is-invalid {
        border-color: #EF4444;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.08);
    }

    .btn-submit {
        background-color: #0066FF;
        color: white;
        border: none;
        padding: 16px 32px;
        border-radius: 8px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 15px;
        font-family: 'Space Grotesk', sans-serif;
        transition: all 0.3s;
        width: 100%;
        margin-top: 20px;
    }

    .btn-submit:hover {
        background-color: #0052cc;
        transform: translateY(-2px);
    }

    .form-confirmation {
        display: none;
        text-align: center;
        padding: 20px 0;
    }

    .confirm-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: #ECFDF5;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
        font-size: 36px;
        color: #10B981;
    }

    .form-confirmation h3 {
        font-size: 26px;
        font-weight: 700;
        color: #0A2540;
        margin-bottom: 12px;
    }

    .form-confirmation p {
        font-size: 15px;
        color: #4A5568;
        line-height: 1.6;
    }

    /* =============================================
       RESPONSIVE
    ============================================= */
    @media (max-width: 1024px) {
        .page-banner h1 {
            font-size: 38px;
        }
        .methods-grid {
            grid-template-columns: 1fr 1fr;
        }
        .phases-grid {
            grid-template-columns: 1fr 1fr;
        }
        .section-collab .container {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        .form-card {
            padding: 36px;
        }
    }

    @media (max-width: 768px) {
        .page-banner {
            padding: 60px 20px 56px;
        }
        .page-banner h1 {
            font-size: 28px;
        }
        .page-banner p {
            font-size: 15px;
        }
        .banner-actions {
            flex-direction: column;
            align-items: stretch;
        }
        .btn-banner-primary,
        .btn-banner-outline {
            justify-content: center;
        }
        .section-approach h2 {
            font-size: 28px;
        }
        .section-methods .section-heading h2 {
            font-size: 28px;
        }
        .methods-grid {
            grid-template-columns: 1fr;
        }
        .section-phases .section-heading h2 {
            font-size: 28px;
        }
        .phases-grid {
            grid-template-columns: 1fr;
        }
        .collab-block h2 {
            font-size: 26px;
        }
        .benefits-block h3 {
            font-size: 22px;
        }
        .form-intro h2 {
            font-size: 28px;
        }
        .form-card {
            padding: 24px;
            border-radius: 16px;
        }
        .form-row {
            flex-direction: column;
            gap: 0;
        }
    }

    @media (max-width: 480px) {
        .page-banner h1 {
            font-size: 24px;
        }
        .form-step-title {
            font-size: 18px;
        }
    }
</style>
</head>

<body>

    <!-- MOBILE NAV -->
    <nav class="mobile-nav" id="mobileNav">
        <button class="mobile-nav-close" id="mobileNavClose">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <a href="{{ Route('home') }}">Accueil</a>

        <a href="{{ Route('services') }}" class="nav-link">Nos Services </i></a>

        <a href="#cta">Pourquoi nous ?</a>
        <a href="{{ Route('about') }}">À propos</a>
        <a href="{{ Route('contact') }}">Contact</a>
        <a href="{{ Route('contactprojet') }}" class="mobile-cta">Démarrer un projet <i class="fa-solid fa-arrow-up"
                style="transform:rotate(44deg);display:inline-block;margin-left:8px;"></i></a>
    </nav>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-info">
                <span><i class="fa-solid fa-location-dot"></i> Cotonou, Bénin</span>
                <span><i class="fa-solid fa-envelope"></i> adh-group.net@outlook.com</span>
            </div>
            <div class="top-bar-links">
                
                <span class="separator">|</span>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header class="main-header">
        <div class="header-container">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/site_logo/logoadh.png') }}" alt="ADH Group Logo">
                </a>
            </div>
            <nav class="nav-menu">
                <a href="{{ Route('home') }}" class="nav-link active">Accueil</a>
                
                    <a href="{{ Route('services') }}" class="nav-link">Nos Services  </a>
                     
                
                <a href="{{ Route('about') }}" class="nav-link">À propos</a>
                <a href="{{ Route('contact') }}" class="nav-link">Contact</a>
            </nav>
            <div class="header-cta">
                <a href="{{ Route('contactprojet') }}" class="btn-start-project">
                    Démarrer un projet
                    <span class="btn-icon-wrapper"><i class="fa-solid fa-arrow-up"></i></span>
                </a>
            </div>
            <button class="burger-btn" id="burgerBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="footer-brand">
                <img src="{{ asset('images/logoadh blanc.png') }}" alt="ADH Group Logo Blanc">
                <p>ADH Group est une agence de services du numérique dédiée à l'accélération numérique et à la
                    transformation agile des organisations.</p>
                <div class="footer-socials">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="{{ Route('home') }}">Accueil</a></li>
                    <li><a href="{{ Route('services') }}">Nos Services</a></li>
                    <li><a href="#cta">Pourquoi nous ?</a></li>
                    <li><a href="{{ Route('about') }}">À propos</a></li>
                    <li><a href="{{ Route('contact') }}">Nous contacter</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Nos expertises clés</h4>
                <ul>
                    <li><a href="#services">Solutions Entreprise & ERP</a></li>
                    <li><a href="#services">Intelligence Artificielle & Data</a></li>
                    <li><a href="#services">Cybersécurité & Cyberdéfense</a></li>
                    <li><a href="#services">Cloud & Infrastructure</a></li>
                    <li><a href="#services">Support & Infogérance</a></li>
                </ul>
            </div>
            <div class="footer-newsletter">
                <h4>Notre Newsletter</h4>
                <p>Inscrivez-vous pour recevoir les dernières tendances technologiques et actualités de notre groupe.
                </p>
                <div class="newsletter-box">
                    <input type="email" placeholder="Votre email">
                    <button type="button">S'abonner</button>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© {{ date('Y') }} ADH Group. Tous droits réservés.</p>
            <div class="footer-bottom-links">
                <a href="#">Politique de Confidentialité</a>
                <a href="#">Conditions Générales d'Utilisation</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Burger menu
            const burgerBtn = document.getElementById("burgerBtn");
            const mobileNav = document.getElementById("mobileNav");
            const mobileNavClose = document.getElementById("mobileNavClose");

            if (burgerBtn && mobileNav) {
                burgerBtn.addEventListener("click", () => {
                    burgerBtn.classList.toggle("open");
                    mobileNav.classList.toggle("open");
                    document.body.style.overflow = mobileNav.classList.contains("open") ? "hidden" : "";
                });

                if (mobileNavClose) {
                    mobileNavClose.addEventListener("click", () => {
                        burgerBtn.classList.remove("open");
                        mobileNav.classList.remove("open");
                        document.body.style.overflow = "";
                    });
                }

                mobileNav.querySelectorAll("a").forEach(link => {
                    link.addEventListener("click", () => {
                        burgerBtn.classList.remove("open");
                        mobileNav.classList.remove("open");
                        document.body.style.overflow = "";
                    });
                });
            }

            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener("click", function(e) {
                    const targetId = this.getAttribute("href");
                    if (targetId === "#") return;
                    const target = document.querySelector(targetId);
                    if (target) {
                        e.preventDefault();
                        const headerOffset = 80;
                        const top = target.getBoundingClientRect().top + window.scrollY -
                            headerOffset;
                        window.scrollTo({
                            top,
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
