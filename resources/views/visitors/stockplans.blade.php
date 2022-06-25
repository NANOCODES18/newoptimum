


@extends("layouts.spacedcustomlayout")

@section("body")


<div class="invest-pos">
    <img src="user/assets/images/earth.png" alt="" class="investment" />
    <img src="user/assets/images/bitcoin.png" alt="" />
  </div>
</div>

<!-- <div class="pricing-information">
  <h2>pricing</h2>
  <div class="stock-contain">
    <a href="#"
      ><h2>
        stock investment
        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2
    ></a>
    <a href="#">
      <h2>
        Forex investment
        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2
    ></a>
    <a href="#">
      <h2>
        Cypto investment
        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2
    ></a>
    <a href="#"><h2>
      Real Estate investment
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </h2></a>
  </div>
</div> -->

<!-- investment section -->
<figure>
<h1 style="z-index:5;">Stock investment</h1>
<div class="pricing-container">



    @if ($stockplans)
    @foreach ($stockplans as $plan)
        
   

    <div class="card-pricing">
        <div class="card-title">
            <h2>{{$plan->name}}</h2>
            <p><i class="fa fa-dollar"></i><Span>${{$plan->minimum }}</Span> -Minimum</p>
        </div>
        <div class="card-content">
            <ul>
                <li><i class="fa fa-dollar"></i><Span>${{$plan->maximum }}</Span> -maximum</li>
                <li><i class="fa fa-check-circle"></i>{{$plan->percentage * $plan->noofrepeat }}%  monthly Return</li>
                <li><i class="fa fa-check-circle"></i>  4 times</li>
                <li><i class="fa fa-check-circle"></i>{{$plan->percentage }}% ROI Each time</li>
                <li></i><i class="fa fa-dollar"></i>1,250+ Total Return</li>
                <li><i class="fa fa-check-circle"></i>{{$plan->noofrepeat }} No of Times</li>
                <li><i class="fa fa-check-circle"></i>24/7 Support</li>
            </ul>
            <button><a href="{{route('login')}}">Get Started</a></button>
        </div>
    </div>
    @endforeach
        
    @endif

  

</div>
</figure>




@endsection
