@extends('layouts.ensenanza')

@section('title', 'Ense&ntilde;anzas - MINPAES')

@section('content')

 <!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Ense&ntilde;anzas</h1>
        <p>Understanding God's Grace and Justice</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="../../">Inicio</a></div>
        <span></span>
        <div><a href="{{ url('ensenanzas') }}">Ense&ntilde;anzas</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Understanding God's Grace and Justice</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->


<!-- SINGLE SERMONS SECTION STARTS -->
<div class="single sermons-single default-section-spacing">

<div class="container">

  <div class="row">

    <div class="flex-lg-8">

      <div class="single__content">

        <div class="card single__featured--image no-padding">
          <img src="../../images/single.jpg" alt="A man praying" class="card__image">
        </div><!-- .card ends -->

        <div class="single__metas sermons-single__metas">

          <div class="row align-items-center">

            <div class="flex-md-7 flex-lg-8">

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
                  <h2>Understanding God's Grace and Justice</h2>
                </div>
              </div><!-- .sermon__content ends -->

            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .single__metas ends -->

        <div class="single__content--full">

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequuntur nulla voluptate quas
            excepturi aliquam mollitia aut veniam voluptates suscipit error voluptatibus deserunt, blanditiis
            necessitatibus dolorem aspernatur rerum unde similique ab praesentium? Sint minus repellendus vitae
            dignissimos autem nostrum quisquam nemo officia, facere, explicabo perferendis fugiat excepturi.
            Consequatur repellendus temporibus molestiae esse blanditiis id, voluptate explicabo inventore quo
            at libero illo? Omnis libero delectus voluptatem ullam modi provident, quae non obcaecati unde quam!
            Ducimus accusantium cum sed eaque ad ut possimus nemo tempore animi est, architecto quod nesciunt
            magni. Commodi corporis animi facilis, adipisci error ullam voluptates beatae tenetur totam?</p>
          <p>Odio laborum unde voluptatum facilis quam consequuntur ut adipisci id, accusantium vel perspiciatis
            sed suscipit excepturi nobis distinctio quos consectetur a. Recusandae, quaerat assumenda fuga et
            facilis consectetur, consequuntur nihil provident officiis at nemo rerum similique incidunt corrupti
            cum voluptates ex sequi magnam impedit reprehenderit tempora soluta! Nisi asperiores praesentium
            nostrum rerum laudantium debitis eligendi ad distinctio, tenetur dolorem ipsum fugit inventore
            perferendis, architecto earum. Necessitatibus voluptates modi optio ipsum odio, similique, at fugiat
            nemo voluptas id voluptatum possimus voluptatem qui esse beatae quaerat assumenda illo. Eligendi id
            sed dolorum, nobis voluptate ex in mollitia distinctio aut hic expedita veritatis.</p>

          <blockquote class="blockquote background-lighter-gray text-center">
            <h3 class="quote">"Trust in the LORD with all your heart, and do not lean on your own understanding.
              In all your
              ways acknowledge him,
              and he will make straight your paths."</h3>

            <span class="citation">- Proverbs 3:5-6 (ESV)</span>
          </blockquote>

          <h3>God's Grace is not a license to sin</h3>

          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel alias aperiam ut libero impedit
            distinctio perferendis expedita amet ratione similique commodi optio dolorem sequi, non dolores esse
            mollitia numquam saepe magni fugiat blanditiis iste aliquid. Sint voluptatibus sequi, quos ad error
            totam deleniti odio ipsam molestias alias non laborum molestiae.</p>
          <p>Sed repellendus vel accusantium debitis, cum dolor delectus sit odit numquam laudantium nihil nam
            in at? Fuga, veritatis suscipit itaque dolorem laboriosam impedit delectus fugit reprehenderit animi
            consectetur et eum quaerat consequuntur. Consectetur obcaecati suscipit debitis magnam quaerat,
            ullam totam sequi reprehenderit illo ipsum voluptates est officiis iste, libero reiciendis!</p>

        </div><!-- .single__content--full ends -->

      </div><!-- .single__content ends -->

    </div><!-- .flex-* ends -->

    <div class="flex-lg-4">

      <div class="sidebar">

        <div class="sidebar__widget">
          <div class="share">
            <span>Compartir</span>
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fminpaes.org" title="Facebook" target="_blank"><i class="ri-facebook-line"></i></a>
            <a href="https://api.whatsapp.com/send?text=http%3A%2F%2Fminpaes.org%2Fradio" title="Whatsapp" target="_blank"><i class="ri-whatsapp-line"></i></a>
            <a href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fminpaes.org&amp;text=MINPAES%3A%20MINPAES" title="Twitter" target="_blank"><i class="ri-twitter-line"></i></a>
            <a href="mailto:?subject=MINPAES%20&amp;body=http%3A%2F%2Fminpaes.org%0A%0AMINPAES" title="Email" target="_blank"><i class="ri-mail-line"></i></a>
          </div>
        </div><!-- .sidebar__widget ends -->

        <div class="sidebar__widget">

          <h3 class="sidebar__title">Tambi&eacute;n te puede interesar</h3>

          <div class="card custom-height sermon">

            <div class="card__header">
              <img src="../../images/sermon-1@1.5x.jpg" alt="A man reading the Holy Bible"
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
                  <h3>Loving Jesus with all your heart, mind, and soul</h3>
                </div>
              </div>

              <div class="sermon__link__single">
                <a href="sermons-single.html" class="button">Read more</a>
              </div>

            </div><!-- .card__footer ends -->

          </div><!-- .card ends -->

          <div class="card custom-height sermon">

            <div class="card__header">
              <img src="../../images/sermon-2@1.5x.jpg" alt="A man reading the Holy Bible"
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

              <div class="sermon__link__single">
                <a href="sermons-single.html" class="button">Read more</a>
              </div>

            </div><!-- .card__footer ends -->

          </div><!-- .card ends -->

          <div class="card custom-height sermon">

            <div class="card__header">
              <img src="../../images/sermon-3@1.5x.jpg" alt="" class="card__image sermon__image">
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

              <div class="sermon__link__single">
                <a href="sermons-single.html" class="button">Read more</a>
              </div>

            </div><!-- .card__footer ends -->

          </div><!-- .card ends -->

        </div><!-- .sidebar__widget ends -->

      </div><!-- .sidebar ends -->

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</div><!-- .container ends -->

</div><!-- .all-sermons ends -->
<!-- SINGLE SERMONS SECTION ENDS -->

@endsection

@push('scripts')
    
@endpush