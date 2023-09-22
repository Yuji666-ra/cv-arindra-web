@extends('layouts.layouts')

@section('content')
    <!--Hero Text-->
    <section id="hero" class="px-0">
        <video autoplay muted loop id="background-video">
            <source src="{{ asset('assets/videos/bg-vid.mp4') }}" type="video/mp4">
            <!-- Jika ingin mendukung format video lain, tambahkan sumber tambahan di sini -->
        </video>
        <div class="container text-center ">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text text-white">CV. Arindra Production</div>
                <div class="text-secondary">
                    <h4>A production house originating from Surabaya, that creates creative video and photography. <br>We
                        make digital content, promos, commercials, music videos.</h4>
                </div>
            </div>
            <div class="button custom-button">
                Explore our services
                <img src="{{ asset('assets/icons/arrow-up-right.svg') }}" height="20" width="16" alt="">
            </div>
        </div>
    </section>


    <!--About Us-->
    <section id="about" class="py-5">
        <div class="container py-5">
            <div class="row d-flex align-items-center" data-aos="fade-right">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <h5>Get To Know More About Us</h5>
                    </div>
                    <h1 class="fw-bold mb-2">Let's work together</h1>
                    <p>Dengan keahlian dan pengalaman yang cukup, kami siap memberikan pelayanan terbaik dengan hasil
                        yang prima dengan harga yang kompetitif dan terjangkau</p>
                    <p>Dengan keahlian dan pengalaman yang cukup, kami siap memberikan pelayanan terbaik dengan hasil
                        yang prima dengan harga yang kompetitif dan terjangkau</p>
                    <button class="btn btn-outline-primary">Learn More</button>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/contactPict.png') }}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </section>

    <!--Mitra -->
    <div class="container" style="margin-top: -70px" data-aos="zoom-in-up">
            <section class="customer-logos slider col-xxl-9">
                <div class="slide"><img src="assets/images/Mitra/1.png" class="img-fluid" alt=""></div>
                <div class="slide"><img src="assets/images/Mitra/2.png" class="img-fluid" alt=""></div>
                <div class="slide"><img src="assets/images/Mitra/3.png" class="img-fluid" alt=""></div>
                <div class="slide"><img src="assets/images/Mitra/4.png" class="img-fluid" alt=""></div>
                <div class="slide"><img src="assets/images/Mitra/5.png" class="img-fluid" alt=""></div>
                <div class="slide"><img src="assets/images/Mitra/6.png" class="img-fluid" alt=""></div>
                <div class="slide"><img src="assets/images/Mitra/7.png" class="img-fluid" alt=""></div>
            </section>
        </div>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid" style="margin-top: 80px">

            <div class="row">

                <div class="col-lg-5 align-items-stretch position-relative video-box"
                    style='background-image: url("assets/images/tumb-youtube.png");' data-aos="fade-right">
                    <a href="https://youtu.be/_N6rkrr5LKA" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

                    <div class="content">
                        <h3>Kenapa Memilih <strong>Arindra Production</strong>?</h3>
                        <p>
                            CV. Arindra Production telah berdiri sejak tahun 2014 dan berfokus di bidang video Company
                            Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan,
                            dan Live Streaming.
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-1"><span>01</span> <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <a>Bisa Mengambil Job Dari Seluruh Indonesia bahkan Worldwide sekalipun.</a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>

                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                    class="collapsed"><span>02</span><i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <a>Telah membantu ratusan klien dalam menyediakan kebutuhan jasa foto dan video untuk
                                    berbagai macam kepentingan dan kesempatan. </a>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                    class="collapsed"><span>03</span> <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <a>Pelayanan terbaik dengan hasil yang prima dengan harga yang kompetitif dan
                                    terjangkau.</a>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center" style="margin-top: 90px">
                <h2 class="fw-bold">Services</h2>
                <p>Kualitas, Inovasi, dan Pelayanan terbaik dalam setiap langkah.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-camera-video"></i></div>
                        <h4><a href="">Video Production</a></h4>
                        <p>Sampaikan cerita, bisnis, dan produk Anda dengan audio visual berkualitas tinggi untuk kesan
                            terbaik kepada audiens Anda.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-camera"></i></div>
                        <h4><a href="">Photography</a></h4>
                        <p>Gambar adalah kesan pertama bagi calon klien atau pelanggan Anda. Foto-foto kami membantu
                            menciptakan kesan pertama yang lebih baik.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-airplane"></i></div>
                        <h4><a href="">Aerial Photo Video</a></h4>
                        <p>Berikan perspektif baru tentang bisnis Anda dengan tampilan udara, kami memberikan solusi terbaik
                            untuk kebutuhan fotografi dan videografi digital udara Anda.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-camera-reels"></i></div>
                        <h4><a href="">Live Streaming Production</a></h4>
                        <p>Kami siap menyediakan layanan Live Streaming sesuai kebutuhan Anda dengan harga terjangkau, baik
                            secara remote, on location, atau hybrid, untuk tayang di berbagai platform seperti media sosial,
                            website, e-commerce, Zoom, dan lainnya.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-file-earmark-music"></i></div>
                        <h4><a href="">Music Production & Publishing</a></h4>
                        <p>Kami siap menyediakan layanan Music Production dengan harga kompetitif, termasuk Theme Song,
                            Jingle, Soundtrack, Film Score, dan Music Publishing sesuai kebutuhan Anda.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-controller"></i></div>
                        <h4><a href="">E-Sport Production</a></h4>
                        <p>Arindra Production siap menyediakan semua kebutuhan teknis dan SDM untuk kompetisi Esport, baik
                            Online maupun Offline, termasuk Observer In Game, Broadcast, dan Studio Caster dengan desain
                            layout untuk Live Streaming In Game.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up" style="margin-top: 80px">

            <div class="section-title text-center">
                <h2 class="fw-bold mb-2">Price List</h2>
                <p>Hemat lebih banyak dengan paket penawaran eksklusif kami. Jelajahi daftar harga untuk menemukan penawaran
                    terbaik kami.</p>
            </div>

            <div class="row py-2" data-aos="zoom-in">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box featured">
                        <h3>Company Profile <br><span> </span></h3>
                        <!--<h4><sup>$</sup>0<span> / month</span></h4>-->
                        <ul>
                            <li>Jasa pengambilan dan pengeditan video company profile</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ route('price/company') }}" class="btn-buy">Check Price List</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3>Video Event </h3>
                        <!--<h4><sup>$</sup>19<span> / month</span></h4>-->
                        <ul>
                            <li>Jasa pengambilan video event terkhusus untuk after movie event</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ route('price/video') }}" class="btn-buy">Check Price List</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box featured">
                        <h3>Photo Event</h3>
                        <!--<h4><sup>$</sup>29<span> / month</span></h4>-->
                        <ul>
                            <li>Jasa pengambilan dan pengeditan photo-photo event skala besar ataupun kecil</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ route('price/photo') }}" class="btn-buy">Check Price List</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box featured">
                        <h3>Jasa Drone & Pilot</h3>
                        <!--<h4><sup>$</sup>49<span> / month</span></h4> -->
                        <ul>
                            <li>Jasa pengambilan footage berupa video atau photo melalui alat drone dan pilot</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ route('price/drone') }}" class="btn-buy">Check Price List
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container py-5">

            <div class="section-title header-project text-center" data-aos="zoom-in">
                <h2 class="fw-bold">Portfolio</h2>
                <p>Check our Portfolio</p>
            </div>

            <div class="row g-0" data-aos="fade-left">

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="assets/images/portfolio/portfolio-1.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-1.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="150">
                        <a href="assets/images/portfolio/portfolio-2.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-2.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="200">
                        <a href="assets/images/portfolio/portfolio-3.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-3.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="250">
                        <a href="assets/images/portfolio/portfolio-4.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-4.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="300">
                        <a href="assets/images/portfolio/portfolio-5.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-5.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="350">
                        <a href="assets/images/portfolio/portfolio-6.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-6.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="400">
                        <a href="assets/images/portfolio/portfolio-7.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-7.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="450">
                        <a href="assets/images/portfolio/portfolio-8.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-8.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="assets/images/portfolio/portfolio-9.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-9.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="assets/images/portfolio/portfolio-10.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-10.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="assets/images/portfolio/portfolio-11.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-11.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="assets/images/portfolio/portfolio-12.png" class="portfolio-lightbox">
                            <img src="assets/images/portfolio/portfolio-12.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio Section -->

@endsection
