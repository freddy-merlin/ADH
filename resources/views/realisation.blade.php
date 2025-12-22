@extends('layouts.app')

@section('title', 'À propos - ADH Group')
@section('description', 'Découvrez ADH Group, expert en solutions digitales en Afrique')
@section('keywords', 'ADH Group, Solutions digitales, Transformation numérique, Afrique')

@section('content')


      <main class="page_content">

        <!-- Page Banner Section - Start
        ================================================== -->
        <section class="page_banner_section text-center" style="background-image: url('../images/shapes/bg_pattern_4.svg');">
          <div class="container">
            
            <h1 class="page_title mb-0 text-white"> Nos réalisations</h1>
          </div>
        </section>
        <!-- Page Banner Section - End
        ================================================== -->

        <!-- Portfolio Section - Start
        ================================================== -->
        <section class="portfolio_section section_space bg-light">
          <div class="container">
            <div class="filter_elements_nav">
              <ul class="unordered_list justify-content-center">
              <li class="active" data-filter="all">Tous</li>
                <li data-filter="technology">Technologie</li>
                <li data-filter="helpdesk">Support</li>
                <li data-filter="analysis">Analyse</li>
                <li data-filter="marketing">Marketing</li>
              </ul>
            </div>
            <div class="filter_elements_wrapper row">
              <div class="col-lg-6 technology">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_4.webp') }}" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Driving Digital Transformation Explore the Depth of Our IT Projects
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Logo Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Finance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 helpdesk">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_5.webp') }}" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Explore Our IT Solutions Portfolio for Public Sector Organizations
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> App Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Public</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 analysis">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_6.webp')}} " alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Innovative Solutions Showcase the Diversity of Our IT Portfolio
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Card Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Transpiration</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 marketing">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_7.webp') }}" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Tech Triumphs Celebrating Our Achievements in IT Solutions
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Logistic</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 technology">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_8.webp') }}" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Revolutionizing IT Strategies A Closer Look at Our Dynamic IT Solutions
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Fution</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 helpdesk">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_9.webp') }}" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Cloud Migration and Integration Project IT Solutions Portfolio
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Energy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 analysis">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_10.webp') }}" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Pioneering Progress Exploring the Evolution and Impact of
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Health</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 marketing">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="{{ asset('images/portfolio/portfolio_item_image_11.webp') }}" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Unlocking Potential Explore Our Comprehensive IT Portfolio
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Industry</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Portfolio Section - End
        ================================================== -->

        <!-- Call To Action Section - Start
        ================================================== -->
        <section class="calltoaction_section parallaxie" style="background-image: url('../images/backgrounds/bg_image_1.webp');">
          <div class="container text-center">
            <div class="heading_block text-white">
              <h2 class="heading_text">
                Ready to Work, Let's Chat
              </h2>
              <p class="heading_description mb-0">
                Our team of experts is ready to collaborate with you every step of the way, from initial consultation to implementation.
              </p>
            </div>
            <a class="btn btn-primary" href="{{ route('contact') }}">
              <span class="btn_label" data-text="Nous contacter!">Nous contacter!</span>
              <span class="btn_icon">
                <i class="fa-solid fa-arrow-up-right"></i>
              </span>
            </a>
          </div>
        </section>
        <!-- Call To Action Section - End
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
@endpush

@push('scripts')
<script>
console.log('Page À propos chargée');
</script>
@endpush