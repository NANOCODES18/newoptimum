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
                        <p class="sub-heading">Our Services</p>
                        <h1 class="banner-heading">We are experts in financial services</h1>
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



<div class="section section-x section-services tc-grey-alt" style='padding-bottom: 10px;'>
    <div class="container">
                    <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6 order-lg-last offset-lg-1">
                <div class="image-block">
                    <img src="serv/8.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5">
                <div class="text-block">
                    <h3>Forex Trading</h3>
                    <p>Forex is a portmanteau of foreign currency and exchange. Foreign exchange is the process of
                                                    changing one currency into another currency for a variety of reasons,
                                                    usually for commerce, trading, or tourism. According to a recent triennial report...</p>
                                                <a href="{{route('forextrading')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div>

                    <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6">
                <div class="image-block">
                    <img src="serv/5.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5 offset-lg-1">
                <div class="text-block">
                    <h3>Real Estate Investments</h3>
                    <p>Real estate investments involves the purchase, ownership, management, rental and/or sale of real estate for profit.
                                                    Improvement of realty property as part of a real estate investment strategy is generally considered to be a
                                                    sub-specialty of real estate investing...</p>
                                                <a href="{{route('realestate')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div>

                    <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6 order-lg-last offset-lg-1">
                <div class="image-block">
                    <img src="serv/9.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5">
                <div class="text-block">
                    <h3>Gold Investments</h3>
                    <p>Commonly seen as a great store of wealth, this precious metal is also known as a reliable safe-haven asset.
                                                    With a rich history amongst almost all global cultures, gold remains a highly popular...</p>
                                                <a href="{{route('goldinvestment')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div>

        <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6">
                <div class="image-block">
                    <img src="serv/1.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5 offset-lg-1">
                <div class="text-block">
                    <h3>Retirement Planning</h3>
                    <p>Saving for retirement can be a daunting task, but with a sound strategy, it’s well within reach. Finvestrade  is here to
                        bring clarity to retirement... </p>
                    <a href="{{route('retirement')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
        <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6 order-lg-last offset-lg-1">
                <div class="image-block">
                    <img src="serv/2.png" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5">
                <div class="text-block">
                    <h3>Medical Cannabis</h3>
                    <p>For many years we have been working conscientiously
                        and with the most diverse technologies and means. We have constantly
                        successfully completed our projects...</p>
                    <a href="{{route('cannabis')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
        <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6">
                <div class="image-block">
                    <img src="serv/3.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5 offset-lg-1">
                <div class="text-block">
                    <h3>Cryptocurrencies</h3>
                    <p>
                                                Finvestrade  now offers all traders the opportunity to trade a wide range of the top ranked digital
                        coins 24/7*. Today cryptocurrencies have become known to most people...
                                                </p>
                    <a href="{{route('crypto')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
        <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6 order-lg-last offset-lg-1">
                <div class="image-block">
                    <img src="serv/4.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5">
                <div class="text-block">
                    <h3>Financial Planning</h3>
                    <p>A financial plan is a comprehensive evaluation of an investor’s current and future financial state by using
                        currently known variables to predict future cash flows, asset values and withdrawal...</p>
                                                <a href="{{route('finacialplaning')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->

                        <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6">
                <div class="image-block">
                    <img src="serv/6.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5 offset-lg-1">
                <div class="text-block">
                    <h3>Oil and Gas</h3>
                    <p>
                                                Surprising as it might be, anyone can invest in the oil market to make a profit.
                    Indeed, the development of online trading platforms has allowed individuals to use their
                    savings to speculate on rising or falling oil prices...
                                                </p>
                    <a href="{{route('oilandgas')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div>

                        <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6 order-lg-last offset-lg-1">
                <div class="image-block">
                    <img src="serv/7.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5">
                <div class="text-block">
                    <h3>Loans and Grants</h3>
                    <p>Getting a loan doesn’t have to be intimidating, with the right lender it can be
                       a simple process. You only need a lender committed to taking the mystery out of the mortgage loan
                       process...</p>
                                                <a href="{{route('loansandgrant')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div>


                        <div class="row align-items-center gutter-vr-30px">
            <div class="col-lg-6">
                <div class="image-block">
                                            <img src="serv/stock.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-5 offset-lg-1">
                <div class="text-block">
                    <h3>Stock or Share</h3>
                    <p>
                                                A stock or share (also known as a company's "equity") is a
                                        financial instrument that represents ownership in a company or corporation
                                        and represents a proportionate claim on its assets (what it owns)
                                        and earnings...
                                                </p>
                    <a href="{{route('stocks')}}" class="btn">Read More</a>
                </div>
            </div><!-- .col -->
        </div>


    </div><!-- .container -->
</div>



<!-- END SECTION BLOG -->

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
