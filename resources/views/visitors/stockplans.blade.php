@extends("layouts.spacedcustomlayout")

@section('body')






    <div class="section section-x tc-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="section-head section-md res-m-btm">
                        <h5 class="heading-xs dash dash-both">Pricing</h5>
                        <h2 class="fw-1">Stock Investment</h2>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row justify-content-center gutter-vr-30px">

                @if ($stockplans)
                @foreach ( $stockplans as $plan )

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-boxed pricing-boxed-s2">
                        <div class="pricing-price pricing-price-s2">
                            <h2>{{$plan->name}}</h2>
                            <p></p>
                        </div>
                        <div class="pricing-feature pricing-feature-s2">
                            <ul>
                                <li>Min Deposit <b>${{$plan->minimum }}</b></li>
                                <li>Max Deposit <b>${{$plan->maximum }}</b></li>


                                <li>3 Months Profit<b>{{$plan->percentage  * $plan->noofrepeat}}%</b></li>
                                <li>Daily  Profit <b>{{$plan->percentage }}%</b></li>

                                <li>Duration <b>{{$plan->noofrepeat }} days</b></li>
                            </ul>
                        </div>
                        <div class="pricing-cta pricing-cta-s2">
                            <div class="price">
                                <h2>${{($loop->index + 1) * 1000 + $plan->minimum }} +</h2>
                            </div>
                            <div class="cta-area">
                                <a href="{{route('login')}}" style='padding: 10px 20px; margin-top: -12px;'
                                    class="btn btn-sm">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                @else
                    <h5> Not available at the moment </h5>
                @endif




            </div>
            <!-- .row -->
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
                        <a href="{{route('login')}}" class="btn btn-lg">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>








@endsection
