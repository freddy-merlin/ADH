@extends('layouts.app')

@section('title', 'QR Code - ADH Group')

@section('content')
<section class="section_space bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="heading_block mb-5">
                    <h2 class="heading_text">Scannez notre QR Code</h2>
                    <p class="heading_description">
                        Partagez facilement notre site web en scannant ce QR code
                    </p>
                </div>
                
                <div class="qr-code-wrapper">
                    {!! QrCode::size(300)
                        ->backgroundColor(255, 255, 255)
                        ->color(0, 102, 204)
                        ->errorCorrection('H')
                        ->generate('https://adh-statique.onrender.com/index.html') !!}
                                    </div>
                
               <p class="mt-4 text-muted">https://adh-statique.onrender.com</p>
                
                <a href="{{ route('qrcode.download') }}" class="btn btn-primary mt-3">
                    <span class="btn_label" data-text="Télécharger le QR Code">Télécharger le QR Code</span>
                    <span class="btn_icon">
                        <i class="fa-solid fa-download"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.qr-code-wrapper {
    display: inline-block;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.qr-code-wrapper svg {
    display: block;
}
</style>
@endpush