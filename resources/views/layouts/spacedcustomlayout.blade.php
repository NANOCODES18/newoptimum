<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $compd ? $compd->companyname : 'Optimum Finance' }}</title>
    <link rel="icon" sizes="180x180" href="{{ asset('user/assets/images/favicon.ico') }}">
    <link rel="icon" type="user/image/png" sizes="32x32"
        href="{{ asset('user/assets/images/favicon-32x32.png') }}">
    <link rel="stylesheet" href="{{ asset('user/auth/css/footer.css') }}">
    <link rel="icon" type="user/image/png" sizes="16x16"
        href="{{ asset('user/assets/images/favicon-16x16.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('user/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/investment.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/market.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/auth/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/investment.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/index.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/swiper-bundle.min.css') }}">
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '8109a832a4d654783b1f33563b36f39cb6f2ccfc';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <style>
        header nav {
            display: flex;
            height: 80px;
            width: 100%;
            /* background: #1b1b1b; */
            align-items: center;
            justify-content: space-between;
            padding: 0 50px 0 100px;
            flex-wrap: wrap;
        }

        header nav .logo {
            color: #fff;
            font-size: 35px;
            font-weight: 600;
        }

        header nav ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
        }

        header nav ul li {
            margin: 0 5px;
        }

        header nav ul li a {
            color: #f2f2f2;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        header nav ul li a.active,
        header nav ul li a:hover {
            color: #111;
            background: #fff;
        }

        header nav .menu-btn i {
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            display: none;
        }

        input[type="checkbox"] {
            display: none;
        }

        @media (max-width: 1000px) {
            header nav {
                padding: 10px;
            }
        }

        @media (max-width: 920px) {
            header nav .menu-btn i {
                display: block;
            }

            #click:checked~.menu-btn i:before {
                content: "\f00d";
            }

            header nav ul {
                position: fixed;
                top: 80px;
                left: -100%;
                z-index: 20;
                background: radial-gradient(60.96% 233.66% at 19.41% -27.87%,
                        #0f8cff 0%,
                        #7c3394 51.04%,
                        #4a058a 100%);
                height: 100vh;
                width: 100%;
                text-align: center;
                display: block;
                transition: all 0.3s ease;
            }

            #click:checked~ul {
                left: 0;
            }

            header nav ul li {
                width: 100%;
                margin: 40px 0;
            }

            header nav ul li a {
                width: 100%;
                margin-left: -100%;
                display: block;
                font-size: 20px;
                transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }

            #click:checked~ul li a {
                margin-left: 0px;
            }

            header nav ul li a.active,
            header nav ul li a:hover {
                background: none;
                color: #0f8cff;
            }
        }

        .accord {
            position: absolute;
            top: 40%;
        }

        .faq-nothin {
            height: 600px;
        }

        .accord .spannty-cont {

            display: flex;
            align-items: center;
            margin: 20px;
        }

        .accord .spanny {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;

            margin: 0 5px;
        }

        .accord h1 {
            color: white;
        }

        .accord .spain {
            height: 5px;
            width: 80px;
            background: red;

        }

        .accord .spain:first-child {
            border-top-left-radius: 50%;
            border-bottom-left-radius: 2px;

        }

        .accord .spain:nth-child(3) {
            border-top-right-radius: 50%;
            border-bottom-right-radius: 2px;

        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: -1;
            width: 100%;
            padding: 0 30px;
            color: #1b1b1b;
        }

        .content div {
            font-size: 40px;
            font-weight: 700;
        }

        .accordion {
            width: 100%;
            background: #FFF;
            margin: 0 15px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        }

        .accordion .accordion-content {
            margin: 10px 0;
            border-radius: 4px;
            background: #FFF7F0;
            border: 1px solid #FFD6B3;
            overflow: hidden;
        }

        .accordion-content.open {
            padding-bottom: 10px;
        }

        .accordion-content header {
            display: flex;
            min-height: 50px;
            padding: 0 15px;
            cursor: pointer;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s linear;
        }

        .accordion-content.open header {
            min-height: 35px;
        }

        .accordion-content header .title {
            font-size: 19px;
            font-weight: 500;
            color: #333;
        }

        .accordion-content header i {
            font-size: 20px;
            color: #333;
        }

        .accordion-content .description {
            height: 0;

            color: #333;
            font-weight: 400;
            padding: 0 15px;
            transition: all 0.2s linear;
        }

        @media (max-width:480px) {
            .faq-nothin {
                height: 800px;
            }
        }

        .googletranslate {
            position: absolute;
            top: 15%;
            right: 5%;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>
    <header>
        <div class="header-contain">
            {{-- <div id="main-head">
          <ul id="top-links-wrapper">
            <li><a href="{{route('pricing')}}">Pricing</a></li>
            <li><a href="{{route('market')}}">The Market</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
          </ul>
        </div> --}}
            <nav>
                <div class="logo">O~FINANCE</div>
                <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a class="active" href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('market') }}">The Market</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                </ul>
            </nav>
           
            <div class="googletranslate">
              <div id="google_translate_element"></div>
              <div id="google_translate_element"></div><script>
              
              function googleTranslateElementInit() {
              
              new google.translate.TranslateElement({
              
              pageLanguage: 'en'
              
              }, 'google_translate_element');
              
              }
              
              </script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
               </div>                 

            @yield('body')



            <footer>
                <nav class="footer-nav">
                    <ul class="footer-nav-item">
                        <li class="footer-nav-list"><a href="{{ route('contact') }}">Contact Us</a>
                            <!-- second navigation layer -->
                            <ul>
                                <li><a href=""><span class="fa fa-map-marker"
                                            aria-hidden='true'></span></a>{{ $compd ? $compd->companylocation : 'coming soon' }}
                                </li>
                                <li><a href=""><span class="fa fa-envelope"
                                            aria-hidden='true'></span></a>{{ $compd ? $compd->companyemail : 'coming soon' }}
                                </li>
                                <li><a href=""><span class="fa fa-whatsapp"
                                            aria-hidden='true'></span></a>{{ $compd ? $compd->companyphone : 'coming soon' }}
                                </li>
                                <!-- <li><a href=""><span class="fa fa-phone" aria-hidden='true'></span></a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="footer-nav-list"><a href="explore">Explore</a> -->
                        <!-- second navigation layer -->
                        <ul>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('market') }}">The Market</a></li>
                            <li><a href="register">Register</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="login">Login</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <!-- <li><a href="viewnews">News</a></li> -->
                        </ul>
                        </li>
                        <!-- <li class="footet-nav-list"><a href="#">FAQ</a></li> -->
                        <li class="footer-nav-list">
                            Newsletter
                            <div class="news-letter-box">
                                <form>
                                    <label class="newsletter-label" for="newsletter">Join Our News Letter</label>
                                    <input class="newsletter-input" type="text" id="newsletter" name="newsletter"
                                        placeholder="Enter E-mail Address" />
                                    <button class="join-button" type="submit">
                                        <a href="">Join</a>
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <small
                    class="footer-copyright">{{ $compd ? $compd->companyname : 'Optimum Finance Limited' }}</small>
            </footer>
            <a href="#" class="to-top">
                <i class="fa fa-chevron-up" aria-hidden="true"></i>
            </a>
            <script src="user/index.js"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init({
                    offset: 300,
                    duration: 1000,
                });
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

                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                            slidesPerGroup: 1,

                        },
                        520: {
                            slidesPerView: 2,
                            slidesPerGroup: 2,
                        },
                        950: {
                            slidesPerView: 3,
                        }
                    }
                });
            </script>
            <script src="user/swiper-bundle.min.js"></script>

            <!-- bch/usd script -->
            <script>
                (function(b, i, t, C, O, I, N) {
                    window.addEventListener('load', function() {
                        if (b.getElementById(C)) return;
                        I = b.createElement(i), N = b.getElementsByTagName(i)[0];
                        I.src = t;
                        I.id = C;
                        N.parentNode.insertBefore(I, N);
                    }, false)
                })(document, 'script', 'https://widgets.bitcoin.com/widget.js', 'btcwdgt');
            </script>
            <!-- bch/usd ends here -->
            <script>
                const accordionContent = document.querySelectorAll(".accordion-content");

                accordionContent.forEach((item, index) => {
                    let header = item.querySelector("header");
                    header.addEventListener("click", () => {
                        item.classList.toggle("open");

                        let description = item.querySelector(".description");
                        if (item.classList.contains("open")) {
                            description.style.height =
                                `${description.scrollHeight}px`; //scrollHeight property returns the height of an element including padding , but excluding borders, scrollbar or margin
                            item.querySelector("i").classList.replace("fa-plus", "fa-minus");
                        } else {
                            description.style.height = "0px";
                            item.querySelector("i").classList.replace("fa-minus", "fa-plus");
                        }
                        removeOpen(
                            index); //calling the funtion and also passing the index number of the clicked header
                    })
                })

                function removeOpen(index1) {
                    accordionContent.forEach((item2, index2) => {
                        if (index1 != index2) {
                            item2.classList.remove("open");

                            let des = item2.querySelector(".description");
                            des.style.height = "0px";
                            item2.querySelector("i").classList.replace("fa-minus", "fa-plus");
                        }
                    })
                }
            </script>

</body>

</html>
