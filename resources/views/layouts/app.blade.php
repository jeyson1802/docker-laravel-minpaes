<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS -->
    <link href="dist/css/main.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>@yield('title')</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

</head>

<body>

    <div class="page-loader">
      <div class="loader"><img src="images/logo-sm.svg" alt=""></div>
    </div>

    <!-- =================== SITE HEADER BEGINS ============================= -->

    <header class="header transparent fixed light-text" data-onscroll-classes="dark-text white-bg"
      data-onscroll-logo="images/logo-dark.png">

      <div class="container">

        <nav class="header__nav bottom-nav">

          <div class="header__logo brand--logo">
            <a href="./"><img src="images/logo-light.png" alt="MINPAES - Ministerio a las Naciones para Arrepentimiento y Santidad"></a>
          </div>

          <div class="header__mobile--opener hide-on-lg">
            <button class="header__mobile--icon" aria-expanded="false" aria-controls="mobile-menu"
              data-toggle="mobile-menu">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </button>
          </div>

          <ul class="header__navitems show-on-lg" id="mobile-menu">

            <!-- Contains donation button for mobile and tablet devices -->
            <div class="header__extra">
              <div class="cta">
                <a href="donations.html" class="button button-block-sm">Petici&oacute;n de Oraci&oacute;n</a>
              </div>
            </div><!-- .header__extra ends -->

            <li id="li-inicio" class="header__list active"><a href="./">Inicio</a></li>

            <li id="li-nosotros" class="header__list"><a href="{{ url('nosotros') }}">Nosotros</a></li>

            <li id="li-ensenanzas" class="header__list"><a href="{{ url('ensenanzas') }}">Ense&ntilde;anzas</a></li>

            <li id="li-galeria" class="header__list"><a href="{{ url('galeria') }}">Galeria</a></li>

            <li id="li-radio" class="header__list"><a href="{{ url('radio') }}">Radio</a></li>

            <li id="li-registrocontacto" class="header__list"><a href="{{ url('registrocontacto') }}">Contacto</a></li>            

          </ul><!-- .header__navitems ends -->

          <!-- Contains Shopping cart and donation button -->
          <div class="header__extra desktop-version">
            <div class="cta hide-on-sm show-on-lg">
              <a href="{{ url('registrooracion') }}" class="button">Petici&oacute;n de Oraci&oacute;n</a>
            </div>
          </div><!-- .header__extra ends -->

        </nav><!-- .header__nav ends -->

      </div><!-- .container ends -->

    </header><!-- .header ends -->

    <!-- =================== SITE HEADER ENDS ============================= -->
    <!--
    ========================================================
                            CONTENT
    ========================================================
    -->
    <main>

      @yield('content')

      <!-- TIME AND LOCATION STARTS -->
      <section class="time-location">

      <div class="container">

        <div class="row">

          <div class="flex-lg-6">

            <div class="time-location__content default-section-spacing">

              <div class="section-heading">
                <span>Hora y lugar</span>
                <h2>Ven y adora con nosotros</h2>
              </div><!-- .section-heading ends -->

              <div class="time-location__time">

                <div class="info">
                  <div class="day bold">Domingo:</div>
                  <div class="time">
                    <span>09:00 am - 11:00 am (servicio de la mañana)</span>
                    <span>06:00 pm - 08:00 pm (servicio de la noche)</span>
                  </div>
                </div>

                <div class="info">
                  <div class="location bold">Ubicaci&oacute;n:</div>
                  <div class="location-info"><span>Avenida Manuel Olguin 211 - Santiago de Surco</span></div>
                </div>

              </div><!-- .time-location__time ends -->

            </div>

          </div><!-- .flex-* ends -->

        </div><!-- .row ends -->

      </div><!-- .container ends -->

      <div class="time-location__map"><iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.3469635045216!2d-76.9735144708194!3d-12.085578688084414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7adaad1d09d%3A0xb720f2d7088ba893!2sEdificio%20Omega!5e0!3m2!1ses-419!2spe!4v1588098596861!5m2!1ses-419!2spe"
          frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>


      </section><!-- .time-location ends -->

    </main>
    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- SCROLL BACK TO TOP BEGINS -->
    <div class="scroll-to-top"><i class="ri-arrow-up-line"></i></div>
    <!-- SCROLL BACK TO TOP ENDS -->


    <!-- =================== SITE FOOTER BEGINS ============================= -->

    <footer class="footer">

      <div class="container">

        <div class="footer__top display-flex justify-align-center">

          <div class="footer__logo">
            <div class="logo-wrapper">
              <img src="images/logo-sm.svg" alt="Small logo">
            </div>
          </div>

        </div><!-- .footer__top ends -->

        <div class="footer__bottom">

          <div class="row align-items-center">

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info copyright">&copy; 2020 - MINPAES - Todos los derechos reservados</div>

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info credit">Web diseñada y desarrollada por MINPAES</div>

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info social">
                <span>S&iacute;guenos en las redes sociales</span>
                <div class="social__icons">
                  <a href="fb://page/ministeriopalabrayespiritu"><i class="ri-facebook-line"></i></a>
                  <a href=""><i class="ri-youtube-line"></i></a>
                  <a href=""><i class="ri-instagram-line"></i></a>
                </div>
              </div>

            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .footer__top ends -->

      </div><!-- .container ends -->

    </footer><!-- footer ends -->

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- loading in JQuery locally if CDN failed -->
    <script>window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
    <!-- Owl Carousel script -->
    <script src="js/plugins/owl.carousel.js"></script>
    <!-- JQuery Validator script -->
    <script src="js/plugins/jquery.validate.js"></script>
    <!-- JQuery Credit Card script -->
    <script src="js/plugins/jquery.card.js"></script>
    <!-- Animate On Scroll script -->
    <script src="js/plugins/aos.js"></script>
    <!-- Lightbox script -->
    <script src="js/plugins/lightbox.min.js"></script>
    <!-- Main (custom) script -->
    <script src="dist/js/main.min.js"></script>

    @stack('scripts')

</body>
</html>