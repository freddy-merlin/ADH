@extends('layouts.app')

@section('content')
    
    <!-- HERO SECTION -->
    <section class="hero-section" id="accueil">
        <div class="hero-container">
            <div class="hero-content">
                <span class="hero-badge-tag">ADH GROUP - SOLUTIONS ET INNOVATION</span>
                <h1>Accélérez votre croissance <span class="highlight">digitale</span> sur mesure !</h1>
                <p>ADH Group vous accompagne dans la construction de solutions digitales performantes, résilientes et
                    parfaitement alignées sur vos besoins métiers et vos réalités de croissance.</p>
                <div class="hero-features">
                    <span>
                        <div class="icon-wrapper">
                            <div class="icon-inner"><i class="fa-solid fa-check"></i></div>
                        </div>
                        Parce que la qualité compte
                    </span>
                    <span>
                        <div class="icon-wrapper">
                            <div class="icon-inner"><i class="fa-solid fa-check"></i></div>
                        </div>
                        La rapidité au service de l'efficacité
                    </span>
                </div>
                <div class="hero-actions">
                    <a href="{{ Route('services') }}" class="btn-primary">Nos services <i class="fa-solid fa-arrow-up"></i></a>
                    <a href="{{ Route('contact') }}" class="btn-secondary">Nous contacter <i class="fa-solid fa-arrow-up"></i></a>
                </div>
            </div>
            <div class="hero-image-container">
                <img src="images/hero-right-Image.png.png" alt="Consultant ADH" class="hero-main-img">
            </div>
        </div>

        <div class="ticker-tape">
            <div class="ticker-wrapper" id="tickerWrapper"></div>
        </div>
    </section>

   

    <!-- À PROPOS -->
    <section class="about-section" id="about">
        <div class="about-container">
            <div class="about-content">
                <span class="badge-outline">DÉCOUVREZ NOTRE HISTOIRE</span>
                <h2>À propos de ADH Group</h2>
                <p class="normal-text">
                    Nous sommes une entreprise de services du numérique (ESN) engagée à transformer de manière
                    agile, moderne et hautement sécurisée les organisations d'aujourd'hui et de demain.
                </p>
                <p class="normal-text">
                    En alliant flexibilité d'architecture, sécurité robuste, rigueur d'ingénierie logicielle et
                    proximité avec nos clients, nous construisons et gérons les architectures critiques de grands
                    groupes, PME ambitieuses et services publics innovants.
                </p>
                <a href="{{ Route('about') }}" class="btn-about-more">
                    En savoir plus <i class="fa-solid fa-arrow-up"></i>
                </a>
            </div>

            <div class="about-images-wrapper">
                <div class="about-img-box left-box">
                    <div class="image-corner-badge">
                        <div class="badge-icon-square">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <div class="badge-text-column">
                            <span class="badge-label">Expertise</span>
                            <span class="badge-title">Full-Stack</span>
                        </div>
                    </div>
                    <img src="images/IMG_5685.JPG.jpeg" alt="Équipe ADH réunion">
                </div>

                <div class="about-img-box right-box">
                    <img src="images/IMG_5688.JPG.jpeg" alt="Équipe ADH open space">
                    <div class="image-corner-badge">
                        <div class="badge-icon-square">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <div class="badge-text-column">
                            <span class="badge-label">Sécurité</span>
                            <span class="badge-title">Zéro-Trust</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services-section" id="services">
        <div class="services-header">
            <div class="services-header-text">
                <span class="badge-lime">• NOS SOLUTIONS ET TECHNOLOGIES •</span>
                <h2>Nos services pour votre succès</h2>
            </div>
            <div class="carousel-arrows">
                <button class="arrow-btn" id="prevBtn"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="arrow-btn" id="nextBtn"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

        <div class="services-grid-wrapper">
            <div class="services-grid" id="servicesGrid">
                <!-- 01: ERP & Fintech -->
                <div class="service-card-container">
                    <div class="service-card-text-box">
                        <div class="card-num">01</div>
                        <h3>Solutions Entreprise, ERP & Fintech</h3>
                        <p>Nous concevons des solutions fiables et évolutives pour optimiser vos activités et soutenir votre
                            croissance à travers le digital.</p>
                        <a href="{{ Route('services') }}" class="btn-link">En savoir plus <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card-img-bg">
                        <img src="images/erp.png" alt="Interface ERP & Fintech">
                    </div>
                </div>
            
                <!-- 02: IA & Data -->
                <div class="service-card-container">
                    <div class="service-card-text-box">
                        <div class="card-num">02</div>
                        <h3>Intelligence Artificielle & Data</h3>
                        <p>Nous exploitons l’IA et les données pour automatiser vos processus, améliorer vos performances et
                            soutenir vos décisions stratégiques.</p>
                        <a href="{{ Route('services') }}" class="btn-link">En savoir plus <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card-img-bg">
                        <img src="images/ia.png" alt="Analyse de données et Dashboard">
                    </div>
                </div>
            
                <!-- 03: Cybersécurité -->
                <div class="service-card-container">
                    <div class="service-card-text-box">
                        <div class="card-num">03</div>
                        <h3>Cybersécurité & Cyberdéfense</h3>
                        <p>Nous protégeons vos systèmes grâce à des technologies robustes, garantissant la sécurité, la continuité
                            et la résilience de vos opérations.</p>
                        <a href="{{ Route('services') }}" class="btn-link">En savoir plus <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card-img-bg">
                        <img src="images/cyber.png" alt="Cybersécurité">
                    </div>
                </div>
            
                <!-- 04: Cloud & Infrastructure -->
                <div class="service-card-container">
                    <div class="service-card-text-box">
                        <div class="card-num">04</div>
                        <h3>Cloud & Infrastructure</h3>
                        <p>Nous déployons des infrastructures cloud sécurisées et performantes pour garantir agilité, disponibilité
                            et évolutivité à vos systèmes.</p>
                        <a href="{{ Route('services') }}" class="btn-link">En savoir plus <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card-img-bg">
                        <img src="images/cloud.png" alt="Cloud & Infrastructure">
                    </div>
                </div>
            
                <!-- 05: Support & Infogérance -->
                <div class="service-card-container">
                    <div class="service-card-text-box">
                        <div class="card-num">05</div>
                        <h3>Support & Infogérance</h3>
                        <p>Nous assurons la gestion continue de vos infrastructures pour garantir stabilité, performance et
                            tranquillité d’esprit au quotidien.</p>
                        <a href="{{ Route('services') }}" class="btn-link">En savoir plus <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card-img-bg">
                        <img src="images/support.png" alt="Support & Infogérance">
                    </div>
                </div>
            
                <!-- 06: Formation -->
                <div class="service-card-container">
                    <div class="service-card-text-box">
                        <div class="card-num">06</div>
                        <h3>Formation & Certification</h3>
                        <p>Nous renforçons les compétences de vos équipes grâce à des programmes pratiques, certifiants et adaptés
                            aux exigences du numérique.</p>
                        <a href="{{ Route('services') }}" class="btn-link">En savoir plus <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card-img-bg">
                        <img src="./images/formation.png" alt="Formation & Certification">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section" id="cta">
        <div class="cta-container">
            <div class="cta-text-content">
                <span class="badge-together">• TRAVAILLONS ENSEMBLE •</span>
                <h2>Échangeons sur votre <span>prochain projet !</span></h2>
                <p>Notre équipe d'ingénieurs et de consultants est prête à concevoir avec vous la solution idéale et
                    robuste pour propulser votre entreprise.</p>
                <a href="{{ Route('contact') }}" class="btn-cta">
                    Lancer la discussion <i class="fa-solid fa-arrow-up"></i>
                </a>
            </div>

            <div class="cta-visual-wrapper">
                <div class="cta-main-img">
                    <img src="images/Développeur de solutions ADH.png" alt="Notre équipe d'ingénieurs">
                </div>
                <div class="floating-badge">
                    <div class="floating-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div class="floating-text">
                        <span class="title">Engagement continu</span>
                        <span class="subtitle">Savoir-faire certifié</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="stats-section" id="stats">
        <div class="stats-container">
            <div class="stats-left-img">
                <img src="images/stat.png" alt="Espace développeurs ADH">
            </div>

            <div class="stats-grid">
                <div class="stat-box">
                    <h4>10+</h4>
                    <span class="label">Experts métiers</span>
                    <p>Une équipe pluridisciplinaire hautement qualifiée et certifiée.</p>
                </div>
                <div class="stat-box">
                    <h4>50K+</h4>
                    <span class="label">Partenaires de confiance</span>
                    <p>Des relations solides et une collaboration pérenne.</p>
                </div>
                <div class="stat-box">
                    <h4>100%</h4>
                    <span class="label">Satisfaction client</span>
                    <p>Une démarche de co-conception axée sur les livrables de haute précision.</p>
                </div>
                <div class="stat-box">
                    <h4>4+</h4>
                    <span class="label">Années d'excellence</span>
                    <p>Au service de l'innovation et de l'accélération numérique.</p>
                </div>
            </div>

            <div class="stats-dots-bg"></div>
        </div>
    </section>

    <!-- PARTENAIRES -->
    <section class="partners-section">
        <h3>ILS NOUS FONT CONFIANCE & TECHNOLOGIES PARTENAIRES</h3>
        <div class="partners-ticker">
            <div class="ticker-track" id="partnersTrack">
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact-section" id="contact">
        <div class="contact-container">
            <div class="contact-info">
                <span class="badge-lime" style="background:#DDF247;color:#1a1a1a;font-size:16px;padding:10px 20px;">•
                    ENTRONS EN DIRECT •</span>
                <h2>Parlons de votre projet</h2>
                <p>Notre équipe de consultants est à votre entière disposition pour répondre à toutes vos
                    interrogations et formuler un devis ou un plan d'accompagnement adapté.</p>

                <div class="info-cards">
                    <div class="info-card">
                        <div class="icon-circle"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <small>TÉLÉPHONE & WHATSAPP</small>
                            <p>+229 01 67 71 44 14</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="icon-circle"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <small>ADRESSE EMAIL</small>
                            <p>adh-group.net@outlook.com</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="icon-circle"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <small>ADRESSE  </small>
                            <p>Cotonou, Bénin</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-container">
                <h3>Envoyez-nous un message</h3>
                <p>Nous traitons vos demandes et revenons vers vous sous 24 heures ouvrées.</p>

                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label>VOTRE NOM COMPLET</label>
                            <input type="text" required placeholder="Jean Dupont">
                        </div>
                        <div class="form-group">
                            <label>ADRESSE EMAIL</label>
                            <input type="email" required placeholder="jean@exemple.com">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>VOTRE ENTREPRISE</label>
                            <input type="text" placeholder="Nom de votre organisation">
                        </div>
                        <div class="form-group">
                            <label>SERVICE SOUHAITÉ</label>
                            <select>
                                <option>Fintech & ERP</option>
                                <option>Intelligence Artificielle & Data</option>
                                <option>Cybersécurité</option>
                                <option>Autre besoin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>DÉTAILS DE VOTRE PROJET</label>
                        <textarea required
                            placeholder="Exprimez brièvement vos besoins, vos objectifs ou vos problématiques techniques..."></textarea>
                    </div>
                    <button type="submit" class="btn-submit">
                        Envoyer le message <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Tes scripts spécifiques à la page (carrousel, ticker, etc.)
    document.addEventListener("DOMContentLoaded", () => {
        // Ticker tape
        const servicesArray = ["Cybersécurité", "Intelligence artificielle", "Digital Marketing", "Cloud & Infrastructure", "Support & Infogérance"];
        const tickerWrapper = document.getElementById("tickerWrapper");
        if (tickerWrapper) {
            function generateTickerItems() {
                let html = "";
                for (let i = 0; i < 4; i++) {
                    servicesArray.forEach(service => {
                        html += `<div class="ticker-item">${service} <span>✳</span></div>`;
                    });
                }
                tickerWrapper.innerHTML = html;
            }
            generateTickerItems();
            let currentTranslate = 0;
            function animateTicker() {
                currentTranslate -= 0.8;
                if (Math.abs(currentTranslate) >= tickerWrapper.scrollWidth / 2) currentTranslate = 0;
                tickerWrapper.style.transform = `translateX(${currentTranslate}px)`;
                requestAnimationFrame(animateTicker);
            }
            animateTicker();
        }

        // Partners ticker
        const partnersTrack = document.getElementById("partnersTrack");
        const partners = ["71356-pnhg.jpg", "aid.jpeg", "Ecobank_logo.webp", "em.jpg", "Logo-SOS-new.png", "Logo_CGTS.jpg", "Logo_Matanti.jpg", "Nocibe.jpg", "LTG_Conseil_Logo.svg", "nsia_banque.jpg", "proxima.png", "scb.jpeg"];
        
        if (partnersTrack) {
            let html = "";
            partners.forEach(src => {
                html += `<img src="{{ asset('images/clients/${src}') }}" alt="Partenaire ADH">`;
            });
            partnersTrack.innerHTML = html + html;
        }

        // Carrousel services
        const servicesWrapper = document.querySelector('.services-grid-wrapper');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        if (servicesWrapper && prevBtn && nextBtn) {
            const scrollCard = (direction) => {
                const card = document.querySelector('.service-card-container');
                if (!card) return;
                const cardWidth = card.offsetWidth;
                const gap = 30;
                const scrollAmount = cardWidth + gap;
                servicesWrapper.scrollBy({ left: direction === 'next' ? scrollAmount : -scrollAmount, behavior: 'smooth' });
            };
            nextBtn.addEventListener('click', () => scrollCard('next'));
            prevBtn.addEventListener('click', () => scrollCard('prev'));
        }

        // Formulaire
        const form = document.getElementById("contactForm");
        if (form) {
            form.addEventListener("submit", (e) => {
                e.preventDefault();
                alert("Merci pour votre message ! Notre équipe ADH Group prendra contact avec vous dans un délai de 24 heures.");
                form.reset();
            });
        }
    });
</script>
@endpush