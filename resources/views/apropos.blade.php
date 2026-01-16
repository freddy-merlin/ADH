@extends('layouts.app')

@section('title', 'À propos - ADH Group')
@section('description', 'Découvrez ADH Group, expert en solutions digitales en Afrique')
@section('keywords', 'ADH Group, Solutions digitales, Transformation numérique, Afrique')

@section('content')
 

 
 
   

        <!-- Page Banner Section - Start
        ================================================== -->
        <section class="page_banner_section text-center" style="background-image: url('../images/shapes/bg_pattern_4.svg');">
          <div class="container">
           
            <h1 class="page_title mb-0 text-white"> À propos de nous </h1>
          </div>
        </section>
        <!-- Page Banner Section - End
        ================================================== -->

        <!-- Intro About Section - Start
        ================================================== -->
        <section class="intro_about_section section_space bg-light">
          <div class="intro_about_content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto ">
                  <div class="image_wrap">
                    <img src="{{asset('images/about/2.png')}}"   alt="ADH - About Image">
                  </div>
                </div>
                 
              </div>
            </div>
          </div>
          <div class="container">
            <div class="heading_block mb-0 position-relative mt-4">
              <div class="row justify-content-lg-between">
                 <div class="heading_focus_text">
                    À propos de  
                    <span class="badge bg-secondary text-white">ADH Group</span> 
                  </div>
                  <div class="col-lg-6">
                 
                  <div class="image_wrap h-100   ">
                    <img src="{{asset('images/about/6.png')}}" alt="Techco - About Image" style="border-radius: 2%">
                  </div>
                </div>
                <div class="col-lg-6 ">
                  <h2 class="heading_text mb-0">
                   L'agilité au service de votre croissance.
                  </h2>
                  <p class="heading_description mb-0">
                    ADH est une entreprise technologique panafricaine spécialisée dans la FinTech, l’Intelligence Artificielle et la transformation digitale. Nous accompagnons les organisations publiques et privées dans la modernisation de leurs services grâce à des solutions innovantes, sécurisées et adaptées aux réalités du marché africain.  
                  Nous composons une équipe d’ingénieurs, d’experts numériques et de stratèges engagés pour faire émerger des solutions technologiques fiables, évolutives et accessibles. Nous combinons innovation, expertise et rigueur pour proposer des services à fort impact, du conseil stratégique à la mise en œuvre technique 
                </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Intro About Section - End
        ================================================== -->

        <!-- Policy Section - Start
        ================================================== -->
        <section class="policy_section bg-light">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="iconbox_block h-100">
                  <div class="iconbox_icon">
                    <img src="{{ asset('images/icons/icon_clock.svg') }}" alt="Clock SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h3 class="iconbox_title"> Notre ambition </h3>
                    <p class="mb-0">
                       Contribuer à faire du Bénin un hub technologique et participer à la transformation numérique africaine à travers : 
                        Les solutions technologiques (fintech, digitalisation des processus), 
                        L’intelligence artificielle, 
                        La sécurité (Cybersécurité et Cyberdéfense), 
                        Et la formation. 
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="iconbox_block h-100">
                  <div class="iconbox_icon bg-warning-subtle">
                    <img src="{{ asset('images/icons/icon_dart_board_2.svg') }}" alt="Dart Board SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h3 class="iconbox_title">Notre Mission</h3>
                    <p class="mb-0">
                      Fournir des solutions technologiques innovantes, sécurisées et adaptées aux besoins africains, tout en formant une nouvelle génération d’experts en technologie. 
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="iconbox_block h-100">
                  <div class="iconbox_icon bg-secondary-subtle">
                    <img src="{{ asset('images/icons/icon_target.svg') }}" alt="Target SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h3 class="iconbox_title">Notre Vision</h3>
                    <p class="mb-0">
                     Faire d’ADH un acteur majeur de la transformation digitale en Afrique de l’Ouest et à l’international. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>





                <!-- Service Section - Start
        ================================================== -->
        <section class="service_section section_space bg-light">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
                <div class="  " >
                  <img src="{{ asset ('images/about/5.png') }}" alt="Techco - About Image" style="border-radius: 5%;  " > 
                </div>
              </div>
 <div class="col-lg-6">
  <div class="ps-lg-5">
    <div class="heading_block">
      <h2 class="heading_text mb-0">
        Nos valeurs 
      </h2>
    </div>
    <ul class="service_facilities_group unordered_list d-flex flex-wrap">
      <li class="col-lg-6 col-md-6 d-flex">
        <a class="iconbox_block layout_icon_left d-flex flex-column w-100" href="service_details.html">
          <span class="iconbox_icon">
            <img src="{{ asset('images/icons/icon_check_2.svg') }}" alt="Check SVG Icon">
          </span>
          <span class="iconbox_content flex-grow-1">
            <strong class="iconbox_title mb-0">Innovation : Toujours repousser les limites.</strong>
          </span>
        </a>
      </li>
      <li class="col-lg-6 col-md-6 d-flex">
        <a class="iconbox_block layout_icon_left d-flex flex-column w-100" href="service_details.html">
          <span class="iconbox_icon">
            <img src="{{ asset('images/icons/icon_leaf.svg') }}" alt="Leaf SVG Icon">
          </span>
          <span class="iconbox_content flex-grow-1">
            <strong class="iconbox_title mb-0">Excellence : Qualité, rigueur et performance.</strong>
          </span>
        </a>
      </li>
      <li class="col-lg-6 col-md-6 d-flex">
        <a class="iconbox_block layout_icon_left d-flex flex-column w-100" href="service_details.html">
          <span class="iconbox_icon">
            <img src="{{ asset('images/icons/icon_box.svg') }}" alt="Box SVG Icon">
          </span>
          <span class="iconbox_content flex-grow-1">
            <strong class="iconbox_title mb-0">Sécurité : La confiance par la protection des données.</strong>
          </span>
        </a>
      </li>
      <li class="col-lg-6 col-md-6 d-flex">
        <a class="iconbox_block layout_icon_left d-flex flex-column w-100" href="service_details.html">
          <span class="iconbox_icon">
            <img src="{{ asset('images/icons/icon_receipt_add.svg') }}" alt="Receipt Add SVG Icon">
          </span>
          <span class="iconbox_content flex-grow-1">
            <strong class="iconbox_title mb-0">Impact africain : Des solutions pensées pour nos réalités.</strong>
          </span>
        </a>
      </li>
      <li class="col-lg-6 col-md-6 d-flex">
        <a class="iconbox_block layout_icon_left d-flex flex-column w-100" href="service_details.html">
          <span class="iconbox_icon">
            <img src="{{ asset('images/icons/icon_monitor.svg') }}" alt="Monitor SVG Icon">
          </span>
          <span class="iconbox_content flex-grow-1">
            <strong class="iconbox_title mb-0">Transmission : Former et élever les talents locaux.</strong>
          </span>
        </a>
      </li>
      <li class="col-lg-6 col-md-6 d-flex">
        <a class="iconbox_block layout_icon_left d-flex flex-column w-100" href="service_details.html">
          <span class="iconbox_icon">
            <img src="{{ asset('images/icons/icon_microscope.svg') }}" alt="Microscope SVG Icon">
          </span>
          <span class="iconbox_content flex-grow-1">
            <strong class="iconbox_title mb-0">Durabilité : Construire des solutions pérennes.</strong>
          </span>
        </a>
      </li>
    </ul>
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