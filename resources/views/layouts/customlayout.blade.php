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
    <div id="preloader"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M304 48C304 74.51 282.5 96 256 96C229.5 96 208 74.51 208 48C208 21.49 229.5 0 256 0C282.5 0 304 21.49 304 48zM304 464C304 490.5 282.5 512 256 512C229.5 512 208 490.5 208 464C208 437.5 229.5 416 256 416C282.5 416 304 437.5 304 464zM0 256C0 229.5 21.49 208 48 208C74.51 208 96 229.5 96 256C96 282.5 74.51 304 48 304C21.49 304 0 282.5 0 256zM512 256C512 282.5 490.5 304 464 304C437.5 304 416 282.5 416 256C416 229.5 437.5 208 464 208C490.5 208 512 229.5 512 256zM74.98 437C56.23 418.3 56.23 387.9 74.98 369.1C93.73 350.4 124.1 350.4 142.9 369.1C161.6 387.9 161.6 418.3 142.9 437C124.1 455.8 93.73 455.8 74.98 437V437zM142.9 142.9C124.1 161.6 93.73 161.6 74.98 142.9C56.24 124.1 56.24 93.73 74.98 74.98C93.73 56.23 124.1 56.23 142.9 74.98C161.6 93.73 161.6 124.1 142.9 142.9zM369.1 369.1C387.9 350.4 418.3 350.4 437 369.1C455.8 387.9 455.8 418.3 437 437C418.3 455.8 387.9 455.8 369.1 437C350.4 418.3 350.4 387.9 369.1 369.1V369.1z"/></svg></div>
    
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
