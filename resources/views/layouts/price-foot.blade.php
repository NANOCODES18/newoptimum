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
    <small class="footer-copyright">{{ $compd ? $compd->companyname : 'Optimum Finance Limited' }}</small>
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
