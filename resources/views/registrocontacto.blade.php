@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

 <!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Acerca de Nosotros</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugit</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="index.html">Inicio</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Nosotros</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->


 <!-- CONTACT FORM STARTS -->
 <section class="contact default-section-spacing">

  <div class="container">

    <form action="" method="" class="form contact__form">

      <div class="row">

        <div class="flex-md-6">

          <div class="form__group">
            <label for="fname" class="form__label">Your first name <span class="color-danger">*</span></label>
            <input type="text" id="fname" class="form__input" name="fname" placeholder="Enter your full name">
          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-6 mar-b-sm">

          <div class="form__group">
            <label for="email-2" class="form__label">Your email address <span
                class="color-danger">*</span></label>
            <input type="email" id="email-2" class="form__input" name="email"
              placeholder="Enter your email address">
          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-12 mar-b-sm">

          <div class="form__group">
            <label for="subject" class="form__label">Subject <span class="color-danger">*</span></label>
            <input type="text" id="subject" class="form__input" name="subject" placeholder="Enter your subject">
          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-12 mar-b-sm">

          <div class="form__group">
            <label for="message-2" class="form__label">Message <span class="color-danger">*</span></label>
            <textarea name="message" id="message-2" class="form__textarea form__input"
              placeholder="Enter your message..."></textarea>
          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-12 mar-b-sm">

          <button class="button" type="submit" name="submit">Send message</button>

        </div><!-- .flex-* ends -->



      </div><!-- .row ends -->

    </form><!-- .form ends -->

  </div><!-- .container ends -->

</section><!-- .contact ends -->
<!-- CONTACT FORM ENDS -->

@endsection

@push('scripts')
    
@endpush