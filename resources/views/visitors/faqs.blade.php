@extends('layouts.spacedcustomlayout')

@section('body')

    {{-- <div class="banner banner-inner banner-s2 banner-s2-inner tc-light">
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
                            </div> --}}
                            {{-- <p class="sub-heading">FAQs</p>
                            <h1 class="banner-heading">Any Questions? We are here to answer you</h1>
                        </div> --}}
                        {{-- </div>
                    </div>
                </div>
                
            </div>
        </div> --}}

        <div
        class="accord"style="display:flex;justify-content:center;align-items:center;margin:40px;flex-direction:column;">
        <h1>Frequently Asked Questions.
        </h1>
        <div class="spannty-cont">
            <div class="spain"></div>
            <div class="spanny"></div><div class="spain"></div>
        </div>
        <div class="accordion">
            <div class="accordion-content">
                <header>
                    <span class="title">How do I create my account?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Registration process is very easy and will take a few moments to complete Simply click GET
                    STARTED button and fill in all the required fields. </p>
            </div>

            <div class="accordion-content">
                <header>
                    <span class="title">How do I make a deposit?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Quickly log in to your account, on your dashboard, click deposit, and choose your Investment Plan
                    and follow the directions. </p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">How long does my deposit take before it can reflect on my Optimum Investments
                        account
                        dashboard?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Your deposit will be reflected immediately once it is confirmed on the blockchain network and the
                    Company's Wallet.</p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">How do I make a withdrawal?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">To make a withdrawal request, click on the WITHDRAW button at your dashboard and
                    input the
                    required details to withdraw.</p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">How long does it take to process my withdrawal?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Once we receive your withdrawal request we process immediately and send to your receiving wallet
                </p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">Can I have more than one account?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    You cannot have more than one account only investors on special pricing plans are allowed to do
                    so </p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">Is this company properly registered?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Yes we are officially and properly registered with the United States, our company
                    registration number is 602425294 and registered with the name Opimum-financials</p>
                </p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">How many times can i make a deposit?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    You can make as many deposit as you want on any of our pricing plans and any deposit request must
                    be redeemed, you are also not allowed on the starters plan where you can only invest 3 times
                    after which you would increase your Investment</p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">Is it possible to visit the company office located at Washington?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Of course YES, we welcome our Investors and potential Investors to come physically to enquire and
                    start investing, our worldwide investors who can't make it, simply use the website and
                    Investments on here are secured and guaranteed
                </p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">Can I withdraw any day of my choice?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Withdrawals are processed every day from Monday to Friday. If you have not received the withdrawn
                    funds,
                    please contact us and we will immediately resolve your problem.
                </p>
            </div>
            <div class="accordion-content">
                <header>
                    <span class="title">Is this company trusted?</span>
                    <i class="fa-solid fa-plus"></i>
                </header>

                <p class="description">
                    Of course YES! It's Properly Registered, it's Been running for years, we've acquired thousands of
                    Investors worldwide with pleasant testimonies on TRUSTPILOT and the last but not the least, we
                    also engaged in proprietary trading and Investing activities that involves all market sectors to
                    provide enough profits for our Investors.
                </p>
            </div>
        </div>
        </header>
        <div class="faq-nothin"></div>
      
            <!-- START SECTION BANNER -->

            {{-- <div class="section section-x bg-primary tc-grey" style="padding-bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="section-head section-md">
                        <h5 class="heading-xs dash dash-both mywhite">FAQ</h5>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row gutter-vr-30px">
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>How do I create my account?</h4>
                        <p>Registration process is very easy and will take a few moments to complete Simply click GET
                            STARTED button and fill in all the required fields.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>How do I make a deposit?</h4>
                        <p>Quickly log in to your account, on your dashboard, click deposit, and choose your Investment Plan
                            and follow the directions.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>How long does my deposit take before it can reflect on my Finvestrade  Investments account
                            dashboard?</h4>
                        <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network and the
                            Company's Wallet.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>How do I make a withdrawal?</h4>
                        <p>To make a withdrawal request, click on the WITHDRAW button at your dashboard and input the
                            required details to withdraw.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>How long does it take to process my withdrawal?</h4>
                        <p>Once we receive your withdrawal request we process immediately and send to your receiving wallet
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>Can I have more than one account?</h4>
                        <p>You cannot have more than one account only investors on special pricing plans are allowed to do
                            so</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>Is this company properly registered?</h4>
                        <p>Yes we are officially and properly registered with the United States, our company
                            registration number is 602425294 and registered with the name Finvestrade LLC</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>How many times can i make a deposit?</h4>
                        <p>You can make as many deposit as you want on any of our pricing plans and any deposit request must
                            be redeemed, you are also not allowed on the starters plan where you can only invest 3 times
                            after which you would increase your Investment</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>Is Finvestrade LLC and Finvestrade  the same?</h4>
                        <p>Finvestrade LLC is group of companies which Finvestrade  is under and most of the executives and
                            team of Finvestrade LLC works for Finvestrade . Finvestrade LLC serves as a Parent Company
                            and Affiliate.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>Is it possible to visit the company office located at Washington?</h4>
                        <p>Of course YES, we welcome our Investors and potential Investors to come physically to enquire and
                            start investing, our worldwide investors who can't make it, simply use the website and
                            Investments on here are secured and guaranteed.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>Can I withdraw any day of my choice?</h4>
                        <p>Withdrawals are processed every day from Monday to Friday. If you have not received the withdrawn funds, please contact us and we will immediately resolve your problem.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-item bg-light">
                        <h4>Can this company be trusted?</h4>
                        <p>Of course YES! It's Properly Registered, it's Been running for years, we've acquired thousands of
                            Investors worldwide with pleasant testimonies on TRUSTPILOT and the last but not the least, we
                            also engaged in proprietary trading and Investing activities that involves all market sectors to
                            provide enough profits for our Investors.</p>
                    </div>
                </div> --}}

            @if ($faqs)
                @foreach ($faqs as $faq)
                    <div class="col-12">
                        <div class="faq-item bg-light">
                            <h4>{{ $faq->question }}</h4>

                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach
            @endif


        </div>
    </div>
    </div>

    {{-- <div class="pre-sec section-l bg-light">
        <!-- code -->
        <div class="section section-cta bg-primary tc-light">
            <div class="container">
                <div class="row gutter-vr-30px align-items-center justify-content-between">
                    <div class="col-lg-8 text-center text-lg-left">
                        <div class="cta-text">
                            <h2>Still have a question? <strong> Let’s talk</strong></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-right text-center">
                        <div class="cta-btn">
                            <a href="{{ route('contact') }}" class="btn">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end code -->
    </div> --}}

    <!-- code -->

    <!-- end code -->
    <!-- section / cta-->
    <div style="text-align: center; " class="btn-fl">
        
                <div>
                    <div>
                        <h2><span>Start your journey to</span> <strong> Financial freedom </strong></h2>
                    </div>
                </div>
                <div style="margin-top: 30px;">
                        <a href="{{ route('register') }}" style="padding: 15px 25px; color:white;text-decoration:none; background: radial-gradient(
                            60.96% 233.66% at 19.41% -27.87%,
                            #0f8cff 0%,
                            #7c3394 51.04%,
                            #4a058a 100%
                          );  border-radius:20px;" class="btn btn-lg">Get Started</a>
                </div>
           
    </div>


@endsection()
