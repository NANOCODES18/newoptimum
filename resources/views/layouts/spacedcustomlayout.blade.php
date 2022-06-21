<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$compd? $compd->companyname:"Optimum Finance"}}</title>
    <link rel="icon" sizes="180x180" href="{{asset("user/assets/images/favicon.ico")}}">
    <link rel="icon" type="user/image/png" sizes="32x32" href="{{asset("user/assets/images/favicon-32x32.png")}}">
    <link rel="stylesheet" href="{{asset("user/auth/css/footer.css")}}">
    <link rel="icon" type="user/image/png" sizes="16x16" href="{{asset("user/assets/images/favicon-16x16.png")}}">
   

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset("user/assets/font-awesome-4.7.0/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="{{asset("user/assets/css/index.css")}}" />
    <link rel="stylesheet" href="{{asset("user/assets/css/contact.css")}}" />
    <link rel="stylesheet" href="{{asset("user/assets/css/investment.css")}}" />
    <link rel="stylesheet" href="{{asset("user/assets/css/market.css")}}" />
    <link rel="stylesheet" href="{{asset("user/assets/css/about.css")}}" />
    <link rel="stylesheet" href="{{asset("user/auth/login.css")}}" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    /> 
    <link rel="stylesheet" href="{{asset("user/assets/css/swiper-bundle.min.css")}}">
    
  </head>
  <body>
    <div id="preloader"></div>
    <header>
      <div class="header-contain">
        <div id="main-head">
          <ul id="top-links-wrapper">
            <li><a href="{{route('pricing')}}">Pricing</a></li>
            <li><a href="{{route('market')}}">The Market</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
          </ul>
        </div>



        @yield('body')



        <footer>
            <nav class="footer-nav">
                <ul class="footer-nav-item">
                    <li class="footer-nav-list"><a href="{{route('contact')}}">Contact Us</a>
                        <!-- second navigation layer -->
                         <ul>
                            <li><a href=""><span class="fa fa-map-marker" aria-hidden='true'></span></a>{{$compd? $compd->companylocation:"coming soon"}}</li>
                            <li><a href=""><span class="fa fa-envelope" aria-hidden='true'></span></a>{{$compd? $compd->companyemail:"coming soon"}}</li>
                            <li><a href=""><span class="fa fa-whatsapp" aria-hidden='true'></span></a>{{$compd? $compd->companyphone:"coming soon"}}</li>
                           <!-- <li><a href=""><span class="fa fa-phone" aria-hidden='true'></span></a></li> -->
                        </ul>
                    </li>
                   <!-- <li class="footer-nav-list"><a href="explore">Explore</a> -->
                          <!-- second navigation layer -->
                          <ul>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('market')}}">The Market</a></li>
                            <li><a href="register">Register</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="login">Login</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                           <!-- <li><a href="viewnews">News</a></li> -->
                        </ul>
                    </li>
                    <!-- <li class="footet-nav-list"><a href="#">FAQ</a></li> -->
                    <li class="footer-nav-list">
                      Newsletter
                      <div class="news-letter-box">
                        <form>
                          <label class="newsletter-label" for="newsletter"
                            >Join Our News Letter</label
                          >
                          <input
                            class="newsletter-input"
                            type="text"
                            id="newsletter"
                            name="newsletter"
                            placeholder="Enter E-mail Address"
                          />
                          <button class="join-button" type="submit">
                            <a href="">Join</a>
                          </button>
                        </form>
                      </div>
                    </li>
                </ul>
            </nav>
            <small class="footer-copyright">{{$compd? $compd->companyname:"Optimum Finance Limited"}}</small>
          </footer>
          <a href="" class="to-top">
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
          </a>
          <script src="user/index.js"></script>
              <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
              <script>
                AOS.init(
                  {
                  offset: 300,
                  duration: 1000,
                }
                );
              </script>
              <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
          
              <script>
                var swiper = new Swiper(".swiper", {
                  slidesPerView: 3,
                  spaceBetween: 30,
                  slidesPerGroup: 3,
                  loop: true,
                  autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                  },
                  loopFillGroupWithBlank: true,
                  pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                  },
                  navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                  },
          
                  breakpoints:{
                    0:{
                      slidesPerView:1,
                      slidesPerGroup:1,
          
                    },
                    520:{
                      slidesPerView:2,
                      slidesPerGroup:2,
                    },
                    950:{
                      slidesPerView:3,
                    }
                  }
                });
              </script>
              <script src="user/swiper-bundle.min.js"></script>
          
              <!-- bch/usd script -->
              <script>
                (function(b,i,t,C,O,I,N) {
                  window.addEventListener('load',function() {
                    if(b.getElementById(C))return;
                    I=b.createElement(i),N=b.getElementsByTagName(i)[0];
                    I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
                  },false)
                })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
              </script>
              <!-- bch/usd ends here -->
          
            </body>
          </html>
          