@extends('layouts.app')

@section('title', 'À propos - ADH Group')

@push('page-styles')
<style>
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

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
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

        .values-section {
            padding: 50px 20px;
        }

        .values-grid {
            grid-template-columns: 1fr;
        }

        .cta-band-container {
            flex-direction: column;
            text-align: center;
        }
    }
</style>
@endpush

@section('content')
<!-- PAGE BANNER -->
<section class="page-banner">
    <div class="page-banner-container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <i class="fa-solid fa-chevron-right"></i>
            <span>À propos</span>
        </div>
        <h1>À propos de ADH Group</h1>
        <p>L'agilité au service de votre croissance digitale en Afrique</p>
    </div>
</section>

<!-- INTRO -->
<section class="intro-section">
    <div class="intro-container">
        <div class="intro-content">
            <span class="badge-outline-dark">DÉCOUVREZ NOTRE HISTOIRE</span>
            <h2>Votre partenaire technologique panafricain</h2>
            <p>ADH est une entreprise technologique panafricaine spécialisée dans la FinTech, l'Intelligence
                Artificielle et la transformation digitale. Nous accompagnons les organisations publiques et privées
                dans la modernisation de leurs services grâce à des solutions innovantes, sécurisées et adaptées aux
                réalités du marché africain.</p>
            <p>Nous composons une équipe d'ingénieurs, d'experts numériques et de stratèges engagés pour faire
                émerger des solutions technologiques fiables, évolutives et accessibles. Nous combinons innovation,
                expertise et rigueur pour proposer des services à fort impact, du conseil stratégique à la mise en
                œuvre technique.</p>
            <a href=" " class="btn-primary-blue">Travaillons ensemble <i
                    class="fa-solid fa-arrow-up"></i></a>
        </div>
        <div class="intro-image">
            <img src="{{ asset('images/IMG_5685.JPG.jpeg') }}" alt="Équipe ADH Group">
            <div class="intro-image-badge">
                <div class="badge-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="badge-text">
                    <span class="label">Certifiés</span>
                    <span class="value">Experts locaux</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MISSION / VISION / AMBITION -->
<section class="mvv-section">
    <div class="mvv-container">
        <span class="section-label">• NOS FONDAMENTAUX •</span>
        <div class="mvv-grid">
            <div class="mvv-card">
                <div class="mvv-icon"><i class="fa-solid fa-bullseye"></i></div>
                <h3>Notre Mission</h3>
                <p>Fournir des solutions technologiques innovantes, sécurisées et adaptées aux besoins africains,
                    tout en formant une nouvelle génération d'experts en technologie.</p>
            </div>
            <div class="mvv-card">
                <div class="mvv-icon"><i class="fa-solid fa-eye"></i></div>
                <h3>Notre Vision</h3>
                <p>Faire d'ADH un acteur majeur de la transformation digitale en Afrique de l'Ouest et à
                    l'international, en positionnant le Bénin comme hub technologique.</p>
            </div>
            <div class="mvv-card">
                <div class="mvv-icon"><i class="fa-solid fa-rocket"></i></div>
                <h3>Notre Ambition</h3>
                <p>Contribuer à faire du Bénin un hub technologique à travers les solutions FinTech, l'intelligence
                    artificielle, la cybersécurité et la formation de talents locaux.</p>
            </div>
        </div>
    </div>
</section>

<!-- VALEURS -->
<section class="values-section">
    <div class="values-container">
        <div class="values-image">
            <img src="{{ asset('images/IMG_5688.JPG.jpeg') }}" alt="Valeurs ADH Group">
        </div>
        <div class="values-content">
            <span class="badge-outline-dark">CE QUI NOUS GUIDE</span>
            <h2>Nos valeurs fondamentales</h2>
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-item-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <div class="value-item-text">
                        <strong>Innovation</strong>
                        <span>Toujours repousser les limites du possible.</span>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-item-icon"><i class="fa-solid fa-star"></i></div>
                    <div class="value-item-text">
                        <strong>Excellence</strong>
                        <span>Qualité, rigueur et performance à chaque projet.</span>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-item-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="value-item-text">
                        <strong>Sécurité</strong>
                        <span>La confiance par la protection des données.</span>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-item-icon"><i class="fa-solid fa-globe-africa"></i></div>
                    <div class="value-item-text">
                        <strong>Impact africain</strong>
                        <span>Des solutions pensées pour nos réalités.</span>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-item-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <div class="value-item-text">
                        <strong>Transmission</strong>
                        <span>Former et élever les talents locaux.</span>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-item-icon"><i class="fa-solid fa-leaf"></i></div>
                    <div class="value-item-text">
                        <strong>Durabilité</strong>
                        <span>Construire des solutions pérennes et évolutives.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
@include('components.stats-section')

<!-- CTA BAND -->
<section class="cta-band">
    <div class="cta-band-container">
        <div>
            <h2>Prêt à <span>transformer</span> votre organisation ?</h2>
            <p>Notre équipe est disponible pour discuter de votre projet et vous proposer la meilleure solution.</p>
        </div>
        <a href="{{ Route('contactprojet') }}" class="btn-primary-blue" style="flex-shrink:0;">
            Démarrer un projet <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Active le lien "À propos" dans la navigation
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#about' || link.textContent.trim() === 'À propos') {
                link.classList.add('active');
            }
        });
    });
</script>
@endpush