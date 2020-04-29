@extends('layouts.app')

@section('title', 'Ense&ntilde;nzas')

@section('content')

<!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Sermons</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugit</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="index.html">Home</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Sermons</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->


<!-- ALL SERMONS SECTION STARTS -->
<div class="all-sermons default-section-spacing">

  <div class="container">

    <div class="section-heading text-center no-margin">
      <span>Sermons</span>
      <h2>Our sermons</h2>
    </div><!-- .section-heading ends -->

    <div class="search search-header default-section-spacing">

      <div class="row">

        <div class="flex-md-3 flex-lg-4">

          <div class="search__result">
            <div class="text leading uppercase bold">Results</div>
            <p>Showing 6 out of 24 sermons</p>
          </div>

        </div><!-- .flex-* ends -->

        <div class="flex-md-9 flex-lg-8">

          <div class="search__search">
            <div class="text leading uppercase bold">Search</div>
          </div>

          <form method="" action="#" class="form search__form">

            <div class="display-flex">

              <div class="form__group">

                <input type="text" class="form__input" placeholder="Search for sermons...">

              </div><!-- .form__group ends -->

              <div>
                <button type="submit" class="button">Search</button>
              </div>

            </div><!-- .display-flex ends -->

          </form><!-- .form ends -->

        </div><!-- .flex-* ends -->

      </div><!-- .row ends -->

    </div>

    <div class="all-sermons__sermons">

      <div class="row">

        <div class="flex-md-6 flex-lg-4 mar-b-sm">

          <div class="card sermon">

            <div class="card__header">
              <img src="images/sermon-1@1.5x.jpg" alt="A man reading the Holy Bible"
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
                <div class="excerpt">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum, aperiam iste sit
                    tempore
                    consequuntur voluptates quaerat animi molestias doloribus nobis numquam amet inventore nihil
                    autem
                    praesentium libero laudantium...</p>
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

        <div class="flex-md-6 flex-lg-4 mar-b-sm">

          <div class="card sermon">

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

                <div class="excerpt">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum, aperiam iste sit
                    tempore
                    consequuntur voluptates quaerat animi molestias doloribus nobis numquam amet inventore nihil
                    autem
                    praesentium libero laudantium...</p>
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

        <div class="flex-md-6 flex-lg-4 mar-b-sm">

          <div class="card sermon">

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

                <div class="excerpt">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum, aperiam iste sit
                    tempore
                    consequuntur voluptates quaerat animi molestias doloribus nobis numquam amet inventore nihil
                    autem
                    praesentium libero laudantium...</p>
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

        <div class="flex-md-6 flex-lg-4">

          <div class="card sermon">

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

                <div class="excerpt">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum, aperiam iste sit
                    tempore
                    consequuntur voluptates quaerat animi molestias doloribus nobis numquam amet inventore nihil
                    autem
                    praesentium libero laudantium...</p>
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

        <div class="flex-md-6 flex-lg-4">

          <div class="card sermon">

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

                <div class="excerpt">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum, aperiam iste sit
                    tempore
                    consequuntur voluptates quaerat animi molestias doloribus nobis numquam amet inventore nihil
                    autem
                    praesentium libero laudantium...</p>
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

        <div class="flex-md-6 flex-lg-4">

          <div class="card sermon">

            <div class="card__header">
              <img src="images/sermon-6@1.5x.jpg" alt="" class="card__image sermon__image">
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
                  <h3>Understanding the Bible and its prophecies</h3>
                </div>

                <div class="excerpt">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum, aperiam iste sit
                    tempore
                    consequuntur voluptates quaerat animi molestias doloribus nobis numquam amet inventore nihil
                    autem
                    praesentium libero laudantium...</p>
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

      </div><!-- .row ends -->

    </div><!-- .all-sermons__sermons ends -->

    <div class="pagination">

      <span class="pagination__arrow"><a href=""><i class="ri-arrow-left-s-line"></i></a></span>
      <span class="pagination__number"><a href="">1</a></span>
      <span class="pagination__number active"><a href="">2</a></span>
      <span class="pagination__number"><a href="">3</a></span>
      <span class="pagination__arrow"><a href=""><i class="ri-arrow-right-s-line"></i></a></span>

    </div><!-- .pagination ends -->

  </div><!-- .container ends -->

</div><!-- .all-sermons ends -->
<!-- ALL SERMONS SECTION ENDS -->


@endsection

@push('scripts')
    
@endpush