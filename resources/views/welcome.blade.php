@extends('layouts.app')

@section('title', 'ADH Group')
@section('description', 'Découvrez ADH Group, expert en solutions digitales en Afrique')
@section('keywords', 'ADH Group, Solutions digitales, Transformation numérique, Afrique')

@section('content') 
      <main class="page_content">

        <!-- IT Solution Hero Section - Start
        ================================================== -->
        <section class="software_company_hero_section xb-hidden">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="content_wrap">
                  <div class="heading_focus_text has_underline text-white d-inline-flex" style="background-image: url('assets/images/shapes/shape_title_under_line.svg');">
                     ADH Group - SOLUTIONS & INNOVATION
                  </div>
                  <h1 class="text-white">
                     Accélérez votre <mark>transformation digitale</mark>  avec des solutions sur mesure.  
                  </h1>
                  <p>
                    ADH Group vous accompagne dans la construction de solutions digitales performantes, alignées sur vos    besoins.
                   
                  </p>
                  <ul class="step_list text-white unordered_list_block">
                    <li>Parce que la qualité compte</li>
                    <li>La rapidité au service de l’efficacité.</li>
                  </ul>
                  <ul class="btns_group unordered_list p-0 justify-content-start">
                    <li>
                      <a class="btn" href="{{ route('services') }}">
                        <span class="btn_label" data-text=" voir nos services"> Nos services</span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class="hotline_block" href="tel:+420318568511">
                       <!--  <span class="hotline_icon">
                          <i class="fa-solid fa-phone-volume"></i>
                        </span>
                       <span class="hotline_content">
                          <small>CONTACT US DAILY</small>
                          <strong class="text-white">(+420) 318 568 511</strong>
                        </span>-->
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
               <div class="col-lg-6">
                    <div class="engine_image">
                        <div class="image_wrap_1">
                            <img src="{{ asset('images/hero/circle_engine_1.webp') }}" alt="Engine Image">
                        </div>
                        <div class="image_wrap_2">
                            <img src="{{ asset('images/hero/circle_engine_2.webp') }}" alt="Engine Image">
                        </div>
                        <div class="image_wrap_3">
                            <img src="{{ asset('images/hero/circle_engine_3.webp') }}" alt="Engine Image">
                        </div>
                        <div class="image_wrap_4">
                            <img src="{{ asset('images/hero/circle_engine_4.png') }}" alt="Engine Image">
                        </div>
                    </div>
                </div>

            </div>
          </div>

           
           <div class="shape_image_1">
                <img src="{{ asset('images/hero/shape_image_1.webp') }}" alt="Engine Image">
            </div>
            <div class="shape_image_2">
                <img src="{{ asset('images/hero/shape_image_2.webp') }}" alt="Engine Image">
            </div>
            <div class="shape_image_3">
                <img src="{{ asset('images/hero/shape_image_3.webp') }}" alt="Engine Image">
            </div>
            <div class="shape_image_4">
                <img src="{{ asset('images/hero/shape_image_4.webp') }}" alt="Engine Image">
            </div>

        </section>
        <!-- IT Solution Hero Section - End
        ================================================== -->

        <!-- Feature Partners Section - Start
        ================================================== -->
        <div class="feature_partners_section">
          <div class="container position-relative">
            <div class="title_text text-white">
             Ils nous font confiance
            </div>
            <div class="client_logo_carousel">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{ asset('images/clients/Ecobank_logo.webp') }}" alt="adh - ecobank">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{ asset('images/clients/Logo_CGTS.jpg') }}" alt="adh - cgts">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo_Matanti.jpg')}}" alt="adh - Logo Matanti">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo_Nocibe.jpg')}}" alt="ADH -  Logo_Nocibe">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/LTG_Conseil_Logo.svg')}}" alt="ADH - LTG">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/nsia_banque.jpg')}}" alt="ADH - NSIA Banque Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/scb1.jpeg')}}" alt="ADH - SCB Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo-SOS-new.png')}}" alt="ADH -  Logo-SOS">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/71356-pnhg.jpg')}}" alt="ADH - PNHG Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/major.jpeg')}}" alt="ADH - Etat major Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/aid.jpeg')}}" alt="ADH - Client Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/proximajobpng')}}" alt="ADH - Proximajob Logo Image">
                  </div>
                </div>
              
                                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{ asset('images/clients/Logo_CGTS.jpg') }}" alt="adh - cgts">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo_Matanti.jpg')}}" alt="adh - Logo Matanti">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo_Nocibe.jpg')}}" alt="ADH -  Logo_Nocibe">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/LTG_Conseil_Logo.svg')}}" alt="ADH - LTG">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/nsia_banque.jpg')}}" alt="ADH - NSIA Banque Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/scb1.jpeg')}}" alt="ADH - SCB Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo-SOS-new.png')}}" alt="ADH -  Logo-SOS">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/71356-pnhg.jpg')}}" alt="ADH - PNHG Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/major.jpeg')}}" alt="ADH - Etat major Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/aid.jpeg')}}" alt="ADH - Client Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/proximajobpng')}}" alt="ADH - Proximajob Logo Image">
                  </div>
                </div>                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{ asset('images/clients/Logo_CGTS.jpg') }}" alt="adh - cgts">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo_Matanti.jpg')}}" alt="adh - Logo Matanti">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo_Nocibe.jpg')}}" alt="ADH -  Logo_Nocibe">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/LTG_Conseil_Logo.svg')}}" alt="ADH - LTG">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/nsia_banque.jpg')}}" alt="ADH - NSIA Banque Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/scb1.jpeg')}}" alt="ADH - SCB Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/Logo-SOS-new.png')}}" alt="ADH -  Logo-SOS">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/71356-pnhg.jpg')}}" alt="ADH - PNHG Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/major.jpeg')}}" alt="ADH - Etat major Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/aid.jpeg')}}" alt="ADH - Client Logo Image">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="client_logo_item">
                    <img src="{{asset('images/clients/proximajobpng')}}" alt="ADH - Proximajob Logo Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Feature Partners Section - End
        ================================================== -->

        <!-- Service Section - Start
        ================================================== -->
        <section class="service_section pt-175 pb-80 bg-light section_decoration xb-hidden">
          <div class="container">
            <div class="heading_block text-center">
              <div class="heading_focus_text has_underline d-inline-flex" style="background-image: url('assets/images/shapes/shape_title_under_line.svg');">
                 Nos solutions et technologies
              </div>
              <h2 class="heading_text mb-0"  >
             <span style="color:black;">Nos services pour votre</span>     <mark>  succès</mark> 
              </h2>
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="service_block_2  h-100">
                  <div class="service_icon">
                    <img src="{{ asset('images/icons/icon_code.svg') }}" alt=" adh group - Service icon">
                  </div>
                  <h3 class="service_title">
                    <a href="service_details.html">
                      Solutions pour entreprise, ERP & fintech.
                    </a>
                  </h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                      <span class="icon_list_icon">
                       <!-- <i class="fa-regular fa-circle-dot"></i>-->
                      </span>
                      <span class="icon_list_text">
                         Nous concevons des solutions fiables et évolutives pour optimiser vos activités et soutenir votre croissance à travers le digital.
                      </span>
                    </li>
                  
                  </ul>

                  <a class="btn btn-primary" href="{{ url('/domaines/erp-fintech') }}">
                    <span class="btn_label" data-text="En savoir plus">En savoir plus</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="service_block_2  h-100">
                  <div class="service_icon">
                    <img src="{{ asset('images/icons/icon_programming_tree.svg') }}" alt=" Adh - Service icon">
                  </div>
                  <h3 class="service_title">
                    <a href="service_details.html">
                       Intelligence artificielle & Data 
                    </a>
                  </h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                     
                      <span class="icon_list_text">
                        Nous exploitons l’IA et les données pour automatiser vos processus, améliorer vos performances et soutenir vos décisions stratégiques.
                
                      </span>
                    </li>
                   
                  </ul>

                      <a class="btn btn-primary" href="{{ url('/domaines/ia-data') }}">
                        <span class="btn_label" data-text="En savoir plus">En savoir plus</span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                   </div>
              </div>
              <div class="col-lg-4">
                <div class="service_block_2  h-100">
                  <div class="service_icon">
                    <img src="{{ asset ('images/icons/icon_monitor_2.svg') }}" alt="ADH - Service icon">
                  </div>
                  <h3 class="service_title">
                    <a href="service_details.html">
                      Cybersécurité & Cyberdéfense 
                    </a>
                  </h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                      
                      <span class="icon_list_text">
                       Nous protégeons vos systèmes grâce à des technologies robustes, garantissant la sécurité, la continuité et la résilience de vos opérations.
             
                      </span>
                    </li>
                     
                  </ul>

                     <a class="btn btn-primary" href="{{url('/domaines/cybersecurite')}}">
                        <span class="btn_label" data-text="En savoir plus">En savoir plus</span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                </div>
              </div>
                            <div class="col-lg-4">
                <div class="service_block_2  h-100">
                  <div class="service_icon">
                    <img src="{{ asset('images/icons/icon_programming.svg') }}" alt="Techco - Service icon">
                  </div>
                  <h3 class="service_title">
                    <a href="service_details.html">
                       Cloud & Infrastructure   <br>
                    </a>
                  </h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                      
                      <span class="icon_list_text">
                       Nous déployons des infrastructures cloud sécurisées et performantes pour garantir agilité, disponibilité et évolutivité à vos systèmes.
                      </span>
                    </li>
                    
                  </ul>

                   <a class="btn btn-primary" href="{{ url('/domaines/cloud-infrastructure') }}">
                      <span class="btn_label" data-text="En savoir plus">En savoir plus</span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>

                </div>
              </div>
                            <div class="col-lg-4">
                <div class="service_block_2  h-100">
                  <div class="service_icon">
                    <img src="{{ asset ('images/icons/icon_bug.svg') }}" alt="Techco - Service icon">
                  </div>
                  <h3 class="service_title">
                    <a href="service_details.html">
                      Support & Infogérance 
                    </a>
                  </h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                      
                      <span class="icon_list_text">
                       Nous assurons la gestion continue de vos infrastructures pour garantir stabilité, performance et tranquillité d’esprit au quotidien.
                      </span>
                    </li>
                     
                  </ul>
                      <a class="btn btn-primary" href="{{ url('/domaines/support-infogrance') }}">
                        <span class="btn_label" data-text="En savoir plus">En savoir plus</span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>

                </div>
              </div>

              <div class="col-lg-4">
                <div class="service_block_2  h-100">
                  <div class="service_icon">
                    <img src="{{ asset ('images/icons/icon_phone.svg') }}" alt="Techco - Service icon">
                  </div>
                  <h3 class="service_title">
                    <a href="service_details.html">
                       Formation & Certification 
                    </a>
                  </h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                    
                      <span class="icon_list_text">
                        Nous renforçons les compétences de vos équipes grâce à des programmes pratiques, certifiants et adaptés aux exigences du numérique moderne.
                      </span>
                    </li>
                   
                  </ul>

                     <a class="btn btn-primary" href="{{ url('/domaines/formation') }}">
                        <span class="btn_label" data-text="En savoir plus">En savoir plus</span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                </div>
              </div>

            </div>
          </div>

         <div class="decoration_item shape_image_1">
            <img src="{{ asset('images/shapes/shape_line_5.svg') }}"  alt="adh group">
        </div>
        <div class="decoration_item shape_image_2">
            <img src="{{ asset('images/shapes/shape_line_6.svg') }}"  alt="adh group">
        </div>
        <div class="decoration_item shape_image_3">
            <img src="{{ asset('images/shapes/shape_space_1.svg') }}"  alt="adh group">
        </div>
        <div class="decoration_item shape_image_4">
            <img src="{{ asset('images/shapes/shape_angle_1.webp') }}" alt="Techco Shape Angle">
        </div>
        <div class="decoration_item shape_image_5">
            <img src="{{ asset('images/shapes/shape_angle_2.webp') }}" alt="Techco Shape Angle">
        </div>

        </section>
        <!-- Service Section - End
        ================================================== -->

        <!-- About and Case Section - Start
        ================================================== -->

 <section class="client_logo_section section_space" style="background-image: url('../images/shapes/bg_pattern_1.svg'); border-top: 5px solid #676767;">
    <div class="container">
        <div class="row funfact_wrapper">
            <div class="col-12 text-center mb-5">
                <h2 class="heading_text">Pourquoi choisir <mark>ADH Group</mark>?</h2>
            </div>

            <!-- Carte de gauche -->
             <div class="col-lg-4 mb-4 mb-lg-0 d-flex">
                  <div class="our_world_employees d-flex flex-column w-100">
                      <div class="image_wrap h-100">
                      </div>
                      <div class="content_wrap flex-grow-1 d-flex align-items-center justify-content-center">
                          <p class="title_text1">
                              Fort de nos années d'expériences, nous comprenons parfaitement les défis uniques des organisations publiques et privées en Afrique. C'est pourquoi toutes nos solutions sont conçues pour être pratiques, sécurisées et adaptées aux réalités locales. ADH Group vous accompagne avec des technologies performantes qui fonctionnent réellement dans le contexte africain.
                          </p>
                      </div>
                  </div>
              </div>

            <!-- 4 cartes de droite -->
            <div class="col-lg-8 d-flex"> 
                <div class="row w-100">
                    <!-- Colonne gauche des cartes -->
                    <div class="col-md-6 d-flex flex-column">
                        <!-- Première carte -->
                        <div class="funfact_block flex-fill mb-4 d-flex flex-column">
                            <div class="funfact_icon">
                                <img src="{{ asset('images/icons/icon_head.svg') }}" alt="Techco - SVG Icon Head">
                            </div>
                            <div class="funfact_content flex-grow-1">
                                <div class="counter_value">
                                    <span class="odometer" data-count="10">0</span>
                                    <span>+</span>
                                </div>
                                <h3 class="funfact_title mb-0">Années d'expertise en Afrique</h3>
                            </div>
                        </div>

                        <!-- Troisième carte -->
                        <div class="funfact_block flex-fill d-flex flex-column">
                            <div class="funfact_icon">
                                <img src="{{ asset('images/icons/icon_like.svg') }}" alt="Techco - SVG Icon Like">
                            </div>
                            <div class="funfact_content flex-grow-1">
                                <div class="counter_value">
                                    <span class="odometer" data-count="100">0</span>
                                    <span>%</span>
                                </div>
                                <h3 class="funfact_title mb-0">Solutions sécurisées adaptées aux réalités africaines</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne droite des cartes -->
                    <div class="col-md-6 d-flex flex-column">
                        <!-- Deuxième carte -->
                        <div class="funfact_block flex-fill mb-4 d-flex flex-column">
                            <div class="funfact_icon">
                                <img src="{{ asset('images/icons/icon_check.svg') }}" alt="Techco - SVG Icon Check">
                            </div>
                            <div class="funfact_content flex-grow-1">
                                <div class="counter_value">
                                    <span class="odometer" data-count="50">0</span>
                                    <span>+</span>
                                </div>
                                <h3 class="funfact_title mb-0">Projets réalisés avec succès</h3>
                            </div>
                        </div>

                        <!-- Quatrième carte -->
                        <div class="funfact_block flex-fill d-flex flex-column">
                            <div class="funfact_icon">
                                <img src="{{ asset('images/icons/icon_dart_board.svg') }}" alt="Techco - SVG Icon Head">
                            </div>
                            <div class="funfact_content flex-grow-1">
                                <div class="counter_value">
                                    <span class="odometer" data-count="5">0</span>
                                    <span>+</span>
                                </div>
                                <h3 class="funfact_title mb-0">Pays couverts à travers le continent</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="about_and_case_section section_space section_decoration bg-dark" style="background-image: url('../images/backgrounds/bg_image_2.webp');">
            <div class="decoration_item shape_image_1">
                <img src="{{ asset ('images/shapes/shape_space_2.svg') }}"  alt="adh group">
            </div>
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
              
                <div class="about_image_1">
                  <img src="{{ asset('images/about/about9.png') }}" alt="Techco - About Image" style="border-radius: 2%">
                  <img src="{{ asset ('images/about/about_image_11.webp') }}" data-parallax='{"y" : 80, "smoothness": 6}' alt="Techco - About Image">
                  <img src="{{ asset ('images/about/about_image_10.webp') }}" data-parallax='{"y" : -80, "smoothness": 6}' alt="Techco - About Image">
                </div>
              </div>
              <div class="col-lg-5">
                <div class="about_content">
                   
                    <h2 class="heading_focus_text">
                     Échangeons sur votre <mark> projet</mark> !
                    </h2>
                    <p class=" " style="color: white">
                      Vous avez un besoin spécifique ? Notre équipe vous accompagne dans la conception 
                      d’une solution technologique sur mesure adaptée à vos objectifs et votre vision. 
                    </p>
                  </div>
                  
                  <ul class="btns_group unordered_list p-0 justify-content-start">
                    <li>
                      <a class="btn" href="{{ route('contact') }}">
                        <span class="btn_label" data-text="Demarrer">Nous contacter </span>
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
      
        </section>




        <section class="review_and_about_section section_space bg-light">
          <div class="section_space pb-0">
            <div class="container">
              <div class="row align-items-center justify-content-lg-around">
                <div class="col-lg-6">
                  <div class="heading_block">
                    <h2 class="heading_text">
                      A propos de ADH Group
                    </h2>
                    <p class="heading_description text-dark pe-lg-5">
                       ADH Group développe des solutions numériques modernes pour transformer les services du secteur public et privé en Afrique. 
                    </p>
                    <p class="heading_description mb-0 text-dark pe-lg-5">
                     Grâce à notre expertise diversifiée  en infrastructures digitales et en technologies, nous créons des plateformes robustes, rapides et sécurisées qui améliorent l’efficacité de nos clients et l’expérience des utilisateurs. 
                    </p>
                  </div>
                  <a class="creative_btn" href="{{ route('contact') }}">
                    <span class="btn_label bg-primary"> Nous contacter</span>
                    <span class="btn_icon">
                      <i class="bg-primary fa-solid fa-arrow-up-right"></i>
                      <i class="bg-primary fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
                <div class="col-lg-4">
                  <div class="about_image_3">
                    <img class="image_wrap" src="{{ asset('images/about/about8.png') }}" alt="adh group">
                    <div class="funfact_block capsule_layout">
                      <div class="funfact_icon">
                      
                      </div>
                      <div class="funfact_content">
                         
                        <div class="counter_value">
                          <span></span>
                          <span class=" " data-count="">ADH GROUP</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

 

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section pb-80 bg-light section_decoration" style="background-image: url('../images/backgr ounds/bg5.png'); border-top: 5px solid #676767;">
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="contact_method_box h-100">
                <div class="heading_block">
                    <div class="heading_focus_text has_underline d-inline-flex mb-3" style="background-image: url('../images/shapes/shape_title_under_line.svg');">
                    Vous êtes ici
                    </div>
                    <h2 class="heading_text mb-0">
                    Démarrons ensemble
                    </h2>
                    <p class="heading_description mb-0">
                    Lancez votre projet vers la réussite et la croissance.
                    </p>
                </div>
                <ul class="contact_method_list unordered_list_block">
                    <li>
                    <a href="tel:+8801680636189">
                        <span class="icon">
                        <i class="fa-solid fa-phone-volume"></i>
                        </span>
                        <span class="text">+880-1680-6361-89</span>
                    </a>
                    </li>
                    <li>
                    <a href="mailto:Techco@gmail.com">
                        <span class="icon">
                        <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span class="text">Techco@gmail.com</span>
                    </a>
                    </li>
                    <li>
                    <a href="#!">
                        <span class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="text">Sunshine Business Park</span>
                    </a>
                    </li>
                </ul>
                <ul class="support_step unordered_list_block">
                    <li>
                    <span class="serial_number">01</span>
                    <span class="text">Décrivez vos besoins</span>
                    </li>
                    <li>
                    <span class="serial_number">02</span>
                    <span class="text">Échangez avec nos experts</span>
                    </li>
                    <li>
                    <span class="serial_number">03</span>
                    <span class="text">Recevez un devis gratuit</span>
                    </li>
                    <li>
                    <span class="serial_number">04</span>
                    <span class="text">Démarrage du projet</span>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="instant_contact_form h-100">
                <div class="small_title">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    Entrons en contact
                </div>
                <h3 class="form_title">
                    Envoyez-nous un message et nous discuterons rapidement de votre projet.
                </h3>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="input_title" for="input_name">
                        <i class="fa-regular fa-user"></i>
                        </label>
                        <input id="input_name" class="form-control" type="text" name="name" placeholder="Votre nom" required>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="input_title" for="input_email">
                        <i class="fa-regular fa-envelope"></i>
                        </label>
                        <input id="input_email" class="form-control" type="email" name="email" placeholder="Votre adresse e-mail" required>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="input_title" for="input_phone">
                        <i class="fa-regular fa-phone-volume"></i>
                        </label>
                        <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="Votre numéro de téléphone" required>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="input_title" for="input_company">
                        <i class="fa-regular fa-globe"></i>
                        </label>
                        <input id="input_company" class="form-control" type="text" name="companyname" placeholder="Nom de votre entreprise">
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-group">
                        <label class="input_title" for="input_textarea">
                        <i class="fa-regular fa-comments"></i>
                        </label>
                        <textarea id="input_textarea" class="form-control" name="message" placeholder="Comment pouvons-nous vous aider ?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <span class="btn_label" data-text="Envoyer la demande">Envoyer la demande</span>
                        <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="decoration_item shape_image_1">
            <img src="{{ asset('images/shapes/shape_line_5.svg') }}"  alt="adh group">
        </div>
        <div class="decoration_item shape_image_2">
            <img src="{{ asset ('images/shapes/shape_line_6.svg') }}"  alt="adh group">
        </div>
         
        </section>

        <!-- Contact Section - End
        ================================================== -->

      </main>
@endsection

@push('styles')
<style>
.iconbox_icon {
    font-size: 3rem;
    color: #0066cc;
    margin-bottom: 1rem;
}
</style>
<style>
    .client_logo_section * {
        font-family: 'Poppins', sans-serif !important;
    }
    
    .client_logo_section .heading_text {
        font-weight: 600;
        letter-spacing: -0.5px;
        line-height: 1.3;
    }
    
    .client_logo_section mark {
        background: linear-gradient(120deg, rgba(103, 103, 103, 0.1) 0%, rgba(103, 103, 103, 0) 100%);
        padding: 0 8px;
        color: #2c3e50;
        font-weight: 700;
    }
    
    .client_logo_section .title_text1 {
        font-weight: 600;  
        line-height: 1.7;
        font-size: 1.18rem;  
        color: #ffffff;
        margin-top: -20px  
    }
    
    .client_logo_section .funfact_title {
        font-weight: 500;
        line-height: 1.5;
        color: #2d3748;
        font-size: 1.1rem;
    }
    
    .client_logo_section .counter_value {
        font-weight: 700;
        color: #2c3e50;
    }
</style>
@endpush

@push('scripts')
<script>
console.log('Page À propos chargée');
</script>
@endpush

 