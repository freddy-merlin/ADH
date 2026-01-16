@extends('layouts.app')

@section('title', 'À propos - ADH Group')
@section('description', 'Découvrez ADH Group, expert en solutions digitales en Afrique')
@section('keywords', 'ADH Group, Solutions digitales, Transformation numérique, Afrique')

@section('content')

 <main class="page_content">

  <!-- Page Banner Section - Start -->
  <section class="page_banner_section text-center" style="background-image: url('../images/shapes/bg_pattern_4.svg');">
    <div class="container">
      <h1 class="page_title mb-0 text-white">Nous Contacter</h1>
    </div>
  </section>
  <!-- Page Banner Section - End -->

  <!-- Contact Section - Start -->
  <section class="contact_section section_space bg-light">
    <div class="container">
      <div class="contact_info_box row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="iconbox_block h-100 text-center">
            <div class="iconbox_icon">
              <img src="{{ asset('images/icons/icon_map_mark_2.svg') }}" alt="Icône Localisation">
            </div>
            <div class="iconbox_content">
              <h3 class="iconbox_title">Localisation</h3>
              <p class="mb-0">
                Cotonou, Bénin
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="iconbox_block  h-100 text-center">
            <div class="iconbox_icon">
              <img src="{{ asset('images/icons/icon_calling_2.svg') }}" alt="Icône Téléphone">
            </div>
            <div class="iconbox_content">
              <h3 class="iconbox_title">Téléphone</h3>
              <p class="mb-0">+229 XX XX XX XX</p>
              <div class="mb-0">+229 XX XX XX XX</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="iconbox_block text-center">
            <div class="iconbox_icon">
              <img src="{{ asset('images/icons/icon_mail_3.svg') }}" alt="Icône Email">
            </div>
            <div class="iconbox_content">
              <h3 class="iconbox_title">Email</h3>
              <p class="mb-0">contact@adhgroup.com</p>
              <p class="mb-0">info@adhgroup.com</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="iconbox_block h-100 text-center">
            <div class="iconbox_icon">
              <img src="{{ asset('images/icons/icon_calendar_2.svg') }}" alt="Icône Calendrier">
            </div>
            <div class="iconbox_content">
              <h3 class="iconbox_title">Horaires</h3>
              <p class="mb-0">Lun - Ven : 8h00 - 18h00</p>
              <p class="mb-0">Sam : 8h00 - 13h00</p>
            </div>
          </div>
        </div>
      </div>

      <div class="section_space pb-0">
        <div class="row justify-content-lg-between">
          <div class="col-lg-7">
            <div class="contact_form mb-0">
              <h3 class="details_item_info_title mb-1">Envoyez-nous un message</h3>
              <p class="mb-5">
                Donnez-nous l'opportunité de vous servir et d'apporter de la magie à votre marque.
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="input_title" for="input_name">Nom complet
                    </label>
                    <input id="input_name" class="form-control" type="text" name="name" placeholder="Votre nom" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="input_title" for="input_email">Votre email
                    </label>
                    <input id="input_email" class="form-control" type="email" name="email" placeholder="exemple@email.com" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="input_title" for="input_phone">Votre téléphone</label>
                    <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="+229 XX XX XX XX">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="input_title" for="input_textarea">Message</label>
                    <textarea id="input_textarea" class="form-control" name="message" placeholder="Comment pouvons-nous vous aider ?"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    <span class="btn_label" data-text="Envoyer le message">Envoyer le message</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="gmap_canvas ps-lg-5">
              <iframe src="https://maps.google.com/maps?q=Cotonou,%20Benin&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section - End -->

  <!-- Call To Action Section - Start -->
 
  <!-- Call To Action Section - End -->

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