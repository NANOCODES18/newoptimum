@extends("layouts.spacedcustomlayout")

@section("body")



<div class="banner banner-inner banner-s2 banner-s2-inner tc-light">
    <div class="banner-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-9">
                    <div class="banner-content">
                        <div class="line-animate">
                            <span class="line line-top"></span>
                            <span class="line line-right"></span>
                            <span class="line line-bottom"></span>
                            <span class="line line-left"></span>
                        </div>
                        <p class="sub-heading">Buy Digital Currency</p>
                        <h1 class="banner-heading">Where to Buy Bitcoin, Ethereum, Litecoin...</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-image">
            <img src="images/bg-a.jpg" alt="banner">
        </div>
    </div>
</div>


</header>
<!-- START SECTION BANNER -->

<div class="section section-x team tc-grey">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="section-head section-md">
                <h5 class="heading-xs dash dash-both">Our Trusted Partners</h5>
                <h2>Buy Digital Currency</h2>
            </div>
        </div>
    </div><!-- .row -->
    <div class="row justify-content-center gutter-vr-30px">
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                                            <a href="https://paxful.com/roots/buy-bitcoin" target="_blank">
                    <img src="images/exchenger-1.png" alt="">
                                            </a>
                </div>

            </div>
        </div><!-- .col -->
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                                            <a href="https://www.coinmama.com/" target="_blank">
                    <img src="images/exchenger-2.png" alt="">
                                            </a>
                </div>

            </div>
        </div><!-- .col -->
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                                            <a href="https://digatrade.com/" target="_blank">
                    <img src="images/exchenger-3.png" alt="">
                                            </a>
                </div>

            </div>
        </div><!-- .col -->
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                                            <a href="https://24xbtc.com/" target="_blank">
                    <img src="images/exchenger-4.png" alt="">
                                            </a>
                </div>

            </div>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->
</div>


<!-- code -->

<!-- end code -->
<!-- section / cta-->
<div class="section section-cta bg-primary tc-light">
<div class="container">
    <div class="row gutter-vr-30px align-items-center justify-content-between">
        <div class="col-lg-8 text-center text-lg-left">
            <div class="cta-text-s2">
                <h2><span>Start your journey to</span> <strong> Financial freedom </strong></h2>
            </div>
        </div>
        <div class="col-lg-4 text-lg-right text-center">
            <div class="cta-btn">
                <a href="{{route('register')}}" class="btn btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
