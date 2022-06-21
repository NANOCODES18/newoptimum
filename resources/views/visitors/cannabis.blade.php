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
                        <h1 class="banner-heading">Cannabis Investments</h1>
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
                <img src="serv/2.png" alt="">
            </div>
        </div><!-- .col -->
        <div class="col-lg-5">
            <div class="text-block">
                <h5 class="heading-xs dash">Finvestrade </h5>
                <h2>Medical Cannabis</h2>
                <p class="lead">
                                        For many years we have been working conscientiously
                        and with the most diverse technologies and means. We have constantly
                        successfully completed our projects.
                                        </p>

                                        <p class="lead">
                                          We believe that the full benefits and potential of cannabis as a medical therapy are within our reach only
                            through supply chain transparency, an engaged and active network of cannabis users, and data that is consistently
                            available and verifiable for medical surveys and for developing and establishing therapies and life-prolonging
                            solutions and treatments on blockchain technology.
                            Our vision is one in which cannabis medical research gets the support it needs and deserves.

                                        </p>
            </div>
        </div><!-- .col -->
    </div><!-- .row -->
    <div class="gap gap-8x d-none d-lg-block"></div>
    <div class="row justify-content-center gutter-vr-30px">
        <div class="col-12">
            <div class="text-box service-box bg-secondary h-full">
                <h4 class="fw-6 mtm-5">Cannabis Goals</h4>

                                        <div class="wgs">
                <div class="wgs-content">
                    <ul class="wgs-menu">
                                                    <li><p>Understand the regulatory, legal, and technological needs and challenges of the medical cannabis industry</p></li><br>
                        <li><p>Continually advance the medical cannabis blockchain data ecosystem to medical studies</p></li><br>
                        <li><p>Establish strong vendor and partner relationships with technology firms, doctors, scientists, universities, and governments to ensure data integrity and value</p></li><br>
                        <li><p>Attract, hire, and retain highly qualified professionals to sell, manage, monitor, and service the various technological component parts and software systems required to support the ecosystem</p></li><br>
                        <li><p>Foster a social community online in which each member can participate freely and offer the breadth of their knowledge and experience</p></li><br>
                        <li><p>Provide a simple, secure, user-friendly global exchange platform for the stakeholders</p></li><br>
                        <li><p>Create billions of data points and hundreds of millions of dollars in transaction value</p></li><br>
                        <li><p>Establish supply-chain integrity</p></li>
                    </ul>
                </div>
            </div>
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
