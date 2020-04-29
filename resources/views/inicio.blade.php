@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<!-- HERO SECTION STARTS -->
<section class="hero full-width">

  <div class="hero__carousel owl-carousel" id="hero-carousel">
    <!-- Homepage slider -->

    <div class="slide display-flex-column justify-align-center" id="first-slide">

      <div class="container">

        <div class="hero__content text-center">

          <span class="hero__intro">We are glad you are here</span>
          <h1>Welcome to Greater Love Church</h1>
          <p class="leading">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea veniam vitae
            repudiandae, reprehenderit ducimus at.</p>

          <div class="hero__cta">
            <a href="" class="button">Learn more</a>
          </div>

        </div><!-- .hero__content -->

      </div><!-- .container ends -->

    </div><!-- #first-slide ends -->

    <div class="slide display-flex-column justify-align-center" id="second-slide">

      <div class="container">

        <div class="hero__content text-center">

          <span class="hero__intro">We are glad you are here</span>
          <h1>Come fellowship with us</h1>
          <p class="leading">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea veniam vitae
            repudiandae,
            reprehenderit ducimus at.</p>

          <div class="hero__cta">
            <a href="" class="button">Learn more</a>
          </div>

        </div><!-- .hero__content -->

      </div><!-- .container ends -->

    </div><!-- #second-slide ends -->

  </div> <!-- #hero-carousel ends -->

</section><!-- .hero ends -->
<!-- HERO SECTION ENDS -->


<!-- SUMMARY SECTION STARTS -->
<section class="worship display-flex-column justify-content-center text-white">

  <div class="container">

    <div class="row justify-content-end">

      <div class="flex-lg-7">

        <div class="section-heading">
          <span>Worship</span>
          <h2>We love worshiping and will love to have you join</h2>
        </div><!-- .section-heading ends -->

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis libero quas maiores deserunt quasi
          repudiandae ex necessitatibus reiciendis eum labore tenetur quibusdam quam, modi ad alias cum cupiditate
          consectetur ratione, atque eos, doloremque accusamus quod architecto animi? Nisi, magnam. Recusandae
          commodi ratione sapiente nam reprehenderit?</p>
        <p>Placeat vel quasi accusantium quidem perspiciatis quisquam ipsam dolores totam voluptas vitae maiores
          eum tempora nostrum obcaecati voluptatibus, blanditiis sint voluptatum delectus. Reprehenderit,
          voluptates corporis aliquam tempore minus voluptas! Necessitatibus nesciunt eum quia omnis ut hic alias
          facilis laborum, at dolorem nemo! Aspernatur, earum culpa.</p>
        <p>Expedita vitae ab nemo dolor at, necessitatibus placeat porro reiciendis fugit mollitia. Numquam enim,
          reiciendis placeat mollitia, repellendus distinctio ducimus ipsa corrupti esse iste odit beatae
          consequuntur tempora error, inventore sapiente architecto. Sunt et ratione eaque distinctio vel, enim
          unde porro, quod ea, nemo placeat.</p>

      </div><!-- .flex-* ends -->

    </div><!-- .row ends -->

  </div><!-- .container ends -->

</section><!-- .worship ends -->
<!-- SUMMARY SECTION ENDS -->


<!-- OUR ENVIRONMENT SECTION STARTS -->
<section class="our-environment">

  <div class="our-environment__cover clip background-primary hide-on-sm show-on-lg"></div>

  <div class="container">

    <div class="row">

      <div class="flex-lg-8">

        <div class="our-environment__content default-section-spacing">

          <div class="our-environment__details">
            <div>
              <span><i class="ri-heart-2-line"></i></span>
            </div>
            <div>
              <h3>Christ-centered</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus laudantium perspiciatis
                reiciendis esse cum accusamus harum. Hic cupiditate perferendis adipisci!</p>
            </div>
          </div><!-- .our-environment__details ends -->

          <div class="our-environment__details">
            <div>
              <span><i class="ri-emotion-happy-line"></i></span>
            </div>
            <div>
              <h3>Friendly environment</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus laudantium perspiciatis
                reiciendis esse cum accusamus harum. Hic cupiditate perferendis adipisci!</p>
            </div>
          </div><!-- .our-environment__details ends -->

          <div class="our-environment__details">
            <div>
              <span><i class="ri-shield-line"></i></span>
            </div>
            <div>
              <h3>Worship in safety and peace</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus laudantium perspiciatis
                reiciendis esse cum accusamus harum. Hic cupiditate perferendis adipisci!</p>
            </div>
          </div><!-- .our-environment__details ends -->

        </div><!-- .our-environment__content ends -->

      </div><!-- .flex-* ends -->

    </div><!-- .row ends -->

  </div><!-- .container ends -->

</section><!-- .our-environment ends -->
<!-- OUR ENVIRONMENT SECTION ENDS -->


<!-- LATEST SERMONS SECTION STARTS -->
<div class="latest-sermons background-lighter-gray">

  <div class="row no-margin">

    <div class="flex-lg-5 no-padding">

      <div class="card sermon">

        <div class="card__header">
          <img src="images/sermon-1@1.5x.jpg" alt="A man reading the Holy Bible"
            class="card__image sermon__image">
        </div><!-- .card__header ends -->

        <div class="card__footer">

          <div class="sermon__metas">
            <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i> <span>02/28/2020</span>
            </div>
            <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Erik B.
                Hogan</span>
            </div>
          </div><!-- .sermon__metas -->

          <div class="sermon__content">
            <div class="title">
              <h3>Loving Jesus with all your heart, mind, and soul</h3>
            </div>
            <div class="excerpt">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum, aperiam iste sit tempore
                consequuntur voluptates quaerat animi molestias doloribus nobis numquam amet inventore nihil autem
                praesentium libero laudantium. Possimus, maiores, eius ipsum beatae numquam nemo cum officiis,
                veniam quidem quibusdam impedit inventore rem. Hic ea eligendi voluptate commodi quo...</p>
            </div>
          </div>

          <div class="sermon__link">
            <a href="sermons-single.html" class="button">Read more</a>
          </div>

          <div class="sermon__download">
            <span class="text-white">Download</span>
            <a href=""><i class="ri-video-line"></i></a>
            <a href=""><i class="ri-headphone-line"></i></a>
            <a href=""><i class="ri-file-pdf-line"></i></a>
          </div>
        </div><!-- .card__footer ends -->

      </div><!-- .card ends -->

    </div><!-- .flex-* ends -->

    <div class="flex-lg-7">

      <div class="latest-sermons__sermons default-section-spacing">

        <div class="section-heading">
          <span>Sermons</span>
          <h2>Our latest sermons</h2>
        </div><!-- .section-heading ends -->

        <div class="row">

          <div class="flex-md-6 mar-b-sm">

            <div class="card custom-height sermon" data-aos="flip-down">

              <div class="card__header">
                <img src="images/sermon-2@1.5x.jpg" alt="A man reading the Holy Bible"
                  class="card__image sermon__image">
              </div><!-- .card__header ends -->

              <div class="card__footer">

                <div class="sermon__metas">
                  <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                    <span>02/28/2020</span>
                  </div>
                  <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Erik B.
                      Hogan</span>
                  </div>
                </div><!-- .sermon__metas -->

                <div class="sermon__content">
                  <div class="title">
                    <h3>Living the Christian life</h3>
                  </div>
                </div>

                <div class="sermon__link">
                  <a href="sermons-single.html" class="button">Read more</a>
                </div>

              </div><!-- .card__footer ends -->

            </div><!-- .card ends -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 mar-b-sm">

            <div class="card custom-height sermon" data-aos="flip-down" data-aos-delay="300">

              <div class="card__header">
                <img src="images/sermon-3@1.5x.jpg" alt="" class="card__image sermon__image">
              </div><!-- .card__header ends -->

              <div class="card__footer">

                <div class="sermon__metas">
                  <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                    <span>02/28/2020</span>
                  </div>
                  <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Erik B.
                      Hogan</span>
                  </div>
                </div><!-- .sermon__metas -->

                <div class="sermon__content">
                  <div class="title">
                    <h3>Jesus is the Hope and Future</h3>
                  </div>
                </div>

                <div class="sermon__link">
                  <a href="sermons-single.html" class="button">Read more</a>
                </div>

              </div><!-- .card__footer ends -->

            </div><!-- .card ends -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6">

            <div class="card custom-height sermon" data-aos="flip-down" data-aos-delay="350">

              <div class="card__header">
                <img src="images/sermon-5@1.5x.jpg" alt="" class="card__image sermon__image">
              </div><!-- .card__header ends -->

              <div class="card__footer">

                <div class="sermon__metas">
                  <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                    <span>02/28/2020</span>
                  </div>
                  <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Erik B.
                      Hogan</span>
                  </div>
                </div><!-- .sermon__metas -->

                <div class="sermon__content">
                  <div class="title">
                    <h3>Are you truly born again?</h3>
                  </div>
                </div>

                <div class="sermon__link">
                  <a href="sermons-single.html" class="button">Read more</a>
                </div>

              </div><!-- .card__footer ends -->

            </div><!-- .card ends -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6">

            <div class="card custom-height sermon" data-aos="flip-down" data-aos-delay="450">

              <div class="card__header">
                <img src="images/sermon-4@1.5x.jpg" alt="" class="card__image sermon__image">
              </div><!-- .card__header ends -->

              <div class="card__footer">

                <div class="sermon__metas">
                  <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                    <span>02/28/2020</span>
                  </div>
                  <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Erik B.
                      Hogan</span>
                  </div>
                </div><!-- .sermon__metas -->

                <div class="sermon__content">
                  <div class="title">
                    <h3>Understanding God's Grace and Justice</h3>
                  </div>
                </div>

                <div class="sermon__link">
                  <a href="sermons-single.html" class="button">Read more</a>
                </div>

              </div><!-- .card__footer ends -->

            </div><!-- .card ends -->

          </div><!-- .flex-* ends -->

        </div><!-- .row ends -->

      </div><!-- .latest-sermons__sermons ends -->

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</div><!-- .latest-sermons ends -->
<!-- LATEST SERMONS SECTION ENDS -->


<!-- OUR TESTIMONIALS SECTION STARTS -->
<section class="our-testimonial default-section-spacing">


  <div class="our-testimonial__content">

    <div class="container">

      <div class="section-heading text-white text-center">
        <span>Testimonials</span>
        <h2>What people are saying...</h2>
      </div><!-- .section-heading ends -->

      <div class="our-testimonial__carousel owl-carousel" id="our-testimonial">

        <div class="testimonial">

          <div class="testimonial__avatar">
            <div class="card card--picture card--square testimonial__user">

              <div class="card__header">
                <img src="images/user-1.jpg" alt="A man" class="card__image">
              </div><!-- .card__header ends -->

              <div class="card__footer">
                <div class="testimonial__author">George E. Pugh</div>
              </div><!-- .card__footer ends -->

            </div><!-- .card -->
          </div><!-- .testimonial__avatar ends -->

          <div class="testimonial__text text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque animi, magni nisi dolorum nam
            debitis atque doloremque iure eaque mollitia. Autem cum explicabo libero voluptatum, at suscipit
            officia, dolore, quia sed cumque repudiandae quo voluptas fugiat laudantium doloribus
            reprehenderit. Nulla harum perspiciatis recusandae ratione possimus.
          </div>

        </div><!-- .testimonial ends -->

        <div class="testimonial">

          <div class="testimonial__avatar">
            <div class="card card--picture card--square testimonial__user">

              <div class="card__header">
                <img src="images/user-3.jpg" alt="A woman" class="card__image">
              </div><!-- .card__header ends -->

              <div class="card__footer">
                <div class="testimonial__author">Nancy A. Austin</div>
              </div><!-- .card__footer ends -->

            </div><!-- .card -->
          </div><!-- .testimonial__avatar ends -->

          <div class="testimonial__text text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque animi, magni nisi dolorum nam
            debitis atque doloremque iure eaque mollitia. Autem cum explicabo libero voluptatum, at suscipit
            officia, dolore, quia sed cumque repudiandae quo voluptas fugiat laudantium doloribus
            reprehenderit. Nulla harum perspiciatis recusandae ratione possimus.
          </div>

        </div><!-- .testimonial ends -->

        <div class="testimonial">

          <div class="testimonial__avatar">
            <div class="card card--picture card--square testimonial__user">

              <div class="card__header">
                <img src="images/user-2.jpg" alt="A man" class="card__image">
              </div><!-- .card__header ends -->

              <div class="card__footer">
                <div class="testimonial__author">Joe K. Liley</div>
              </div><!-- .card__footer ends -->

            </div><!-- .card -->
          </div><!-- .testimonial__avatar ends -->

          <div class="testimonial__text text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque animi, magni nisi dolorum nam
            debitis atque doloremque iure eaque mollitia. Autem cum explicabo libero voluptatum, at suscipit
            officia, dolore, quia sed cumque repudiandae quo voluptas fugiat laudantium doloribus
            reprehenderit. Nulla harum perspiciatis recusandae ratione possimus.
          </div>

        </div><!-- .testimonial ends -->

      </div><!-- .our-testimonial__carousel ends -->

    </div><!-- .container ends -->

  </div><!-- .our-testimonial__content ends -->

</section><!-- .our-testimonial ends -->
<!-- OUR TESTIMONIALS SECTION ENDS -->


@endsection

@push('scripts')

@endpush