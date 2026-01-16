@extends('layouts.app')

@section('title', 'Nos services - ADH Group')
@section('description', 'Découvrez ADH Group, expert en solutions digitales en Afrique')
@section('keywords', 'ADH Group, Solutions digitales, Transformation numérique, Afrique')

@section('content')
 

 
 
   

        <!-- Page Banner Section - Start
        ================================================== -->
        <section class="page_banner_section text-center" style="background-image: url('../images/shapes/bg_pattern_4.svg'); ">
          <div class="container">
           
            <h1 class="page_title mb-0 text-white"> Nos services </h1>
          </div>
        </section>
        <!-- Page Banner Section - End
        ================================================== -->

        <!-- Intro About Section - Start
        ================================================== -->
        <section class="intro_about_section section_space bg-light ">
          <div class="intro_about_content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto" >
                  <div class="image_wrap">
                    <img src="{{asset('images/about/about_3.png')}}" alt="Techco - About Image">
                  </div>
                </div>
                 
              </div>
            </div>
          </div>
          <div class="container">
            <div class="heading_block mb-0">
              <div class="  justify-content-lg-between">
                <div class="col-lg-12">
                  <div class="heading_focus_text m">
                       Nos Services
                    <span class="badge bg-secondary text-white">ADH Group</span> 
                  </div>
                  
                </div>
              <div class="row justify-content-lg-between">
                <div class="col-lg-6">
                  <h2> Accélérez votre transformation digitale</h2>
                  <p class="heading_description mb-0">
                     ADH Group est votre partenaire de confiance pour réussir votre transformation digitale en Afrique. Spécialistes de la FinTech, de l'Intelligence Artificielle et des solutions d'entreprise, nous comprenons les défis uniques auxquels font face les organisations africaines. Notre approche combine innovation technologique, rigueur méthodologique et connaissance approfondie du terrain pour vous accompagner de la conception à la mise en œuvre de projets digitaux à fort impact. Avec ADH Group, transformez vos ambitions numériques en réalité concrète.
                </p>
                </div>
                <div class=" col-lg-6 image_wrap position-relative">
                    <img src="{{ asset('images/about/3.png') }}" alt="Techco - About Image" style="border-radius: 5%">
                     
                  </div>
                   </div>
              </div>

    

            </div>
          </div>
        </section>
        <!-- Intro About Section - End
        ================================================== -->

        <!-- Policy Section - Start
        ================================================== -->
        <section class="policy_section bg-light pb-80">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 px-lg-1" id="solution">
                <div class="iconbox_block h-100">
                   
                  <div class="iconbox_content service_block_2">
                    <h3 class="iconbox_title"> Solutions d’entreprise, solutions de gestion, solutions financières - Fintech </h3>
                    
                    <ul class="icon_list unordered_list_block">
                    <li>
                      <span class="icon_list_icon">
                        <i class="fa-regular fa-circle-dot"></i>  
                      </span>
                      <span class="icon_list_text">
                         Développement de plateformes de paiement digitalisées, Intégration de monnaie électronique / API bancaires
                      </span>
                    </li>

                      <li>
                      <span class="icon_list_icon">
                        <i class="fa-regular fa-circle-dot"></i>  
                      </span>
                      <span class="icon_list_text">
                         Intégration de solutions et logiciels de gestion (Finance, Comptabilité, Paie & RH, Vente & Facturation, GMAO, GPAO)
                      </span>
                    </li>

                      <li>
                      <span class="icon_list_icon">
                        <i class="fa-regular fa-circle-dot"></i>  
                      </span>
                      <span class="icon_list_text">
                       Développements d'applications web et mobiles sur mesure & Reporting (PHP/Laravel, JavaScript/React/Vue.js, Flutter, WordPress, Drupal, Office 365, Power BI, Tableau)
                    </span>
                    </li>

                      <li>
                      <span class="icon_list_icon">
                        <i class="fa-regular fa-circle-dot"></i>  
                      </span>
                      <span class="icon_list_text">
                         
                         ERP / CRM / systèmes métiers
                      </span>
                    </li>

                      <li>
                      <span class="icon_list_icon">
                        <i class="fa-regular fa-circle-dot"></i>  
                      </span>
                      <span class="icon_list_text">
                         Outils digitaux pour entreprises et administrations
                    </span>
                    </li>

                     <li>
                      <span class="icon_list_icon">
                        <i class="fa-regular fa-circle-dot"></i>  
                      </span>
                      <span class="icon_list_text">
                         Platefrmes SaaS
                    </span>
                    </li>
                  
                  </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="iconbox_block h-100 ">
                   
                  <div class="iconbox_content service_block_2" id="ia">
                    <h3 class="iconbox_title">Intelligence Artificielle & Data</h3>
                     <ul class="icon_list unordered_list_block">
                        <li>
                        <span class="icon_list_icon">
                            <i class="fa-regular fa-circle-dot"></i>  
                        </span>
                        <span class="icon_list_text">
                            Solutions d'automatisation basées sur l'IA
                        </span>
                        </li>
                        <li>
                        <span class="icon_list_icon">
                            <i class="fa-regular fa-circle-dot"></i>  
                        </span>
                        <span class="icon_list_text">
                            Chatbots intelligents pour entreprises
                        </span>
                        </li>
                        <li>
                        <span class="icon_list_icon">
                            <i class="fa-regular fa-circle-dot"></i>  
                        </span>
                        <span class="icon_list_text">
                            Analyse de données et prédiction
                        </span>
                        </li>
                        <li>
                        <span class="icon_list_icon">
                            <i class="fa-regular fa-circle-dot"></i>  
                        </span>
                        <span class="icon_list_text">
                            IA pour l'agriculture, l'industrie, la santé et le commerce
                        </span>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
          
            </div>

            <div class="row">
            <div class="col-lg-12 px-lg-1  ">
                <div class="iconbox_block h-100">
                   
                  <div class="iconbox_content service_block_2" id="support">
                    <h3 class="iconbox_title">   Support & Infogérance </h3>
                    
                        <ul class="icon_list unordered_list_block">
                            <li>
                                <span class="icon_list_icon">
                                    <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                    Support technique aux entreprises
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                    <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                    Supervision des systèmes et réseaux
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                    <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                    Maintenance applicative et matérielle
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                    <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                    Assistance à la transformation digitale
                                </span>
                                </li>
                        </ul>
                  </div>
                </div>
              </div>

          
          
            </div>


                        <div class="row">
               <div class="col-lg-6 px-lg-1  ">
                <div class="iconbox_block h-100">
                   
                  <div class="iconbox_content service_block_2" id="security">
                    <h3 class="iconbox_title">   Cybersécurité & services de cyberdéfense </h3>
                    
                        <ul class="icon_list unordered_list_block">
                                <li>
                                <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                Audit de sécurité informatique
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                Sécurisation d'infrastructures IT
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                Tests d'intrusion (Pentesting)
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                Sensibilisation aux risques cyber
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                Mise en place de politiques de sécurité
                                </span>
                                </li>
                                <li>
                                <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                                </span>
                                <span class="icon_list_text">
                                Mise en place d'outils de veille, de contrôle d'accès et de surveillance d'intégrité de zone
                                </span>
                                </li>
                        </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="iconbox_block h-100">
                   
                  <div class="iconbox_content service_block_2" id="formation">
                    <h3 class="iconbox_title"> Formation & Certification</h3>
                     <ul class="icon_list unordered_list_block">
                        <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Formations en Intelligence Artificielle
                            </span>
                            </li>
                            <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Formations en Applications métier
                            </span>
                            </li>
                            <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Formations en Développement logiciel
                            </span>
                            </li>
                            <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Formations en Cybersécurité
                            </span>
                            </li>
                            <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Formations en IoT et objets connectés
                            </span>
                            </li>
                            <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Formations en Drones & technologies embarquées
                            </span>
                            </li>
                            <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Programmes certifiants
                            </span>
                            </li>
                            <li>
                            <span class="icon_list_icon">
                                <i class="fa-regular fa-circle-dot"></i>  
                            </span>
                            <span class="icon_list_text">
                                Bootcamps et ateliers pratiques
                            </span>
                            </li>
                            </ul>

                  </div>
                </div>
              </div>
          
            </div>
          </div>
        </section>



 


 

  
      

@endsection

@push('styles')
<style>
.iconbox_icon {
    font-size: 3rem;
    color: #0066cc;
    margin-bottom: 1rem;
}
</style>
@endpush

@push('scripts')
<script>
console.log('Page À propos chargée');
</script>
@endpush