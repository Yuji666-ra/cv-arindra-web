<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <link rel="shortcut icon" href="{{ asset('assets/icons/logo.ico') }}">

    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>CV.Arindra Production</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--AOS Animated scroll view-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!--Jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <!--Navbar-->
    @include('layouts.navbar')
    <!--Content-->
    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <div class="contact-info">
                            <h3>CV. Arindra Production</h3>
                            <p>
                                Bendul Merisi Selatan 3 No. 102 <br>
                                Surabaya, Jawa Timur<br>
                                Indonesia 60239 <br><br>
                                <strong>WhatsApp:</strong> 0812-5220-0899<br>
                                <strong>Telegram:</strong> @arindraproduction<br>
                                <strong>ID Line:</strong> arindra_production<br>
                                <strong>Email:</strong> info@arindraproduction.co.id<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>COMPANY</h4>
                        <ul class="footer-list">
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Careers</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('footer/tutorial') }}">Tutorial</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Portfolio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Showreels</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>TUTORIAL</h4>
                        <ul class="footer-list">
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Adobe After Effect</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Adobe Lightroom</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Adobe Premiere</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Adobe Photoshop</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Davinci Resolve</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Final Cut Pro X</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Kinemaster</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>OUR SOCIAL NETWORKS</h4>
                        <p>Bergabunglah dengan jaringan sosial kami dan nikmati konten eksklusif serta berita terkini!
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://www.instagram.com/arindraproduction/" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.tiktok.com/@cvarindraproduction" class="google-plus"><i
                                    class="bi bi-tiktok"></i></a>
                            <a href="https://www.linkedin.com/company/cv-arindra-production/" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; 2023 Copyright <strong><span>CV. Arindra Production</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <!--AOS Script scroll view-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                navbar.classList.add("navbar-dark");
            }
        };
        //script aoas scroll view
        AOS.init();
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Slider Partners JS -->
    <script>
        $(document).ready(function() {
            $(".customer-logos").slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 768,
                        setting: {
                            slidesToShow: 4,
                        },
                    },
                    {
                        breakpoint: 529,
                        setting: {
                            slidesToShow: 3,
                        },
                    },
                ],
            });
        });
    </script>



    <!-- anaything JS Script  -->
    <script>
        (function() {
            "use strict";

            /**
             * Easy selector helper function
             */
            const select = (el, all = false) => {
                el = el.trim()
                if (all) {
                    return [...document.querySelectorAll(el)]
                } else {
                    return document.querySelector(el)
                }
            }

            /**
             * Easy event listener function
             */
            const on = (type, el, listener, all = false) => {
                let selectEl = select(el, all)
                if (selectEl) {
                    if (all) {
                        selectEl.forEach(e => e.addEventListener(type, listener))
                    } else {
                        selectEl.addEventListener(type, listener)
                    }
                }
            }

            /**
             * Easy on scroll event listener
             */
            const onscroll = (el, listener) => {
                el.addEventListener('scroll', listener)
            }

            /**
             * Navbar links active state on scroll
             */
            let navbarlinks = select('#navbar .scrollto', true)
            const navbarlinksActive = () => {
                let position = window.scrollY + 200
                navbarlinks.forEach(navbarlink => {
                    if (!navbarlink.hash) return
                    let section = select(navbarlink.hash)
                    if (!section) return
                    if (position >= section.offsetTop && position <= (section.offsetTop + section
                            .offsetHeight)) {
                        navbarlink.classList.add('active')
                    } else {
                        navbarlink.classList.remove('active')
                    }
                })
            }
            window.addEventListener('load', navbarlinksActive)
            onscroll(document, navbarlinksActive)

            /**
             * Scrolls to an element with header offset
             */
            const scrollto = (el) => {
                let header = select('#header')
                let offset = header.offsetHeight

                if (!header.classList.contains('fixed-top')) {
                    offset += 70
                }

                let elementPos = select(el).offsetTop
                window.scrollTo({
                    top: elementPos - offset,
                    behavior: 'smooth'
                })
            }

            /**
             * Header fixed top on scroll
             */
            let selectHeader = select('#header')
            let selectTopbar = select('#topbar')
            if (selectHeader) {
                const headerScrolled = () => {
                    if (window.scrollY > 100) {
                        selectHeader.classList.add('header-scrolled')
                        if (selectTopbar) {
                            selectTopbar.classList.add('topbar-scrolled')
                        }
                    } else {
                        selectHeader.classList.remove('header-scrolled')
                        if (selectTopbar) {
                            selectTopbar.classList.remove('topbar-scrolled')
                        }
                    }
                }
                window.addEventListener('load', headerScrolled)
                onscroll(document, headerScrolled)
            }

            /**
             * Back to top button
             */
            let backtotop = select('.back-to-top')
            if (backtotop) {
                const toggleBacktotop = () => {
                    if (window.scrollY > 100) {
                        backtotop.classList.add('active')
                    } else {
                        backtotop.classList.remove('active')
                    }
                }
                window.addEventListener('load', toggleBacktotop)
                onscroll(document, toggleBacktotop)
            }

            /**
             * Mobile nav toggle
             */
            on('click', '.mobile-nav-toggle', function(e) {
                select('#navbar').classList.toggle('navbar-mobile')
                this.classList.toggle('bi-list')
                this.classList.toggle('bi-x')
            })

            /**
             * Mobile nav dropdowns activate
             */
            on('click', '.navbar .dropdown > a', function(e) {
                if (select('#navbar').classList.contains('navbar-mobile')) {
                    e.preventDefault()
                    this.nextElementSibling.classList.toggle('dropdown-active')
                }
            }, true)

            /**
             * Scrool with ofset on links with a class name .scrollto
             */
            on('click', '.scrollto', function(e) {
                if (select(this.hash)) {
                    e.preventDefault()

                    let navbar = select('#navbar')
                    if (navbar.classList.contains('navbar-mobile')) {
                        navbar.classList.remove('navbar-mobile')
                        let navbarToggle = select('.mobile-nav-toggle')
                        navbarToggle.classList.toggle('bi-list')
                        navbarToggle.classList.toggle('bi-x')
                    }
                    scrollto(this.hash)
                }
            }, true)

            /**
             * Scroll with ofset on page load with hash links in the url
             */
            window.addEventListener('load', () => {
                if (window.location.hash) {
                    if (select(window.location.hash)) {
                        scrollto(window.location.hash)
                    }
                }
            });

            /**
             * Preloader
             */
            let preloader = select('#preloader');
            if (preloader) {
                window.addEventListener('load', () => {
                    preloader.remove()
                });
            }



            /**
             * Porfolio isotope and filter
             */
            window.addEventListener('load', () => {
                let portfolioContainer = select('.portfolio-container');
                if (portfolioContainer) {
                    let portfolioIsotope = new Isotope(portfolioContainer, {
                        itemSelector: '.portfolio-item',
                        layoutMode: 'fitRows'
                    });

                    let portfolioFilters = select('#portfolio-flters li', true);

                    on('click', '#portfolio-flters li', function(e) {
                        e.preventDefault();
                        portfolioFilters.forEach(function(el) {
                            el.classList.remove('filter-active');
                        });
                        this.classList.add('filter-active');

                        portfolioIsotope.arrange({
                            filter: this.getAttribute('data-filter')
                        });
                        portfolioIsotope.on('arrangeComplete', function() {
                            AOS.refresh()
                        });
                    }, true);
                }

            });

            /**
             * Initiate portfolio lightbox
             */
            const portfolioLightbox = GLightbox({
                selector: '.portfolio-lightbox'
            });

            /**
             * Initiate glightbox
             */
            const gLightbox = GLightbox({
                selector: '.glightbox'
            });

            /**
             * Portfolio details slider
             */
            new Swiper('.portfolio-details-slider', {
                speed: 400,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                }
            });

            /**
             * Animation on scroll
             */
            window.addEventListener('load', () => {
                AOS.init({
                    duration: 1000,
                    easing: 'ease-in-out',
                    once: true,
                    mirror: false
                })
            });

        })()
    </script>
</body>

</html>
