@extends('layouts.app')

@section('title', 'Démarrer un projet - ADH Group')
@section('description', 'Transformez votre idée en solution digitale performante avec ADH Group')
@section('keywords', 'Projet digital, Développement web, Application mobile, ADH Group')

@section('content')

<main class="page_content">

  <!-- Page Banner Section - Start -->
  <section class="page_banner_section text-center" style="background-image: url('../images/shapes/bg_pattern_4.svg');">
    <div class="container">
      <h1 class="page_title mb-3 text-white">Transformez votre idée en solution digitale performante</h1>
      <p class="text-white mb-0">De l'analyse de vos besoins à la livraison finale, nous vous accompagnons avec une méthode éprouvée, collaborative et orientée résultats.</p>
    </div>
  </section>
  <!-- Page Banner Section - End -->

  <!-- Introduction Section - Start -->
  <section class="section_space bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center">
          <div class="heading_block">
            <h2 class="heading_text">Vous avez un projet digital, une idée ou un besoin métier ?</h2>
            <p class="heading_description">
              Notre équipe vous guide pas à pas pour concevoir, structurer et développer une solution fiable, évolutive et adaptée à vos objectifs.
            </p>
            <p class="mb-4"><strong>👉 Web, mobile, plateformes métiers, solutions sur mesure.</strong></p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
              <a class="btn btn-primary" href="#form-section">
                <span class="btn_label" data-text="Démarrer mon projet">Démarrer mon projet</span>
                <span class="btn_icon">
                  <i class="fa-solid fa-arrow-up-right"></i>
                </span>
              </a>
              <a class="btn btn-outline-primary" href="#contact">
                <span class="btn_label" data-text="Parler à un expert">Parler à un expert</span>
                <span class="btn_icon">
                  <i class="fa-solid fa-phone"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Introduction Section - End -->

  <!-- Approach Section - Start -->
  <section class="section_space">
    <div class="container">
      <div class="heading_block text-center mb-5">
        <h2 class="heading_text">Une approche claire, structurée et orientée valeur</h2>
        <p class="heading_description mx-auto" style="max-width: 800px;">
          Chaque projet est unique. C'est pourquoi nous combinons rigueur méthodologique, écoute active et expertise technique pour construire des solutions digitales durables.<br>
          Nous travaillons en co-construction avec nos clients, avec une vision claire des étapes, des livrables et des délais.
        </p>
      </div>
    </div>
  </section>
  <!-- Approach Section - End -->

  <!-- Methods Section - Start -->
  <section class="section_space bg-light">
    <div class="container">
      <div class="heading_block text-center mb-5">
        <h2 class="heading_text">Des méthodes adaptées à votre projet</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="iconbox_block  h-100 text-center mb-4">
            <div class="iconbox_icon">
              <i class="fa-solid fa-rotate"></i>
            </div>
            <div class="iconbox_content">
              <h3 class="iconbox_title">Agile / Scrum</h3>
              <p class="mb-0">
                Idéal pour les projets évolutifs nécessitant flexibilité et itérations rapides.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="iconbox_block h-100 text-center mb-4">
            <div class="iconbox_icon">
              <i class="fa-solid fa-lightbulb"></i>
            </div>
            <div class="iconbox_content">
              <h3 class="iconbox_title">Design Thinking</h3>
              <p class="mb-0">
                Pour concevoir des solutions centrées sur les utilisateurs, basées sur leurs usages réels.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="iconbox_block h-100  text-center mb-4">
            <div class="iconbox_icon">
              <i class="fa-solid fa-diagram-project"></i>
            </div>
            <div class="iconbox_content">
              <h3 class="iconbox_title">Cycle en V / Hybride</h3>
              <p class="mb-0">
                Approche structurée, adaptée aux projets institutionnels ou réglementés.
              </p>
            </div>
          </div>
        </div>
      </div>
      <p class="text-center mt-4"><strong>👉 La méthode est choisie avec vous, en fonction de vos contraintes et objectifs.</strong></p>
    </div>
  </section>
  <!-- Methods Section - End -->

  <!-- Project Phases Section - Start -->
  <section class="section_space">
    <div class="container">
      <div class="heading_block text-center mb-5">
        <h2 class="heading_text">Un parcours maîtrisé, de l'idée à la solution</h2>
      </div>
      
      <div class="row mb-5">
        <div class="col-lg-6 mb-4">
          <div class="phase_card h-100">
            <div class="phase_number">01</div>
            <h3 class="phase_title">Cadrage du projet</h3>
            <p class="phase_description">Nous analysons votre contexte, vos objectifs et vos contraintes afin de poser des bases solides.</p>
            <div class="phase_deliverables">
              <strong>Livrables :</strong>
              <ul>
                <li>Note de cadrage</li>
                <li>Objectifs clairs</li>
                <li>Périmètre du projet</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 mb-4">
          <div class="phase_card h-100">
            <div class="phase_number">02</div>
            <h3 class="phase_title">Recueil et analyse des besoins</h3>
            <p class="phase_description">Nous recueillons et structurons vos besoins fonctionnels et techniques.</p>
            <div class="phase_deliverables">
              <strong>Livrables :</strong>
              <ul>
                <li>Expression des besoins</li>
                <li>User stories</li>
                <li>Priorisation fonctionnelle</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 mb-4">
          <div class="phase_card h-100">
            <div class="phase_number">03</div>
            <h3 class="phase_title">Conception & UX/UI</h3>
            <p class="phase_description">Nous concevons les parcours utilisateurs et l'interface de la solution.</p>
            <div class="phase_deliverables">
              <strong>Livrables :</strong>
              <ul>
                <li>Wireframes</li>
                <li>Maquettes graphiques</li>
                <li>Prototype interactif</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 mb-4">
          <div class="phase_card h-100">
            <div class="phase_number">04</div>
            <h3 class="phase_title">Cahier des charges</h3>
            <p class="phase_description">Nous formalisons l'ensemble du projet pour sécuriser son exécution.</p>
            <div class="phase_deliverables">
              <strong>Livrables :</strong>
              <ul>
                <li>Cahier des charges fonctionnel</li>
                <li>Spécifications techniques</li>
                <li>Planning & budget</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 mb-4">
          <div class="phase_card h-100">
            <div class="phase_number">05</div>
            <h3 class="phase_title">Développement</h3>
            <p class="phase_description">Nous développons la solution selon les standards de qualité et de sécurité.</p>
          </div>
        </div>
        
        <div class="col-lg-6 mb-4">
          <div class="phase_card h-100">
            <div class="phase_number">06</div>
            <h3 class="phase_title">Livraison & accompagnement</h3>
            <p class="phase_description">Déploiement, formation et support post-livraison.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Project Phases Section - End -->

  <!-- Collaboration Section - Start -->
  <section class="section_space bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2 class="heading_text mb-4">Une collaboration continue</h2>
          <p class="mb-3">Vous êtes impliqué à chaque étape du projet :</p>
          <ul class="collaboration_list">
            <li><i class="fa-solid fa-check-circle"></i> Points réguliers</li>
            <li><i class="fa-solid fa-check-circle"></i> Validations intermédiaires</li>
            <li><i class="fa-solid fa-check-circle"></i> Outils collaboratifs</li>
            <li><i class="fa-solid fa-check-circle"></i> Visibilité totale sur l'avancement</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h3 class="heading_text mb-4">Ce que vous obtenez</h3>
          <ul class="benefits_list">
            <li><i class="fa-solid fa-star"></i> Une vision claire et structurée de votre projet</li>
            <li><i class="fa-solid fa-star"></i> Un cahier des charges exploitable</li>
            <li><i class="fa-solid fa-star"></i> Une maquette validée</li>
            <li><i class="fa-solid fa-star"></i> Une solution digitale fiable</li>
            <li><i class="fa-solid fa-star"></i> Un partenaire sur le long terme</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Collaboration Section - End -->

  <!-- Form Section - Start -->
  <section id="form-section" class="section_space">
    <div class="container">
      <div class="heading_block text-center mb-5">
        <h2 class="heading_text">Prêt à lancer votre projet ?</h2>
        <p class="heading_description">👉 Démarrez maintenant et échangez avec nos experts.</p>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="project_form">
            <form id="project-form" enctype="multipart/form-data">
              @csrf 
              <div class="form_step active" data-step="1">
                <h3 class="form_step_title mb-4">Étape 1 - Présentation</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_prenom">Prénom *</label>
                      <input id="input_prenom" class="form-control" type="text" name="prenom" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_nom">Nom *</label>
                      <input id="input_nom" class="form-control" type="text" name="nom" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label class="input_title" for="input_organisation">Organisation *</label>
                      <input id="input_organisation" class="form-control" type="text" name="organisation" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_email_form">Email *</label>
                      <input id="input_email_form" class="form-control" type="email" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_telephone">Téléphone *</label>
                      <input id="input_telephone" class="form-control" type="tel" name="telephone" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label class="input_title" for="input_role">Rôle dans le projet *</label>
                      <input id="input_role" class="form-control" type="text" name="role" required>
                    </div>
                  </div>
                </div>
                <div class="text-end mt-4">
                  <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                    <span class="btn_label" data-text="Suivant">Suivant</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-right"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="form_step" data-step="2">
                <h3 class="form_step_title mb-4">Étape 2 - Type de projet</h3>
                <div class="form-group">
                  <label class="input_title mb-3">Quel type de projet souhaitez-vous réaliser ? *</label>
                  <div class="project_types">
                    <label class="project_type_option">
                      <input type="checkbox" name="type_projet[]" value="web">
                      <span>Application web</span>
                    </label>
                    <label class="project_type_option">
                      <input type="checkbox" name="type_projet[]" value="mobile">
                      <span>Application mobile</span>
                    </label>
                    <label class="project_type_option">
                      <input type="checkbox" name="type_projet[]" value="plateforme">
                      <span>Plateforme métier</span>
                    </label>
                    <label class="project_type_option">
                      <input type="checkbox" name="type_projet[]" value="site">
                      <span>Site web / e-commerce</span>
                    </label>
                    <label class="project_type_option">
                      <input type="checkbox" name="type_projet[]" value="autre">
                      <span>Autre</span>
                    </label>
                  </div>
                  <input class="form-control mt-3" type="text" name="type_autre" placeholder="Précisez si autre...">
                </div>
                <div class="d-flex gap-3 mt-4">
                  <button type="button" class="btn btn-outline-primary" onclick="prevStep(1)">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-left"></i>
                    </span>
                    <span class="btn_label" data-text="Précédent">Précédent</span>
                  </button>
                  <button type="button" class="btn btn-primary" onclick="nextStep(3)">
                    <span class="btn_label" data-text="Suivant">Suivant</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-right"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="form_step" data-step="3">
                <h3 class="form_step_title mb-4">Étape 3 - Contexte & objectifs</h3>
                <div class="form-group">
                  <label class="input_title" for="input_probleme">Quel problème souhaitez-vous résoudre ? *</label>
                  <textarea id="input_probleme" class="form-control" name="probleme" rows="3" required></textarea>
                </div>
                <div class="form-group">
                  <label class="input_title" for="input_objectifs">Quels sont vos objectifs principaux ? *</label>
                  <textarea id="input_objectifs" class="form-control" name="objectifs" rows="3" required></textarea>
                </div>
                <div class="form-group">
                  <label class="input_title" for="input_cible">Public cible / utilisateurs finaux *</label>
                  <input id="input_cible" class="form-control" type="text" name="cible" required>
                </div>
                <div class="d-flex gap-3 mt-4">
                  <button type="button" class="btn btn-outline-primary" onclick="prevStep(2)">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-left"></i>
                    </span>
                    <span class="btn_label" data-text="Précédent">Précédent</span>
                  </button>
                  <button type="button" class="btn btn-primary" onclick="nextStep(4)">
                    <span class="btn_label" data-text="Suivant">Suivant</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-right"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="form_step" data-step="4">
                <h3 class="form_step_title mb-4">Étape 4 - Fonctionnalités attendues</h3>
                <div class="form-group">
                  <label class="input_title mb-3">Sélectionnez les fonctionnalités souhaitées :</label>
                  <div class="features_grid">
                    <label class="feature_option">
                      <input type="checkbox" name="fonctionnalites[]" value="auth">
                      <span>Authentification</span>
                    </label>
                    <label class="feature_option">
                      <input type="checkbox" name="fonctionnalites[]" value="users">
                      <span>Gestion des utilisateurs</span>
                    </label>
                    <label class="feature_option">
                      <input type="checkbox" name="fonctionnalites[]" value="dashboard">
                      <span>Tableaux de bord</span>
                    </label>
                    <label class="feature_option">
                      <input type="checkbox" name="fonctionnalites[]" value="payment">
                      <span>Paiement</span>
                    </label>
                    <label class="feature_option">
                      <input type="checkbox" name="fonctionnalites[]" value="api">
                      <span>Intégration API</span>
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="input_title" for="input_autres_besoins">Autres besoins spécifiques</label>
                  <textarea id="input_autres_besoins" class="form-control" name="autres_besoins" rows="3"></textarea>
                </div>
                <div class="d-flex gap-3 mt-4">
                  <button type="button" class="btn btn-outline-primary" onclick="prevStep(3)">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-left"></i>
                    </span>
                    <span class="btn_label" data-text="Précédent">Précédent</span>
                  </button>
                  <button type="button" class="btn btn-primary" onclick="nextStep(5)">
                    <span class="btn_label" data-text="Suivant">Suivant</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-right"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="form_step" data-step="5">
                <h3 class="form_step_title mb-4">Étape 5 - Contraintes</h3>
                <div class="form-group">
                  <label class="input_title" for="input_delais">Délais souhaités</label>
                  <input id="input_delais" class="form-control" type="text" name="delais" placeholder="Ex: 3 mois">
                </div>
                <div class="form-group">
                  <label class="input_title" for="input_budget">Budget estimatif (optionnel)</label>
                  <select id="input_budget" class="form-control" name="budget">
                    <option value="">Sélectionnez une tranche</option>
                    <option value="0-5k">0 - 5 000 €</option>
                    <option value="5k-15k">5 000 - 15 000 €</option>
                    <option value="15k-30k">15 000 - 30 000 €</option>
                    <option value="30k+">Plus de 30 000 €</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="input_title" for="input_urgence">Niveau d'urgence</label>
                  <select id="input_urgence" class="form-control" name="urgence">
                    <option value="">Sélectionnez</option>
                    <option value="faible">Faible</option>
                    <option value="moyen">Moyen</option>
                    <option value="eleve">Élevé</option>
                    <option value="critique">Critique</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="input_title" for="input_documents">Documents existants (optionnel)</label>
                  <input id="input_documents" 
                        class="form-control" 
                        type="file" 
                        name="documents[]" 
                        multiple
                        accept=".pdf,.doc,.docx,.xls,.xlsx">
                  <small class="form-text text-muted">Formats acceptés : PDF, DOC, DOCX, XLS, XLSX (Max 10MB par fichier)</small>
                </div>
                
                <div class="d-flex gap-3 mt-4">
                  <button type="button" class="btn btn-outline-primary" onclick="prevStep(4)">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-left"></i>
                    </span>
                    <span class="btn_label" data-text="Précédent">Précédent</span>
                  </button>
                  <button type="button" class="btn btn-primary" onclick="nextStep(6)">
                    <span class="btn_label" data-text="Voir le récapitulatif">Voir le récapitulatif</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-right"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="form_step" data-step="6">
                <h3 class="form_step_title mb-4">Étape 6 - Récapitulatif</h3>
                
                <div class="summary_section">
                  <div class="summary_card mb-3">
                    <h4 class="summary_card_title">
                      <i class="fa-solid fa-user"></i> Informations personnelles
                    </h4>
                    <div class="summary_content">
                      <p><strong>Nom complet :</strong> <span id="summary_nom"></span></p>
                      <p><strong>Organisation :</strong> <span id="summary_organisation"></span></p>
                      <p><strong>Email :</strong> <span id="summary_email"></span></p>
                      <p><strong>Téléphone :</strong> <span id="summary_telephone"></span></p>
                      <p><strong>Rôle :</strong> <span id="summary_role"></span></p>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary mt-2 p-2" onclick="editStep(1)">
                      <i class="fa-solid fa-edit"></i> Modifier
                    </button>
                  </div>

                  <div class="summary_card mb-3">
                    <h4 class="summary_card_title">
                      <i class="fa-solid fa-laptop-code"></i> Type de projet
                    </h4>
                    <div class="summary_content">
                      <p><strong>Types sélectionnés :</strong> <span id="summary_type_projet"></span></p>
                      <p id="summary_type_autre_container" style="display: none;">
                        <strong>Précisions :</strong> <span id="summary_type_autre"></span>
                      </p>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary mt-2 p-2" onclick="editStep(2)">
                      <i class="fa-solid fa-edit"></i> Modifier
                    </button>
                  </div>

                  <div class="summary_card mb-3">
                    <h4 class="summary_card_title">
                      <i class="fa-solid fa-bullseye"></i> Contexte & objectifs
                    </h4>
                    <div class="summary_content">
                      <p><strong>Problème à résoudre :</strong><br><span id="summary_probleme"></span></p>
                      <p><strong>Objectifs :</strong><br><span id="summary_objectifs"></span></p>
                      <p><strong>Public cible :</strong> <span id="summary_cible"></span></p>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary mt-2 p-2" onclick="editStep(3)">
                      <i class="fa-solid fa-edit"></i> Modifier
                    </button>
                  </div>

                  <div class="summary_card mb-3">
                    <h4 class="summary_card_title">
                      <i class="fa-solid fa-cogs"></i> Fonctionnalités
                    </h4>
                    <div class="summary_content">
                      <p><strong>Fonctionnalités sélectionnées :</strong> <span id="summary_fonctionnalites"></span></p>
                      <p id="summary_autres_besoins_container" style="display: none;">
                        <strong>Autres besoins :</strong><br><span id="summary_autres_besoins"></span>
                      </p>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary mt-2 p-2" onclick="editStep(4)">
                      <i class="fa-solid fa-edit"></i> Modifier
                    </button>
                  </div>

                  <div class="summary_card mb-3">
                    <h4 class="summary_card_title">
                      <i class="fa-solid fa-calendar-check"></i> Contraintes
                    </h4>
                    <div class="summary_content">
                      <p id="summary_delais_container"><strong>Délais :</strong> <span id="summary_delais"></span></p>
                      <p id="summary_budget_container"><strong>Budget :</strong> <span id="summary_budget"></span></p>
                      <p id="summary_urgence_container"><strong>Urgence :</strong> <span id="summary_urgence"></span></p>
                      <p id="summary_documents_container" style="display: none;">
                        <strong>Documents joints :</strong> <span id="summary_documents"></span>
                      </p>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mt-2 p-2" onclick="editStep(5)">
                      <i class="fa-solid fa-edit"></i> Modifier
                    </button>
                  </div>
                </div>

                <div class="alert alert-info mt-4">
                  <i class="fa-solid fa-info-circle"></i> 
                  Veuillez vérifier toutes les informations avant de soumettre votre demande.
                </div>

                <div class="d-flex gap-3 mt-4">
                  <button type="button" class="btn btn-outline-primary" onclick="prevStep(5)">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-left"></i>
                    </span>
                    <span class="btn_label" data-text="Précédent">Précédent</span>
                  </button>
                  <button type="submit" class="btn btn-primary">
                    <span class="btn_label" data-text="Confirmer et envoyer">Confirmer et envoyer</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-paper-plane"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="form_confirmation" style="display: none;">
                <div class="text-center">
                  <div class="confirmation_icon mb-4">
                    <i class="fa-solid fa-check-circle"></i>
                  </div>
                  <h3 class="mb-3">Merci pour votre confiance !</h3>
                  <p class="mb-4">Notre équipe analysera votre demande et vous contactera sous 48h.</p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Form Section - End -->

</main>

@endsection

@push('styles')
<style>
.iconbox_icon {
    font-size: 3rem;
    color: #0066cc;
    margin-bottom: 1rem;
}

.phase_card {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    position: relative;
    border-left: 4px solid #0066cc;
}

.phase_number {
    position: absolute;
    top: -15px;
    right: 20px;
    background: #0066cc;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
}

.phase_title {
    font-size: 1.3rem;
    margin-bottom: 1rem;
    color: #333;
}

.phase_description {
    color: #666;
    margin-bottom: 1rem;
}

.phase_deliverables ul {
    list-style: none;
    padding-left: 0;
}

.phase_deliverables li::before {
    content: "✓ ";
    color: #0066cc;
    font-weight: bold;
    margin-right: 0.5rem;
}

.collaboration_list,
.benefits_list {
    list-style: none;
    padding-left: 0;
}

.collaboration_list li,
.benefits_list li {
    padding: 0.5rem 0;
    font-size: 1.1rem;
}

.collaboration_list i,
.benefits_list i {
    color: #0066cc;
    margin-right: 0.8rem;
}

.project_form {
    background: #fff;
    padding: 3rem;
    border-radius: 10px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
}

.form_step {
    display: none;
}

.form_step.active {
    display: block;
}

.form_step_title {
    color: #0066cc;
    border-bottom: 2px solid #0066cc;
    padding-bottom: 1rem;
}

.project_types,
.features_grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}

.project_type_option,
.feature_option {
    display: flex;
    align-items: center;
    padding: 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s;
}

.project_type_option:hover,
.feature_option:hover {
    border-color: #0066cc;
    background: #f0f8ff;
}

.project_type_option input,
.feature_option input {
    margin-right: 0.8rem;
}

.form_confirmation {
    text-align: center;
    padding: 3rem;
}

.confirmation_icon i {
    font-size: 5rem;
    color: #28a745;
}

@media (max-width: 768px) {
    .project_form {
        padding: 1.5rem;
    }
    
    .phase_card {
        margin-bottom: 1.5rem;
    }
}

.summary_section {
  max-height: 600px;
  overflow-y: auto;
  padding-right: 10px;
}

.summary_card {
  background: #f8f9fa;
  border-left: 4px solid #0066cc;
  padding: 1.5rem;
  border-radius: 8px;
  margin-bottom: 1rem;
}

.summary_card_title {
  color: #0066cc;
  font-size: 1.2rem;
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.summary_content p {
  margin-bottom: 0.75rem;
  line-height: 1.6;
}

.summary_content p:last-child {
  margin-bottom: 0;
}

.summary_content strong {
  color: #333;
}

.summary_content span {
  color: #666;
}
</style>
@endpush

@push('scripts')
<script>
// Gestion du formulaire multi-étapes
let currentStep = 1;
let formData = new FormData();

// Fonction pour passer à l'étape suivante
function nextStep(step) {
    // Valider l'étape actuelle avant de continuer
    if (!validateStep(currentStep)) {
        return;
    }
    
    // Sauvegarder les données de l'étape actuelle
    saveStepData(currentStep);
    
    // Si on va à l'étape 6 (récapitulatif), remplir le récapitulatif
    if (step === 6) {
        fillSummary();
    }
    
    // Passer à l'étape suivante
    currentStep = step;
    document.querySelectorAll('.form_step').forEach(el => el.classList.remove('active'));
    document.querySelector(`.form_step[data-step="${step}"]`).classList.add('active');
    window.scrollTo({ top: document.querySelector('#form-section').offsetTop - 100, behavior: 'smooth' });
}

// Fonction pour revenir à l'étape précédente
function prevStep(step) {
    currentStep = step;
    document.querySelectorAll('.form_step').forEach(el => el.classList.remove('active'));
    document.querySelector(`.form_step[data-step="${step}"]`).classList.add('active');
    window.scrollTo({ top: document.querySelector('#form-section').offsetTop - 100, behavior: 'smooth' });
}

// Fonction pour éditer une étape depuis le récapitulatif
function editStep(step) {
    currentStep = step;
    document.querySelectorAll('.form_step').forEach(el => el.classList.remove('active'));
    document.querySelector(`.form_step[data-step="${step}"]`).classList.add('active');
    window.scrollTo({ top: document.querySelector('#form-section').offsetTop - 100, behavior: 'smooth' });
}

// Fonction de validation d'une étape
function validateStep(step) {
    const currentStepEl = document.querySelector(`.form_step[data-step="${step}"]`);
    const requiredInputs = currentStepEl.querySelectorAll('[required]');
    let isValid = true;
    
    requiredInputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('is-invalid');
            isValid = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });
    
    // Validation spécifique pour l'étape 2 (au moins un type de projet)
    if (step === 2) {
        const checkedTypes = currentStepEl.querySelectorAll('input[name="type_projet[]"]:checked');
        if (checkedTypes.length === 0) {
            alert('Veuillez sélectionner au moins un type de projet');
            isValid = false;
        }
        
        // Vérifier si "autre" est coché et que le champ autre est rempli
        const autreChecked = Array.from(checkedTypes).some(cb => cb.value === 'autre');
        const autreInput = document.querySelector('input[name="type_autre"]');
        if (autreChecked && !autreInput.value.trim()) {
            alert('Veuillez préciser votre type de projet');
            autreInput.classList.add('is-invalid');
            isValid = false;
        } else if (autreInput) {
            autreInput.classList.remove('is-invalid');
        }
    }
    
    // Validation email pour l'étape 1
    if (step === 1) {
        const emailInput = document.querySelector('input[name="email"]');
        if (emailInput && emailInput.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                alert('Veuillez entrer une adresse email valide');
                emailInput.classList.add('is-invalid');
                isValid = false;
            }
        }
    }
    
    if (!isValid) {
        alert('Veuillez remplir tous les champs obligatoires');
    }
    
    return isValid;
}

// Fonction pour sauvegarder les données d'une étape
function saveStepData(step) {
    const stepEl = document.querySelector(`.form_step[data-step="${step}"]`);
    const inputs = stepEl.querySelectorAll('input, textarea, select');
    
    inputs.forEach(input => {
        if (input.type === 'checkbox') {
            // Pour les checkboxes, on gère différemment
            const name = input.name;
            const values = formData.getAll(name);
            
            if (input.checked && !values.includes(input.value)) {
                formData.append(name, input.value);
            }
        } else if (input.type === 'file') {
            // Pour les fichiers, on les ajoute directement
            if (input.files.length > 0) {
                Array.from(input.files).forEach(file => {
                    formData.append('documents[]', file);
                });
            }
        } else {
            // Pour les autres champs
            formData.set(input.name, input.value);
        }
    });
}

// Fonction pour remplir le récapitulatif
function fillSummary() {
    // Étape 1 - Informations personnelles
    const prenom = document.querySelector('input[name="prenom"]').value;
    const nom = document.querySelector('input[name="nom"]').value;
    document.getElementById('summary_nom').textContent = `${prenom} ${nom}`;
    document.getElementById('summary_organisation').textContent = document.querySelector('input[name="organisation"]').value;
    document.getElementById('summary_email').textContent = document.querySelector('input[name="email"]').value;
    document.getElementById('summary_telephone').textContent = document.querySelector('input[name="telephone"]').value;
    document.getElementById('summary_role').textContent = document.querySelector('input[name="role"]').value;
    
    // Étape 2 - Type de projet
    const typesProjet = Array.from(document.querySelectorAll('input[name="type_projet[]"]:checked'))
        .map(cb => {
            const labels = {
                'web': 'Application web',
                'mobile': 'Application mobile',
                'plateforme': 'Plateforme métier',
                'site': 'Site web / e-commerce',
                'autre': 'Autre'
            };
            return labels[cb.value] || cb.value;
        });
    document.getElementById('summary_type_projet').textContent = typesProjet.join(', ') || 'Non spécifié';
    
    const typeAutre = document.querySelector('input[name="type_autre"]').value;
    if (typeAutre) {
        document.getElementById('summary_type_autre').textContent = typeAutre;
        document.getElementById('summary_type_autre_container').style.display = 'block';
    } else {
        document.getElementById('summary_type_autre_container').style.display = 'none';
    }
    
    // Étape 3 - Contexte & objectifs
    document.getElementById('summary_probleme').textContent = document.querySelector('textarea[name="probleme"]').value;
    document.getElementById('summary_objectifs').textContent = document.querySelector('textarea[name="objectifs"]').value;
    document.getElementById('summary_cible').textContent = document.querySelector('input[name="cible"]').value;
    
    // Étape 4 - Fonctionnalités
    const fonctionnalites = Array.from(document.querySelectorAll('input[name="fonctionnalites[]"]:checked'))
        .map(cb => {
            const labels = {
                'auth': 'Authentification',
                'users': 'Gestion des utilisateurs',
                'dashboard': 'Tableaux de bord',
                'payment': 'Paiement',
                'api': 'Intégration API'
            };
            return labels[cb.value] || cb.value;
        });
    document.getElementById('summary_fonctionnalites').textContent = fonctionnalites.length > 0 ? fonctionnalites.join(', ') : 'Aucune sélection';
    
    const autresBesoins = document.querySelector('textarea[name="autres_besoins"]').value;
    if (autresBesoins) {
        document.getElementById('summary_autres_besoins').textContent = autresBesoins;
        document.getElementById('summary_autres_besoins_container').style.display = 'block';
    } else {
        document.getElementById('summary_autres_besoins_container').style.display = 'none';
    }
    
    // Étape 5 - Contraintes
    const delais = document.querySelector('input[name="delais"]').value;
    if (delais) {
        document.getElementById('summary_delais').textContent = delais;
        document.getElementById('summary_delais_container').style.display = 'block';
    } else {
        document.getElementById('summary_delais_container').style.display = 'none';
    }
    
    const budgetSelect = document.querySelector('select[name="budget"]');
    const budget = budgetSelect.options[budgetSelect.selectedIndex].text;
    if (budgetSelect.value) {
        document.getElementById('summary_budget').textContent = budget;
        document.getElementById('summary_budget_container').style.display = 'block';
    } else {
        document.getElementById('summary_budget_container').style.display = 'none';
    }
    
    const urgenceSelect = document.querySelector('select[name="urgence"]');
    const urgence = urgenceSelect.options[urgenceSelect.selectedIndex].text;
    if (urgenceSelect.value) {
        document.getElementById('summary_urgence').textContent = urgence;
        document.getElementById('summary_urgence_container').style.display = 'block';
    } else {
        document.getElementById('summary_urgence_container').style.display = 'none';
    }
    
    const documentsInput = document.querySelector('input[name="documents[]"]');
    if (documentsInput && documentsInput.files.length > 0) {
        const fileNames = Array.from(documentsInput.files).map(f => f.name).join(', ');
        document.getElementById('summary_documents').textContent = fileNames;
        document.getElementById('summary_documents_container').style.display = 'block';
    } else {
        document.getElementById('summary_documents_container').style.display = 'none';
    }
}

// Initialisation au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer le token CSRF
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
                     document.querySelector('input[name="_token"]')?.value;
    
    if (csrfToken) {
        formData.set('_token', csrfToken);
    }
    
    // Gestion de la soumission du formulaire
    const projectForm = document.getElementById('project-form');
    
    if (projectForm) {
        projectForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            // Valider la dernière étape
            if (!validateStep(currentStep)) {
                return;
            }
            
            // Sauvegarder les données de la dernière étape
            saveStepData(currentStep);
            
            // Récupérer le bouton submit pour afficher le loader
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Envoi en cours...';
            
            try {
                // Envoyer les données au serveur
                const response = await fetch('/project-requests', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Afficher le message de confirmation
                    document.querySelectorAll('.form_step').forEach(el => el.style.display = 'none');
                    document.querySelector('.form_confirmation').style.display = 'block';
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    
                } else {
                    // Afficher les erreurs
                    let errorMessage = 'Une erreur est survenue. Veuillez réessayer.';
                    if (result.errors) {
                        errorMessage = Object.values(result.errors).flat().join('\n');
                    } else if (result.message) {
                        errorMessage = result.message;
                    }
                    alert(errorMessage);
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
                
            } catch (error) {
                console.error('Erreur:', error);
                alert('Une erreur réseau est survenue. Veuillez vérifier votre connexion et réessayer.');
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
    }
});
</script>
@endpush