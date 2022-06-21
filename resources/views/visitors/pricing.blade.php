@extends("layouts.spacedcustomlayout")

@section("body")

<div class="invest-pos">
    <img src="user/assets/images/earth.png" alt="" class="investment" />
    <img src="user/assets/images/bitcoin.png" alt="" />
  </div>
</div>

<div class="pricing-information">
  <h2>pricing</h2>
  <div class="stock-contain">
    <a href="{{route('stocks')}}">
      <h2>
        Stock investment
        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2
    ></a>
    <a href="{{route('forextrading')}}">
      <h2>
        Forex investment
        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2
    ></a>
    <a href="{{route('crypto')}}">
      <h2>
        Crypto investment
        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2
    ></a>
    <a href="{{route('realestate')}}">
      <h2>
      Real Estate investment
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </h2></a>
  </div>
</div>

<!-- investment section -->
<!-- <figure>
<h1 style="z-index:5;">PACKAGES</h1>
<div class="pricing-container">
  <div class="card-pricing">
      <div class="card-title">
          <h2>Starter</h2>
          <p><i class="fa fa-dollar"></i><Span>250</Span> -Minimum</p>
      </div>
      <div class="card-content">
          <ul>
              <li><i class="fa fa-dollar"></i><Span>9999</Span> -maximum</li>
              <li><i class="fa fa-check-circle"></i>22.5%  monthly Return</li>
              <li><i class="fa fa-check-circle"></i>  4 times</li>
              <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
              <li></i><i class="fa fa-dollar"></i>1,250+ Total Return</li>
              <li><i class="fa fa-check-circle"></i>4 weeks duration</li>
              <li><i class="fa fa-check-circle"></i>24/7 Support</li>
          </ul>
          <button><a href="#">Get Started</a></button>
      </div>
  </div>
  <div class="card-pricing">
    <div class="card-title">
      <h2>Silver</h2>
      <p><i class="fa fa-dollar"></i><Span>10000</Span> -Minimum</p>
  </div>
  <div class="card-content">
    <ul>
        <li><i class="fa fa-dollar"></i><Span>49999</Span> -maximum</li>
        <li><i class="fa fa-check-circle"></i>30%  monthly Return</li>
        <li><i class="fa fa-check-circle"></i>  4 times</li>
        <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
        <li></i><i class="fa fa-dollar"></i>12,000+ Total Return</li>
        <li><i class="fa fa-check-circle"></i>4 weekss duration</li>
        <li><i class="fa fa-check-circle"></i>24/7 Support</li>
    </ul>
    <button><a href="#">Get Started</a></button>
</div>
  </div>
  <div class="card-pricing">
      <div class="card-title">
        <div class="card-title">
          <h2>Gold</h2>
          <p><i class="fa fa-dollar"></i><Span>50000</Span> -Minimum</p>
      </div>
      <div class="card-content">
        <ul>
            <li><i class="fa fa-dollar"></i><Span>100000</Span> -maximum</li>
            <li><i class="fa fa-check-circle"></i>35%  monthly Return</li>
            <li><i class="fa fa-check-circle"></i>  4 times</li>
            <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
            <li></i><i class="fa fa-dollar"></i>53,000+ Total Return</li>
            <li><i class="fa fa-check-circle"></i>2 months duration</li>
            <li><i class="fa fa-check-circle"></i>24/7 Support</li>
        </ul>
        <button><a href="#">Get Started</a></button>
    </div>
  </div>
  
</div>
<div class="card-pricing">
<div class="card-title">
  <h2>Compoundng</h2>
  <p><i class="fa fa-dollar"></i><Span>1000</Span> -Minimum</p>
</div>
<div class="card-content">
<ul>
    <li><i class="fa fa-dollar"></i><Span>10000000</Span> -maximum</li>
    <li><i class="fa fa-check-circle"></i>45%  monthly Return</li>
    <li><i class="fa fa-check-circle"></i>  4 times</li>
    <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
    <li></i><i class="fa fa-dollar"></i>5,000 Total Return</li>
    <li><i class="fa fa-check-circle"></i>5 months duration</li>
    <li><i class="fa fa-check-circle"></i>24/7 Support</li>
</ul>
<button><a href="#">Get Started</a></button>
</div>
</div>
<div class="card-pricing">
<div class="card-title">
  <h2>Premium</h2>
  <p><i class="fa fa-dollar"></i><Span>3000</Span> -Minimum</p>
</div>
<div class="card-content">
<ul>
    <li><i class="fa fa-dollar"></i><Span>10000</Span> -maximum</li>
    <li><i class="fa fa-check-circle"></i>22.5%  monthly Return</li>
    <li><i class="fa fa-check-circle"></i>  4 times</li>
    <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
    <li></i><i class="fa fa-dollar"></i>55,000 Total Return</li>
    <li><i class="fa fa-check-circle"></i>24/7 Support</li>
</ul>
<button><a href="#">Get Started</a></button>
</div>
</div>
</div>
</figure> -->
<!-- 
end of investment section -->

@endsection
