@extends('layouts.layouts')

@section('content')
    <!--Hero Text-->
    <section id="hero" class="px-0">
        <div class="container text-center ">
            <div class="hero-title" data-aos="fade-up">
                <div class="text-secondary">
                    <h4>A production house originating from Surabaya</h4>
                </div>
                <div class="hero-text text-white">Welcome to<br> CV. Arindra Production</div>
            </div>
            <div class="button text-light mt-4 px-2">
                Explore More
                <img src="{{ asset('assets/icons/arrow-up-right.svg') }}" height="20"width="16"alt="">
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
            <div class="slide"><img src="assets/images/Mitra/Mitra/1.png" class="img-fluid" alt=""></div>
            <div class="slide"><img src="assets/images/Mitra/Mitra/2.png" class="img-fluid" alt=""></div>
            <div class="slide"><img src="assets/images/Mitra/Mitra/3.png" class="img-fluid" alt=""></div>
            <div class="slide"><img src="assets/images/Mitra/Mitra/4.png" class="img-fluid" alt=""></div>
            <div class="slide"><img src="assets/images/Mitra/Mitra/5.png" class="img-fluid" alt=""></div>
            <div class="slide"><img src="assets/images/Mitra/Mitra/6.png" class="img-fluid" alt=""></div>
            <div class="slide"><img src="assets/images/Mitra/Mitra/7.png" class="img-fluid" alt=""></div>
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
                        <h3>Kenapa Memilih <strong>Arindra Production</strong></h3>
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
        <div class="container" data-aos="fade-up" style="margin-top: 80px">

            <div class="section-title text-center">
                <h2 class="fw-bold mb-2">Our Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-camera-video"></i>
                        <h4><a href="#">Video Production</a></h4>
                        <p>Ceritakan semua kisah Anda, bisnis dan produk Anda dengan audio visual yang memukau dan berikan
                            kesan terbaik kepada audiens Anda. Kami memproduksi konten visual berkualitas tinggi yang
                            merangkum esensi merek Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-camera"></i>
                        <h4><a href="#">Photography</a></h4>
                        <p>Ceritakan semua kisah Anda, bisnis dan produk Anda dengan audio visual yang memukau dan berikan
                            kesan terbaik kepada audiens Anda. Kami memproduksi konten visual berkualitas tinggi yang
                            merangkum esensi merek Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-airplane"></i>
                        <h4><a href="#">Aerial Photo Video</a></h4>
                        <p>Ceritakan semua kisah Anda, bisnis dan produk Anda dengan audio visual yang memukau dan berikan
                            kesan terbaik kepada audiens Anda. Kami memproduksi konten visual berkualitas tinggi yang
                            merangkum esensi merek Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-camera-reels"></i>
                        <h4><a href="#">Live Streaming Production</a></h4>
                        <p>Ceritakan semua kisah Anda, bisnis dan produk Anda dengan audio visual yang memukau dan berikan
                            kesan terbaik kepada audiens Anda. Kami memproduksi konten visual berkualitas tinggi yang
                            merangkum esensi merek Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-file-earmark-music"></i>
                        <h4><a href="#">Music Production & Publishing</a></h4>
                        <p>Ceritakan semua kisah Anda, bisnis dan produk Anda dengan audio visual yang memukau dan berikan
                            kesan terbaik kepada audiens Anda. Kami memproduksi konten visual berkualitas tinggi yang
                            merangkum esensi merek Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-controller"></i>
                        <h4><a href="#">E-Sport Production</a></h4>
                        <p>Ceritakan semua kisah Anda, bisnis dan produk Anda dengan audio visual yang memukau dan berikan
                            kesan terbaik kepada audiens Anda. Kami memproduksi konten visual berkualitas tinggi yang
                            merangkum esensi merek Anda.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up" style="margin-top: 80px">

            <div class="section-title text-center">
                <h2>Price List</h2>
                <p>Daftar Jasa beserta Price List yang ada di CV. Arindra Production.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box featured">
                        <h3>Company Profile <br><span> </span></h3>
                        <!--<h4><sup>$</sup>0<span> / month</span></h4>-->
                        <ul>
                            <li>Jasa pengambilan dan pengeditan video company profile</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Check Price List</a>
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
                            <a href="#" class="btn-buy">Check Price List</a>
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
                            <a href="#" class="btn-buy">Check Price List</a>
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
                            <a href="#" class="btn-buy">Check Price List
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Contact Us</h3>
                    <p> Hubungi kami untuk jalin kerja sama yang baik. Boleh untuk sekedar bertanya-tanya terlebih dahulu.
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Contact Us</a>
                </div>
            </div>

        </div>
    </section>

    <!--Success Project-->
    <section id="project" class="py-5">
        <div class="container py-5">

            <div class="header-project text-center">
                <h2 class="fw-bold">Success Project </h2>
            </div>

            <div class="row py-5" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/project-1.jpeg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">8/08/2023</p>
                            <h5 class="fw-bold mb-3">DBL Junior East Java Series 2023</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan
                                bergengsi yaitu DBL Junior East Java Series 2023 </p>
                            <a href="{{ route('dbl')}}" class="text-decoration-none text-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/project-2.jpeg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">1/03/2023</p>
                            <h5 class="fw-bold mb-3">Hitzbul Wathan Camp 2022</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan bergengsi yaitu Hitzbul Wathan Camp 2022 </p>
                            <a href="" class="text-decoration-none text-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/project-3.jpeg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">10/01/2023</p>
                            <h5 class="fw-bold mb-3">Spemma Esport Competition</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk menghandle dan
                                mengorganize salah satu acara bergengsi yaitu Spemma Esport Competition </p>
                            <a href="" class="text-decoration-none text-primary ">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-project text-center">
                <a href="" class="btn btn-outline-primary">Project Lainnya</a>
            </div>
        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container py-5">

            <div class="section-title header-project text-center" data-aos="fade-up">
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
    </section><!-- End portfolio Section -->
@endsection
