<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="{{ asset('user/auth/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css') }}"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('user/auth/css/index.css') }}">

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
    <div class="header-wrapper">
        <header class="signin-nav-header">
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


        @yield('body')


        <div class="signin-line-div"></div>
        <!-- site footer -->
        <footer>
            <nav class="footer-nav">
                <ul class="footer-nav-item">
                    <li class="footer-nav-list"><a href="{{ route('contact') }}">Contact Us</a>
                        <!-- second navigation layer -->
                        <ul>
                            <li><a href=""><span class="fa fa-map-marker" aria-hidden='true'></span></a></li>
                            <li><a href=""><span class="fa fa-envelope" aria-hidden='true'></span></a></li>
                            <li><a href=""><span class="fa fa-whatsapp" aria-hidden='true'></span></a></li>
                            <!--   <li><a href=""><span class="fa fa-phone" aria-hidden='true'></span></a></li> -->
                        </ul>
                    </li>
                    <!--   <li class="footer-nav-list"><a href="">Explore</a> -->
                    <!-- second navigation layer -->
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('market') }}">The Market</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <!--   <li><a href="viewnews">News</a></li> -->
                    </ul>
                    </li>
                    <!-- <li class="footet-nav-list"><a href="">FAQ</a></li> -->
                    <li class="footer-nav-list">Newsletter
                        <div class="news-letter-box">
                            <form>
                                <label class="newsletter-label" for="newsletter">Join Our News Letter</label>
                                <input class="newsletter-input" type="text" id="newsletter" name="newsletter"
                                    placeholder="Enter E-mail Address" />
                                <button class="join-button" type="submit"><a href="">Join</a></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <small class="footer-copyright">"Optimum Finance Limited"</small>
        </footer>
        <script>
            const loader = document.getElementById('preloader')
            window.addEventListener('load', () => {
                loader.style.display = "none";
            })
        </script>
</body>

</html>
