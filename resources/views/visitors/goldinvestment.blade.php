@extends("layouts.spacedcustomlayout")

@section("body")



<div class="section section-x tc-grey-alt" style='padding-bottom: 10px;'>
    <div class="container">
        <div class="row justify-content-between align-items-center gutter-vr-30px">
            <div class="col-lg-4 order-lg-last">
                <div class="image-block">
                    <img src="serv/9.jpg" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-lg-8">
                <div class="text-block">
                    <h5 class="heading-xs dash">Finvestrade </h5>
                    <h2>Gold Investments</h2>
                    <p class="lead">
                                            Commonly seen as a great store of wealth, this precious metal is also
                                            known as a reliable safe-haven asset. With a rich history amongst almost all
                                            global cultures, gold remains a highly popular investment. Although it has
                                            multiple uses, its primary function is typically to hedge against inflation
                                            in an often volatile futures market, as well as to diversify existing
                                            Precious Metals Investment Retirement Accounts.
Gold has been one of the most valuable precious metals throughout human history, used by elites as a symbol of wealth
for centuries due to its rarity and its ability to hold its worth for a long time.

Historically, it has been the most common way to pass on one’s wealth as an inheritance from one generation to the next.
Gold is considered a worthy investment, with coins and bars available for purchase in various sizes, ranging from one
gram to a whopping 400 ounces. Being the most reliable investment commodity available, gold has proven to
be a perfect way to diversify your investment portfolio and an excellent safeguard against volatile currency.
                                            </p>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div>
</div>



<div class="project-area project-call section-m bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-lg-flex text-center text-lg-left align-items-center justify-content-between">
                            <h2 class="fw-4">Want to see more services? </h2>
                                                            <a href="{{route('services')}}" class="btn">See All Services</a>
                        </div>
                    </div>
                </div>
            </div>
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
