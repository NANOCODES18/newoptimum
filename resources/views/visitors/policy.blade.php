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
                        <p class="sub-heading">Privacy Policy</p>
                        <h1 class="banner-heading">We are concerned about our user's privacy</h1>
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
                    <div class="row justify-content-center ">
        <div class="col-lg-8 text-center">
            <div class="section-head section-md">
                <h5 class="heading-xs dash dash-both">optimum-financials </h5>
                <h2>Our Policy</h2>
                                        <p>Our company understands the importance of personal information of every participant. Cooperating with our company,
                        you can be sure in privacy of your personal information and in its protection by our employees.
                        Our employees protect the collected by them information from unauthorized access.
                        We use a variety of technologies to reduce the risk of theft of accounts and receiving personal information of
                        our investors.</p>
            </div>
        </div>
    </div><!-- .row -->
                <div class="gap gap-8x d-none d-lg-block"></div>
    <div class="row justify-content-center gutter-vr-30px">
        <div class="col-md-4 offset-md-1">
            <div class="text-box service-box bg-secondary h-full">
                <h4 class="fw-6 mtm-5">"Personal information" includes such items as:</h4>
                                        <div class="wgs">
                <div class="wgs-content">
                    <ul class="wgs-menu">
                                                    <li><p><i class="ti-check-box"></i> Name and Last Name of the investor</p></li><br>
                        <li><p><i class="ti-check-box"></i> Email of investor</p></li><br>
                        <li><p><i class="ti-check-box"></i> Contact address of investor</p></li><br>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>

                <div class="row justify-content-center " style="margin-top: 30px;">
        <div class="col-lg-8 text-center">
            <div class="section-head section-md">
                                        <p>Our company collects your personal information only with your consent and confidence in the security of your personal information on our project. Users should note, that the collection of personal information is only from adult. The rules of our company explain, how your information is collected and used. These rules apply only in our website. Information which is collected when you visit this site. This types of information are also the part of the personal information. Customer information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without the consent of the customer, other than for the express purpose of delivering the purchased product or service requested by the customer.
For your safety and protection, your credit card information is not stored on our servers. Our payment gateway provider, (insert providers name/s here), keeps this information encrypted and secure on your behalf.
The email address you provide for order processing, may be used to send you information and updates pertaining to your account, in addition to periodic company news, updates, and/or related product or service information, etc. If you decide to opt-in to our mailing list, you will receive emails that may include company news, updates, related product or service information, promotions, etc. However, you may opt-out at any time by (please enter the opt-out or unsubscribe process here. This may be something like clicking the unsubscribe button at the bottom of your emails.
                                        </p>
            </div>
        </div>
    </div>

                <div class="row justify-content-center ">
        <div class="col-lg-8 text-center">
            <div class="section-head section-md">
                                    <h2>Information Storage</h2>
                                        <p>Saving of information is only in our company or its equipment. Personal information is stored in accordance with the rules of storage and disposal, which are set for archive of our company. To receive your personal information, contact direct with our employees.</p>
            </div>
        </div>
    </div>

                <div class="row justify-content-center ">
        <div class="col-lg-8 text-center">
            <div class="section-head section-md">
                                    <h2>Contact Information</h2>
                                        <p>optimum-financials  is glad to receive your comments concerning this "Privacy Policy". In case you think that optimum-financials  does not follow the rules and violate this Statement, contact us at <a href='mailto:{{$compd? $compd->companyemail : "coming soon"}}'>{{$compd? $compd->companyemail : "coming soon"}}</a> We guarantee that we will take commercially reasonable efforts to discover and solve the problem.</p>
            </div>
        </div>
    </div>
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
