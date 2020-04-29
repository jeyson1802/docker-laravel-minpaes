@extends('layouts.app')

@section('title', '404')

@section('content')

<!-- NOT FOUND SECTION STARTS -->
<section class="not-found display-flex-column justify-content-center default-section-spacing">

<div class="not-found__cover"></div>

<div class="container">

  <div class="row justify-content-end">

    <div class="flex-lg-6">

      <div class="not-found__content text-center">

        <h1>404 - Page not found</h1>

        <p class="leading">You seem lost but don't fear because Jesus is <span class="bold">the Way</span>,
          <span class="bold">the Truth</span>, and <span class="bold">the Life</span>.</p>

        <p>The page you are looking for can't be found! Check for misspelling and try again or contact us.</p>

        <a href="contact.html" class="button">Contact us</a>

      </div>

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</div><!-- .container ends -->

</section><!-- .not-found ends -->
<!-- NOT FOUND SECTION ENDS -->

@endsection
@push('scripts')

<!-- PENDIENTE AGREGAR AL HEADER MEDIANTE JQUERY LA CLASE header "dark-text" -->

@endpush