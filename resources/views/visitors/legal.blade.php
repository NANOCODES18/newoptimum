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
                        <p class="sub-heading">Legal Information</p>
                        <h1 class="banner-heading">Fidelity is our watchword</h1>
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
        <div class="col-lg-4 order-lg-last">
                            <a style="border: 1px solid #0047ab;" href="img/bit-1.pdf" class="btn-career btn-lg mb-20"><i class='fa fa-file-pdf-o'></i> Certificate of Incorporation <em class="ti-file"></em></a>
                            <a style="border: 1px solid #0047ab; background-color: #0047ab; color: #fff;" href="img/bit-2.pdf" class="btn-career btn-lg mb-20"><i class='fa fa-file-pdf-o'></i> Our Company Profile<em class="ti-file text-white"></em></a>
        </div>
        <div class="col-lg-8">
            <div class="text-block">
                <h5 class="heading-xs dash">Finvestrade </h5>
                <h2>Legal Information</h2>
                <p class="lead">
                                        Finvestrade  is one of the most reliable diversified financial investment service
                        provider in the world. Our fundamental mission is to help customers and clients achieve
                        their financial objectives. With offices located in the United Kingdom, Australia,Canada and
                        headquartered in United States, Finvestrade  have staffs with over 30 years’ experience in
                        combining financial development and trades. We are committed to pushing the boundaries of
                        what constitutes the highest standards in trades and asset management.
                                        </p>
            </div>
        </div><!-- .col -->
    </div><!-- .row -->
    <div class="gap gap-8x d-none d-lg-block"></div>
    <div class="row justify-content-center gutter-vr-30px">
        <div class="col-12">
            <div class="text-box service-box bg-primary h-full">
                                        <p class="mywhite">
                                            With over $5.3 Trillion traded daily in the market, we are dedicated to giving our clients their own share of the
profit daily. As a leading global market maker, Finvestrade  has one of the World’s Largest Independent
traders and fund managers with clients from different parts of the World. Today, as a
successful trade investment and asset management company, we are trusted by thousands of clients.
Our sterling reputation, dedication to meeting our clients’ needs and innovative approach to business
development are some driving forces behind our success.
                                        </p>
            </div>
        </div>
    </div><!-- .row -->
</div>
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
