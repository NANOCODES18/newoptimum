@extends("layouts.spacedcustomlayout")


@section("body")

    <section class="blogfront">
        <nav class="navbar navbar-expand-lg sticky-top change" id="navbar" >
            <a class="navbar-brand" href="{{route('index')}}">
              <img src="./images/logo2send.png" alt="" width="220" height="102" style="object-fit: contain;">
              <!-- Finvestrade  script -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            @include('nav')
          </nav>

          <div class="overlay2"></div>

          <div class="text">
            <h1>Blog</h1>
          </div>

    </section>
    <section id="blog-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4><small>BLOG POSTS</small></h4>
           <a class="fx-widget" data-widget="newsfeed" data-lang="en" data-post-date-color="#999" data-post-description-color="#101010" data-post-title-color="#2318ed" data-widget-bg-color="#FFF" data-show-image data-width="650" data-height="855" data-show-date data-title-font-size="18" data-intro-font-size="16" data-category="news" data-section="all" data-base-url="https://www.fxempire.com" data-url="//www.fxempire.com" href="https://www.fxempire.com" rel="nofollow" style="font-family:Helvetica;font-size:16px;line-height:1.5;text-decoration:none;"> <span style="color:#999999;display:inline-block;margin-top:10px;font-size:12px;">Powered By </span> <img style="width:87px; height:14px;" src="https://www.fxempire.com/logo-full.svg" alt="FX Empire logo" /> </a> <script async charset="utf-8" src="https://widgets.fxempire.com/widget.js" ></script>
          </div>
          <div class="col-md-4">
              <div class="trending">
                <h3>TRENDING</h3>
                <!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here --> <script type="text/javascript" src="https://news.24-7pressrelease.com/247pr-news-widget.js?widgettitle=News Provided by Finvestrade  script&amp;categories=106,107,333,334,335,336,489,337,108,300,338,109,110,139,339,171,111,112,340,341,113,342,343,114,344,115,345,319,116,347,348,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=2d57a1&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=13&amp;width=auto&amp;headlinesepstyle=solid&amp;showimages=1&amp;numstories=5&amp;bgcolor=ffffff&amp;urldest=local"></script> <!-- 24-7 Press Release Newswire Landing Page Widget Code Ends Here -->

              </div>
              <div class="stocks">
                <h3>STOCKS</h3>
                <script src="https://www.cryptohopper.com/widgets/js/script"></script>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="fourth">
      <div class="container">
        <h2>News And Events</h2>
        <h6>Trading Stock Market News</h6>

        <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                @if (isset($news))
                @foreach ($news as $new)
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="storage/news/{{$new->newsimage}}">
                            <h5 class="card-title">{{$new->newstitle}}</h5>
                            <p class="card-text">{{$new->newscontent}}</p>
                            <a href="{{$new->newslink}}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
              </div>
              <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>

      </div>
    </section>
@endsection()
