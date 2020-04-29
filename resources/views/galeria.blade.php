@extends('layouts.app')

@section('title', 'Ense&ntilde;nzas')

@section('content')

<!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Galeria</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugit</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="index.html">Inicio</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Galeria</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->

<!-- OUR GALLERY STARTS -->
<section class="our-gallery gallery gallery--equal-grid default-section-spacing text-center">

  <div class="section-heading">
    <span>Our gallery</span>
    <h2>Explore our church</h2>
  </div><!-- .section-heading ends -->

  <div class="row">

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-1@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Picture of the Holy Bible">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-1@1.5x.jpg" alt="Picture of the Holy Bible" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-2@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Picture of Jesus on a medal cross">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-2@1.5x.jpg" alt="Picture of Jesus on a medal cross" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-3@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Bible study">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-3@1.5x.jpg" alt="Bible study" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-4@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Inside of a church">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-4@1.5x.jpg" alt="Inside of a church" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-5@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Picture of people worshiping in church">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-5@1.5x.jpg" alt="Picture of people worshiping in church" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-6@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Picture of women laughing">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-6@1.5x.jpg" alt="Picture of women laughing" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-7@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Picture of a worship leader singing">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-7@1.5x.jpg" alt="Picture of a worship leader singing" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery-8@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Picture of a smart kid at school">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery-8@1.5x.jpg" alt="Picture of a smart kid at school" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</section><!-- .our-gallery ends -->
<!-- OUR GALLERY ENDS -->


@endsection

@push('scripts')
    
@endpush