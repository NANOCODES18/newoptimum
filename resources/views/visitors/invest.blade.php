@extends("layouts.spacedcustomlayout")

@section("body")
    <section class="plansfront">
        <nav class="navbar navbar-expand-lg sticky-top change" id="navbar" >
            <a class="navbar-brand" href="{{route('index')}}">
              <img src="./images/logo2send.png" alt="" width="220" height="102" style="object-fit: contain;">
              <!-- optimum-financials  script -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            @include('nav')
          </nav>

          <div class="overlay2"></div>

          <div class="text">
            <h1>INVEST WITH US</h1>
            <p>optimum-financials  script is dedicated to helping Investment enthusiasts reach their desired goals and broaden their financial horizons.
              <br>
        We seek to provide maximum security, privacy and a world class investment expertise across the crypto market.
        Coupled with a wide range of experience in the market, we transform new investment ideas into practical investment
        products designed to deliver maximized R.O.Is despite our significantly minimized risk level.
            </p>
          </div>

    </section>

    <section id="eigth" style="padding-top: 75px;">
      <div class="container">
        <h2>Investment Plans</h2>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="card card-body">
                  <h5 class="card-title">Exquisite newbie </h5>
                  <p class="card-text">  $500 <b>Minimum</b> - $9000 <b>Maximum</b></p>
                  <!-- <br> -->
                  <p class="card-text">4.% weekly R.O.I <br> Arbitration duration: 14 days </p>
                  <a href="{{route('login')}}" >GET STARTED</a>
              </div>
            </div>
            <div class="col-md-5">
                <div class="card card-body">
                    <h5 class="card-title">Exquisite elite</h5>
                    <p class="card-text">  $10,000  <b>Minimum</b> - $49,000 <b>Maximum</b></p>
                    <!-- <br> -->
                    <p class="card-text">6% weekly R.O.I<br> Arbitration duration: 14 days </p>
                    <a href="{{route('login')}}" >GET STARTED</a>
                </div>
            </div>
            <div class="col-md-1"></div>
            </div><br><br>
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="card card-body">
                    <h5 class="card-title">Exquisite advanced</h5>
                    <p class="card-text">  $50,000 <b>Minimum</b> - $1,000,000 <b>Maximum</b></p>
                    <!-- <br> -->
                    <p class="card-text">10% weekly R.O.I <br> Arbitration duration: 14 days </p>
                    <a href="{{route('login')}}" >GET STARTED</a>
                 </div>
            </div>

            <div class="col-md-1"></div>
            </div>
      </div>
    </section>




@endsection()
