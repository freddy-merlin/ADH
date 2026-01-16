@extends('layouts.app')

@section('title', $sections[$domain]['title'] . ' - ADH Group')
@section('description', $sections[$domain]['subtitle'])
@section('keywords', 'ADH Group, ' . $domain . ', Solutions digitales, Afrique')

@section('content')

<!-- Page Banner Section - Start -->
<section class="page_banner_section text-center" style="background-image: url('{{ asset('images/shapes/bg_pattern_4.svg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="page_title mb-3 text-white">{{ $sections[$domain]['title'] }}</h1>
                <p class="text-white fs-5 mb-0">{{ $sections[$domain]['subtitle'] }}</p>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner Section - End -->

<!-- Introduction Section - Start -->
<section class="section_space bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="heading_block">
                    <div class="heading_focus_text mb-3">
                        {{ $sections[$domain]['focus_label'] }}
                        <span class="badge bg-secondary text-white">ADH Group</span>
                    </div>
                    <h2 class="heading_text mb-4">{{ $sections[$domain]['heading'] }}</h2>
                    <div class="heading_description">
                        {!! nl2br(e($sections[$domain]['description'])) !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image_wrap">
                    <img src="{{ asset($sections[$domain]['hero_image']) }}" alt="{{ $sections[$domain]['title'] }}" style="border-radius: 2%; width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Introduction Section - End -->

<!-- Objectifs Section - Start -->
<section class="section_space bg-white">
    <div class="container">
        <div class="heading_block text-center mb-5">
            <h2 class="heading_text"> Objectifs</h2>
        </div>
        <div class="row">
            @foreach($sections[$domain]['objectifs'] as $objectif)
            <div class="col-lg-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="fa-solid fa-circle-check text-primary me-3 mt-1 fs-5"></i>
                    <p class="mb-0">{{ $objectif }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Objectifs Section - End -->

<!-- Bénéfices Section - Start -->
<section class="section_space bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="heading_block">
                    <h2 class="heading_text mb-3"> Bénéfices pour le client</h2>
                    <p class="text-muted">Nos solutions vous apportent des avantages concrets et mesurables pour votre organisation.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    @foreach($sections[$domain]['benefices'] as $benefice)
                    <div class="col-12 mb-3">
                        <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm">
                            <div class="iconbox_icon bg-primary-subtle me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-check text-primary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0"><strong>{{ $benefice }}</strong></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bénéfices Section - End -->

<!-- Domaines d'intervention - Start -->
<section class="section_space bg-white">
    <div class="container">
        <div class="heading_block text-center mb-5">
            <h2 class="heading_text">{{ $sections[$domain]['domaines_title'] }}</h2>
            <p class="text-muted fs-5">Notre expertise couvre plusieurs aspects essentiels pour votre succès</p>
        </div>
        
        <div class="row g-4">
            @foreach($sections[$domain]['domaines'] as $index => $domaine)
            <div class="col-12 mb-5">
                <!-- Domain Header with Numbering -->
                <div class="d-flex align-items-center mb-4">
                    <div class="domain-number me-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem; font-weight: bold;">
                            0{{ $index + 1 }}
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="heading_text mb-2">{{ $domaine['titre'] }}</h3>
                        <div class="domain-line" style="height: 3px; width: 80px; background: linear-gradient(90deg, #0044EB, #0066cc);"></div>
                    </div>
                </div>
                
                <!-- Domain Content with Cards -->
                <div class="row g-3">
                    @foreach(array_chunk($domaine['items'], 2) as $chunk)
                    <div class="col-lg-6">
                        @foreach($chunk as $item)
                        <div class="domain-item-card mb-3">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3 border-start border-4 border-primary shadow-sm-hover">
                                <div class="icon-wrapper me-3 flex-shrink-0">
                                    <i class="fa-solid fa-arrow-right text-primary"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-medium">{{ $item }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                
                <!-- Decorative Element -->
                @if(!$loop->last)
                <div class="text-center mt-4">
                    <div class="d-inline-block px-4 py-2 bg-primary-subtle rounded-pill">
                        <i class="fa-solid fa-chevron-down text-primary"></i>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Domaines d'intervention - End -->

<!-- Livrables Section - Start -->
<section class="section_space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="heading_block">
                    <h2 class="heading_text mb-4"> Livrables</h2>
                    <ul class="ps-4">
                        @foreach($sections[$domain]['livrables'] as $livrable)
                        <li class="mb-3">{{ $livrable }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heading_block">
                    <h2 class="heading_text mb-4"> Méthodologie</h2>
                    <ul class="ps-4">
                        @foreach($sections[$domain]['methodologie'] as $etape)
                        <li class="mb-3">{{ $etape }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Livrables Section - End -->

<!-- Cas d'usage Section - Start -->
<section class="section_space bg-white">
    <div class="container">
        <div class="heading_block text-center mb-5">
            <h2 class="heading_text"> Cas d'usage typiques</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($sections[$domain]['cas_usage'] as $cas)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="iconbox_block h-100 text-center">
                    <div class="iconbox_icon bg-primary-subtle mx-auto mb-3">
                        <i class="fa-solid fa-briefcase text-primary"></i>
                    </div>
                    <div class="iconbox_content">
                        <h4 class="iconbox_title">{{ $cas }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Cas d'usage Section - End -->

@if(isset($sections[$domain]['section_supplementaire']))
<!-- Section supplémentaire - Start -->
<section class="section_space bg-light">
    <div class="container">
        <div class="heading_block text-center mb-5">
            <h2 class="heading_text">{{ $sections[$domain]['section_supplementaire']['titre'] }}</h2>
        </div>
        <div class="row">
            @foreach($sections[$domain]['section_supplementaire']['items'] as $item)
            <div class="col-lg-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="fa-solid fa-shield-halved text-primary me-3 mt-1 fs-5"></i>
                    <p class="mb-0">{{ $item }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Section supplémentaire - End -->
@endif

<!-- CTA Section - Start -->
<div class="section_space bg-light">
    <section class="section_space col-lg-8 mx-auto" style="background: linear-gradient(135deg, #0066cc 10%, #0044EB 90%); margin-bottom: 3em; border-radius: 10px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white mb-3">{{ $sections[$domain]['cta_title'] }}</h2>
                    <p class="text-white fs-5 mb-0">{{ $sections[$domain]['cta_description'] }}</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-primary" style="background: white; color:#0044EB" href="{{ route('contactprojet') }}">
                        <span class="btn_label" data-text="Démarrer un projet">Démarrer un projet</span>
                        <span class="btn_icon">
                            <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- CTA Section - End -->

@endsection

@push('styles')
<style>
.page_banner_section {
    padding: 120px 0 80px;
}

.iconbox_icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.iconbox_icon i {
    font-size: 2rem;
}

.service_facilities_group .iconbox_icon img {
    width: 30px;
    height: 30px;
}

/* Domaines d'intervention - Styles améliorés */
.domain-item-card .icon-wrapper {
    width: 36px;
    height: 36px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(0, 68, 235, 0.15);
}

.domain-item-card .shadow-sm-hover {
    transition: all 0.3s ease;
}

.domain-item-card .shadow-sm-hover:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1) !important;
}

.domain-number {
    transition: transform 0.3s ease;
}

.domain-number:hover {
    transform: scale(1.05);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .domain-item-card {
        margin-bottom: 1rem;
    }
    
    .domain-number {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
}
</style>
@endpush