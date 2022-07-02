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
                        <h1 class="banner-heading">Retirement Planning</h1>
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




<div class="section section-x tc-grey-alt" style='padding-bottom: 10px;'>
<div class="container">
    <div class="row justify-content-between align-items-center gutter-vr-30px">
        <div class="col-lg-6 order-lg-last">
            <div class="image-block">
                <img src="serv/1.jpg" alt="">
            </div>
        </div><!-- .col -->
        <div class="col-lg-5">
            <div class="text-block">
                <h5 class="heading-xs dash">optimum-financials </h5>
                <h2>Workforce Optimization</h2>
                <p class="lead">
                                        Saving for retirement can be a daunting task, but with a sound strategy, it’s well within reach. optimum-financials  is here to
                        bring clarity to retirement
                        planning and set you on your path to success. Here you’ll better understand your options and find the right investment.

                                        </p>

                                        <p class="lead">
                                          If you had the chance to double—or even quadruple—your retirement savings, you’d probably jump at that opportunity,
                            right? Well, there’s one simple change you can make today that’s sure to boost your retirement savings.

                                        </p>
            </div>
        </div><!-- .col -->
    </div><!-- .row -->
    <div class="gap gap-8x d-none d-lg-block"></div>
    <div class="row justify-content-center gutter-vr-30px">
        <div class="col-12">
            <div class="text-box service-box bg-secondary h-full">
                <h4 class="fw-6 mtm-5">Quadruple Your Retirement Savings? Really?</h4>
                                        <p>
                                            optimum-financials  study of worldwide retirement saving habits
                        discovered that people with some kind of retirement plan have more than three times
                        as much in their nest egg than those with no plan at all.

And savers who take it one step further by working with an investing advisor to put their plan
to paper? Their average nest egg is a whopping 445% bigger than non-planners. That’s a big deal!

Now, did you catch that? By working with an advisor and by having a plan in place, you can supercharge
your retirement savings.

                                        </p>
            </div>
        </div>
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
