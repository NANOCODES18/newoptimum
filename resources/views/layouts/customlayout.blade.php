<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="{{asset("user/auth/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css")}}"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset("user/auth/css/index.css")}}">
    
 
    </head>
<body>
    <div id="preloader"></div>
    <div class="header-wrapper">
        <header class="signin-nav-header">
            <nav class="nav-link">
                <ul class="nav-list">
                    <li class="list-item"><a  href="{{route('index')}}">Home</a></li>
                    <li class="list-item"><a  href="{{route('market')}}">The Market</a></li>
                    <li class="list-item"><a  href="{{route('register')}}">Register</a></li>
                    <li class="list-item"><a  href="{{route('about')}}">About Us</a></li>
                    <li class="list-item"><a  href="{{route('pricing')}}">Pricing</a></li>
                    <li class="list-item"><a  href="{{route('contact')}}">Contact us</a></li>
                </ul>
            </nav>
        </header>


        @yield('body')


        <div class="signin-line-div"></div>
        <!-- site footer -->
        <footer>
            <nav class="footer-nav">
                <ul class="footer-nav-item">
                    <li class="footer-nav-list"><a href="{{route('contact')}}">Contact Us</a>
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
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('market')}}">The Market</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                         <!--   <li><a href="viewnews">News</a></li> -->
                        </ul>
                    </li>
                    <!-- <li class="footet-nav-list"><a href="">FAQ</a></li> -->
                    <li class="footer-nav-list">Newsletter
                        <div class="news-letter-box">
                        <form>
                            <label class="newsletter-label" for="newsletter">Join Our News Letter</label>
                            <input class="newsletter-input" type="text" id="newsletter"
                             name="newsletter" 
                             placeholder="Enter E-mail Address"/>
                            <button class="join-button" type="submit"><a href="">Join</a></button>
                        </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <small class="footer-copyright">"Optimum Finance Limited"</small>
        </footer>
        <script>const loader = document.getElementById('preloader')
      window.addEventListener('load', ()=>{
        loader.style.display = "none";
      })</script>
</body>
</html>
