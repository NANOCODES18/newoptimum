@extends("layouts.spacedcustomlayout")
@section("body")


    <section class="testifront">
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
            <h1>What Our Customers Say</h1>
            <p>Explore the world's top performing stocks and markets with ease...</p>
          </div>

          </section>

          <section id="eigth" style="padding-top: 75px;">
          <div class="container">
          <h2>TESTIMONIALS</h2><br><br>
          <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="card card-body">
                <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/test1.jpg')}}" data-holder-rendered="true">
                <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                <p class="card-text"> Through in-depth discussion Jeremy encourages us to
                    regularly focus on our goals in life and then to financially plan with
                     us to reach our aims. This approach fully integrates life plans and the
                     financial plans and makes very good sense. Jeremy simplifies a complex subject
                     keeping us well informed of the latest changes and adjusting our mindset to suit the current legislation.
                     Finvestrade  script investment is very client centred and professional and we would happily recommend their services to others.</p>
                <!-- <br> -->
                <h3 class="card-text" style="font-weight: 600;">Cheryl S. Hammack</h3>
                <p class="card-text">INVESTOR IN BROADCAST DRIVE WASHINGTON</p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card card-body">
                <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/test1m.jpg')}}" data-holder-rendered="true">
                <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                <p class="card-text">Since investing with Finvestrade  script,
                    we have seen gains in our portfolio
                     in a short space of time which is a reassuring indicator. Our meeting are
                      consultative and personal with all decisions made after full discussion and clear explanation.
                 Lastly I just to say many thanks for a very positive meeting yesterday.
                  Hilly and I came away feeling well satisfied that we are able to continue
                   enjoying life without too much stress on the old finances and should be able
                    to carry on with our present lifestyles for some time to come.
                     Very satisfied with the way you are managing affairs and hope this will continue into the future.

                  </p>
                <!-- <br> -->
                <h3 class="card-text" style="font-weight: 600;">Mark K. Cool</h3>
                <p class="card-text">INVESTOR IN PRITCHARD COURT MEDFORD WASHINGTON</p>
            </div>
          </div>
          <div class="col-md-1"></div>
          </div><br><br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="card card-body">
                  <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/test2.jpg')}}" data-holder-rendered="true">
                  <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                  <p class="card-text">Wow this is wonderfully, it works like magic. More grace to your elbow Finvestrade  script and Investment Platform.
                       You guys are just sweet, thanks so so much for good and excellent service delivery.</p>
                  <!-- <br> -->
                  <h3 class="card-text" style="font-weight: 600;">Michelle M. Coleman</h3>
                  <p class="card-text">INVESTOR IN STREET CALGARY, AB</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card card-body">
                  <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/test3.jpg')}}" data-holder-rendered="true">
                  <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                  <p class="card-text">I have been into many trading close to 4years now. Many strategy I have tried but all failed.
                       I got frustrated and was almost calling it quit. Little did I know that a Finvestrade  script existed and had auto trading....Thanks i stumbled on there facebook advert</p>
                  <!-- <br> -->
                  <h3 class="card-text" style="font-weight: 600;">Suzanne W. Nguyen</h3>
                  <p class="card-text">INVESTOR IN CHIPMUNK LANE KINGFIELD</p>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div><br><br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="card card-body">
                  <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/test3m.jpg')}}" data-holder-rendered="true">
                  <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                  <p class="card-text">Good company to deal with , excellent customer service, fast payment.
                       It takes a lot to trust an investment firm in this climate but i am very happy with there services so far.</p>
                  <!-- <br> -->
                  <h3 class="card-text" style="font-weight: 600;">Brian S. Delgado</h3>
                  <p class="card-text">INVESTOR IN PROSPECT VALLEY ROAD GARDENA
                      </p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card card-body">
                  <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/test4m.jpg')}}" data-holder-rendered="true">
                  <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                  <p class="card-text">Finvestrade  script INVEST is the real deal. I could not believe my eyes when they paid me my returns and through it,
                       I paid my children's school fees and it also assisted me to take care of my domestic duties. GOD bless you Finvestrade  script </p>
                  <!-- <br> -->
                  <h3 class="card-text" style="font-weight: 600;">Robert A. Shipley</h3>
                  <p class="card-text">INVESTOR IN CLOUSSON ROAD HOUSTON</p>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div><br><br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="card card-body">
                  <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/test5.jpg')}}" data-holder-rendered="true">
                  <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                  <p class="card-text">Your portfolio management is well planned and structured which made me
                       know that its not a PONSI scheme. After starting investment with you people I now see
                       reasons to know that there are people making it BIG in TRADE INVEST because only one month the account
                      of $5000 has grown to $16,500 profit and I've made over 50% within one month which has been equally shared,.</p>
                  <!-- <br> -->
                  <h3 class="card-text" style="font-weight: 600;">Hamish Wienholt</h3>
                  <p class="card-text">INVESTOR IN NEUER JUNGFERNSTIEG</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card card-body">
                  <img class="rounded-circle" style="width: 50%;margin: auto;height: 170px;" alt="100x100" src="{{asset('testi/testf.jpg')}}" data-holder-rendered="true">
                  <i class="fas fa-quote-left" style="text-align: left;color: purple;"></i>
                  <p class="card-text">I wish to thank you for this divine help because after two weeks
                       we are out of debt trading with your strategy and also the amount you made ($135,776)
                        profit totaling $220,338 in equity from the $84,562 we gave to you made us pay our clients which
                      we have been indebted to for over five months. We look to more profitable relationship with your firm. Thanks a million..</p>
                  <!-- <br> -->
                  <h3 class="card-text" style="font-weight: 600;">Francesca Boyle</h3>
                  <p class="card-text">INVESTOR IN PERNAJANTIE 40  KARJALOHJA</p>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div><br><br>
          </div>
          </section>
@endsection()
