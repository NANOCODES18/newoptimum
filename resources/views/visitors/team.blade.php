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
                        <p class="sub-heading">Our Team</p>
                        <h1 class="banner-heading">The people behind our success</h1>
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
                <h5 class="heading-xs dash dash-both">Meet the team</h5>
                <h2>The reason for our success</h2>
            </div>
        </div>
    </div><!-- .row -->
    <div class="row justify-content-center gutter-vr-30px">
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                    <img src="team/1.jpg" alt="">
                </div>
                <div class="team-content">
                    <h5 class="team-name">Nathan  M. Morgan</h5>
                    <p>Non-Executive Chairman</p>
                                                <p>

                                                    Mr Nathan qualified as a Chartered Accountant in 1978, having trained with Spicer and Pegler
                                                (now part of Deloitte). Following a secondment (from 1985 to 1987) to 3i plc, Mr Nathan specialised
                                                for the next 15 years in the provision of advice to management buy-out and buy-in teams and on corporate
                                                acquisitions, disposals and capital raisings. Since 2002, Mr Nathanhas filled management and finance
                                                officer roles for a number of different commercial and charitable organisations. Most recently,
                                                from 2009 to 2016, he was Finance Director of Pathfinder Minerals Plc, an AIM-traded minerals company.
                                                In an unremunerated extra-curricular capacity, Mr Nathan is active in the governance of the Church of
                                                England, being Chair of the London Diocesan Synod’s House of Laity and Chair
                                                of the Finance and Remuneration Committees of the Bishop of London’s Council.

                                                </p>
                </div>
            </div>
        </div><!-- .col -->
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                    <img src="team/3.jpg" alt="">
                </div>
                <div class="team-content">
                    <h5 class="team-name">Kyle K. Strange</h5>
                    <p>Executive Director</p>
                                                <p>

                                                    Mr Kyle  has been the founder and finance director of many quoted and private companies over
                                                    the past twenty years, including Sports Internet Group plc, Bigblu Broadband plc, Audioboom Group plc
                                                    and S4 Capital plc. He previously ran the family office of Betfair
                                                    founder, Andrew Black. He qualified as a chartered accountant with PwC, London in 1996.

                                                </p>
                </div>
            </div>
        </div><!-- .col -->
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                    <img src="team/4.jpg" alt="">
                </div>
                <div class="team-content">
                    <h5 class="team-name">Francis M. Farquhar</h5>
                    <p>Independent Non-Executive Director</p>
                                                <p>

                                                    Mr Farquhar  is a graduate of the Cambourne School of Mines. His expertise encompasses not
                                                only mining and minerals but also metals, agriculture and property. He has managed mining companies,
                                                both public and private, in Uganda and in Malawi; metal trading businesses in Bermuda and in the UK;
                                                was a co-founder of Industrial Mineral Finance House which provides consultancy services covering all
                                                aspects of the industrial minerals’ sector, and established a property development business (since sold).
                                                Mr Grant-Rennick is chairman of Aquis-traded. He is currently involved with mining enterprises in Botswana,
                                                Malawi and Mexico; and
                                                in agribusinesses producing macadamia nuts, paprika and chilli, in sub-Saharan Africa.

                                                </p>
                </div>
            </div>
        </div><!-- .col -->
        <div class="col-lg-3">
            <div class="team-single text-center">
                <div class="team-image">
                    <img src="team/2.jpg" alt="">
                </div>
                <div class="team-content">
                    <h5 class="team-name">Ken P. Barnes</h5>
                    <p>Non-Executive Director</p>
                                                <p>

                                                    Mr Barnes is a senior technology executive with over two decades of experience working
                                                for global blue-chip companies. He is currently Chief Technology Officer for BGL Group Limited,
                                                a financial services business specialising in home and vehicle insurance and owner of comparethemarket.com.
                                                Prior to this, he was Head of Change Technology at Barclays International, leading a global team responsible
                                                for delivering technology products and services across multiple areas including markets, investment banking,
                                                corporate banking and Barclaycard International.

Before Barclays, Mr Barnes spent ten years at Sky Group in London, where he held the position of Managing Director, Group TV and Digital Platforms. In addition,
                                                he has held senior executive positions at AOL, Orange Group and Yahoo! Europe. Prior to his career in business,
                                                Mr Barnes served for eleven years in the Army, within the Royal Corps of Signals, where he specialised in secure,
                                                strategic telecommunications systems.

                                                </p>
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
