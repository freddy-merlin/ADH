@extends('layouts.app')

@section('title', 'Démarrer un projet - ADH Group')

@push('page-styles')

@endpush

@section('content')
<!-- PAGE BANNER -->
<section class="page-banner">
    <div class="page-banner-inner">
        <span class="badge-lime">• DÉMARRER UN PROJET •</span>
        <h1>Transformez votre idée en solution digitale performante</h1>
        <p>De l'analyse de vos besoins à la livraison finale, nous vous accompagnons avec une méthode éprouvée,
            collaborative et orientée résultats.</p>
        <div class="banner-actions">
            <a href="{{ Route('contactprojet') }}" class="btn-banner-primary">
                Démarrer mon projet <i class="fa-solid fa-arrow-up"></i>
            </a>
            <a href="{{ Route('contact') }}" class="btn-banner-outline">
                <i class="fa-solid fa-phone"></i> Parler à un expert
            </a>
        </div>
    </div>
</section>

<!-- APPROCHE -->
<section class="section-approach">
    <div class="inner">
        <h2>Vous avez un projet digital, une idée ou un besoin métier ?</h2>
        <p>Notre équipe vous guide pas à pas pour concevoir, structurer et développer une solution fiable, évolutive
            et adaptée à vos objectifs. <strong>Web, mobile, plateformes métiers, solutions sur mesure.</strong></p>
        <p>Chaque projet est unique. C'est pourquoi nous combinons rigueur méthodologique, écoute active et
            expertise technique pour construire des solutions digitales durables. Nous travaillons en
            co-construction avec nos clients, avec une vision claire des étapes, des livrables et des délais.</p>
    </div>
</section>

<!-- MÉTHODES -->
<section class="section-methods">
    <div class="container">
        <div class="section-heading">
            <h2>Des méthodes adaptées à votre projet</h2>
            <p>La méthode est choisie avec vous, en fonction de vos contraintes et objectifs.</p>
        </div>
        <div class="methods-grid">
            <div class="method-card">
                <div class="method-icon"><i class="fa-solid fa-rotate"></i></div>
                <h3>Agile / Scrum</h3>
                <p>Idéal pour les projets évolutifs nécessitant flexibilité et itérations rapides avec des
                    livraisons régulières.</p>
            </div>
            <div class="method-card">
                <div class="method-icon"><i class="fa-solid fa-lightbulb"></i></div>
                <h3>Design Thinking</h3>
                <p>Pour concevoir des solutions centrées sur les utilisateurs, basées sur leurs usages réels et
                    leurs besoins profonds.</p>
            </div>
            <div class="method-card">
                <div class="method-icon"><i class="fa-solid fa-diagram-project"></i></div>
                <h3>Cycle en V / Hybride</h3>
                <p>Approche structurée, adaptée aux projets institutionnels ou réglementés nécessitant validation
                    formelle.</p>
            </div>
        </div>
        <p class="method-note"><strong>👉 La méthode est choisie avec vous</strong>, en fonction de vos contraintes
            et objectifs spécifiques.</p>
    </div>
</section>

<!-- PHASES -->
<section class="section-phases">
    <div class="container">
        <div class="section-heading">
            <h2>Un parcours maîtrisé, de l'idée à la solution</h2>
        </div>
        <div class="phases-grid">
            <div class="phase-card">
                <div class="phase-num">01</div>
                <h3>Cadrage du projet</h3>
                <p>Nous analysons votre contexte, vos objectifs et vos contraintes afin de poser des bases solides.</p>
                <div class="phase-deliverables">
                    <span class="del-label">Livrables</span>
                    <ul>
                        <li>Note de cadrage</li>
                        <li>Objectifs clairs</li>
                        <li>Périmètre du projet</li>
                    </ul>
                </div>
            </div>
            <div class="phase-card">
                <div class="phase-num">02</div>
                <h3>Recueil et analyse des besoins</h3>
                <p>Nous recueillons et structurons vos besoins fonctionnels et techniques avec précision.</p>
                <div class="phase-deliverables">
                    <span class="del-label">Livrables</span>
                    <ul>
                        <li>Expression des besoins</li>
                        <li>User stories</li>
                        <li>Priorisation fonctionnelle</li>
                    </ul>
                </div>
            </div>
            <div class="phase-card">
                <div class="phase-num">03</div>
                <h3>Conception & UX/UI</h3>
                <p>Nous concevons les parcours utilisateurs et l'interface de la solution, centrée sur l'expérience.</p>
                <div class="phase-deliverables">
                    <span class="del-label">Livrables</span>
                    <ul>
                        <li>Wireframes</li>
                        <li>Maquettes graphiques</li>
                        <li>Prototype interactif</li>
                    </ul>
                </div>
            </div>
            <div class="phase-card">
                <div class="phase-num">04</div>
                <h3>Cahier des charges</h3>
                <p>Nous formalisons l'ensemble du projet pour sécuriser son exécution et garantir la conformité.</p>
                <div class="phase-deliverables">
                    <span class="del-label">Livrables</span>
                    <ul>
                        <li>Cahier des charges fonctionnel</li>
                        <li>Spécifications techniques</li>
                        <li>Planning & budget</li>
                    </ul>
                </div>
            </div>
            <div class="phase-card">
                <div class="phase-num">05</div>
                <h3>Développement</h3>
                <p>Nous développons la solution selon les standards de qualité, de performance et de sécurité les
                    plus stricts.</p>
            </div>
            <div class="phase-card">
                <div class="phase-num">06</div>
                <h3>Livraison & accompagnement</h3>
                <p>Déploiement soigné, formation de vos équipes et support post-livraison pour garantir votre
                    succès.</p>
            </div>
        </div>
    </div>
</section>

<!-- COLLABORATION -->
<section class="section-collab">
    <div class="container">
        <div class="collab-block">
            <h2>Une collaboration continue</h2>
            <p>Vous êtes impliqué à chaque étape du projet :</p>
            <ul class="collab-list">
                <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Points réguliers d'avancement</li>
                <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Validations intermédiaires</li>
                <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Outils collaboratifs partagés</li>
                <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Visibilité totale sur l'avancement</li>
            </ul>
        </div>
        <div class="benefits-block">
            <h3>Ce que vous obtenez</h3>
            <ul class="benefits-list">
                <li><div class="star-icon"><i class="fa-solid fa-star"></i></div> Une vision claire et structurée de votre projet</li>
                <li><div class="star-icon"><i class="fa-solid fa-star"></i></div> Un cahier des charges exploitable</li>
                <li><div class="star-icon"><i class="fa-solid fa-star"></i></div> Une maquette validée avant développement</li>
                <li><div class="star-icon"><i class="fa-solid fa-star"></i></div> Une solution digitale fiable et performante</li>
                <li><div class="star-icon"><i class="fa-solid fa-star"></i></div> Un partenaire technologique sur le long terme</li>
            </ul>
        </div>
    </div>
</section>

<!-- FORMULAIRE -->
<section class="section-form" id="form-section">
    <div class="container">
        <div class="form-intro">
            <h2>Prêt à lancer votre projet ?</h2>
            <p>Démarrez maintenant et échangez avec nos experts en quelques minutes.</p>
        </div>

        <div class="form-card">
            <div id="presentationForm">
                <h3 class="form-step-title">
                    <span class="step-num">1</span>
                    Présentation
                </h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>PRÉNOM *</label>
                        <input type="text" id="prenom" name="prenom" required placeholder="Jean">
                    </div>
                    <div class="form-group">
                        <label>NOM *</label>
                        <input type="text" id="nom" name="nom" required placeholder="Dupont">
                    </div>
                </div>
                <div class="form-group">
                    <label>ORGANISATION *</label>
                    <input type="text" id="organisation" name="organisation" required placeholder="Nom de votre entreprise">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>EMAIL *</label>
                        <input type="email" id="email" name="email" required placeholder="jean@exemple.com">
                    </div>
                    <div class="form-group">
                        <label>TÉLÉPHONE *</label>
                        <input type="tel" id="telephone" name="telephone" required placeholder="+229 XX XX XX XX">
                    </div>
                </div>
                <div class="form-group">
                    <label>RÔLE DANS LE PROJET *</label>
                    <input type="text" id="role" name="role" required placeholder="Ex : Directeur technique, Chef de projet...">
                </div>
                <button type="button" class="btn-submit" id="submitPresentation">
                    Envoyer ma demande <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>

            <div class="form-confirmation" id="formConfirmation">
                <div class="confirm-icon"><i class="fa-solid fa-check"></i></div>
                <h3>Merci pour votre confiance !</h3>
                <p>Votre demande a bien été reçue. Notre équipe ADH Group analysera votre projet et vous contactera
                    dans un délai de 48 heures ouvrées.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Gestion du formulaire de présentation
        const submitBtn = document.getElementById('submitPresentation');
        const presentationForm = document.getElementById('presentationForm');
        const confirmationDiv = document.getElementById('formConfirmation');
        const inputs = ['prenom', 'nom', 'organisation', 'email', 'telephone', 'role'];

        function validateForm() {
            let isValid = true;
            for (let id of inputs) {
                const input = document.getElementById(id);
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            }
            const email = document.getElementById('email');
            if (email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                email.classList.add('is-invalid');
                isValid = false;
            }
            return isValid;
        }

        submitBtn.addEventListener('click', function () {
            if (validateForm()) {
                // Simulation d'envoi
                presentationForm.style.display = 'none';
                confirmationDiv.style.display = 'block';
                window.scrollTo({ top: document.getElementById('form-section').offsetTop - 90, behavior: 'smooth' });
            } else {
                alert('Veuillez remplir tous les champs obligatoires correctement.');
            }
        });

        // Active le lien "Contact" dans la navigation
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.textContent.trim() === 'Contact') {
                link.classList.add('active');
            }
        });
    });
</script>
@endpush