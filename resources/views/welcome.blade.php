@extends('layouts.layouts')

@section('content')
    <!--Hero Text-->
    <section class="home" id="home">
        <div class="content">
            <h1>CV. Arindra Production</h1>
            <p> CV. Arindra Production is a production house originating from Surabaya. With a rich history and an
                unwavering commitment to excellence</p>
            <a href="#"><button>Explore more</button></a>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-camera"></i>
                    <h3>photography</h3>
                    <p>Our production is trusted by dozens of clients</p>
                </div>
                <div class="box">
                    <i class="fas fa-video"></i>
                    <h3>Video Production</h3>
                    <p>Our production is trusted by dozens of clients</p>
                </div>
                <div class="box">
                    <i class="fas fa-broadcast-tower"></i>
                    <h3>Live Streaming</h3>
                    <p>Our production is trusted by dozens of clients</p>
                </div>
            </div>



    </section>


    <!--About Us-->
    <section id="contact" class="py-5">
        <div class="container py-5" style="margin-top: 10px;">
            <div class="row d-flex align-items-center" data-aos="fade-right">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <h5>Get To Know More About Us</h5>
                    </div>
                    <h1 class="fw-bold mb-2">Let's work together</h1>

                    <p>Dengan keahlian dan pengalaman yang cukup, kami siap memberikan pelayanan
                        terbaik dengan hasil
                        yang prima dengan harga yang kompetitif dan terjangkau</p>
                    <p>Dengan keahlian dan pengalaman yang cukup, kami siap memberikan pelayanan terbaik dengan hasil
                        yang prima dengan harga yang kompetitif dan terjangkau</p>
                    <img src="{{ asset('assets/images/experience.png') }}" class="img-fluid" alt="..."
                        style="margin-top: 20px; margin-left: -23px;">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/contactPict.png') }}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </section>

    <!--Mitra -->
    <section class="section brand">
        <div class="brand-container container">

            <div class="brand-images">
                <div class="brand-image">
                    <img src="assets/images/Mitra/1.png" alt="" class="brand-img">
                </div>
                <div class="brand-image">
                    <img src="assets/images/Mitra/2.png" alt="" class="brand-img">
                </div>
                <div class="brand-image">
                    <img src="assets/images/Mitra/3.png" alt="" class="brand-img">
                </div>
                <div class="brand-image">
                    <img src="assets/images/Mitra/4.png" alt="" class="brand-img">
                </div>
                <div class="brand-image">
                    <img src="assets/images/Mitra/5.png" alt="" class="brand-img">
                </div>
                <div class="brand-image">
                    <img src="assets/images/Mitra/6.png" alt="" class="brand-img">
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up" style="margin-top: 150px">

            <div class="section-title text-center">
                <h2 class="fw-bold mb-2">What Services We Offer You</h2>
                <p>We dedicated to provide high quality production & low cost that can be customized as your needs by our
                    professional team</p>
            </div>

            <div class="row text-center">
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-camera-video"></i>
                        <h4><a href="#">Video Production</a></h4>
                        <p>Tell all your stories, your business and products with stunning audio visuals and make the best
                            impression on your audience. We produce high-quality visual content that encapsulates the
                            essence of your brand.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-camera"></i>
                        <h4><a href="#">Photography</a></h4>
                        <p>Tell all your stories, your business and products with stunning audio visuals and make the best
                            impression on your audience. We produce high-quality visual content that encapsulates the
                            essence of your brand.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-image"></i>
                        <h4><a href="#">Aerial Photo Video</a></h4>
                        <p>Tell all your stories, your business and products with stunning audio visuals and make the best
                            impression on your audience. We produce high-quality visual content that encapsulates the
                            essence of your brand.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-camera-reels"></i>
                        <h4><a href="#">Live Streaming Production</a></h4>
                        <p>Tell all your stories, your business and products with stunning audio visuals and make the best
                            impression on your audience. We produce high-quality visual content that encapsulates the
                            essence of your brand.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-file-earmark-music"></i>
                        <h4><a href="#">Music Production & Publishing</a></h4>
                        <p>Tell all your stories, your business and products with stunning audio visuals and make the best
                            impression on your audience. We produce high-quality visual content that encapsulates the
                            essence of your brand.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-controller"></i>
                        <h4><a href="#">E-Sport Production</a></h4>
                        <p>Tell all your stories, your business and products with stunning audio visuals and make the best
                            impression on your audience. We produce high-quality visual content that encapsulates the
                            essence of your brand.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

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
                        <h4>Video Production</h4>
                        <p>Sampaikan cerita, bisnis, dan produk Anda dengan audio visual berkualitas tinggi untuk kesan
                            terbaik kepada audiens Anda.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-camera"></i></div>
                        <h4>Photography</h4>
                        <p>Gambar adalah kesan pertama bagi calon klien atau pelanggan Anda. Foto-foto kami membantu
                            menciptakan kesan pertama yang lebih baik.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-airplane"></i></div>
                        <h4>Aerial Photo Video</h4>
                        <p>Berikan perspektif baru tentang bisnis Anda dengan tampilan udara, kami memberikan solusi terbaik
                            untuk kebutuhan fotografi dan videografi digital udara Anda.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-camera-reels"></i></div>
                        <h4>Live Streaming Production</h4>
                        <p>Kami siap menyediakan layanan Live Streaming sesuai kebutuhan Anda dengan harga terjangkau, baik
                            secara remote, on location, atau hybrid, untuk tayang di berbagai platform seperti media sosial,
                            website, e-commerce, Zoom, dan lainnya.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-file-earmark-music"></i></div>
                        <h4>Music Production & Publishing</h4>
                        <p>Kami siap menyediakan layanan Music Production dengan harga kompetitif, termasuk Theme Song,
                            Jingle, Soundtrack, Film Score, dan Music Publishing sesuai kebutuhan Anda.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-controller"></i></div>
                        <h4>E-Sport Production</h4>
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

    <!--Success Project-->
    <section id="project" class="py-5">
        <div class="container py-5">

            <div class="section-title header-project text-center" data-aos="fade-up">
                <h2 class="fw-bold">Success Project</h2>
                <p>View our Success Project</p>
            </div>

            <div class="row py-2" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-1.jpeg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">8/08/2023</p>
                            <h5 class="fw-bold mb-3">DBL Junior East Java Series 2023</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan
                                bergengsi yaitu DBL Junior East Java Series 2023 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-2.jpeg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">1/03/2023</p>
                            <h5 class="fw-bold mb-3">Hitzbul Wathan Camp 2022</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan bergengsi yaitu Hitzbul Wathan Camp 2022 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-3.jpeg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">10/01/2023</p>
                            <h5 class="fw-bold mb-3">Spemma Esport Competition</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk menghandle dan
                                mengorganize salah satu acara bergengsi yaitu Spemma Esport Competition </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-project text-center">
                <a href="{{ route('projects/project') }}" class="btn btn-outline-primary">View More</a>
            </div>
        </div>
    </section>
    <!-- End Success Project -->


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
