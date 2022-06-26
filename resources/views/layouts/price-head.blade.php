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
    <style>
      .investment{
        position: absolute;
      }
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
                <div id="google_translate_element"></div>
                <script>
                    function googleTranslateElementInit() {

                        new google.translate.TranslateElement({

                            pageLanguage: 'en'

                        }, 'google_translate_element');

                    }
                </script>
                <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
    </header>