@extends('layouts.app')

@section('title', ucfirst($domain) . ' - ADH Group')
@section('description', 'Découvrez nos solutions en ' . $domain)
@section('keywords', 'ADH Group, ' . $domain . ', Solutions digitales, Afrique')

@section('content')

<!-- Page Banner Section - Start -->
<section class="page_banner_section text-center" style="background-image: url('../images/shapes/bg_pattern_4.svg');">
    <div class="container">
        <h1 class="page_title mb-0 text-white">{{ $sections[$domain]['title'] }}</h1>
        <p class="text-white mt-3">{{ $sections[$domain]['subtitle'] }}</p>
    </div>
</section>
<!-- Page Banner Section - End -->

<!-- Main Content Section - Start -->
<section class="intro_about_section section_space bg-light">
    <div class="intro_about_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="image_wrap mb-5">
                        <img src="{{ asset($sections[$domain]['hero_image']) }}" alt="{{ $sections[$domain]['title'] }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="heading_block mb-5 position-relative">
            <div class="row justify-content-lg-between align-items-center">
                <div class="heading_focus_text mb-4">
                    {{ $sections[$domain]['focus_text'] }}
                    <span class="badge bg-secondary text-white">ADH Group</span> 
                </div>
                
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="image_wrap h-100">
                        <img src="{{ asset($sections[$domain]['side_image']) }}" alt="{{ $sections[$domain]['title'] }}" style="border-radius: 2%">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <h2 class="heading_text mb-4">
                        {{ $sections[$domain]['heading'] }}
                    </h2>
                    <p class="heading_description mb-0">
                        {{ $sections[$domain]['description'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Section - End -->

<!-- Services/Features Section - Start -->
<section class="policy_section bg-light pb-5">
    <div class="container">
        <div class="heading_block text-center mb-5">
            <h2 class="heading_text">{{ $sections[$domain]['services_title'] }}</h2>
        </div>
        
        <div class="row">
            @foreach($sections[$domain]['features'] as $feature)
            <div class="col-lg-4 mb-4">
                <div class="iconbox_block h-100 d-flex flex-column">
                    <div class="iconbox_icon {{ $feature['icon_bg'] ?? '' }}">
                        <img src="{{ asset($feature['icon']) }}" alt="{{ $feature['title'] }}">
                    </div>
                    <div class="iconbox_content flex-grow-1">
                        <h3 class="iconbox_title">{{ $feature['title'] }}</h3>
                        <p class="mb-0">{{ $feature['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Services/Features Section - End -->

<!-- Detailed Services Section - Start -->
<section class="service_section section_space bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="image_wrap">
                    <img src="{{ asset($sections[$domain]['detail_image']) }}" alt="{{ $sections[$domain]['title'] }}" style="border-radius: 5%;">
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="ps-lg-5">
                    <div class="heading_block mb-4">
                        <h2 class="heading_text mb-0">
                            {{ $sections[$domain]['offerings_title'] }}
                        </h2>
                    </div>
                    
                    <ul class="service_facilities_group unordered_list">
                        @foreach($sections[$domain]['offerings'] as $offering)
                        <li>
                            <div class="iconbox_block layout_icon_left">
                                <span class="iconbox_icon">
                                    <img src="{{ asset($offering['icon']) }}" alt="{{ $offering['title'] }}">
                                </span>
                                <span class="iconbox_content">
                                    <strong class="iconbox_title mb-0">{{ $offering['title'] }}</strong>
                                    @if(isset($offering['description']))
                                    <p class="mb-0 mt-2">{{ $offering['description'] }}</p>
                                    @endif
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detailed Services Section - End -->

<!-- CTA Section - Start -->
<section class="section_space bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-3">{{ $sections[$domain]['cta_title'] }}</h2>
                <p class="text-white mb-0">{{ $sections[$domain]['cta_description'] }}</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                    Démarrer un projet
                    <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section - End -->

@endsection

@push('styles')
<style>
.page_banner_section {
    padding: 120px 0 80px;
}
.iconbox_icon img {
    width: 60px;
    height: 60px;
}
.service_facilities_group .iconbox_icon img {
    width: 40px;
    height: 40px;
}
</style>
@endpush